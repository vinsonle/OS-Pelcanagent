
/* Equal input range slider and its input text value */

    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.value = slider.value;

    slider.oninput = function() {
        output.value = this.value;
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
        //alert(outputthree.value);
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
    }


/* Monthly Mortgage calculation on change of side filters*/


    function mon_mortage(val) {
        const formatter = new Intl.NumberFormat('en-US', {
          style: 'currency',
          currency: 'USD',
          minimumFractionDigits: 2
        })

        //alert(val);
        var price = document.getElementById('demo').value;
        price = price.replace(/,/g, "");
        $('#downpaymentAlert').html("");

        var downpay = document.getElementById('demo2').value;
        downpay = downpay.replace(/,/g, "");
        if(Number(price)<Number(downpay)){
            var alertMessge="Down payment cannot be greater than home price.It has been reset to 20% of home price.";
            $('#downpaymentAlert').html(alertMessge);
            $('#myRange2').val(Math.round(Number(price)*.20));
            $('#demo2').val(Math.round(Number(price)*.20));   
            downpay=Math.round(Number(price)*.20);                                 
        }
        var interest = document.getElementById('demo3').value;
        interest = interest.replace(/,/g, "");

        var location_tax_rate = document.getElementById('demo4').value; 
        location_tax_rate = location_tax_rate.replace(/,/g, "");
        
        var insurance = document.getElementById('demo5').value;
        insurance = insurance.replace(/,/g, "");

        var location = document.getElementById('location').value;
        location = location.replace(/,/g, "");

        var home_assoc_fee = document.getElementById('demo6').value;
        home_assoc_fee = home_assoc_fee.replace(/,/g, "");

        var loan_term = document.getElementById('loan_term').value;
        var scroll_year = document.getElementById('rangeyearss').value;
        scroll_year = scroll_year.replace(/,/g, "");
         
        loan_term = loan_term.replace(/,/g, "");

        var principal = price - downpay;

        var location_tax = ((price / 100) * location_tax_rate) + Number(home_assoc_fee);
 
        var month_insurance = insurance / 12;

        var month_tax = location_tax / 12;

        var total_insurance = month_insurance * monthly_term;

        var total_tax = (month_tax * monthly_term) + Number(home_assoc_fee);

        var month_tax_fee = month_tax + Number(home_assoc_fee);

        var monthly_interest = (interest / 12) / 100;

        var monthly_term = loan_term * 12;

        var sum_of_pay = monthly_mort * monthly_term;

        var now = new Date();

        var currentYear = now.getFullYear();

        var maxYear = Number(currentYear) + Number(loan_term);
        var displayLineYear=Number(currentYear) + Number(scroll_year);        
        var yearly_interest = interest / 100;
  
        var monthly_mort = Math.round((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term)))) + (Number(location_tax) + Number(insurance)) / 12);

        var principal_interest = monthly_mort - (parseInt(month_tax_fee) + parseInt(month_insurance));

        $('.total-taxes_value').html("$" + Math.round(month_tax_fee));
        $('.total-home-insurance_value').html("$" + Math.round(month_insurance));
        $('.mortgage-payment-total_value').html("$" + Math.round(principal_interest));

        //Ammortization Table for month

        var result = "";

        result += "<table border='1'><tr><th>Month</th><th>Monthly payment</th><th>Interest</th><th>Principal</th><th>Balance</th>";

        var monthlyPayment = ((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term)))));
          
        var balance = principal;
        var principal_arr = [];
        var interest_arr = [];
        var balance_arr = [];

        for (var count = 0; count < monthly_term; ++count) {

            //in-loop interest amount holder
            var interest_rate = 0;

            //in-loop monthly principal amount holder
            var monthlyPrincipal = 0;

            //start a new table row on each loop iteration
            result += "<tr align=center>";

            //display the month number in col 1 using the loop count variable
            result += "<td>" + (count + 1) + "</td>"

            result += "<td> $" + Math.round(monthlyPayment) + "</td>";

            interest_rate = balance * monthly_interest;

            result += "<td> $" + Math.round(interest_rate) + "</td>";
            interest_arr[count] = Number(Math.round(interest_rate));

            monthlyPrincipal = monthlyPayment - interest_rate;
            result += "<td> $" + Math.round(monthlyPrincipal) + "</td>";
            principal_arr[count] = Number(Math.round(monthlyPrincipal));

            if (monthlyPayment > balance) {

                balance = 0;

            } else {

                balance = balance - monthlyPrincipal;
            }

            result += "<td> $" + Math.round(balance) + "</td>";
            balance_arr[count] = Number(Math.round(balance));

            //end the table row on each iteration of the loop 
            result += "</tr>";

            //update the balance for each loop iteration

        }

        //Final piece added to return string before returning it - closes the table
        result += "</table>";

        $('#ammort_table').html(result);

        //year wise amortization

        var result_year = "";

        result_year += "<table border='1'><tr><th> Year</th><th>Yearly payment</th><th>Interest</th><th>Principal</th><th>Balance</th>";

        var monthlyPayment = ((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term)))));

        var balance = principal;
        var yearlyPayment = monthlyPayment * 12;
        var yearly_principal_arr = [];
        var yearly_interest_arr = [];
        var yearly_balance_arr = [];

        for (var count = 0; count <= loan_term; ++count) {

            //in-loop interest amount holder
            var yearly_interest_rate = 0;

            //in-loop monthly principal amount holder
            var yearlyPrincipal = 0;

            var nextbalance = 0;
            
            //start a new table row on each loop iteration
            result_year += "<tr align=center>";

            //display the month number in col 1 using the loop count variable
            result_year += "<td>" + (count + 1) + "</td>"

            result_year += "<td> $" + yearlyPayment.toFixed(2) + "</td>";

            yearly_interest_rate = balance * yearly_interest;
            //console.log("yearly interest Rate"+ yearly_interest_rate);
            // alert(yearly_interest_rate);
            result_year += "<td> $" + yearly_interest_rate.toFixed(2) + "</td>";
            yearly_interest_arr[count] = Number(yearly_interest_rate.toFixed(2));

            yearlyPrincipal = yearlyPayment - yearly_interest_rate;
            result_year += "<td> $" + yearlyPrincipal.toFixed(2) + "</td>";
            yearly_principal_arr[count] = Number(yearlyPrincipal.toFixed(2));

            balance = balance - yearlyPrincipal;
            result_year += "<td> $" + balance.toFixed(2) + "</td>";
            yearly_balance_arr[count] = Number(balance.toFixed(2));

            //end the table row on each iteration of the loop 
            result_year += "</tr>";

            //update the balance for each loop iteration
            
        }
        
        result_year += "</table>";

        var graph_principal_arr = [];
        var total_principal_arr = 0;
        var principal_amount = 0;
        var interest_amount = 0;
        for (i = 0; i < yearly_principal_arr.length; i++) {

            total_principal_arr = total_principal_arr + yearly_principal_arr[i];
            graph_principal_arr[i] = Number(total_principal_arr.toFixed(2));
            if(i==scroll_year){
                principal_amount=graph_principal_arr[i];
            }
            if(i==scroll_year && scroll_year == 30 ){
                principal_amount = principal;
            }
        }

        var graph_interest_arr = [];
        var total_interest_arr = 0;

        for (i = 0; i < yearly_interest_arr.length; i++) {
            total_interest_arr = total_interest_arr + yearly_interest_arr[i];

            graph_interest_arr[i] = Number(total_interest_arr.toFixed(2));
            if(i==scroll_year){ 
                interest_amount=graph_interest_arr[i];
            }
            if(scroll_year ==30 & i == scroll_year){
                interest_amount= graph_interest_arr[i-1]
            }
        }
        var remaining_amount= principal- principal_amount;
        //returns the concatenated string to the page
        // $('#ammort_year').html(result_year);
        $('#years').html(scroll_year);
         $('#interest_amount').html(formatter.format(interest_amount));
         $('#principal_amount').html( formatter.format(principal_amount));
         $('#remaining_amount').html( formatter.format(remaining_amount));
        //doughnut chart
        var chart = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            title: {
                // text: "Email Categories",
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
                y: principal_interest,
                      color: "#26abe3"
            }, {
                y: month_insurance,
                color: "#ffb900" 
            }, {
                y: month_tax_fee,
                color: "#214496" 
            }, ]
        }]
    });
                chart.render();

            var dps = chart.options.data[0].dataPoints;
            var sum = 0;
        for(var i = 0; i < dps.length; i++){
                
           sum += dps[i].y;
        }
        $('#total').html("$" + Math.round(sum));
        //Doughnut cahrt ends

        //Line chart start

        Highcharts.chart('container', {
            yAxis: {
                min: 0,
                max: total_interest_arr,
                title: {
                    text: ''
                } 
            },
            xAxis: {
                min: currentYear,
                max: maxYear,
                plotLines: [{ // mark the weekend
                        color: '#20a7e2',
                        width: 2,value:displayLineYear}],

            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart:  Number(currentYear)
                }
            },

            series: [{
                name: 'Principal',
                data: graph_principal_arr

            }, {
                name: 'Interest',
                data: graph_interest_arr

            }, {
                name: 'Remaining',
                data: yearly_balance_arr

            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
        //line chart ends

        // For calculating location tax

         var ajaxurl = "/wp-admin/admin-ajax.php";

    }
/* Load the citylist on key of location input */

$('#location, #demo').keyup(function() { 
        var location = $('#location').val();
        var home_price=$('#demo').val();
        var select_id= $('#hidden_loc').val();

      $('#location').autocomplete({
     
      source: function(request, response){
      $.ajax({
        type: "POST", 
        url: '/wp-admin/admin-ajax.php', 
          data: {
          action: 'mortgage_cal',
          keyword: $('#location').val(),
        }, 
       
        success:function(data) {
          //console.log(data);
           response(JSON.parse( data ));

              
      }

    });
   },
    select: function( event, ui ) { 
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
          keyword2:home_price
        }, 
       
        success:function(data) {
       console.log(data);
       $('#demo4').val(data.data2);
       $('#demo5').val(data.data1);      
      }

    });
  
    });    
    


    function getPropertyTax(taxValue,homeInsurance){
        jQuery('.cities_popup').hide();
        document.getElementById('demo4').value = (taxValue*100).toFixed(2);
        var home_price=parseInt(document.getElementById('demo').value);
        homeInsurancePrice=(home_price*homeInsurance)*100;
        //alert(homeInsurancePrice);
        document.getElementById('demo5').value = Math.round(homeInsurancePrice);
        document.getElementById('myRange5').value = Math.round(homeInsurancePrice);
    }
    //location insurance
    jQuery('body').on('click', '#my_city', function(e) {
        e.preventDefault();
        var justify = jQuery(this).html();
        document.getElementById('location').value = justify;
        jQuery('.cities_popup').hide();
        
    });


/* Mortgage calculation on load of page */
    
window.onload = function() {
    $('#downpaymentAlert').html("");
    const formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2
    })

    var price = document.getElementById('myRange').value;
    var downpay = document.getElementById('myRange2').value;
    var interest = document.getElementById('myRange3').value;
    var location_tax_rate = document.getElementById('myRange4').value;

    var insurance = document.getElementById('myRange5').value;
    var location = document.getElementById('location').value;
    var home_assoc_fee = document.getElementById('myRange6').value;
    var loan_term = document.getElementById('loan_term').value;
    scroll_year=1;
    if(Number(price)<Number(downpay)){
        var alertMessge="Down payment cannot be greater than home price. It has been reset to 20% of home price.";
        $('#downpaymentAlert').html(alertMessge);
        var downpayment=Math.round(Number(price)*.20);
        $('#myRange2').val(downpayment);
        alert("hello");
        $('#demo2').val(Math.round(Number(price)*.20));
        downpay=Math.round(Number(price)*.20);
        
    }
     $('#years').html(scroll_year);
    var principal = price - downpay;

    var location_tax = ((price / 100) * location_tax_rate) + Number(home_assoc_fee);

    var month_insurance = insurance / 12; 
    var month_tax = location_tax / 12;
    var total_insurance = month_insurance * monthly_term;
    var total_tax = (month_tax * monthly_term) + Number(home_assoc_fee);
    var month_tax_fee = month_tax + Number(home_assoc_fee); 
    var monthly_interest = (interest / 12) / 100;
    var monthly_term = loan_term * 12; 
    var sum_of_pay = monthly_mort * monthly_term;
    var now = new Date();
    var currentYear = now.getFullYear();
    var displayLineYear=Number(currentYear) + Number(scroll_year);
    var maxYear = Number(currentYear) + Number(loan_term);
    var yearly_interest = interest / 100;

    var monthly_mort = Math.round((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term))))
     + (Number(location_tax) + Number(insurance)) / 12);

    var principal_interest = monthly_mort - (parseInt(month_tax_fee) + parseInt(month_insurance));
         
             $('#mytexts').html(month_insurance);

    //doughnut chart on page load
    var chart = new CanvasJS.Chart("chartContainer2", {

        animationEnabled: true,
        title: {
            // text: "Email Categories",
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
                y: principal_interest,
                       color: "#26abe3"
            }, {
                y: month_insurance,
                color: "#ffb900" 
            }, {
                y: month_tax_fee,
                color: "#214496"  
            }, ]
        }]
    });
    chart.render();
    var dps = chart.options.data[0].dataPoints;
