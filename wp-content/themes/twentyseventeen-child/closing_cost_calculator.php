<?php /*Template name: closing cost calculator */
get_header('social');?>

<section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
	<div class="container">
		<div class="innerTopBG">
			<h1 class="innerPgTitle">Closing Cost Calculator</h1>
		</div>
		<div class="row">
			<div class="col-sm-3 rightBR">
				<div class="sidebar_Filter">
					<div class="form-group">
                        <div class="loc-sec">
                            <label>Location</label> 
                                <input class="form-control" placeholder="Location" id="location" onchange="cc_calculator(this.value);" type="text">
                                <div class="location">
                                            
                                </div>
                        </div>
                        <hr>
                        <label>Home Price</label> 
                        <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                        </a>
                        <div class="slidecontainer">
                          <input min="50000" max="2500000" value="250000" step="10000" handle="square" class="slider slider1" id="myRange" onchange="cc_calculator(this.value);" oninput="demo.value=myRange.value" type="range">
                        </div>
                         <p class="price-figure"><span class="dollar">$</span><input class="cmn_input comma_input" id="demo" oninput="myRange.value=demo.value" onchange="cc_calculator(this.value);" type="text">
                        </p>
                        <hr> 
                        <label>Down Payment</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
						 	<input min="1000" max="1000000" value="50000" step="1000" class="slider slider2" id="myRange2" onchange="cc_calculator(this.value);" oninput="demo2.value=myRange2.value" type="range">
						</div>
						<p class="price-figure"><span class="dollar">$</span>
						  	<input class="cmn_input comma_input" id="demo2" oninput="myRange2.value=demo2.value" onchange="cc_calculator(this.value);" type="text">
						</p>
						<hr>
						<label>Interest Rate</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info" data-original-title="">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
						  	<input min="1" max="12" value="6.375" class="slider slider3" id="myRange3" onchange="cc_calculator(this.value);" oninput="demo3.value=myRange3.value" step="0.01" type="range">
						</div><!--sidebar-->
						<p class="price-figure">
							<input class="cmn_input" id="demo3" oninput="myRange3.value=demo3.value" onchange="cc_calculator(this.value);" type="text">
							<span class="percent">%</span>
						</p>
						<hr>
					<div class="show-left">
                        <div class="show_advance_view_acc col-sm-10 col-sm-offset-1">
							<div class="panel panel-default">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false" aria-controls="collapseOne">Loan-related Fees</a>
								</h4>
								<div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
									<div class="panel-body">

										<label>Appraisal</label>	                           
										<p class="price-figure"><span class="dollar">$</span>
										<input class="cmn_input" id="appraisal" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Credit Report </label>
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="credit_report" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Loan Origination Fee</label>		                            
										<p class="price-figure">
											<input class="cmn_input" id="loan_org_fee" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Loan Origination Points</label>	                            
										<p class="price-figure">
											<input class="cmn_input" id="loan_org_point" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Prepaid Interest</label>
											<p class="price-figure"><span class="dollar">$</span>
												<input class="cmn_input" id="pre_interest" value="" onchange="cc_calculator(this.value);" type="text">
											</p>
										<hr>									
									</div>
								</div>
							</div>

							<!-- property related fees -->
							<div class="panel panel-default">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed"> Property-related Fees</a>
								</h4>
								<div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
									<div class="panel-body">
										<label>Attorney</label>	                           
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="attorny" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Home Inspection</label>
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="home_insp" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Termite and Pest Inspection</label>		                            
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="ter_pest_insp" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
									</div>
								</div>
							</div>

							<!-- Taxes and Insurance Fees Section -->
							<div class="panel panel-default">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">Taxes and Insurance Fees </a>
								</h4>
								<div id="collapseFour" class="panel-collapse collapse" style="height: 0px;">
									<div class="panel-body">
										<label>Homeowner Insurance</label>	                           
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="home_insurance" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Prepaid Property Taxes</label>
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="pre_prop_tax" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
									</div>
								</div>
							</div>

							<!-- Title and Escrow Fees Section -->
							<div class="panel panel-default">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">Title and Escrow Fees</a>
								</h4>
								<div id="collapseFive" class="panel-collapse collapse" style="height: 0px;">
									<div class="panel-body">
										<label>Escrow</label>	                           
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="escrow" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Flood Certification</label>
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="flood_cert" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Title Insurance</label>	                           
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="title_insurance" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
										<label>Title Search and Survey</label>
										<p class="price-figure"><span class="dollar">$</span>
											<input class="cmn_input" id="title_serach_surv" value="" onchange="cc_calculator(this.value);" type="text">
										</p>
										<hr>
									</div>
								</div>
							</div>  
                        </div>
					 </div>
					</div> 
				</div>
			</div>
			<div class="col-sm-6 rightBR">
                <div class="payment_head">
                     <div class="mypayheads">

                        <!-- <h2>Loan related fees</h2>
                        <p id="loan_rel_fees" style="color: #214496;"></p>

                        <h2>Property related fees</h2>
                        <p id="pro_rel_fees" style="color: #214496;"></p>

                        <h2>Taxes and Insurance fees</h2>
                        <p id="tax_insu_fees" style="color: #214496;"></p>

                        <h2>Title and Escrow fees</h2>
                        <p id="title_escw_fee" style="color: #214496;"></p> -->

                        <h2>Estimated Total Cost</h2>
                        <p id="total_cost" style="color: #214496;"></p>
                    </div> 

					<div class="row">
						<div class="col-sm-3">
							<div class="monthly-pie-label left_side_margin"> 
								<div class="monthly-pie-label-title">Title and Escrow fees</div> 
								<span class="title_escrow_fees pie_chart_val" style="color:#214496"></span>  
							</div>

							<div class="monthly-pie-label left_side_margin"> 
								<div class="monthly-pie-label-title">Property related fees</div> 
								<span class="property_rel_fees pie_chart_val" style="color:#6495ED"></span> 
							</div>

						</div>
						
						<div class="col-sm-6">
							<div id="chartContainerClosingCost" style="height: 300px; width: 100%;"></div>	
						</div>
						<div class="col-sm-3">

							<div class="monthly-pie-label right_side_margin"> 
								<div class="monthly-pie-label-title"> Taxes and Insurance fees </div> 
								<span class="taxes_and_insurance_fees pie_chart_val" style="color:#ffb900"></span> 
							</div>

							<div class="monthly-pie-label right_side_margin"> 
								<div class="monthly-pie-label-title">Loan related fees</div> 
								<span class="loan_rel_fees pie_chart_val" style="color:#26abe2"></span> 
							</div>

							<!-- <div class="monthly-pie-label  right_side_margin"> 
								<div class="monthly-pie-label-title">Estimated Closing Cost</div> 
								<span class="estimated_closing_cost pie_chart_val" style="color:#ffb900"></span> 
							</div> -->

						</div>
						<hr>
						
                        <!-- loan related fees section -->
						

					</div>
                </div>
            </div>
            <div class="col-sm-3">
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
        							'post_type' => 'post',
                                        'hide_empty'               => FALSE,    
                                        'exclude'                  =>array(1,3,4,5,6) // desire id
                                    );
                                    wp_list_categories($args);
                                ?>

                            </ul>

                        </div>
                    </div>
                </div>
		</div>
	</div><!--container-->
</section>
<?php get_footer('blog');?>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/calculators/closing-cost.js"></script>