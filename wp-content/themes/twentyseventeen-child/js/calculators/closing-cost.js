window.onload = function() {

	$("#demo").val(500000);
	$("#demo2").val(100000);
	$("#demo3").val(5.0);

	var home_price = document.getElementById('demo').value; 
	home_price = parseInt(home_price.replace(/,/g, ""));     

    var down_pay_amt = document.getElementById('demo2').value;
    down_pay_amt = parseInt(down_pay_amt.replace(/,/g, ""));
   
    var mort_int_rate = document.getElementById('demo3').value;
    mort_int_rate = parseFloat(mort_int_rate.replace(/,/g, ""));
    //mort_int_rate = mort_int_rate/100;

    var down_pay_int_per = (down_pay_amt * 100 ) / home_price;

    var loan_amt = Number(home_price) - Number(down_pay_amt); 

    var loan_amt_per = loan_amt / home_price;

    var loan_org_fee = 0.01 * Number(loan_amt);
   
    $("#loan_org_fee").val(loan_org_fee);

    var loan_org_point = 0 * loan_amt_per;
   
    $("#loan_org_point").val(loan_org_point);

    var appraisal = 400;

    $("#appraisal").val(appraisal);

    var credit_report = 35;

    $("#credit_report").val(credit_report);

    var pre_int = Math.round((0.5/12)*mort_int_rate/100*loan_amt);

    $("#pre_interest").val(pre_int);

    var total_loadn_rel_fees = loan_org_fee + loan_org_point + appraisal + credit_report + pre_int;    

    $("#loan_rel_fees").html(total_loadn_rel_fees);

    var attrny_fees = 1000;

    $("#attorny").val(attrny_fees);

    var home_insp = 200;

    $("#home_insp").val(home_insp);

    var term_pest_ins = 150;

    $("#ter_pest_insp").val(term_pest_ins);

    var pro_rel_fees = attrny_fees + home_insp + term_pest_ins;

    $("#pro_rel_fees").html(pro_rel_fees);

    var pre_pro_tax = 631;

    $("#pre_prop_tax").val(pre_pro_tax);

    var home_insu = 1290;

    $("#home_insurance").val(home_insu);

    var tax_insu_fees = pre_pro_tax + home_insu;

    $("#tax_insu_fees").html(tax_insu_fees);

    var title_insu = 0.0015*home_price;

    $("#title_insurance").val(title_insu);

    var title_serch_surv = 500;

    $("#title_serach_surv").val(title_serch_surv);

    var flood_cert = 25;

    $("#flood_cert").val(flood_cert);

    var escrow_fee = home_price*(2/1000);

    $("#escrow").val(escrow_fee);

    title_escw_fee = title_insu + title_serch_surv + flood_cert + escrow_fee;

    $("#title_escw_fee").html(title_escw_fee);

    var total_cost = loan_org_fee + loan_org_point + appraisal + credit_report + pre_int + attrny_fees + home_insp + term_pest_ins +
    pre_pro_tax + home_insu + title_insu + title_serch_surv + flood_cert + escrow_fee;

    $("#total_cost").html(total_cost);

    cc_calculator();
}

