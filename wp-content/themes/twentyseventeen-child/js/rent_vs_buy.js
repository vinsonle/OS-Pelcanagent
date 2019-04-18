/* Equal input range slider and its input text value */

//window.onload = function() {
var location_tax_rate = document.getElementById('location').value;



var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.value = slider.value;

slider.oninput = function() {
    output.value = this.value;
    //alert(output.value);
}


var slidertwo = document.getElementById("myRange2");
var outputtwo = document.getElementById("demo2");
outputtwo.value = slidertwo.value;

slidertwo.oninput = function() {
    outputtwo.value = this.value;

}


var sliderthree = document.getElementById("myRange3");
var outputthree = document.getElementById("demo3");
outputthree.value = sliderthree.value;

sliderthree.oninput = function() {

    outputthree.value = this.value;

}

var sliderfour = document.getElementById("myRange4");
var outputfour = document.getElementById("demo4");
outputfour.value = sliderfour.value;

sliderfour.oninput = function() {
    outputfour.value = this.value;

}

var sliderfive = document.getElementById("myRange5");
var outputfive = document.getElementById("demo5");
outputfive.value = sliderfive.value;

sliderfive.oninput = function() {
    outputfive.value = this.value;

}

var slidersix = document.getElementById("myRange6");
var outputsix = document.getElementById("demo6");
outputsix.value = slidersix.value;

slidersix.oninput = function() {
    outputsix.value = this.value;
    // alert(outputsix.value);

}


var sliderseven = document.getElementById("myRange7");
var outputseven = document.getElementById("demo7");
outputseven.value = sliderseven.value;

sliderseven.oninput = function() {
    outputseven.value = this.value;
    //alert(outputseven.value);
}


var slidereight = document.getElementById("myRange8");
var outputeight = document.getElementById("demo8");
outputeight.value = slidereight.value;

slidereight.oninput = function() {
    outputeight.value = this.value;
    //alert(outputeight.value);
}


var slidernine = document.getElementById("myRange9");
var outputnine = document.getElementById("demo9");
outputnine.value = slidernine.value;

slidernine.oninput = function() {
    outputnine.value = this.value;
    //alert(outputnine.value);
}


var sliderten = document.getElementById("myRange10");
var outputten = document.getElementById("demo10");
outputten.value = sliderten.value;

sliderten.oninput = function() {
    outputten.value = this.value;
    //alert(outputten.value);
}

var slidereleven = document.getElementById("myRange11");
var outputeleven = document.getElementById("demo11");
outputeleven.value = slidereleven.value;

slidereleven.oninput = function() {
    outputeleven.value = this.value;

}
//}

