// window.onload = function() {

	// var annual_income = document.getElementById('annual_income').value; 
	// annual_income = parseInt(annual_income.replace(/,/g, ""));   
 //    alert("my annual income".annual_income."")  

 //    var down_pay_amt = document.getElementById('down_payment').value;
 //    down_pay_amt = parseInt(down_pay_amt.replace(/,/g, ""));
   
 //    var mort_int_rate = document.getElementById('monthly_debt').value;
 //    mort_int_rate = parseFloat(mort_int_rate.replace(/,/g, ""));



    
// }

function affordability_calculator(val){

    

    var annual_income = document.getElementById('annual_income').value; 
    annual_income = parseInt(annual_income.replace(/,/g, ""));     
    // alert(annual_income);

    console.log(annual_income,'annual_income');

    var annual_interest_rate = document.getElementById('annual_interest_rate').value; 
      annual_interest_rate = parseInt(annual_interest_rate.replace(/,/g, ""));


    var annual_interest_rate_per = annual_interest_rate/100;
     var loan_term = document.getElementById('loan_term').value; 
     var annual_interest_divide = annual_interest_rate_per/12;
     var add_one_to_interest = 1 +annual_interest_divide;
     var value_at_power = (-12)*loan_term;
     var power_off = Math.pow(add_one_to_interest, value_at_power);
     var divide = 1-power_off;
     var annuity_factor = divide/annual_interest_rate_per*12;
     // annuity_factor = parseInt(annuity_factor.replace(/,/g, "")); //annuity factor calculated here
    console.log(annuity_factor,'annuity_factor');

    var down_payment_per = document.getElementById('down_payment_per').value; 

    var out_down_payment = document.getElementById('out_down_payment').value; 
    console.log(out_down_payment,'down_payment');

    var debt_to_income = document.getElementById('debt_to_income').value;
    var debt_to_income_per = debt_to_income/100;
    console.log(debt_to_income_per,'debt_to_income_per');

    var monthly_debt = document.getElementById('monthly_debt').value; 
    // monthly_debt = parseInt(monthly_debt.replace(/,/g, "")); 
    console.log(monthly_debt,'monthly_debt');

    var monthly_HOA = document.getElementById('monthly_HOA').value; 
    // monthly_HOA = parseInt(monthly_HOA.replace(/,/g, "")); 
    console.log(monthly_HOA,'monthly_HOA');

    var homeowner_insurance_rate = document.getElementById('homeowner_insurance_rate').value; 
    // homeowner_insurance_rate = parseInt(homeowner_insurance_rate.replace(/,/g, "")); 
    var homeowner_insurance_rate_per = homeowner_insurance_rate/100;
   console.log(homeowner_insurance_rate_per,'homeowner_insurance_rate_per');

    var prop_tax_rate = document.getElementById('prop_tax_rate').value; 
     var prop_tax_rate_per = prop_tax_rate/100;
    // prop_tax_rate = parseInt(prop_tax_rate.replace(/,/g, ""));
    console.log(prop_tax_rate_per,'prop_tax_rate');

    var mip = document.getElementById('mip').value; 
    // mip = parseInt(mip.replace(/,/g, "")); 
    console.log(mip,'mip');

    
        
    var home_price_of_DTI_upper_term = (debt_to_income_per*annual_income/12)-(monthly_debt-monthly_HOA)+(out_down_payment/annuity_factor);
    var home_price_of_DTI_lower_term = 1/annuity_factor + (homeowner_insurance_rate_per+prop_tax_rate_per+mip) /12;
    var home_price_of_DTI = home_price_of_DTI_upper_term/home_price_of_DTI_lower_term;
    // var home_price_of_DTI_val = parseInt(home_price_of_DTI.replace(/,/g, ""));

    console.log(home_price_of_DTI_upper_term,'home_price_of_DTI_upper_term');
    console.log(home_price_of_DTI_lower_term,'home_price_of_DTI_lower_term');
    console.log(home_price_of_DTI,'home_price_of_DTI');

    var mortage_amount = home_price_of_DTI - out_down_payment;
    var mortage_amount_val=Math.round(mortage_amount);
    var monthly_mortgage_payment = (mortage_amount/ annuity_factor);
    // var monthly_mortgage_payment_val=Math.round(monthly_mortgage_payment);
    var prop_tax = (home_price_of_DTI*prop_tax_rate_per/12);
    var homeowner_insurance = (home_price_of_DTI*homeowner_insurance_rate_per/12);
    var mortage_insurance_premium = (mip/12)*mortage_amount_val;

    var total_monthly_mortage_payment = (monthly_mortgage_payment+homeowner_insurance+prop_tax+monthly_HOA+mortage_insurance_premium);
    var total_monthly_mortage_payment_val=Math.round(total_monthly_mortage_payment);
 // alert(total_monthly_mortage_payment);
    console.log(mortage_amount_val,'mortage_amount_val');
    console.log(monthly_mortgage_payment,'monthly_mortgage_payment');
    console.log(prop_tax,'property_tax');
    console.log(homeowner_insurance,'homeowner_insurance');
    console.log(mortage_insurance_premium,'mortage_insurance_premium');
    console.log(total_monthly_mortage_payment_val,'total_monthly_mortage_payment');


   var monthly_mortgage_payment_val=monthly_mortgage_payment.toFixed(2);
   var prop_tax_val=prop_tax.toFixed(2);
   var homeowner_insurance_val=homeowner_insurance.toFixed(2);

    $('#mortage_payment').html(Number(monthly_mortgage_payment_val));
    $('#property_tax').html(Number(prop_tax_val));
    $('#insurance').html(Number(homeowner_insurance_val));
    $('#insurance_premium').html(Number(mortage_insurance_premium));
    $('#monthly_morg_payment').html(Number(total_monthly_mortage_payment_val));
    $('#hoa_fee').html(Number(monthly_HOA));


/* Load the citylist on key of location input */
$('#location, #demo').keyup(function() {
    // alert("hii");
    var location = $('#location').val();
    var home_price = $('#demo').val();
    var select_id = $('#hidden_loc').val();

    $('#location').autocomplete({

        source: function(request, response) {
            $.ajax({
                type: "POST",
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'mortgage_cal',
                    keyword: $('#location').val(),
                },

                success: function(data) {
                    //console.log(data);
                    response(JSON.parse(data));

                }
            });
        },
        select: function(event, ui) {
            var select_id = ui.item.desc;
            $('#hidden_loc').val(select_id);

        }
    });
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: '/wp-admin/admin-ajax.php',
        data: {
            action: 'getPropertyTax',
            keyword: select_id,
            keyword2: home_price
        },

        success: function(data) {
            console.log(data);
            $('#demo4').val(data.data2);
            $('#demo5').val(data.data1);
        }
    });
});
	
   
}



