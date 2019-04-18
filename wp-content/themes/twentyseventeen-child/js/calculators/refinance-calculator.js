/* Equal input range slider and its input text value */
    window.onload = function() {

        $("#year_started").val('2009');
        $("#demo").val('250000');

        var home_price = document.getElementById('myRange').value;
        home_price = parseInt(home_price.replace(/,/g, ""));

        var out_org_mortgage_payment = document.getElementById('out_org_mortgage_payment').value;
        out_org_mortgage_payment = parseInt(out_org_mortgage_payment.replace(/,/g, ""));

        var out_org_term_mortgage = document.getElementById('out_org_term_mortgage').value;

        var out_org_monthly_int_rate = document.getElementById('out_org_monthly_int_rate').value;
        out_org_monthly_int_rate = parseFloat(out_org_monthly_int_rate.replace(/,/g, ""));

        var out_cashout_amount = document.getElementById('out_cashout_amount').value; 
        out_cashout_amount = parseInt(out_cashout_amount.replace(/,/g, ""));

        var out_closing_costs = document.getElementById('out_closing_costs').value;
        out_closing_costs = parseInt(out_closing_costs.replace(/,/g, ""));

        var out_new_monthly_int_rate = document.getElementById('out_new_monthly_int_rate').value;
        out_new_monthly_int_rate = parseFloat(out_new_monthly_int_rate.replace(/,/g, ""));

        var out_terms_new_loan_months = document.getElementById('out_terms_new_loan_months').value;
        var year_started = document.getElementById('year_started').value;

        var d = new Date();
        var current_year = d.getFullYear();
        var remaining_year = (current_year - year_started) * 12;


        /*******************old monthly mortgage********************************/

        var principal = home_price;

        var monthly_interest = (out_org_monthly_int_rate  / 12) / 100;

        var monthly_term = out_org_term_mortgage * 12;

        var location_tax = 0;

        var insurance = 0;

        var monthly_mort = Math.round((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term)))) + (Number(location_tax) + Number(insurance)) / 12);

        $('#oldMort').html("$" + Math.round(monthly_mort));        

        var out_org_monthly_int_rate = (out_org_monthly_int_rate / 12) / 100;
        var out_new_monthly_int_rate = (out_new_monthly_int_rate / 12) /100;

        out_terms_new_loan_months = out_terms_new_loan_months * 12;
        out_org_term_mortgage = out_org_term_mortgage * 12;

        var Nt = Number(out_org_term_mortgage) - Number(remaining_year); 
        var io = Number(out_org_monthly_int_rate);

        var obt = (monthly_mort * Number(1-Math.pow((1+io),-(Nt))))/io;

        if(!out_cashout_amount){
            out_cashout_amount = 0;
        }

        if(!out_closing_costs){
            out_closing_costs = 0;
        }

        var new_payment = (Number(obt) + Number(out_cashout_amount) + Number(out_closing_costs)) * out_new_monthly_int_rate / (1-Math.pow((1+out_new_monthly_int_rate),-Number(out_terms_new_loan_months)));
                
        $('#newMort').html("$" + Math.round(new_payment));       
        
        var mon_sav = monthly_mort - new_payment;
        $('#total').html("$" + Math.round(mon_sav)+" Per month");

        var breakEven = out_closing_costs / mon_sav;
    }

    var slide_org_mortgage_payment = document.getElementById("org_mortgage_payment");
    var output_out_org_mortgage_payment = document.getElementById("out_org_mortgage_payment");
    output_out_org_mortgage_payment.value = slide_org_mortgage_payment.value;

    slide_org_mortgage_payment.oninput = function() {
        output_out_org_mortgage_payment.value = this.value;
    }

    var slider_cashout_amount = document.getElementById("cashout_amount");
    var output_out_cashout_amount = document.getElementById("out_cashout_amount");
    output_out_cashout_amount.value = slider_cashout_amount.value;

    slider_cashout_amount.oninput = function() {
        output_out_cashout_amount.value = this.value;
    }
    
    //var slider_out_org_term_mortgage = document.getElementById("org_term_mortgage");
    var output_out_org_term_mortgage = document.getElementById("out_org_term_mortgage");
    //output_out_org_term_mortgage.value = slider_out_org_term_mortgage.value;

    // slider_out_org_term_mortgage.oninput = function() {
    //     output_out_org_term_mortgage.value = this.value;
    // }

    var slider_org_monthly_int_rate = document.getElementById("org_monthly_int_rate");
    var output_out_org_monthly_int_rate = document.getElementById("out_org_monthly_int_rate");
    output_out_org_monthly_int_rate.value = slider_org_monthly_int_rate.value;

    slider_org_monthly_int_rate.oninput = function() {
        output_out_org_monthly_int_rate.value = this.value;
    }

    var slider_closing_costs = document.getElementById("closing_costs");
    var output_out_closing_costs = document.getElementById("out_closing_costs");
    output_out_closing_costs.value = slider_closing_costs.value;

    slider_closing_costs.oninput = function() {
        output_out_closing_costs.value = this.value;
    }

    var slider_new_monthly_int_rate = document.getElementById("new_monthly_int_rate");
    var output_out_new_monthly_int_rate = document.getElementById("out_new_monthly_int_rate");
    output_out_new_monthly_int_rate.value = slider_new_monthly_int_rate.value;

    slider_new_monthly_int_rate.oninput = function() {
        output_out_new_monthly_int_rate.value = this.value;
    }

    //var slider_terms_new_loan_months = document.getElementById("terms_new_loan_months");
    var output_out_terms_new_loan_months = document.getElementById("out_terms_new_loan_months");
    //output_out_terms_new_loan_months.value = slider_terms_new_loan_months.value;

    // slider_terms_new_loan_months.oninput = function() {
    //     output_out_terms_new_loan_months.value = this.value;
    // }

    var slider_refinance_terms = document.getElementById("refinance_terms");
    var output_out_refinance_terms = document.getElementById("out_refinance_terms");
    output_out_refinance_terms.value = slider_refinance_terms.value;

    slider_refinance_terms.oninput = function() {
        output_out_refinance_terms.value = this.value;
    }


