/* ballon calculation on change of side filters*/
window.onload = function() {
    const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2
    })
    $('#downpaymentAlert').html("");
    $("#org_mortgage_payment").val(250000);
    $("#out_org_mortgage_payment").val(250000);
    $("#down_payment").val(50000);
    $("#down_payment_slider").val(50000);
    $("#out_org_term_mortgage").val(30);
    $("#org_term_mortgage").val(30);
    $("#org_monthly_int_rate").val(4.5);
    $("#out_org_monthly_int_rate").val(4.5);
    $("#refinance_terms").val(7);
    $("#out_refinance_terms").val(7);

    var home_cost = document.getElementById('org_mortgage_payment').value;
    home_cost = home_cost.replace(/,/g, ""); 

    var down_payment = document.getElementById('down_payment').value;
    down_payment = down_payment.replace(/,/g, ""); 

    var tenure = document.getElementById('out_org_term_mortgage').value;
    tenure = tenure.replace(/,/g, "");
    tenure = tenure * 12;

    var interest = document.getElementById('org_monthly_int_rate').value;
    interest = interest.replace(/,/g, "");
    interest = interest/12;

    var due_term = document.getElementById('refinance_terms').value; 
    due_term = due_term.replace(/,/g, "");

    location_tax = 0;

    insurance = 0;

    var mortgage = home_cost - down_payment;

    /*console.log("mortgage",mortgage);
    console.log("month int rate",interest); 
    console.log("tenure",tenure); */

    var monthly_mort = mortgage / (1-Math.pow(1+interest/100,-tenure)) * interest/100;

    //console.log("monthly_mort",monthly_mort);

    //=C10*(1-(1+C8)^(-(C9-12*C13+1)))/C8*(1+C8)

    var ball_cal = monthly_mort*(1-Math.pow((1+interest/100),-(tenure - 12*due_term + 1)))/(interest/100)* (1+(interest/100));
    //console.log("Balloon Calculation "+ball_cal);
    $('#total-taxes_value').html(formatter.format(ball_cal));

    var sum_month_pay = monthly_mort * (due_term * 12-1);

    $("#sum_mon_pay").html(formatter.format(sum_month_pay));

    var total_payment = ball_cal + sum_month_pay;

    $("#total_pay").html( formatter.format(total_payment));

    var principle = monthly_mort;

    $("#principle").html( formatter.format(principle));

    var intererst = total_payment - mortgage;

    $("#int").html( formatter.format(intererst));
}

function balloon_calculator(val) { 
     $('#downpaymentAlert').html("");
    const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2
    })
    var home_cost = document.getElementById('org_mortgage_payment').value;
    home_cost = Number(home_cost.replace(/,/g, "")); 

    var down_payment = document.getElementById('down_payment').value;
    down_payment = Number(down_payment.replace(/,/g, "")); 
    if(Number(home_cost)<Number(down_payment)){
        var alertMessge="Down payment cannot be greater than home cost. It has been reset to 20% of home cost.";
        $('#downpaymentAlert').html(alertMessge);
        var downpayment=Math.round(Number(home_cost)*.20);
        $('#down_payment').val(downpayment);        
        $('#down_payment_slider').val(Math.round(Number(home_cost)*.20));
        down_payment=Math.round(Number(price)*.20);
        
    }

    var tenure = document.getElementById('out_org_term_mortgage').value;
    tenure = tenure.replace(/,/g, "");
    tenure = Number (tenure * 12);

    var interest = document.getElementById('org_monthly_int_rate').value;
    interest = interest.replace(/,/g, "");
    interest = parseFloat(interest/12);

    var due_term = document.getElementById('refinance_terms').value; 
    due_term = Number(due_term.replace(/,/g, ""));

    location_tax = 0;

    insurance = 0;

    var mortgage = home_cost - down_payment;

    console.log("mortgage",mortgage);
    console.log("month int rate",interest);
    console.log("tenure",tenure);

    var monthly_mort = mortgage / (1-Math.pow(1+interest/100,-tenure)) * interest/100;

    console.log("monthly_mort",monthly_mort);

    //=C10*(1-(1+C8)^(-(C9-12*C13+1)))/C8*(1+C8)

    var ball_cal = monthly_mort*(1-Math.pow((1+(interest/100)),-(tenure - 12*due_term + 1)))/(interest/100) * (1+(interest/100));

    $('#total-taxes_value').html(formatter.format(ball_cal));

    var sum_month_pay = monthly_mort * (due_term * 12-1);

    $("#sum_mon_pay").html(formatter.format(sum_month_pay));

    var total_payment = ball_cal + sum_month_pay;

    $("#total_pay").html(formatter.format(total_payment));

    var principle = monthly_mort;

    $("#principle").html(formatter.format(principle));

    var intererst = total_payment - mortgage;

    $("#int").html(formatter.format(intererst));
}
