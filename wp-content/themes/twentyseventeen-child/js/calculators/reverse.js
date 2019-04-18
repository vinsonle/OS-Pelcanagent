window.onload = function() {
    const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2
    })
  	$("#org_mortgage_payment").val(15000);
    $("#out_org_mortgage_payment").val(15000);
    $("#down_payment").val(1000);
    $("#down_payment_slider").val(1000);
    $("#out_org_term_mortgage").val(8);
    $("#org_term_mortgage").val(8);
    $("#org_monthly_int_rate").val(4.5);
    $("#out_org_monthly_int_rate").val(4.5);

    var lum_sum = document.getElementById('org_mortgage_payment').value;
    lum_sum = Number(lum_sum.replace(/,/g, "")); 

    var advance = document.getElementById('down_payment').value;
    advance = Number(advance.replace(/,/g, "")); 

    var tenure = document.getElementById('out_org_term_mortgage').value;
    tenure = tenure.replace(/,/g, "");
    tenure = Number(tenure * 12);

    var interest = document.getElementById('org_monthly_int_rate').value;
    annual_interest = interest.replace(/,/g, "");
    interest = annual_interest/12;

    console.log("interest",interest);

    var ob = (lum_sum)*(Math.pow((1+(interest/100)),(tenure)))+advance*(Math.pow((1+(interest/100)),(tenure))-1)*12*(1+(interest/100))/(annual_interest/100);

    console.log("ob",ob);

    $("#total").html(formatter.format(ob));
    $("#years").html(document.getElementById('out_org_term_mortgage').value);

 //sum = C4*(1+C7/12)^(12*C5)+C6*((1+C7/12)^(C5*12)-1)*12*(1+C7/12)/C7
}

function rev_calculator(val)
{   
    const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2
    })
    var lum_sum = document.getElementById('org_mortgage_payment').value;
    lum_sum = lum_sum.replace(/,/g, "");     
    var advance = document.getElementById('down_payment').value;
    advance = advance.replace(/,/g, ""); 
    advance=Number(advance);
    var tenure = document.getElementById('out_org_term_mortgage').value;
    tenure = tenure.replace(/,/g, "");
    tenure = Number(tenure * 12);

    var interest = document.getElementById('org_monthly_int_rate').value;
    annual_interest = interest.replace(/,/g, "");
    interest = Number(annual_interest/12);
    console.log("interest",interest);
        //var calculatedValue=lum_sum*(1+interest)
    var ob = (lum_sum)*(Math.pow((1+(interest/100)),(tenure)))+advance*(Math.pow((1+(interest/100)),(tenure))-1)*12*(1+(interest/100))/(annual_interest/100);

    console.log("ob",ob);

    $("#total").html(formatter.format(ob));
    $("#years").html(document.getElementById('out_org_term_mortgage').value);
}