var sum = 0;     
        
for(var i = 0; i < dps.length; i++){ 

   sum += dps[i].y;                
        
}
                             
$('#total').html("$" + Math.round(sum));
      var result = "";

        result += "<table border='1'><tr><th>Month</th><th>Monthly payment</th><th>Interest</th><th>Principal</th><th>Balance</th>";

        var monthlyPayment = ((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term)))));
          
        var balance = principal;
        var principal_arr = [];
        var interest_arr = [];
        var balance_arr = [];

        for (var count = 0; count < monthly_term; ++count) {

            //in-loop interest amount holder
            var interest_rate = 0;

            //in-loop monthly principal amount holder
            var monthlyPrincipal = 0;

            //start a new table row on each loop iteration
            result += "<tr align=center>";

            //display the month number in col 1 using the loop count variable
            result += "<td>" + (count + 1) + "</td>"

            result += "<td> $" + Math.round(monthlyPayment) + "</td>";

            interest_rate = balance * monthly_interest;

            result += "<td> $" + Math.round(interest_rate) + "</td>";
            interest_arr[count] = Number(Math.round(interest_rate));

            monthlyPrincipal = monthlyPayment - interest_rate;
            result += "<td> $" + Math.round(monthlyPrincipal) + "</td>";
            principal_arr[count] = Number(Math.round(monthlyPrincipal));

            if (monthlyPayment > balance) {

                balance = 0;

            } else {

                balance = balance - monthlyPrincipal;
            }

            result += "<td> $" + Math.round(balance) + "</td>";
            balance_arr[count] = Number(Math.round(balance));

            //end the table row on each iteration of the loop 
            result += "</tr>";

            //update the balance for each loop iteration

        }

        //Final piece added to return string before returning it - closes the table
        result += "</table>";

        $('#ammort_table').html(result);

        //year wise amortization

        var result_year = "";

        result_year += "<table border='1'><tr><th> Year</th><th>Yearly payment</th><th>Interest</th><th>Principal</th><th>Balance</th>";

        var monthlyPayment = ((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term)))));

        var balance = principal;
        var yearlyPayment = monthlyPayment * 12;
        var yearly_principal_arr = [];
        var yearly_interest_arr = [];
        var yearly_balance_arr = [];

        for (var count = 0; count < loan_term; ++count) {

            //in-loop interest amount holder
            var yearly_interest_rate = 0;

            //in-loop monthly principal amount holder
            var yearlyPrincipal = 0;

            var nextbalance = 0;
            
            //start a new table row on each loop iteration
            result_year += "<tr align=center>";

            //display the month number in col 1 using the loop count variable
            result_year += "<td>" + (count + 1) + "</td>"

            result_year += "<td> $" + yearlyPayment.toFixed(2) + "</td>";

            yearly_interest_rate = balance * yearly_interest;

            // alert(yearly_interest_rate);
            result_year += "<td> $" + yearly_interest_rate.toFixed(2) + "</td>";
            yearly_interest_arr[count] = Number(yearly_interest_rate.toFixed(2));

            yearlyPrincipal = yearlyPayment - yearly_interest_rate;
            result_year += "<td> $" + yearlyPrincipal.toFixed(2) + "</td>";
            yearly_principal_arr[count] = Number(yearlyPrincipal.toFixed(2));

            balance = balance - yearlyPrincipal;
            result_year += "<td> $" + balance.toFixed(2) + "</td>";
            yearly_balance_arr[count] = Number(balance.toFixed(2));

            //end the table row on each iteration of the loop 
            result_year += "</tr>";

            //update the balance for each loop iteration

        }

        //Final piece added to return string before returning it - closes the table
        result_year += "</table>";
    var graph_principal_arr = [];
    var total_principal_arr = 0;

    for (i = 0; i < yearly_principal_arr.length; i++) {
        total_principal_arr = total_principal_arr + yearly_principal_arr[i];

        graph_principal_arr[i] = Number(total_principal_arr.toFixed(2));
        if(i==scroll_year){
                principal_amount=graph_principal_arr[i];
        }
        if(i==scroll_year && scroll_year == 30 ){
            principal_amount = principal;
        }
    }

    var graph_interest_arr = [];
    var total_interest_arr = 0;

    for (i = 0; i < yearly_interest_arr.length; i++) {        
        total_interest_arr = total_interest_arr + yearly_interest_arr[i];

        graph_interest_arr[i] = Number(total_interest_arr.toFixed(2));
        if(i==scroll_year){
            interest_amount=graph_interest_arr[i];
        }
        if(scroll_year ==30 & i == scroll_year){
            interest_amount= graph_interest_arr[i-1]
        }
    }
    var remaining_amount= principal- principal_amount;        
    //returns the concatenated string to the page
    // $('#ammort_year').html(result_year);
     $('#interest_amount').html( formatter.format(interest_amount));
     $('#principal_amount').html(formatter.format(principal_amount));
     $('#remaining_amount').html( formatter.format(remaining_amount));
    //Line chart start
    var chart = Highcharts.chart('container', {
        yAxis: {
            min: 0,
            max: total_interest_arr,
            title: {
                text: ''
            }
        },
        xAxis: {
            min: currentYear,
            max: maxYear,
            plotLines: [{ // mark the weekend
                        color: '#20a7e2',
                        width: 2,value:displayLineYear}],

        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: Number(currentYear)
            }
        },

        series: [{
            name: 'Principal',
            data: graph_principal_arr
        }, {
            name: 'Interest',
            data: graph_interest_arr
        }, {
            name: 'Remaining',
            data: yearly_balance_arr
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    var mortgage_price = price;


            var ajaxurl = "/wp-admin/admin-ajax.php";

    var data = {

        'action': 'mortgage_price_action',
        'price': mortgage_price,
    };

    $.post(ajaxurl, data, function(response) {
        
        $('.mypayheads').html(response);

    });

    $('.total-taxes_value').html("$" + Math.round(month_tax_fee));
    $('.total-home-insurance_value').html("$" + Math.round(month_insurance));
    $('.mortgage-payment-total_value').html("$" + Math.round(principal_interest));


}
$( "#myRange" ).change(function() {
    var mortgage_price = document.getElementById('myRange').value;

            var ajaxurl = "/wp-admin/admin-ajax.php";

    var data = {

        'action': 'mortgage_price_action',
        'price': mortgage_price,
    };

    $.post(ajaxurl, data, function(response) {
        
        $('.mypayheads').html(response);

    });
});
$('a[data-toggle=tab').on('shown.bs.tab', function (e) {

  window.dispatchEvent(new Event('resize'));   
});