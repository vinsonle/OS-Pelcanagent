<?php 
/*
Template Name: refinance-calculator
*/
get_header('social'); ?>
    <!--banner section-->
    <section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
        <div class="container">
            <div class="innerTopBG">
                <h1 class="innerPgTitle">Refinancing Calculator</h1>
            </div>
            <div class="row">
                <div class="col-sm-3 rightBR">
                    <div class="sidebar_Filter">
                        <div class="form-group">
                           <div class="loc-sec">
                                        <label>Location</label> 
                                       
                                        <input type="text" class="form-control" placeholder="Location" id="location" onchange="refinance_calculator(this.value);">
                                        <div class="location">
                                            
                                        </div>
                                    </div>
                            <hr>               
                        <label>Home Price</label> 
                        <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                        </a>
                        <div class="slidecontainer">
                          <input type="range" min="50000" max="2500000" value="250000" step="10000"  handle="square"  class="slider slider1" id="myRange" onchange="refinance_calculator(this.value);" oninput="demo.value=myRange.value">
                          </div>
                         <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo" oninput="myRange.value=demo.value" onchange="refinance_calculator(this.value);" ></input>
                        </p>

                        <hr>
                         <div class="panel-group" id="accordion">
                             <div class="panel panel-default">
                             
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Original Mortgage Details</a>
                        </h4>
                       
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <label>Original Mortgage Payment</label>
                            <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                            <div class="slidecontainer">
                                <input type="range" min="1000" max="1000000" value="50000" class="slider slider2" id="org_mortgage_payment" onchange="refinance_calculator(this.value);" oninput="out_org_mortgage_payment.value=org_mortgage_payment.value">
                            </div>
                            <p class="price-figure"><span class="dollar">$</span>
                                <input type="text" class="cmn_input" id="out_org_mortgage_payment" oninput="org_mortgage_payment.value=out_org_mortgage_payment.value" onchange="refinance_calculator(this.value);"></input>
                            </p>
                            <hr>

                            <label>Original Term of Mortgage</label>
                            <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                            <!-- <div class="slidecontainer">
                                <input type="range" min="1" max="480" value="144" class="slider slider1" id="org_term_mortgage" onchange="refinance_calculator(this.value);" oninput="out_org_term_mortgage.value=org_term_mortgage.value">
                            </div>
                            <p class="price-figure">
                                <input type="text" class="cmn_input" id="out_org_term_mortgage" oninput="org_term_mortgage.value=out_org_term_mortgage.value" onchange="refinance_calculator(this.value);"></input>
                            </p> -->
                            <select class="form-control" id="out_org_term_mortgage" onchange="refinance_calculator(this.value);">
                                <option value="15">15-Year Fixed</option>
                                <option value="30" selected="selected">30-Year Fixed</option> 
                            </select>
                        
                            <hr>

                            <label>Original Monthly Interest Rate</label>
                            <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                            <div class="slidecontainer">
                                <input type="range" min="1" max="12" value="6.375" class="slider slider3" id="org_monthly_int_rate" onchange="refinance_calculator(this.value);" oninput="out_org_monthly_int_rate.value=org_monthly_int_rate.value" step="0.01">
                            </div>
                            <p class="price-figure">
                                <input type="text" class="cmn_input" id="out_org_monthly_int_rate"></input>
                                <span class="percent" oninput="org_monthly_int_rate.value=out_org_monthly_int_rate.value" onchange="refinance_calculator(this.value);">%</span>
                            </p>
                            </hr>
                             <label>Year Started</label>
                               <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                             <input type="text" class="form-control" id="year_started" onchange="refinance_calculator(this.value);"></input>
                            </div>
                            </div>
                            </div>

                            <hr>
                            <div class="panel panel-default">
           
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">New Mortgage Details</a>
                        </h4>
          
                    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">

                            <label>Cashout Amount</label>
                            <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="10000000" value="0" class="slider slider1" id="cashout_amount" onchange="refinance_calculator(this.value);" oninput="out_cashout_amount.value=cashout_amount.value">
                            </div>
                            <p class="price-figure"><span class="dollar">$</span>
                                <input type="text" class="cmn_input" id="out_cashout_amount" oninput="cashout_amount.value=out_cashout_amount.value" onchange="refinance_calculator(this.value);"></input>
                            </p>

                            <hr>
                            <label>Closing Costs</label>
                            <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="1000000" value="0" class="slider slider2" id="closing_costs" onchange="refinance_calculator(this.value);" oninput="out_closing_costs.value=closing_costs.value">
                            </div>
                            <p class="price-figure"><span class="dollar">$</span>
                                <input type="text" class="cmn_input" id="out_closing_costs" oninput="closing_costs.value=out_closing_costs.value" onchange="refinance_calculator(this.value);"></input>
                            </p>

                            <hr>

                            <label>New Monthly Interest Rate</label>
                            <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                            <div class="slidecontainer">
                                <input type="range" min="1" max="12" value="6.0" class="slider slider3" id="new_monthly_int_rate" onchange="refinance_calculator(this.value);" oninput="out_new_monthly_int_rate.value=new_monthly_int_rate.value" step="0.01">
                            </div>
                            <p class="price-figure">
                                <input type="text" class="cmn_input" id="out_new_monthly_int_rate"></input>
                                <span class="percent" oninput="new_monthly_int_rate.value=out_new_monthly_int_rate.value" onchange="refinance_calculator(this.value);">%</span>
                            </p>

                            <hr>

                            <label> Terms of New Loan</label>
                            <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </a>
                            <!-- <div class="slidecontainer">
                                <input type="range" min="1" max="480" value="144" class="slider slider1" id="terms_new_loan_months" onchange="refinance_calculator(this.value);" oninput="out_terms_new_loan_months.value=terms_new_loan_months.value">
                            </div>
                            <p class="price-figure">
                                <input type="text" class="cmn_input" id="out_terms_new_loan_months" oninput="terms_new_loan_months.value=out_terms_new_loan_months.value" onchange="refinance_calculator(this.value);"></input>
                            </p> -->

                            <select class="form-control" id="out_terms_new_loan_months" onchange="refinance_calculator(this.value);">
                                <option value="15">15-Year Fixed</option>
                                <option value="30" selected="selected">30-Year Fixed</option> 
                            </select>
                            </div>
                            </div>
                            </div>
                               </div>
                            <a class="btn btn-primary btn-common" id="report">report</a>
                            <?php if ( is_user_logged_in() ) { ?>
                                <button type="button" class="btn btn-primary btn-common" id="save_cal">save calculation</button>
                                <?php } else { ?>

                                    <a href="/log-in/" class="btn btn-primary btn-common" id="save_cal">save calculation</a>

                                    <?php } ?>

                        </div>

                    </div>
            	</div>

         		  <?php
                  // <--------------------------------------------------------------------------->
                  ?>

                <div class="col-sm-6 rightBR">

                    <div class="payment_head">
                        <div class="mypayheads">
                            <h2>You should refinance to save</h2>
                            <h2><div id="total" style="color: #214496;"></div></h2>
                        </div>
                    </div>


                    <div class="monthly_payment_calaculation">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <h2>New Mortgage</h2>
                                <p id="newMort"></p>
                                <h2>Current Mortgage </h2>
                                 <p id="oldMort"></p> 
                            </div>
                        </div>                     

                        

                      <?php
                      // <--------------------------------------------------------------------------->
                      ?>

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
    <!-- / banner section-->
<?php get_footer('blog'); ?>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/calculators/refinance-calculator.js"></script>