function rent_vs_buy(val) { 
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 2
    });

    var percentage_arr = {
        'AL': [1.12, 1.47, 1.26, 1.05, 0.91, 0.81, 0.73, 0.72, 0.58, 0.51, 0.60],
        'AK': [0.65, 1.17, 0.83, 0.65, 0.53, 0.47, 0.42, 0.43, 0.34, 0.32, 0.36],
        'AZ': [0.79, 1.00, 0.73, 0.59, 0.50, 0.44, 0.39, 0.38, 0.31, 0.28, 0.35],
        'AR': [1.48, 1.66, 1.24, 1.03, 0.88, 0.79, 0.75, 0.70, 0.58, 0.53, 0.63],
        'CA': [0.27, 0.66, 0.59, 0.48, 0.42, 0.37, 0.35, 0.35, 0.29, 0.26, 0.33],
        'CO': [1.22, 1.23, 1.05, 0.88, 0.76, 0.67, 0.62, 0.62, 0.49, 0.43, 0.49],
        'CT': [0.68, 0.86, 0.96, 0.68, 0.61, 0.55, 0.51, 0.52, 0.44, 0.40, 0.50],
        'DC': [0.67, 0.70, 0.85, 0.63, 0.54, 0.48, 0.43, 0.44, 0.35, 0.31, 0.38],
        'DE': [0.09, 0.70, 0.53, 0.46, 0.41, 0.37, 0.34, 0.34, 0.28, 0.25, 0.30],
        'FL': [1.50, 1.80, 1.42, 1.19, 1.05, 0.96, 0.89, 0.94, 0.84, 0.79, 0.85],
        'GA': [0.76, 1.00, 0.83, 0.75, 0.68, 0.61, 0.56, 0.56, 0.45, 0.41, 0.47],
        'HI': [0.44, 0.46, 0.42, 0.38, 0.36, 0.36, 0.34, 0.37, 0.31, 0.28, 0.31],
        'ID': [0.60, 0.76, 0.59, 0.49, 0.42, 0.37, 0.34, 0.34, 0.28, 0.26, 0.35],
        'IL': [0.91, 1.35, 0.87, 0.68, 0.58, 0.51, 0.47, 0.46, 0.35, 0.32, 0.38],
        'IN': [0.90, 1.28, 0.93, 0.76, 0.65, 0.57, 0.52, 0.51, 0.40, 0.36, 0.42],
        'IA': [0.75, 1.13, 0.87, 0.71, 0.62, 0.55, 0.50, 0.49, 0.39, 0.35, 0.39],
        'KS': [2.24, 2.22, 1.54, 1.23, 1.04, 0.91, 0.82, 0.79, 0.61, 0.53, 0.59],
        'KY': [1.10, 1.31, 0.99, 0.79, 0.68, 0.61, 0.56, 0.55, 0.45, 0.41, 0.48],
        'LA': [1.03, 1.63, 1.42, 1.31, 1.21, 1.10, 1.02, 1.04, 0.84, 0.82, 0.96],
        'ME': [0.72, 0.83, 0.66, 0.57, 0.50, 0.44, 0.39, 0.39, 0.32, 0.29, 0.34],
        'MD': [0.26, 0.98, 0.64, 0.55, 0.50, 0.45, 0.41, 0.42, 0.34, 0.31, 0.36],
        'MA': [0.54, 0.91, 0.80, 0.70, 0.61, 0.53, 0.48, 0.51, 0.41, 0.38, 0.44],
        'MI': [1.01, 1.25, 0.85, 0.68, 0.57, 0.50, 0.45, 0.43, 0.35, 0.31, 0.40],
        'MN': [0.67, 0.92, 0.90, 0.79, 0.71, 0.66, 0.61, 0.62, 0.51, 0.47, 0.53],
        'MS': [1.38, 1.61, 1.34, 1.16, 1.03, 0.92, 0.83, 0.82, 0.67, 0.60, 0.70],
        'MO': [1.57, 1.65, 1.14, 0.92, 0.79, 0.70, 0.64, 0.63, 0.49, 0.43, 0.51],
        'MT': [0.94, 1.11, 0.89, 0.75, 0.66, 0.59, 0.53, 0.53, 0.43, 0.39, 0.49],
        'NE': [1.05, 1.81, 1.33, 1.07, 0.90, 0.80, 0.74, 0.74, 0.59, 0.53, 0.63],
        'NV': [0.70, 0.84, 0.55, 0.45, 0.40, 0.36, 0.33, 0.32, 0.27, 0.25, 0.31],
        'NH': [0.36, 0.76, 0.65, 0.55, 0.50, 0.45, 0.41, 0.41, 0.33, 0.30, 0.33],
        'NJ': [4.13, 0.86, 0.72, 0.60, 0.52, 0.47, 0.44, 0.44, 0.35, 0.31, 0.35],
        'NM': [1.14, 1.43, 0.99, 0.76, 0.62, 0.54, 0.49, 0.48, 0.39, 0.35, 0.40],
        'NY': [0.54, 0.97, 0.69, 0.54, 0.45, 0.40, 0.38, 0.45, 0.44, 0.43, 0.52],
        'NC': [0.66, 1.01, 0.73, 0.63, 0.58, 0.53, 0.50, 0.53, 0.45, 0.41, 0.48],
        'ND': [0.63, 1.47, 1.09, 0.89, 0.77, 0.68, 0.63, 0.62, 0.51, 0.47, 0.57],
        'OH': [0.52, 1.08, 0.79, 0.63, 0.53, 0.47, 0.43, 0.42, 0.33, 0.30, 0.34],
        'OK': [1.59, 1.91, 1.56, 1.39, 1.23, 1.11, 1.03, 1.02, 0.83, 0.75, 0.87],
        'OR': [0.61, 0.66, 0.50, 0.42, 0.37, 0.33, 0.30, 0.30, 0.24, 0.22, 0.26],
        'PA': [0.28, 1.15, 0.77, 0.59, 0.50, 0.45, 0.42, 0.42, 0.35, 0.32, 0.39],
        'RI': [1.75, 1.34, 0.96, 0.82, 0.71, 0.61, 0.56, 0.59, 0.50, 0.45, 0.52],
        'SC': [0.57, 1.24, 0.89, 0.77, 0.69, 0.64, 0.61, 0.63, 0.52, 0.51, 0.69],
        'SD': [0.84, 1.42, 1.03, 0.83, 0.70, 0.63, 0.57, 0.58, 0.49, 0.46, 0.55],
        'TN': [1.25, 1.46, 1.03, 0.86, 0.75, 0.66, 0.60, 0.58, 0.47, 0.42, 0.50],
        'TX': [2.08, 3.09, 2.27, 1.73, 1.36, 1.13, 0.99, 0.95, 0.75, 0.65, 0.76],
        'UT': [1.26, 0.84, 0.56, 0.46, 0.40, 0.35, 0.32, 0.31, 0.25, 0.23, 0.30],
        'VA': [1.26, 0.46, 0.32, 0.23, 0.67, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00],
        'VT': [0.55, 0.76, 0.60, 0.52, 0.46, 0.41, 0.37, 0.38, 0.31, 0.28, 0.34],
        'WA': [0.69, 0.78, 0.60, 0.52, 0.45, 0.40, 0.36, 0.36, 0.28, 0.25, 0.29],
        'WV': [0.98, 1.14, 0.83, 0.69, 0.60, 0.53, 0.49, 0.49, 0.40, 0.36, 0.41],
        'WI': [0.46, 0.88, 0.68, 0.56, 0.47, 0.42, 0.37, 0.36, 0.29, 0.26, 0.30],
        'WY': [0.90, 0.97, 0.83, 0.74, 0.67, 0.61, 0.55, 0.55, 0.43, 0.37, 0.47]
    };
