<?php 
   /*
   Template Name: affordibility-calculator
   */
   get_header('social'); ?>
<!--banner section-->
<section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
   <div class="container">
      <div class="innerTopBG">
         <h1 class="innerPgTitle">Affordibility Calculator</h1>
      </div>
      <div class="row">
         <div class="col-sm-3 rightBR">
            <div class="sidebar_Filter">
               <div class="form-group">
                  <div class="show_advance_view_acc">
                     <div class="panel-group" id="accordion1" role="tablist1" aria-multiselectable="true">
                        <div class="loc-sec">
                           <label>Location</label> 
                           <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                           <i class="fa fa-question-circle" aria-hidden="true"></i>
                           </a>
                          <!--  <input type="text" class="form-control" placeholder="Location" id="location" onchange="affordability_calculator(this.value);">  -->

                          <input type="text" class="form-control" placeholder="Location" id="location" onchange="calculateAffordability();">
                           <input type="hidden" id="hidden_loc">
                           <div class="location"></div>
                        </div>
                        <hr>
                         <label>Debt-to-Income (DTI) Ratio</label> 
                           <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                           <i class="fa fa-question-circle" aria-hidden="true"></i>
                           </a>
                           <div class="slidecontainer">
                              <input type="range" min="20" max="50" value="20" class="slider slider8" id="debt_to_income" onchange="affordability_calculator(this.value);" oninput="out_debt_to_income.value=debt_to_income.value" step="1">
                           </div>
                           <p class="price-figure"><!-- <span class="dollar">$</span> --><input type="text" class="cmn_input comma_input" id="out_debt_to_income" oninput="debt_to_income.value=out_debt_to_income.value" onchange="affordability_calculator(this.value);"></input><span class="percent">%</span>
                           </p>

                         <hr/>
                        <label>Annual Income</label> 
                        <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        </a>
                        <div class="slidecontainer">
                           <input type="range" min="1000" max="10000000" value="100000" class="slider slider1" id="annual_income" onchange="affordability_calculator(this.value);" oninput="out_annual_income.value=annual_income.value" step="1">
                        </div>
                        <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="out_annual_income" oninput="annual_income.value=out_annual_income.value" onchange="affordability_calculator(this.value);"></input>
                        </p>
                        <hr>
                        <label>Down Payment</label> 
                        <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        </a>
                        <!-- <div class="slidecontainer">
                           <input type="range" min="1000" max="10000000" value="50000" class="slider slider6" id="down_payment" onchange="affordability_calculator(this.value);" oninput="out_down_payment.value=down_payment.value" step="1">
                           </div> -->
                        <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input" id="out_down_payment" oninput="out_down_payment_slider.value=down_payment.value" onchange="affordability_calculator(this.value);"></input>
                        </p>
                        <!-- </div> -->
                        <label>Monthly Debt Obligations</label> 
                        <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        </a>
                        <div class="slidecontainer">
                           <input type="range" min="1" max="99999" value="5000" class="slider slider2" id="monthly_debt" onchange="affordability_calculator(this.value);" oninput="out_monthly_debt.value=monthly_debt.value" step="1">
                        </div>
                        <p class="price-figure">
                           <input type="text" class="cmn_input" id="out_monthly_debt" minlength="1" maxlength="5" value="5000" oninput="monthly_debt.value=out_monthly_debt.value" onchange="affordability_calculator(this.value);"></input>							
                        </p>
                        <hr>
                        <div class="show_advance_view_acc">
                           <div class="panel-group" id="accordion12" role="tablist12" aria-multiselectable="true">
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab" id="headingOne2">
                                    <h4 class="panel-title">
                                       <a data-toggle="collapse" data-parent="#accordion" href="#showAdvanceView" aria-expanded="true" aria-controls="collapseOne">
                                       Show Advanced View
                                       </a>
                                    </h4>
                                 </div>
                                 <div id="showAdvanceView" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                       <div class="form-group">
                                          <label>Annual Interest Rate</label> 
                                          <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                          <i class="fa fa-question-circle" aria-hidden="true"></i>
                                          </a>
                                          <div class="slidecontainer">
                                             <input type="range" min="1" max="12" value="6.375" class="slider slider4" id="annual_interest_rate" onchange="affordability_calculator(this.value);" oninput="out_annual_interest_rate.value=annual_interest_rate.value" step="0.01">
                                          </div>
                                          <p class="price-figure">
                                             <input type="text" class="cmn_input" id="out_annual_interest_rate"></input>
                                             <span class="percent" oninput="annual_interest_rate.value=out_annual_interest_rate.value" onchange="affordability_calculator(this.value);">%</span>
                                          </p>
                                          <hr>
                                          <label>Monthly HOA Fee</label> 
                                          <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                          <i class="fa fa-question-circle" aria-hidden="true"></i>
                                          </a>
                                          <div class="slidecontainer">
                                             <input type="range" min="0" max="15000" value="0" step="100" class="slider slider3" id="monthly_HOA" onchange="affordability_calculator(this.value);" oninput="out_monthly_HOA.value=monthly_HOA.value">
                                          </div>
                                          <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="out_monthly_HOA" oninput="monthly_HOA.value=out_monthly_HOA.value"  onchange="affordability_calculator(this.value);"></input>
                                          </p>
                                          <hr>
                                          <label>Term(Years)</label> 
                                          <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                          <i class="fa fa-question-circle" aria-hidden="true"></i>
                                          </a>
                                          <select class="form-control" id="loan_term" onchange="affordability_calculator(this.value);">
                                             <option value="15">15 Year Fixed</option>
                                             <option value="30" selected="selected">30 Year Fixed</option>
                                          </select>
                                          <label>Homeowner Insurance Rate</label> 
                                          <p class="price-figure"><input type="text" class="cmn_input" id="homeowner_insurance_rate" oninput="homeowner_insurance_rate.value=homeowner_insurance_rate.value" onchange="affordability_calculator(this.value);"></input><span class="percent">%</span>
                                          </p>
                                          <hr>
                                          <label>Property Tax Rate</label> 
                                          <p class="price-figure"><input type="text" class="cmn_input" id="prop_tax_rate" oninput="prop_tax_rate.value=prop_tax_rate.value" onchange="affordability_calculator(this.value);"></input><span class="percent">%</span>
                                          </p>
                                          <hr>
                                          <div class="down_pay_per" style="display: none">
                                             <label>Down Payment(%)</label>
                                             <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                             <i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a>
                                             <div class="slidecontainer">
                                                <input type="range" min="20" max="100" value="20" class="slider slider7" id="down_payment_per" onchange="affordability_calculator(this.value);" oninput="out_down_payment_per.value=down_payment_per.value" step="10">
                                             </div>
                                             <p class="price-figure"><span class="dollar">%</span><input type="text" class="cmn_input" id="out_down_payment_per" oninput="down_payment_per.value=out_down_payment_per.value" onchange="affordability_calculator(this.value);"></input>
                                             </p>
                                          </div>
                                          <hr>
                                          <!-- <label>Debt-to-Income (DTI) Ratio</label> 
                                          <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                          <i class="fa fa-question-circle" aria-hidden="true"></i>
                                          </a>
                                          <div class="slidecontainer">
                                             <input type="range" min="20" max="50" value="20" class="slider slider8" id="debt_to_income" onchange="affordability_calculator(this.value);" oninput="out_debt_to_income.value=debt_to_income.value" step="1">
                                          </div>
                                          <p class="price-figure"><input type="text" class="cmn_input comma_input" id="out_debt_to_income" oninput="debt_to_income.value=out_debt_to_income.value" onchange="affordability_calculator(this.value);"></input><span class="percent">%</span>
                                          </p>
                                          <hr> -->
                                          <!-- 	<label>Mortage Amount</label> 
                                             <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                             	<i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a>
                                             
                                             	<p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo5" oninput="myRange5.value=myRange5.value" onchange="affordability_calculator(this.value);"></input>
                                             	</p>
                                             
                                             	<hr> -->
                                          <!-- <label>Annuity Factor</label> 
                                             <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                             	<i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a>
                                             
                                             <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo6" oninput="myRange6.value=demo6.value"  onchange="affordability_calculator(this.value);"></input>
                                             </p>
                                             
                                             <hr> -->
                                        <!--   <div class="down_pay_per" style="display: none">
                                             <label>Mortgage Insurance Premium (MIP)</label> 
                                             <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                             <i class="fa fa-question-circle" aria-hidden="true"></i>
                                             </a>
                                             <p class="price-figure"><input type="text" class="cmn_input" id="mip" oninput="mip.value=mip.value" onchange="affordability_calculator(this.value);"></input><span class="percent">%</span>
                                             </p>
                                          </div> -->

                                          <hr>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="show_advance_view_acc">
                        <div class="panel-group" id="accordion1" role="tablist1" aria-multiselectable="true">
                           <a class="btn btn-primary btn-common" id="CalculateBtn" onclick="return calculateAffordability()">Calculate</a>
                           <div class="clearfix">&nbsp;</div>
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
            </div>
         </div>
         <div class="col-sm-6 rightBR">
            <div class="monthly_payment_calaculation">
               <div class="card">
                  <!--   <ul class="nav nav-tabs" role="tablist">
                     <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Monthly Payment</a></li>
                     <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Amortization</a></li>
                     </ul> -->
                  <!-- Tab panes -
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
                         
                     </div>-->
                  <div class="tab-content afford">

                  	 <div id="appendJson"></div>

                  	 <div class="clearfix">&nbsp;</div>
                    <h2>Home Price</h2>
                     <p id="home_price1" class="home_price" style="color: #214496;"></p>

                     <h2>Monthly Mortgage Payment</h2>
                     <p id="mortage_payment1" class="mortage_payment" style="color: #214496;"></p>
                     <h2>Homeowner Insurance</h2>
                     <p id="insurance1" style="color: #214496;"></p>
                     <h2>Property Tax</h2>
                     <p id="property_tax1" style="color: #214496;"></p>
                     <h2>HOA Fee</h2>
                     <p id="hoa_fee1" style="color: #214496;"></p>
                    <!--  <h2>Mortgage Insurance Premium</h2>
                     <p id="insurance_premium1" style="color: #214496;"></p> -->
                     <h2>Total Monthly Mortgage Payment</h2>
                     <!-- <p id="monthly_morg_payment1" style="color: #214496;"></p> -->
                     <p id="total_monthly_morg_payment1" style="color: #214496;"></p>
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
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
</link>
<script src="YourJquery source path"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/calculators/affordability-calculator.js"></script>