/* Monthly Mortgage calculation on change of side filters*/

    function refinance_calculator(val) {

        //alert(val);

        var home_price = document.getElementById('myRange').value;
        home_price = parseInt(home_price.replace(/,/g, ""));

        console.log("home_price",home_price);

        var out_org_mortgage_payment = document.getElementById('out_org_mortgage_payment').value;
        out_org_mortgage_payment = parseInt(out_org_mortgage_payment.replace(/,/g, ""));

        console.log("original payment",out_org_mortgage_payment);

        var out_org_term_mortgage = document.getElementById('out_org_term_mortgage').value;
        // out_org_term_mortgage = parseInt(out_org_term_mortgage.replace(/,/g, ""));

        console.log("original month",out_org_term_mortgage);

        var out_org_monthly_int_rate = document.getElementById('out_org_monthly_int_rate').value;
        out_org_monthly_int_rate = parseFloat(out_org_monthly_int_rate.replace(/,/g, ""));

        console.log("original int rate",out_org_monthly_int_rate);
        
        var out_cashout_amount = document.getElementById('out_cashout_amount').value; 
        out_cashout_amount = parseInt(out_cashout_amount.replace(/,/g, ""));

        console.log("cashout",out_cashout_amount);
        
        var out_closing_costs = document.getElementById('out_closing_costs').value;
        out_closing_costs = parseInt(out_closing_costs.replace(/,/g, ""));

        console.log("closing",out_closing_costs);

        var out_new_monthly_int_rate = document.getElementById('out_new_monthly_int_rate').value;
        out_new_monthly_int_rate = parseFloat(out_new_monthly_int_rate.replace(/,/g, ""));

        console.log("new int rate",out_new_monthly_int_rate);

        var out_terms_new_loan_months = document.getElementById('out_terms_new_loan_months').value;
        // out_terms_new_loan_months = parseInt(out_terms_new_loan_months.replace(/,/g, ""));

        console.log("new months",out_terms_new_loan_months);

        var year_started = document.getElementById('year_started').value;

        var d = new Date();
        var current_year = d.getFullYear();
        var remaining_year = (current_year - year_started) * 12;


        /*******************old monthly mortgage********************************/

        var principal = home_price;

        var monthly_interest = (out_org_monthly_int_rate  / 12) / 100;

        var monthly_term = out_org_term_mortgage * 12;

        var location_tax = 0;

        var insurance = 0;

        var monthly_mort = Math.round((Number(principal) * Number(monthly_interest)) / (1 - (Math.pow((1 + Number(monthly_interest)), -Number(monthly_term)))) + (Number(location_tax) + Number(insurance)) / 12);

        $('#oldMort').html("$" + Math.round(monthly_mort));        

        var out_org_monthly_int_rate = (out_org_monthly_int_rate / 12) / 100;
        var out_new_monthly_int_rate = (out_new_monthly_int_rate / 12) /100;

        // console.log("out_org_monthly_int_rate",out_org_monthly_int_rate);
        // console.log("out_new_monthly_int_rate",out_new_monthly_int_rate);

        out_terms_new_loan_months = out_terms_new_loan_months * 12;
        out_org_term_mortgage = out_org_term_mortgage * 12;

        console.log("out_terms_new_loan_months",out_terms_new_loan_months);
        console.log("out_org_term_mortgage",out_org_term_mortgage);

        var Nt = Number(out_org_term_mortgage) - Number(remaining_year); 
        //var Nt = Number(out_org_term_mortgage)- Number(t); 
        var io = Number(out_org_monthly_int_rate);
        
        console.log("Nt",Nt);

        var obt = (monthly_mort * Number(1-Math.pow((1+io),-(Nt))))/io;

        console.log("obt",obt);

       // New payment, P = (OBt + CO  + CC)*in/(1-(1+in)-T]
        //Where Outstanding Balance after t months, OBt  = M*[1-(1+io)-(N-t)]/io

      
        //console.log("ob",obt);

        if(!out_cashout_amount){
            out_cashout_amount = 0;
        }

        if(!out_closing_costs){
            out_closing_costs = 0;
        }

        var new_payment = (Number(obt) + Number(out_cashout_amount) + Number(out_closing_costs)) * out_new_monthly_int_rate / (1-Math.pow((1+out_new_monthly_int_rate),-Number(out_terms_new_loan_months)));
                
        $('#newMort').html("$" + Math.round(new_payment));       
        
        var mon_sav = monthly_mort - new_payment;
        //console.log("Monthly saving",mon_sav);

       // mon_sav = mon_sav * -1;
        
        //document.getElementById("#total").innerHtml("$"+mon_sav);
        $('#total').html("$" + Math.round(mon_sav)+" Per month");

        var breakEven = out_closing_costs / mon_sav;

        console.log("breakEven",breakEven);

        //$('.mortgage-payment-total_value').html("$" + Math.round(obt));


        // //var outstanding_balance = ((out_org_mortgage_payment)*[1-(Math.pow(-(out_org_monthly_int_rate, out_org_ref_minus)))]);
        // var outstanding_balance = Math.round(Math.round(out_org_mortgage_payment)*[1-Math.pow(out_org_monthly_int_rate,-out_org_ref_minus)])/out_org_monthly_int_rate;
        // //console.log("sett",outstanding_balance);
        // var new_payment = ((parseInt(outstanding_balance)+parseInt(out_cashout_amount)+parseInt(out_closing_costs))*out_new_monthly_int_rate)/(1-(out_org_monthly_int_rate-out_terms_new_loan_months));
        // var monthly_saving = out_org_mortgage_payment-new_payment;
        // var break_even_price = out_closing_costs/monthly_saving;
      
        // console.log("outstanding_balance",outstanding_balance); 
        // console.log("new_payment",new_payment);
        // console.log("monthly_saving",monthly_saving);

        // return;

        // var ajaxurl = "/wp-admin/admin-ajax.php";

        // var data = {
        //     'action': 'mortgage_cal',
        //     'price': price,
        //     'downpay': downpay,
        //     'interest': interest,
        //     'home_ins': insurance,
        //     'home_assoc': home_assoc,
        //     'loc_tax': location_tax,
        //     'loan_term': loan_term,
        //     'monthly_mort': monthly_mort

        // };

        // $.post(ajaxurl, data, function(response) {
           
        // });


        //doughnut chart
        
    }