function calculateAffordability() {  
   
   //get value by ID or class//
   var location                   = $("#location").val().trim();
   var annual_income              = $("#out_annual_income").val().trim();
   var down_payment               = $("#out_down_payment").val().trim();
   var monthly_debt_obligations   = $("#out_monthly_debt").val().trim();
   var annual_interest_rate       = $("#out_annual_interest_rate").val().trim();
   var monthly_HOA_fee            = $("#out_monthly_HOA").val().trim();
   var term                       = $("#loan_term").val().trim();
   var homeowner_insurance_rate   = $("#homeowner_insurance_rate").val().trim();
   var property_tax_rate          = $("#prop_tax_rate").val().trim();
   var DTI_ratio                  = $("#out_debt_to_income").val().trim();


   //check empty validations

    if(location == '') {

        alert("Please Enter Location");
        $("#location").focus();
        return false;
    } 
    
     if(DTI_ratio == '') {

        alert("Please Enter Debt-to-Income (DTI) Ratio");
        $("#out_debt_to_income").focus();
        return false;
    }

    if(annual_income == '') {

        alert("Please Enter Annual Income");
        $("#out_annual_income").focus();
        return false;
    }

    if(down_payment == '') {

        alert("Please Enter Down Payment");
        $("#down_payment").focus();
        return false;
    } 

    if(monthly_debt_obligations == '') {

        alert("Please Enter Monthly Debt Obligations");
        $("#out_monthly_debt").focus();
        return false;
    }

    if(annual_interest_rate == '') {

        alert("Please Enter Annual Interest Rate");
        $("#out_annual_interest_rate").focus();
        return false;
    }

    if(monthly_HOA_fee == '') {

        alert("Please Enter Monthly HOA Fee");
        $("#out_monthly_HOA").focus();
        return false;
    } 

    if(term == '') {

        alert("Please Enter Term");
        $("#loan_term").focus();
        return false;
    }

    if(homeowner_insurance_rate == '') {

        alert("Please Enter Homeowner Insurance Rate");
        $("#homeowner_insurance_rate").focus();
        return false;
    }

    if(property_tax_rate == '') {

        alert("Please Enter Property Tax Rate");
        $("#prop_tax_rate").focus();
        return false;
    }

   
  
    //create datastring for http request
    var dataString                          =   "location="+location+"&annual_income="+annual_income+"&down_payment="
                                                +down_payment+"&monthly_debt_obligations="+monthly_debt_obligations+"&annual_interest_rate="
                                                +annual_interest_rate+"&monthly_HOA_fee="+monthly_HOA_fee+"&term="+term+"&homeowner_insurance_rate="
                                                +homeowner_insurance_rate+"&property_tax_rate="+property_tax_rate+"&DTI_ratio="+DTI_ratio;
                                           

    //send data string via http request using post method in Ajax
                            
    $.ajax({
                    type                    :   "POST",
                    url                     :   "/wp-content/themes/twentyseventeen-child/affordability_calculator_ajax.php",
                    data                    :   dataString,
                    success                 :   function(result)
                    {   

                        var obj             = $.parseJSON(result);
                        $("#home_price1").html(obj.home_price);
                        $("#mortage_payment1").html(obj.monthly_mortgage_paymentNew);
                        $("#insurance1").html(obj.homeowner_insurance);
                        $("#property_tax1").html(obj.property_tax);
                        $("#hoa_fee1").html(obj.monthly_HOA_fee);
                        $("#total_monthly_morg_payment1").html(obj.total_monthly_mortgage_payment);
                    
        }});


}