/*alert(percentage_arr);return false;
*/    console.log(percentage_arr['AL']);


    var price = document.getElementById('demo').value;  
    price = price.replace(/,/g, "");//alert(price);return false;
    $('#downpaymentAlert').html("");



    var downpay = document.getElementById('demo2').value;
    downpay = downpay.replace(/,/g, "");
    if (Number(price) < Number(downpay)) {
        var alertMessge = "Down payment cannot be greater than home price.It has been reset to 20% of home price.";
        $('#downpaymentAlert').html(alertMessge);
        $('#myRange2').val(Math.round(Number(price) * .20));
        $('#demo2').val(Math.round(Number(price) * .20));
        downpay = Math.round(Number(price) * .20);
    }


    //  var location_tax_rate = document.getElementById('demo11').value; 
    // // location_tax_rates = location_tax_rate.replace(/,/g, "");
    //  alert(location_tax_rate);

    /*mortgage value calculation*/
    var house_cost = output.value = slider.value;
    var down_payment = outputtwo.value = slidertwo.value;
    var mortgage = house_cost - down_payment;
    // var principal2 = add + add2;
    //$('#total').html(mortgage);
    // $('#break_point').html(principal2);

    /*for Monthly Interest Rate*/
    var annual_interest = outputfour.value = sliderfour.value;
    var montly_intrest = annual_interest / 12;

    // $('#total').html(montly_intrest);

    /*for Monthly Mortgage*/
    var tenure = outputthree.value = sliderthree.value;
    var months = 12 * tenure;
    var sumval = (1 + (montly_intrest) / 100);
    var power_off = Math.pow(sumval, -months);
    var sumval2 = (montly_intrest) / 100;
    var monthly_mortgage = (mortgage * sumval2 / (1 - power_off)).toFixed(2);
    $('#total').html(Math.round(Number(monthly_mortgage)));

    /*Cumulative Net Cost Ownership*/
    var annual_repairs = 0.03 / 100;
    var monthly_repairs = (annual_repairs * house_cost).toFixed(2);
    var outstanding_balance = mortgage;
    // var value_house= house_cost; 
    var sum_PMI = 0.016 / 12;

    /*  Rahul */
    var value_house_arr = [];

    var tax_due_arr = [];

    var pmi_arr = [];

    var outstanding_balance_arr = [];

    var interest_paid_arr = [];

    var principal_paid_arr = [];

    var insurance_due_arr = [];

    var cumulative_net_cost_owning_house_arr = [];

    var cumulative_rent_arr = [];

    var return_on_capital_arr = [];

    var cumulative_net_cost_of_rent_arr = [];

    var benefits_of_home_purchase_arr = [];

    value_house_arr[0] = house_cost;

    outstanding_balance_arr[0] = mortgage;

    var annual_appriciation_of_house = ($('#demo10').val()) ? parseFloat($('#demo10').val()) : 0;

    var tax_rate = ($('#demo11').val()) ? parseFloat($('#demo11').val()) : 0;

    var annual_interest = ($('#demo4').val()) ? parseFloat($('#demo4').val()) : 0;

    var monthly_HOA = ($('#demo6').val()) ? parseFloat($('#demo6').val()) : 0;

    var closing_cost = ($('#demo9').val()) ? parseFloat($('#demo9').val()) : 0;

    var initial_rent = ($('#initial_rent').val()) ? parseFloat($('#initial_rent').val()) : 0;

    var monthly_interest = (annual_interest / 12).toFixed(2);

    var monthly_interest_percentage = monthly_interest / 100;

    var annual_appriciation_of_house_percentage = annual_appriciation_of_house / 100;

    var tax_rate_percentage = tax_rate / 100;

    var final_monthly_payment = final_insurance_due = final_taxes_due = final_PMI = final_return_on_capital = 0;

    for (var i = 1; i <= months; i++)
    {
        final_monthly_payment = parseFloat(monthly_mortgage) * i;

        interest_paid_arr[i] = (parseFloat(monthly_interest_percentage) * parseFloat(outstanding_balance_arr[i - 1])).toFixed(2);

        principal_paid_arr[i] = (parseFloat(monthly_mortgage) - parseFloat(interest_paid_arr[i])).toFixed(2);

        outstanding_balance_arr[i] = (parseFloat(outstanding_balance_arr[i - 1]) - parseFloat(principal_paid_arr[i])).toFixed(2);

        value_house_arr[i] = (parseFloat(value_house_arr[i - 1]) * (1 + annual_appriciation_of_house_percentage / 12)).toFixed(2);

        tax_due_arr[i] = ((tax_rate_percentage / 12) * parseFloat(value_house_arr[i])).toFixed(2);

        final_taxes_due += parseFloat(tax_due_arr[i]);

        if (down_payment < (house_cost * 0.2)) {
            if (((parseFloat(down_payment) + parseFloat(mortgage)) - parseFloat(outstanding_balance_arr[i])) > (house_cost * 0.22)) {
                var pmi = 0;
            } else {
                pmi = ((0.00133 * mortgage) / 12).toFixed(2);
            }
        } else {
            var pmi = 0;
        }

        pmi_arr[i] = pmi;

        final_PMI += parseFloat(pmi_arr[i]);

        var index = getRangeindex(parseFloat(value_house_arr[i]));

        var percentage = percentage_arr['AL'][index] / 100;

        insurance_due_arr[i] = ((percentage * parseFloat(value_house_arr[i])) / 12).toFixed(2);

        final_insurance_due += parseFloat(insurance_due_arr[i]);

        cumulative_net_cost_owning_house_arr[i] = (
            (
                (
                    parseFloat(down_payment) + parseFloat(final_monthly_payment) + parseFloat(outstanding_balance_arr[i])
                ) - parseFloat(value_house_arr[i])
            ) + parseFloat(closing_cost) + parseFloat(final_insurance_due) + parseFloat(final_taxes_due) + parseFloat(final_PMI) + parseFloat(monthly_repairs) + parseFloat(monthly_HOA)
        ).toFixed(2);

        cumulative_rent_arr[i] = (parseFloat(initial_rent * i)).toFixed(2);

        return_on_capital_arr[i] = ((parseFloat(final_monthly_payment) - parseFloat(cumulative_rent_arr[i])) * (0 / 100)).toFixed(2);

        final_return_on_capital += parseFloat(return_on_capital_arr[i]);

        cumulative_net_cost_of_rent_arr[i] = (parseFloat(cumulative_rent_arr[i]) - parseFloat(final_return_on_capital)).toFixed(2);

        benefits_of_home_purchase_arr[i] = (parseFloat(cumulative_net_cost_owning_house_arr[i]) - parseFloat(cumulative_net_cost_of_rent_arr[i])).toFixed(2);

        if (i == 5) 
        {
            console.log(interest_paid_arr, principal_paid_arr, outstanding_balance_arr, value_house_arr, insurance_due_arr, tax_due_arr, pmi_arr, cumulative_net_cost_owning_house_arr, cumulative_rent_arr, cumulative_net_cost_of_rent_arr, benefits_of_home_purchase_arr);
            return;
        }

    }


