<?php 
   /*
   Template Name: Rent-vs-buy
   */
   get_header('social'); ?>
<!--banner section-->
<section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
   <div class="container">
      <div class="innerTopBG">
         <h1 class="innerPgTitle">Rent Vs Buy</h1>
      </div>
      <div class="row">
         <div class="col-sm-3 rightBR">
            <div class="sidebar_Filter">
               <div class="form-group">
                  <div class="loc-sec">
                     <label>Location</label> 
                     <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                     <i class="fa fa-question-circle" aria-hidden="true"></i>
                     </a>
                     <input type="text" class="form-control" placeholder="Location" id="location" onchange="rent_vs_buy1(this.value);">
                     <input type="hidden" id="hidden_loc">
                     <div class="location">                       
                     </div>
                  </div>
                  <hr>
                  <label>Cost of House</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="50000" max="2500000" value="250000" step="10000"  handle="square"  class="slider slider1" id="myRange" onchange="rent_vs_buy1(this.value);" oninput="demo.value=myRange.value">
                  </div>
                  <p class="price-figure"><span class="dollar">$</span>
                  <input type="text" class="cmn_input comma_input cost_of_house" id="demo">
                     
                  </input><!--  <input type="text" class="cmn_input comma_input cost_of_house" id="demo" oninput="myRange.value=demo.value" onchange="rent_vs_buy(this.value);" >
                     
                  </input> -->
                  </p>
                  <hr>
                  <label>Down Payment</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1000" max="1000000" value="50000" step="1000" class="slider slider2" id="myRange2" onchange="rent_vs_buy1(this.value);" oninput="demo2.value=myRange2.value" >
                  </div>
                  <p class="price-figure"><span class="dollar">$</span>
                     <input type="text" class="cmn_input comma_input down_payment" id="demo2" oninput="myRange2.value=demo2.value" onchange="rent_vs_buy1(this.value);"></input>
                  </p>
                  <span class="alert-message" id="downpaymentAlert"></span>
                  <hr>
                  <label>Tenure (years)</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="100" value="1" class="slider slider3" id="myRange3" onchange="rent_vs_buy1(this.value);" oninput="demo3.value=myRange3.value" step="1">
                  </div>
                  <p class="price-figure">
                     <input type="text" class="cmn_input tenure" id="demo3" oninput="myRange3.value=demo3.value" onchange="rent_vs_buy1(this.value);" ></input>
                  </p>
                  <hr>
                  <label>Annual Interest Rate</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="12" value="6.375" class="slider slider4" id="myRange4" onchange="rent_vs_buy1(this.value);" oninput="demo4.value=myRange4.value" step="0.01">
                  </div>
                  <p class="price-figure">
                     <input type="text" class="cmn_input annual_interest_rate" id="demo4"></input>
                     <span class="percent" >%</span>
                    <!--  <span class="percent" oninput="myRange4.value=demo4.value" onchange="rent_vs_buy1(this.value);">%</span> -->
                  </p>
                  <hr>
                  <label>Homeowner's insurance (annual)</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="1000000" value="1" class="slider slider1" id="myRange5" onchange="rent_vs_buy1(this.value);" oninput="demo5.value=myRange5.value" >
                  </div>
                  <p class="price-figure"><input type="text" class="cmn_input home_owners_insurance" id="demo5" oninput="myRange5.value=demo5.value" onchange="rent_vs_buy1(this.value);" ></input>
                  </p>
                  <hr>
                  <label>Initial rent</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="1000000" value="1" class="slider slider1" id="initial_rent_input" onchange="rent_vs_buy1(this.value);" oninput="initial_rent.value=initial_rent_input.value" >
                  </div>
                  <p class="price-figure"><input type="text" class="cmn_input initial_rent" id="initial_rent" oninput="initial_rent_input.value=initial_rent.value" onchange="rent_vs_buy1(this.value);" ></input>
                  </p>
                  <hr>
                  <label>Rent increase interval (months)</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="1000000" value="1" class="slider slider1" id="myRange7" onchange="rent_vs_buy1(this.value);" oninput="demo7.value=myRange7.value" >
                  </div>
                  <p class="price-figure"><input type="text" class="cmn_input rent_increase_interval" id="demo7" oninput="myRange7.value=demo7.value" onchange="rent_vs_buy1(this.value);" ></input>
                  </p>
                  <hr>
                  <label>Rent increase per interval (%)</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="1000000" value="1" class="slider slider1" id="myRange8" onchange="rent_vs_buy1(this.value);" oninput="demo8.value=myRange8.value" >
                  </div>
                  <p class="price-figure"><input type="text" class="cmn_input rent_increase_interval_per" id="demo8" oninput="myRange8.value=demo8.value" onchange="rent_vs_buy1(this.value);" ></input>
                  </p>
                  <hr>
                  <label>Closing Costs</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="1000000" value="1" class="slider slider1" id="myRange9" onchange="rent_vs_buy1(this.value);" oninput="demo9.value=myRange9.value" >
                  </div>
                  <p class="price-figure"><input type="text" class="cmn_input closing_costs" id="demo9" oninput="myRange9.value=demo9.value" onchange="rent_vs_buy1(this.value);" ></input>
                  </p>
                  <hr>
                  <label>Annual Appreciation on house(%)</label> 
                  <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                  <i class="fa fa-question-circle" aria-hidden="true"></i>
                  </a>
                  <div class="slidecontainer">
                     <input type="range" min="1" max="100" value="0.1" class="slider slider1" id="myRange10" onchange="rent_vs_buy1(this.value);" oninput="demo10.value=myRange10.value" >
                  </div>
                  <p class="price-figure"><input type="text" class="cmn_input annual_appreciation_on_house" id="demo10" oninput="myRange10.value=demo10.value" onchange="rent_vs_buy1(this.value);" ></input>
                  </p>
                  <hr>
                  <a class="btn btn-primary btn-common" id="report" onclick="return getReport()">report</a>
                  <?php if ( is_user_logged_in() ) { ?>
                  <button type="button" class="btn btn-primary btn-common" id="save_cal" >save calculation</button>
                  <?php } else { ?>
                  <a href="/log-in/" class="btn btn-primary btn-common" id="save_cal">save calculation</a>
                  <?php } ?>
               </div>
               <div class="show_advance_view_acc" style="display: block;">
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
                              <input type="range" min="0" max="5" value="0.96" class="slider slidereleven" id="myRange11" onchange="rent_vs_buy1(this.value);" oninput="demo11.value=myRange11.value" step="0.01" >
                              <p class="price-figure"><input type="text" class="cmn_input" id="demo11" oninput="myRange11.value=demo11.value" onchange="rent_vs_buy1(this.value);"></input><span class="percent">%</span>
                              </p>
                              <div class="form-group">
                                 <label>Homeowner Insurance</label> 
                                 <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                 <i class="fa fa-question-circle" aria-hidden="true"></i>
                                 </a>
                                 <div class="slidecontainer">
                                    <input type="range" min="0" max="15000" value="1200" step="100" class="slider slider5" id="myRange5" onchange="rent_vs_buy1(this.value);" oninput="demo5.value=myRange5.value">
                                 </div>
                                 <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo5" oninput="myRange5.value=myRange5.value" onchange="rent_vs_buy1(this.value);"></input>
                                 </p>
                                 <hr>
                                 <label>Homeowner Association(HOA)</label> 
                                 <a href="#" data-toggle="popover" title="" data-content="Some content inside the popover" class="calc_info">
                                 <i class="fa fa-question-circle" aria-hidden="true"></i>
                                 </a>
                                 <div class="slidecontainer">
                                    <input type="range" min="0" max="15000" value="0" step="100" class="slider slider6" id="myRange6" onchange="rent_vs_buy1(this.value);" oninput="demo6.value=myRange6.value">
                                 </div>
                                 <p class="price-figure"><span class="dollar">$</span><input type="text" class="cmn_input comma_input" id="demo6" oninput="myRange6.value=demo6.value"  onchange="rent_vs_buy1(this.value);"></input>
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
         <div class="col-sm-6 rightBR">
            <div class="monthly_payment_calaculation">
               <div class="card">
                 <!--  <div class="tab-content">
                     <h2>Rent Vs Buy Payment</h2>
                     <p id="total" style="font-size: 20px; color: #214496;"></p>
                     <h2>Breakeven point (months)</h2>
                     <p id="break_point" style="font-size: 20px; color: #214496;"></p>
                  </div> -->
                  <div class="appendReport"></div>
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
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https:/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/calculators/rent_vs_buy.js"></script>
