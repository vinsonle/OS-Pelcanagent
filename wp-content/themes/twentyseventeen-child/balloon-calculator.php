<?php 
/*
Template Name: ballon-calculator
*/
get_header('social'); ?>
<!--banner section-->
<section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
	<div class="container">
		<div class="innerTopBG">
			<h1 class="innerPgTitle">Balloon Calculator</h1>
		</div>
		<div class="row">
			<div class="col-sm-3 rightBR">
				<div class="sidebar_Filter">
					<div class="form-group">

					<label>Home Price</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
						  <input type="range" min="1000" max="10000000" value="50000" class="slider slider2" id="org_mortgage_payment" onchange="balloon_calculator(this.value);" oninput="out_org_mortgage_payment.value=org_mortgage_payment.value" step="1">
						  </div>
						  <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="out_org_mortgage_payment" oninput="org_mortgage_payment.value=out_org_mortgage_payment.value" onchange="balloon_calculator(this.value);"></input>
						</p>
						<hr>


						<label>Down Payment</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
						  <input type="range" min="1000" max="10000000" value="50000" class="slider slider2" id="down_payment_slider" onchange="balloon_calculator(this.value);" oninput="down_payment.value=down_payment_slider.value" step="1">
						  </div>
						  <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="down_payment" oninput="down_payment_slider.value=down_payment.value" onchange="balloon_calculator(this.value);"></input>
						</p>
						<span class="alert-message" id="downpaymentAlert"></span>
						<hr>

						<label>Interest Rate</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
						  <input type="range" min="1" max="12" value="6.375" class="slider slider3" id="org_monthly_int_rate" onchange="balloon_calculator(this.value);" oninput="out_org_monthly_int_rate.value=org_monthly_int_rate.value" step="0.01">
						  </div>
						<p class="price-figure">
							<input type="text" class="cmn_input" id="out_org_monthly_int_rate"></input>
							<span class="percent" oninput="org_monthly_int_rate.value=out_org_monthly_int_rate.value" onchange="balloon_calculator(this.value);">%</span>
						</p>

						<hr>


						<label>Loan Term (0-30 value)</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
						  <input type="range" min="1" max="30" value="1" class="slider slider1" id="org_term_mortgage" onchange="balloon_calculator(this.value);" oninput="out_org_term_mortgage.value=org_term_mortgage.value" step="1">
						  </div>
						 <p class="price-figure"><input type="text" class="cmn_input" id="out_org_term_mortgage" oninput="org_term_mortgage.value=out_org_term_mortgage.value" onchange="balloon_calculator(this.value);" ></input>
						</p>
						<hr>

						
						<label>Year Balloon Payment Due (1-30)</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
							  <input type="range" min="1" max="30" value="1" class="slider slider1" id="refinance_terms" onchange="balloon_calculator(this.value);" oninput="out_refinance_terms.value=refinance_terms.value" >
							  </div>
							 <p class="price-figure"><input type="text" class="cmn_input" id="out_refinance_terms" oninput="refinance_terms.value=out_refinance_terms.value" onchange="balloon_calculator(this.value);" ></input>
													</p>
													<hr>
								<a class="btn btn-primary btn-common" id="report">report</a>
								<?php if ( is_user_logged_in() ) { ?>
								<button type="button" class="btn btn-primary btn-common" id="save_cal" >save calculation</button>
								<?php } else { ?>

							<a href="/log-in/" class="btn btn-primary btn-common" id="save_cal">save calculation</a>
								
								<?php } ?>
						
					</div>
					 
				</div>
			</div>
			<div class="col-sm-6 rightBR">
				<div class="monthly_payment_calaculation">
					<div class="card">

	                    <div class="tab-content"> 
	                    <h2>Balloon Payment</h2>
	                    <p id="total-taxes_value" style="font-size: 20px; color: #214496;"></p>

	                     <h2>Sum of monthly payments</h2>
	                    <p id="sum_mon_pay" style="font-size: 20px; color: #214496;"></p>

	                    <h2>Total Payments</h2>
	                    <p id="total_pay" style="font-size: 20px; color: #214496;"></p>

	                    <h2>Principle</h2>
	                    <p id="principle" style="font-size: 20px; color: #214496;"></p>

	                    <h2>Interest</h2>
	                    <p id="int" style="font-size: 20px; color: #214496;"></p>

                    </div>
                </div>
					<hr>
					<div id="ammort_table">
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
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
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
						    'hide_empty' => FALSE,    
						    'exclude'   =>array(1,3,4,5,6) // desire id
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
<!-- / banner section-->


<?php get_footer('blog'); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/calculators/ballon-calculator.js"></script>