// intersect point

    var array_intersect = [];
    var k = 0 ;
    console.log("helllo1");
    console.log(cumulative_net_cost_of_rent_arr);
    console.log("helllo1 end");
    for (var i=0; i <= cumulative_net_cost_owning_house_arr.length; i++)
    {
       {
        for (var j=0; j <= cumulative_net_cost_of_rent_arr.length; j++)
         {
           if (cumulative_net_cost_owning_house_arr[i]===cumulative_net_cost_of_rent_arr[j]) 
           {
            array_intersect[k]=cumulative_net_cost_owning_house_arr[i];
            k++;

           }
         }
       }
    }

    console.log("helllo2");
    console.log(array_intersect);
    console.log(array_intersect.length);
    console.log("helllo2 end");
    console.log(array_intersect, array_intersect);

    return;
}

function getRangeindex(amount)
{  
   // alert(amount);return false;
    if (amount >= 0 && amount <= 49999) {
        return 0;
    } else if (amount >= 50000 && amount <= 74999) {
        return 1;
    } else if (amount >= 75000 && amount <= 99999) {
        return 2;
    } else if (amount >= 100000 && amount <= 124999) {
        return 3;
    } else if (amount >= 125000 && amount <= 149999) {
        return 4;
    } else if (amount >= 150000 && amount <= 174999) {
        return 5;
    } else if (amount >= 175000 && amount <= 199999) {
        return 6;
    } else if (amount >= 200000 && amount <= 299999) {
        return 7;
    } else if (amount >= 300000 && amount <= 399999) {
        return 8;
    } else if (amount >= 400000 && amount <= 499999) {
        return 9;
    } else {
        return 10;
    }
}


