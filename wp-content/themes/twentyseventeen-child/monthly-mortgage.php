<?php 
/*
Template Name: monthly-mortgage
*/
get_header('social'); ?>
<!--banner section-->
<section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
	<div class="container">
		<div class="innerTopBG">
			<h1 class="innerPgTitle">Monthly Mortgage Calculator</h1>
		</div>

		<div class="row">
			<div class="col-sm-3 rightBR leftdivs">
				<div class="sidebar_Filter">
						<div class="form-group">
	              			<div class="loc-sec">
								<label>Location</label> 
									<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
										<i class="fa fa-question-circle" aria-hidden="true"></i>
									</a>
									<input type="text" class="form-control" placeholder="Location" id="location" onchange="mon_mortage(this.value);">
										<input type="hidden" id="hidden_loc">
								<div class="location">								
								</div>
							</div>
							<hr>		       
							<label>Home Price</label> 
							<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
								<i class="fa fa-question-circle" aria-hidden="true"></i>
							</a>
							<div class="slidecontainer">
							  <input type="range" min="50000" max="2500000" value="250000" step="10000"  handle="square"  class="slider slider1" id="myRange" onchange="mon_mortage(this.value);" oninput="demo.value=myRange.value">
							  </div>
							 <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo" oninput="myRange.value=demo.value" onchange="mon_mortage(this.value);" ></input>
							</p>

							<hr>
							<label>Down Payment</label> 
							<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
								<i class="fa fa-question-circle" aria-hidden="true"></i>
							</a>
							<div class="slidecontainer">
							 	<input type="range" min="1000" max="1000000" value="50000" step="1000" class="slider slider2" id="myRange2" onchange="mon_mortage(this.value);" oninput="demo2.value=myRange2.value" >
							</div>
							<p class="price-figure"><span class="dollar">$</span>
							  	<input type="text" class="cmn_input comma_input" id="demo2" oninput="myRange2.value=demo2.value" onchange="mon_mortage(this.value);"></input>
							</p>
							<span class="alert-message" id="downpaymentAlert"></span>
							<hr>
							<label>Mortgage Interest Rate</label> 
							<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
								<i class="fa fa-question-circle" aria-hidden="true"></i>
							</a>
							<div class="slidecontainer">
							  	<input type="range" min="1" max="12" value="6.375" class="slider slider3" id="myRange3" onchange="mon_mortage(this.value);" oninput="demo3.value=myRange3.value" step="0.01">
							</div><!--sidebar-->
							<p class="price-figure">
								<input type="text" class="cmn_input" id="demo3" oninput="myRange3.value=demo3.value" onchange="mon_mortage(this.value);"></input>
								<span class="percent">%</span>
							</p>
						<hr>
						<label>Loan Term</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<select class="form-control" id="loan_term" onchange="mon_mortage(this.value);">
							<option value="15">15-Year Fixed</option>
							<option value="30" selected="selected">30-Year Fixed</option> 
						</select>
						
					</div> <hr>
					<div class="show_advance_view_acc">
						<div class="panel-group" id="accordion1" role="tablist1" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									 <h4 class="panel-title">
										 <a data-toggle="collapse" data-parent="#accordion" href="#showAdvanceView" aria-expanded="true" aria-controls="collapseOne">
											 Show Advanced View
										 </a>
									</h4>
								</div>
								<div id="showAdvanceView" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
						

						<label>Property Tax Rate</label> 
						<input type="range" min="0" max="5" value="0.96" class="slider slider4" id="myRange4" onchange="mon_mortage(this.value);" oninput="demo4.value=myRange4.value" step="0.01" >
						<p class="price-figure"><input type="text" class="cmn_input" id="demo4" oninput="myRange4.value=demo4.value" onchange="mon_mortage(this.value);"></input><span class="percent">%</span>
						</p>


						
										<div class="form-group">
											<label>Homeowner Insurance</label> 
											<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
												<i class="fa fa-question-circle" aria-hidden="true"></i>
											</a>
											<div class="slidecontainer">
											  <input type="range" min="0" max="15000" value="1200" step="100" class="slider slider5" id="myRange5" onchange="mon_mortage(this.value);" oninput="demo5.value=myRange5.value">
											  </div>
												<p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo5" oninput="myRange5.value=myRange5.value" onchange="mon_mortage(this.value);"></input>
												</p>
												<!-- <input type="text" class="form-control" placeholder="insurance" id="myRange4" onchange="mon_mortage(this.value);"> -->
												<hr>
												<label>Homeowner Association(HOA)</label> 
												<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
													<i class="fa fa-question-circle" aria-hidden="true"></i>
												</a>
												<div class="slidecontainer">
											  		<input type="range" min="0" max="15000" value="0" step="100" class="slider slider6" id="myRange6" onchange="mon_mortage(this.value);" oninput="demo6.value=myRange6.value">
											  	</div>
												<p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo6" oninput="myRange6.value=demo6.value"  onchange="mon_mortage(this.value);"></input>
												</p>
																
									
										</div>
									</div>

								</div>
							</div>
								<?php if ( is_user_logged_in() ) { ?> 
											<a class="btn btn-primary btn-common" id="report">Report View</a>
											<?php } else { ?>
											<a class="btn btn-primary btn-common lrm-login" id="reportss">Report View</a>
											<?php } ?>
											<?php if ( is_user_logged_in() ) { ?>
											<button type="button" class="btn btn-primary btn-common" id="save_cal" >Save Calculation</button>
											<?php } else { ?>

										<a href="#" class="btn btn-primary btn-common lrm-login" id="save_cals">Save Calculation</a>
											
											<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 rightBR rightdivs">
				<div class="monthly_payment_calaculation" id="monthly_payment_calaculation">
					<div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" id="monthh" role="tab" data-toggle="tab">Monthly Payment</a></li>
                                        <li role="presentation"><a href="#profile" id="amori" aria-controls="profile" role="tab" data-toggle="tab">Amortization</a></li>
                                    </ul>
                                  
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">

                                        <div class="payment_head">
                                        <h2>Total Monthly Mortgage Payment</h2>
                                        <h2><div id="total" style="color: #214496;"></div></h2>
                                         <div class="mypayheads">
                                         </div>
                                         </div>

                                        	<div class="row">
                                        	   <div class="col-sm-3">
	                                        	   	<div class="monthly-pie-label total-taxes"> 
		                                        	   	<div class="monthly-pie-label-title">Taxes &amp;<br>Other Fees
		                                        	   	</div> 

		                                        	   	<span class="total-taxes_value"></span> 
		                                        	</div>
	                                        	   	<div class="monthly-pie-label total-home-insurance"> 
		                                        	   	<div class="monthly-pie-label-title">Home<br>Insurance
		                                        	   	</div> 
		                                        	   	<span class="total-home-insurance_value"></sp
		                                        	   	an> 
	                                        	   	</div>
                                        	   </div>
		                                       
                                        	   <div class="col-sm-6">
		                                        	<div id="chartContainer2" style="height: 300px; width: 100%;">
		                                        	</div>
		                                        	  
		                                        </div>
		                                        <div class="col-sm-3">
		                                        	<div class="monthly-pie-label mortgage-payment-total"> 
			                                        	<div class="monthly-pie-label-title">Mortgage<br>Payment (P&amp;I)
			                                        	</div> 
			                                        	<span class="mortgage-payment-total_value"></span> 
		                                        	</div>
		                                       </div>
                                        	</div>

									    </div>
									           
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="container col-sm-12">
		                                        	<div class="col-sm-3">
		                                        		<label>Years (<span id="years"></span>)</label>	
		                                        	</div>
		                                        	<div class="col-sm-8">
		                                        		<input type="range" min="0" max="30" handle="square" class="slider slider1" id="rangeyearss" value="0" onchange="mon_mortage(this.value);" oninput="rangeyearss.value=rangeyearss.value">		
		                                        	</div>
		                                        	
		                                        </div>
                                       	<table class="mortgage-calc-details-table"> 
                                       		<tbody> 
                                       			<tr class="remaining-mortgage-balance"> 
                                       				<td><span class="legend sm bg-orange"></span></td> 
                                       				<td> Remaining Mortgage Balance </td> 
                                       				<td><span id="remaining_amount"></span></td> 
                                       			</tr> 
                                       		</tbody> 
                                       		<tbody> 
                                       			 <tr class="principal-paid"> 
                                       			 	<td><span class="legend sm bg-medium-green"></span></td> 
                                       			 	<td> Principal Paid </td> 
                                       			 	<td><span id="principal_amount"></span></td> 
                                       			 </tr> 
                                       		</tbody> 
                                       		<tbody>
                                       		 	<tr class="interest-paid"> 
                                       		 		<td><span class="legend sm bg-blue"></span></td>
                                       		 		<td> Interest Paid </td> 
                                       		 		<td><span id="interest_amount"></span></td> 
                                       		 	</tr> 
                                       		 </tbody> 
                                       	</table>
										<div class="payment_head">
                                         <h2>Mortgage Timeline</h2>
                                         </div>
                                        	<div class="line_chart">
		                                        <div id="container" style="height: 400px; min-width: 310px"></div>
		                                        <div id="drag"></div>
												<div id="drop"></div>
		                                    </div>

                                        </div>   
                                    </div>
                                    <button id="amortize-click">Show Payment Schedule</button>
					</div>
					<hr>
					
					<div id="amortize-click-div" style="display:none;">
					<div id="ammort_table">
					</div>
					</div>
					<div class="share_link">
						<ul>
							<li>
								<a href="#" class=""> <i class="fa fa-facebook facebook"></i></a>
							</li>
							<li>
								<a href="#" class=""> <i class="fa fa-twitter twitter"></i> </a>
							</li>
							<li>
								<a href="#" class=""> <i class="fa fa-google-plus google-plus"></i> </a>
							</li>
							<li>
								<a href="#" class=""> <i class="fa fa-linkedin linkedin"></i> </a>
							</li>
						</ul>
					</div>
					<div class="FAQ_acc">
						<label>FAQ</label>
						<div class="panel-group" id="accordion2" role="tablist2" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									 <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									 <h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
								  Lorem ipsum dolor sit amet?
								</a>
							  </h4>

								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>
								</div>
							</div>  
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 lastsdiv">
				<div class="latestNewsCate">
					<div class="infoContent">
						<h6>TIPS & GUIDES</h6>
						<?php dynamic_sidebar( 'custom-side-bar15' ); ?>
					</div>
				</div>
				<div class="latestNewsCate">
					<div class="infoContent">
						<h6>categories</h6>
						<ul class="categoriesList">
						<?php 
						$args = array(  
							'post_type'   => 'post',
						    'hide_empty'  => FALSE,    
						    'exclude'     => array(1,3,4,5,6) // desire id
						);
						wp_list_categories($args);
						?>
						
						</ul>
					
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>          

<!--/********************* For PDF Generate******************************/-->
 
       <div id="img-out" style="opacity:0;height:150px;display:none">
                                   <div id="img-outme">
 
                                      <div id="first_iamge_one">

                                      </div> 	
                                     <div id="first_iamge_two">
                                        <div class="payment_head">
                                         <h2 style="text-align:left; margin-left:65px;">Mortgage Timeline</h2>
                                         
                                         </div>
                                    </div>
                                    </div>  
                                       <div id="ammort_tablethr">
                                    </div> 
                                  
                                    </div>


					<div id="ammort_table">
					</div>
					<div id="ammort_year">
					</div>
        </div>
			<!--   <div class = "ui-widget">
         <p>Type "a" or "s"</p>
         <label for = "automplete-6">Tags: </label>
         <input id = "automplete-6">
      </div> -->

<!--/*********************For PDF Generate******************************/-->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script>

   jQuery("#amortize-click").click(function(){ 
        jQuery("#amortize-click-div").toggle();
    });

</script>
<script>


/*====**************************Report PDF genetrator**********************====*/
EXPORT_WIDTH = 600;

function save_chart(chart) {
    var render_width = EXPORT_WIDTH;
    var render_height = render_width * chart.chartHeight / chart.chartWidth

    // Get the cart's SVG code
    var svg = chart.getSVG({
        exporting: {
            sourceWidth: chart.chartWidth,
            sourceHeight: chart.chartHeight
        }
    });
     // 8208902085 8253 otp:5066
    // Create a canvas
    var canvas = document.createElement('canvas');
    canvas.height = render_height;
    canvas.width = render_width;

    jQuery("#first_iamge_two").append(canvas);
    // Create an image and draw the SVG onto the canvas
    var image = new Image;
    jQuery('#img-out').css('display','block');
    image.onload = function() {
        canvas.getContext('2d').drawImage(this, 0, 0, render_width, render_height);
    };
    image.src = 'data:image/svg+xml;base64,' + window.btoa(svg);
}
   jQuery("#report").click(function() {
   	// jQuery("#img-out").empty();
   	save_chart(jQuery('#container').highcharts());
   	/***clone data table***/
   	var mylayer=jQuery('#ammort_table').clone();
     jQuery('#ammort_tablethr').html(mylayer);

         html2canvas(jQuery("#home"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                 jQuery("#first_iamge_one").append(canvas);
                  // jQuery("#img-out").append(canvas);
             }
      });
        html2canvas(jQuery("#img-outme"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                var imgData    = canvas.toDataURL("image/png"); 
                 var img3    = jQuery('#ammort_tablethr')[0];
                 var options = {
                  pagesplit: true
                 };
                  var elementHandler = {
      '#ignorePDF': function(element, renderer) {
        return true;
      }
    };
                // Clean up 
                 var pdf = new jsPDF('p', 'pt', 'letter');
                 pdf.addImage(imgData, 'JPEG', 0, 0,590,500);
                 pdf.addPage();
                 pdf.fromHTML(img3, 15, 15, {
      'width': 950,
      'elementHandlers': elementHandler
    });
                  // pdf.cell(1,10,40,20,cell,i); 
                  // pdf.document.write(mylayer);
				  pdf.save("monthly-mortage.pdf");

          }
        });
    });

/*====**************************Report PDF genetrator end**********************====*/

</script>


<script>
/**********************************save data************************************/
   jQuery("#save_cal").click(function() {
    var price = document.getElementById('myRange').value;
    var downpay = document.getElementById('myRange2').value;
    var interest = document.getElementById('myRange3').value;
    var location_tax_rate = document.getElementById('myRange4').value;

    var insurance = document.getElementById('myRange5').value;
    var location = document.getElementById('location').value;
    var home_assoc_fee = document.getElementById('myRange6').value;
    var loan_term = document.getElementById('loan_term').value;
         jQuery.ajax({
     type: "POST",
       dataType : "json",  
       url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
			data:{
			action :'save_mortage',
			'price': price, 'downpay': downpay,'interest': interest, 'location_tax_rate': location_tax_rate, 'insurance': insurance,
            'location': location, 'home_assoc_fee': home_assoc_fee,'loan_term': loan_term},
			success: function(data) {
			// alert(data);
			}
});

     


});


/**********************************save end************************************/
</script>


<?php get_footer('blog'); ?>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https:/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/calculators/monthly-mortage.js"></script>