function cc_calculator(){
	//console.log("func called");

	var home_price = document.getElementById('demo').value; 
	home_price = parseInt(home_price.replace(/,/g, ""));     

    var down_pay_amt = document.getElementById('demo2').value;
    down_pay_amt = parseInt(down_pay_amt.replace(/,/g, ""));
   
    var mort_int_rate = document.getElementById('demo3').value;
    mort_int_rate = parseFloat(mort_int_rate.replace(/,/g, ""));

    var loan_amt = Number(home_price) - Number(down_pay_amt); 
    var loan_amt_per = loan_amt / home_price;
    var loan_org_fee = 0.01 * Number(loan_amt);  
    var loan_org_point = 0 * loan_amt_per;   
    var appraisal = document.getElementById('appraisal').value; 
	appraisal = parseInt(appraisal.replace(/,/g, ""));     
    console.log("Loan amount : "+loan_amt);

    var credit_report = document.getElementById('credit_report').value;
    credit_report = parseInt(credit_report.replace(/,/g, ""));
    var loan_org_fee = document.getElementById('loan_org_fee').value;
    loan_org_fee = parseInt(loan_org_fee.replace(/,/g, ""));
    console.log("loan org fee:"+loan_org_fee);
    var loan_org_point = document.getElementById('loan_org_point').value; 
	loan_org_point = parseInt(loan_org_point.replace(/,/g, ""));     
    console.log("Loan org point:"+loan_org_point);
    
    var pre_interest = document.getElementById('pre_interest').value;
    pre_interest = parseInt(pre_interest.replace(/,/g, ""));
   
    var attorny = document.getElementById('attorny').value;
    attorny = parseInt(attorny.replace(/,/g, ""));
    console.log("attorney fee:"+attorny);    
    var home_insp = document.getElementById('home_insp').value; 
	home_insp = parseInt(home_insp.replace(/,/g, ""));     
    console.log("Home inspection:"+home_insp);    
    var ter_pest_insp = document.getElementById('ter_pest_insp').value;
    ter_pest_insp = parseInt(ter_pest_insp.replace(/,/g, ""));
    console.log("terminate and pest:"+ter_pest_insp );
   
    var home_insurance = document.getElementById('home_insurance').value;
    home_insurance = parseInt(home_insurance.replace(/,/g, ""));
    console.log("home insurance:"+home_insurance);
    var pre_prop_tax = document.getElementById('pre_prop_tax').value;
    pre_prop_tax = parseInt(pre_prop_tax.replace(/,/g, ""));    
    var escrow = document.getElementById('escrow').value; 
	escrow = parseInt(escrow.replace(/,/g, ""));     

    var flood_cert = document.getElementById('flood_cert').value;
    flood_cert = parseInt(flood_cert.replace(/,/g, ""));
    
    var title_insurance = document.getElementById('title_insurance').value;
    title_insurance = parseInt(title_insurance.replace(/,/g, ""));
    console.log("title insurance:"+title_insurance);
    var title_serch_surv = document.getElementById('title_serach_surv').value;
    title_serch_surv = parseInt(title_serch_surv.replace(/,/g, ""));
    console.log("title search insurance:"+title_serch_surv);
    var down_pay_int_per = (down_pay_amt * 100 ) / home_price;
  
    var pre_int = Math.round((0.5/12)*mort_int_rate/100*loan_amt);

    $("#pre_interest").val(pre_int);
    console.log(mort_int_rate);
    prepaid_intrest= ((0.5/12)*Number(loan_amt)*mort_int_rate/100);

    var total_loadn_rel_fees = loan_org_fee + loan_org_point + appraisal + credit_report + prepaid_intrest;    
       
    $("#loan_rel_fees").html(total_loadn_rel_fees);  

    var pro_rel_fees = attorny + home_insp + ter_pest_insp;
    console.log('Property related fee:'+pro_rel_fees);
    //console.log("pro_rel_fees",pro_rel_fees);

    $("#pro_rel_fees").html(pro_rel_fees);

    var home_insu = home_insurance;
    var tax_insu_fees = pre_prop_tax + home_insu;

    $("#tax_insu_fees").html(tax_insu_fees);

    var title_insu = 0.0015*home_price;

    var escrow_fee = home_price*(2/1000);
    console.log("title and search:"+title_serch_surv);
    //$("#escrow").val(escrow_fee);

    title_escw_fee = title_insu + title_serch_surv + flood_cert + escrow_fee;
    console.log("Title escrow fee:"+title_escw_fee)
    $("#title_escw_fee").html(title_escw_fee);
    var fixed_cost_fee=350+appraisal+credit_report+flood_cert+prepaid_intrest+pre_prop_tax-escrow_fee;
    console.log("Fixed cost Fee="+fixed_cost_fee);
    var cost_and_service=attorny+home_insp+home_insurance+loan_org_fee+ter_pest_insp+title_insurance+title_serch_surv;
    console.log("Cost and service="+cost_and_service);    
    var total_cost = Math.round(total_loadn_rel_fees+pro_rel_fees+tax_insu_fees+title_escw_fee-escrow_fee);

    $("#total_cost").html("$" + total_cost);
    $('.loan_rel_fees').html("$"+ Math.round(total_loadn_rel_fees));
    $('.property_rel_fees').html("$" + Math.round(pro_rel_fees));
    $('.taxes_and_insurance_fees').html("$" + Math.round(tax_insu_fees));
    $('.title_escrow_fees').html("$" + Math.round(title_escw_fee));
    // $('.estimated_closing_cost').html("$" + Math.round(total_cost));

     //doughnut chart
     var chart = new CanvasJS.Chart("chartContainerClosingCost", {
        animationEnabled: true,
        title: {
            horizontalAlign: "left"
        },
        data: [{
            type: "pie",
            startAngle: 270,
            innerRadius: 90,
            indexLabelFontSize: 17,
            indexLabel: "",
            toolTipContent: "",
            dataPoints: [{
                    y: tax_insu_fees,
                    color: "#ffb900"
                }, {
                    y: total_loadn_rel_fees,
                    color: "#26abe2" 
                },{
                    y: title_escw_fee,
                    color: "#214496" 
                },{
                    y: pro_rel_fees,
                    color: "#6495ED" 
                }]
            }]
    });
    chart.render();

    var dps = chart.options.data[0].dataPoints;
    var sum = 0;     
        
    for(var i = 0; i < dps.length; i++) {    
        sum += dps[i].y;                      
    }
    //Doughnut cahrt ends
   
   
}