/* Load the citylist on key of location input */

$('#location, #demo').keyup(function()  {
    var location                        = $('#location').val();
    var home_price                      = $('#demo').val();
    var select_id                       = $('#hidden_loc').val();

    $('#location').autocomplete({

        source: function(request, response) {
            $.ajax({
                type                        : "POST",
                url                         : '/wp-admin/admin-ajax.php',
                data                        : {
                    action                  : 'mortgage_cal',
                    keyword                 : $('#location').val(),
                },

                success: function(data)     {
                    //console.log(data);
                    response(JSON.parse(data));

                }
            });
        },
        select: function(event, ui) {
            var select_id           = ui.item.desc;
            $('#hidden_loc').val(select_id);

        }
    });
    $.ajax({
        type            : "POST",
        dataType        : 'json',
        url             : '/wp-admin/admin-ajax.php',
        data            : {
            action      : 'getPropertyTax',
            keyword     : select_id,
            keyword2    : home_price
        },

        success         : function(data) {
            console.log(data);
            $('#demo4').val(data.data2);
            $('#demo5').val(data.data1);
        }
    });
});


function getPropertyTax(taxValue, homeInsurance) {
    jQuery('.cities_popup').hide();
    document.getElementById('demo4').value       = (taxValue * 100).toFixed(2);
    var home_price                               = parseInt(document.getElementById('demo').value);
    homeInsurancePrice                           = (home_price * homeInsurance) * 100;
    //alert(homeInsurancePrice);
    document.getElementById('demo5').value       = Math.round(homeInsurancePrice);
    document.getElementById('myRange5').value    = Math.round(homeInsurancePrice);
}
//location insurance
jQuery('body').on('click', '#my_city', function(e) {
    e.preventDefault();
    var justify                                  = jQuery(this).html();
    document.getElementById('location').value    = justify;
    jQuery('.cities_popup').hide();
});