/* Load the citylist on key of location input */

    $('#location').keyup(function() {

        var location = $(this).val(); 

        var ajaxurl = "/wp-admin/admin-ajax.php";

        var data = {

            'action': 'mortgage_cal',
            'location': location,

        };

        $.post(ajaxurl, data, function(response) {
            $('.location').html(response);
        });
    });

    //location_tax
    jQuery('body').on('click', '#my_city', function(e) {
        e.preventDefault();
        var justify = jQuery(this).html();
        document.getElementById('location').value = justify;
        jQuery('.cities_popup').hide();


        var location = document.getElementById('location').value;
        // var location_tax = document.getElementById('location_tax').value;

        var ajaxurl = "/wp-admin/admin-ajax.php";

        var data = {
            'action': 'load_tax',
            'location': location,
            'justify': justify
        };

        $.post(ajaxurl, data, function(response) {
            document.getElementById('demo4').value = response;
            // alert(response);
        });
    });

    //location insurance
    jQuery('body').on('click', '#my_city', function(e) {
        e.preventDefault();
        var justify = jQuery(this).html();
        document.getElementById('location').value = justify;
        jQuery('.cities_popup').hide();


        var location = document.getElementById('location').value;
        var location_ins = document.getElementById('demo5').value;

        var price_home = document.getElementById('demo').value;
        price_home = price_home.replace(/,/g, "");


        var ajaxurl = "/wp-admin/admin-ajax.php";
        var data = {
            'action': 'load_ins',
            'loc_tax': location_ins,
            'location': location,
            'price': price_home,
            'justify': justify
        };

        $.post(ajaxurl, data, function(response) {
            var insurance_rate = response;
            // alert(response);

            var insurance_state = parseInt((price_home / 100) * insurance_rate);
            // console.log(insurance_state)
            document.getElementById('demo5').value = insurance_state;

        });
    });