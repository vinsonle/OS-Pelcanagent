<?php 
/*
Template Name: monthly-mortgage
*/
get_header('social'); ?>
<!--banner section-->
<section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
	<div class="container">
		<div class="innerTopBG">
			<h1 class="innerPgTitle">Affordability Calculator</h1>
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
  <input type="range" min="10000" max="10000000" value="250000" class="slider slider1" id="myRange" onchange="mon_mortage(this.value);" oninput="demo.value=myRange.value" >
  </div>
 <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="demo" oninput="myRange.value=demo.value" onchange="mon_mortage(this.value);" ></input>
						</p>

						<hr>
						<label>Down Payment</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
  <input type="range" min="1000" max="1000000" value="50000" class="slider slider2" id="myRange2" onchange="mon_mortage(this.value);" oninput="demo2.value=myRange2.value" >
  </div>
  <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="demo2" oninput="myRange2.value=demo2.value" onchange="mon_mortage(this.value);"></input>
						</p>
						<hr>
						<label>Mortgage Interest Rate</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<div class="slidecontainer">
  <input type="range" min="1" max="12" value="6.375" class="slider slider3" id="myRange3" onchange="mon_mortage(this.value);" oninput="demo3.value=myRange3.value" step="0.01">
  </div>
						<p class="price-figure">
							<input type="text" class="cmn_input" id="demo3"></input>
							<span class="percent" oninput="myRange3.value=demo3.value" onchange="mon_mortage(this.value);">%</span>
						</p>
						<hr>
						<label>Loan Term</label> 
						<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
							<i class="fa fa-question-circle" aria-hidden="true"></i>
						</a>
						<select class="form-control" id="loan_term" onchange="mon_mortage(this.value);">
							<option value="15">15</option>
							<option value="18">18</option> 
							<option value="30">30</option> 
						</select>
						
					</div>
					<div class="show_advance_view_acc">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									 <h4 class="panel-title">
										 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											 Show Advance View
										 </a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
									<div class="loc-sec">
										<label>Location</label> 
										<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
											<i class="fa fa-question-circle" aria-hidden="true"></i>
										</a>
										<input type="text" class="form-control" placeholder="Location" id="location" onchange="mon_mortage(this.value);">
										<div class="location">
											
										</div>
									</div>
									<hr>

						<label>Annual tax rate</label> 
						<input type="range" min="0" max="15" value="0.96" class="slider slider4" id="myRange4" onchange="mon_mortage(this.value);" oninput="demo4.value=myRange4.value" step="0.01" >
						<p class="price-figure"><input type="text" class="cmn_input" id="demo4" oninput="myRange4.value=demo4.value" onchange="mon_mortage(this.value);"></input><span class="percent">%</span>
						</p>


						
										<div class="form-group">
											<label>Homeowner Insurance</label> 
											<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
												<i class="fa fa-question-circle" aria-hidden="true"></i>
											</a>
											<div class="slidecontainer">
											  <input type="range" min="0" max="15000" value="1200" class="slider slider5" id="myRange5" onchange="mon_mortage(this.value);" oninput="demo5.value=myRange5.value">
											  </div>
												<p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="demo5" oninput="myRange5.value=myRange5.value" onchange="mon_mortage(this.value);"></input>
												</p>
												<!-- <input type="text" class="form-control" placeholder="insurance" id="myRange4" onchange="mon_mortage(this.value);"> -->
												<hr>
												<label>Homeowner Association(HOA)</label> 
												<a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
													<i class="fa fa-question-circle" aria-hidden="true"></i>
												</a>
												<div class="slidecontainer">
											  		<input type="range" min="0" max="15000" value="0" class="slider slider6" id="myRange6" onchange="mon_mortage(this.value);" oninput="demo6.value=myRange6.value">
											  	</div>
												<p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="demo6" oninput="myRange6.value=demo6.value"  onchange="mon_mortage(this.value);"></input>
												</p>
																	<hr>
											<a class="btn btn-primary btn-common" id="report">report</a>
											<button type="button" class="btn btn-primary btn-common">save calculation</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 rightBR">
				<div class="monthly_payment_calaculation">
					<div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Monthly Payment</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Amortization</a></li>
                                    </ul>
                                    <div id="img-out">
                                    	
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                        	<div id="chartContainer2" style="height: 300px; width: 100%;">
                                        		
                                        	</div>

									                                            </div>
                                        <div role="tabpanel" class="tab-pane" id="profile">

                                        	<div class="line_chart">
		                                        <div id="container"></div>
		                                    </div>

                                        </div>
                                        
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
	</div>
</section>
<div class="innerTopBG" id="hidden_report">
			<h1 class="innerPgTitle">Affordability Calculator</h1>
		</div>
		<div class="row">
			<div class="col-sm-8 rightBR">

				<div class="monthly_pay_details">
					<table class="zsg-table">
						<tbody>
							<tr>
							<th>
							<span class="zsg-h1 zsg-content_collapsed" style="text-transform: initial;">
							Estimated payment</span>
							</th>
							<td class="zsg-table-col_num">
							<span class="zsg-h1 zsg-content_collapsed">
							$329,016/mo</span>
							</td>
							</tr>
							<tr>
							<th>
							Loan amount</th>
							<td class="zsg-table-col_num">
							$49,000,000</td>
							</tr>
							<tr>
							<th>
							Down payment</th>
							<td class="zsg-table-col_num">
							$1,000,000</td>
							</tr>
							<tr>
							<th>
							Interest rate</th>
							<td class="zsg-table-col_num">
							4.176%</td>
							</tr>
							<tr>
							<th>
							Loan term</th>
							<td class="zsg-table-col_num">
							30 years</td>
							</tr>
							<tr>
							<th>
							Taxes &amp; insurance included?</th>
							<td class="zsg-table-col_num">
							Yes</td>
							</tr>
							<tr>
							<th>
							Property tax</th>
							<td class="zsg-table-col_num">
							1.2 %/yr</td>
							</tr>
							<tr>
							<th>
							Homeowner's insurance</th>
							<td class="zsg-table-col_num">
							$800/yr</td>
							</tr>
							<tr>
							<th>
							Mortgage insurance</th>
							<td class="zsg-table-col_num">
							$40,017/mo</td>
							</tr>
							<tr>
							<th>
							HOA dues</th>
							<td class="zsg-table-col_num">
							 $0/mo </td>
						 	</tr>
							</tbody>
						</table>
					</div>

					<div class="pie-graph-breakdown">

						<div id="chartContainer2" style="height: 300px; width: 100%;">
                                        		
                        </div>

					</div>

					<div class="line-graph-breakdown">

					 	<div id="container"></div>

					</div>

					<div id="ammort_table">
					</div>

				
			</div>
<!-- / banner section-->


<?php get_footer('blog'); ?>