function getReport(){  //alert("hiiii");return false;
    var location         =   $("#location").val(); 

    if(location == '')
    {
        alert("Please Select Location");
        $("#location").focus();
        return false;
    }
    
    var locationSplit    =   location.split(",");
    var locationLength   =   locationSplit.length; 
   
    if(locationLength <= 1){
     var location        =   location;
    }else{

     var location        =   locationSplit[1].toLowerCase();
    }

    var location         =   location.trim();


    var percentage_arr   = {
        'alabama'        : [1.12, 1.47, 1.26, 1.05, 0.91, 0.81, 0.73, 0.72, 0.58, 0.51, 0.60],
        'alaska'         : [0.65, 1.17, 0.83, 0.65, 0.53, 0.47, 0.42, 0.43, 0.34, 0.32, 0.36],
        'arizona'        : [0.79, 1.00, 0.73, 0.59, 0.50, 0.44, 0.39, 0.38, 0.31, 0.28, 0.35],
        'arkansas'       : [1.48, 1.66, 1.24, 1.03, 0.88, 0.79, 0.75, 0.70, 0.58, 0.53, 0.63],
        'california'     : [0.27, 0.66, 0.59, 0.48, 0.42, 0.37, 0.35, 0.35, 0.29, 0.26, 0.33],
        'colorado'       : [1.22, 1.23, 1.05, 0.88, 0.76, 0.67, 0.62, 0.62, 0.49, 0.43, 0.49],
        'connecticut'    : [0.68, 0.86, 0.96, 0.68, 0.61, 0.55, 0.51, 0.52, 0.44, 0.40, 0.50],
        'DC'             : [0.67, 0.70, 0.85, 0.63, 0.54, 0.48, 0.43, 0.44, 0.35, 0.31, 0.38],
        'delaware'       : [0.09, 0.70, 0.53, 0.46, 0.41, 0.37, 0.34, 0.34, 0.28, 0.25, 0.30],
        'florida'        : [1.50, 1.80, 1.42, 1.19, 1.05, 0.96, 0.89, 0.94, 0.84, 0.79, 0.85],
        'georgia'        : [0.76, 1.00, 0.83, 0.75, 0.68, 0.61, 0.56, 0.56, 0.45, 0.41, 0.47],
        'hawaii'         : [0.44, 0.46, 0.42, 0.38, 0.36, 0.36, 0.34, 0.37, 0.31, 0.28, 0.31],
        'idaho'          : [0.60, 0.76, 0.59, 0.49, 0.42, 0.37, 0.34, 0.34, 0.28, 0.26, 0.35],
        'illinois'       : [0.91, 1.35, 0.87, 0.68, 0.58, 0.51, 0.47, 0.46, 0.35, 0.32, 0.38],
        'indiana'        : [0.90, 1.28, 0.93, 0.76, 0.65, 0.57, 0.52, 0.51, 0.40, 0.36, 0.42],
        'iowa'           : [0.75, 1.13, 0.87, 0.71, 0.62, 0.55, 0.50, 0.49, 0.39, 0.35, 0.39],
        'kansas'         : [2.24, 2.22, 1.54, 1.23, 1.04, 0.91, 0.82, 0.79, 0.61, 0.53, 0.59],
        'kentucky'       : [1.10, 1.31, 0.99, 0.79, 0.68, 0.61, 0.56, 0.55, 0.45, 0.41, 0.48],
        'louisiana'      : [1.03, 1.63, 1.42, 1.31, 1.21, 1.10, 1.02, 1.04, 0.84, 0.82, 0.96],
        'maine'          : [0.72, 0.83, 0.66, 0.57, 0.50, 0.44, 0.39, 0.39, 0.32, 0.29, 0.34],
        'maryland'       : [0.26, 0.98, 0.64, 0.55, 0.50, 0.45, 0.41, 0.42, 0.34, 0.31, 0.36],
        'massachusetts'  : [0.54, 0.91, 0.80, 0.70, 0.61, 0.53, 0.48, 0.51, 0.41, 0.38, 0.44],
        'michigan'       : [1.01, 1.25, 0.85, 0.68, 0.57, 0.50, 0.45, 0.43, 0.35, 0.31, 0.40],
        'minnesota'      : [0.67, 0.92, 0.90, 0.79, 0.71, 0.66, 0.61, 0.62, 0.51, 0.47, 0.53],
        'mississippi'    : [1.38, 1.61, 1.34, 1.16, 1.03, 0.92, 0.83, 0.82, 0.67, 0.60, 0.70],
        'missouri'       : [1.57, 1.65, 1.14, 0.92, 0.79, 0.70, 0.64, 0.63, 0.49, 0.43, 0.51],
        'montana'        : [0.94, 1.11, 0.89, 0.75, 0.66, 0.59, 0.53, 0.53, 0.43, 0.39, 0.49],
        'nebraska'       : [1.05, 1.81, 1.33, 1.07, 0.90, 0.80, 0.74, 0.74, 0.59, 0.53, 0.63],
        'nevada'         : [0.70, 0.84, 0.55, 0.45, 0.40, 0.36, 0.33, 0.32, 0.27, 0.25, 0.31],
        'new hampshire'  : [0.36, 0.76, 0.65, 0.55, 0.50, 0.45, 0.41, 0.41, 0.33, 0.30, 0.33],
        'new jersey'     : [4.13, 0.86, 0.72, 0.60, 0.52, 0.47, 0.44, 0.44, 0.35, 0.31, 0.35],
        'new mexico'     : [1.14, 1.43, 0.99, 0.76, 0.62, 0.54, 0.49, 0.48, 0.39, 0.35, 0.40],
        'new york'       : [0.54, 0.97, 0.69, 0.54, 0.45, 0.40, 0.38, 0.45, 0.44, 0.43, 0.52],
        'north carolina' : [0.66, 1.01, 0.73, 0.63, 0.58, 0.53, 0.50, 0.53, 0.45, 0.41, 0.48],
        'north dakota'   : [0.63, 1.47, 1.09, 0.89, 0.77, 0.68, 0.63, 0.62, 0.51, 0.47, 0.57],
        'ohio'           : [0.52, 1.08, 0.79, 0.63, 0.53, 0.47, 0.43, 0.42, 0.33, 0.30, 0.34],
        'oklahoma'       : [1.59, 1.91, 1.56, 1.39, 1.23, 1.11, 1.03, 1.02, 0.83, 0.75, 0.87],
        'oregon'         : [0.61, 0.66, 0.50, 0.42, 0.37, 0.33, 0.30, 0.30, 0.24, 0.22, 0.26],
        'pennsylvania'   : [0.28, 1.15, 0.77, 0.59, 0.50, 0.45, 0.42, 0.42, 0.35, 0.32, 0.39],
        'rhode island'   : [1.75, 1.34, 0.96, 0.82, 0.71, 0.61, 0.56, 0.59, 0.50, 0.45, 0.52],
        'south carolina' : [0.57, 1.24, 0.89, 0.77, 0.69, 0.64, 0.61, 0.63, 0.52, 0.51, 0.69],
        'south dakota'   : [0.84, 1.42, 1.03, 0.83, 0.70, 0.63, 0.57, 0.58, 0.49, 0.46, 0.55],
        'tennessee'      : [1.25, 1.46, 1.03, 0.86, 0.75, 0.66, 0.60, 0.58, 0.47, 0.42, 0.50],
        'texas'          : [2.08, 3.09, 2.27, 1.73, 1.36, 1.13, 0.99, 0.95, 0.75, 0.65, 0.76],
        'utah'           : [1.26, 0.84, 0.56, 0.46, 0.40, 0.35, 0.32, 0.31, 0.25, 0.23, 0.30],
        'virginia'       : [1.26, 0.46, 0.32, 0.23, 0.67, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00],
        'vermont'        : [0.55, 0.76, 0.60, 0.52, 0.46, 0.41, 0.37, 0.38, 0.31, 0.28, 0.34],
        'washington'     : [0.69, 0.78, 0.60, 0.52, 0.45, 0.40, 0.36, 0.36, 0.28, 0.25, 0.29],
        'west virginia'  : [0.98, 1.14, 0.83, 0.69, 0.60, 0.53, 0.49, 0.49, 0.40, 0.36, 0.41],
        'wisconsin'      : [0.46, 0.88, 0.68, 0.56, 0.47, 0.42, 0.37, 0.36, 0.29, 0.26, 0.30],
        'wyoming'        : [0.90, 0.97, 0.83, 0.74, 0.67, 0.61, 0.55, 0.55, 0.43, 0.37, 0.47]
    };



    var cost_of_house                   =   $(".cost_of_house").val();
    if(cost_of_house == '')
    {
        alert("Please Enter Cost of House");
        $(".cost_of_house").focus();
        return false;
    }
    var index                           =   getRangeindex(parseFloat(cost_of_house));
    var percentage                      =   percentage_arr[location][index] ;
    var cost_of_house                   =   cost_of_house.replace(/,/g, "");
    var down_payment                    =   $(".down_payment").val();
    if(down_payment == '')
    {
        alert("Please Enter Down Payment");
        $(".down_payment").focus();
        return false;
    }
    var down_payment                    =   down_payment.replace(/,/g, "");
    var tenure_years                    =   $(".tenure").val();
    if(tenure_years == '')
    {
        alert("Please Enter Tenure Years");
        $(".tenure").focus();
        return false;
    }
    var tenure_months                   =   tenure_years * 12;
    var annual_interest_rate            =   $(".annual_interest_rate").val();
    if(annual_interest_rate == '')
    {
        alert("Please Enter Annual Interest Rate");
        $(".annual_interest_rate").focus();
        return false;
    }
    var monthly_interest_rate           =   annual_interest_rate/12;
    var initial_rent                    =   $(".initial_rent").val();
    if(initial_rent == '')
    {
        alert("Please Enter Initial Rent");
        $(".initial_rent").focus();
        return false;
    }
    var mortgage                        =   parseFloat(cost_of_house) - parseFloat(down_payment);
    var home_owners_insurance           =   $(".home_owners_insurance").val();
    if(home_owners_insurance == '')
    {
        alert("Please Enter Home Owners Insurance");
        $(".home_owners_insurance").focus();
        return false;
    }
    var rent_increase_interval          =   $(".rent_increase_interval").val();
    if(rent_increase_interval == '')
    {
        alert("Please Enter Rent Increase Interval");
        $(".rent_increase_interval").focus();
        return false;
    }
    var rent_increase_interval_per      =   $(".rent_increase_interval_per").val();
    if(rent_increase_interval_per == '')
    {
        alert("Please Enter Rent Increase Interval (%)");
        $(".rent_increase_interval_per").focus();
        return false;
    }
    var closing_costs                   =   $(".closing_costs").val();
    if(closing_costs == '')
    {
        alert("Please Enter Closing Costs");
        $(".closing_costs").focus();
        return false;
    }
    var annual_appreciation_on_house    =   $(".annual_appreciation_on_house").val();
    if(annual_appreciation_on_house == '')
    {
        alert("Please Enter Annual Appreciation on House");
        $(".annual_appreciation_on_house").focus();
        return false;
    }
    var annual_repairs                  =   0.03 / 100;
    var monthly_repairs                 =   annual_repairs * cost_of_house;
    var tax_rate                        =   ($('#demo11').val()) ? parseFloat($('#demo11').val()) : 0;
    var tax_rate_percentage             =   tax_rate / 100;
    var monthly_HOA                     = ($('#demo6').val()) ? parseFloat($('#demo6').val()) : 0;
    //alert(tax_rate);return false;

    var dataString                      =   "cost_of_house="+cost_of_house+"&down_payment="+down_payment+
                                            "&tenure_years="+tenure_years+"&tenure_months="+tenure_months+
                                            "&annual_interest_rate="+annual_interest_rate+"&monthly_interest_rate="
                                            +monthly_interest_rate+"&initial_rent="+initial_rent+"&mortgage="+mortgage+
                                            "&home_owners_insurance="+home_owners_insurance+"&rent_increase_interval="+rent_increase_interval
                                            +"&rent_increase_interval_per="+rent_increase_interval_per+"&closing_costs="+closing_costs+
                                            "&annual_appreciation_on_house="+annual_appreciation_on_house+"&percentage="+percentage+
                                            "&monthly_repairs="+monthly_repairs+"&tax_rate_percentage="+tax_rate_percentage+
                                            "&monthly_HOA="+monthly_HOA;
                           
    $.ajax({
                type                    :   "POST",
                url                     :   "/wp-content/themes/twentyseventeen-child/rent_vs_buy_ajax.php",
                data                    :   dataString,
                success                 :   function(result)
                { 
                    $(".appendReport").html(result);
                }});
    }