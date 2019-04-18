<?php 
/*
Template Name: report
*/
get_header(); ?>
<!--banner section-->

<section class="bannerTop innerDetails monthly_mortgage_calculator calculator_blog">
	<div class="container">
		<div class="innerTopBG">
			
		</div>
		<div class="row">
			<div class="col-sm-8 rightBR">

				<div class="monthly_pay_details">
			<?php	global $current_user;
    
       
        get_currentuserinfo();
        $estimated_payment = get_user_meta($current_user->ID, 'estimated_payment', true);
        $amort_payment = get_user_meta($current_user->ID, 'amort_payment', true);

        // var_dump($estimated_payment);
    
        ?>
					<table class="zsg-table">
						<tbody>
							<tr>
							<th>
							<span class="zsg-h1 zsg-content_collapsed" style="text-transform: initial;">
							Estimated payment</span>
							</th>
							<td class="zsg-table-col_num">
							<span class="zsg-h1 zsg-content_collapsed">
							$<?php echo $estimated_payment['month_payment'] ; ?>/mo</span>
							</td>
							</tr>
							<tr>
							<th>
							Loan amount</th>
							<td class="zsg-table-col_num">
							$<?php echo $estimated_payment['principal'] ; ?></td>
							</tr>
							<tr>
							<th>
							Down payment</th>
							<td class="zsg-table-col_num">
							$<?php echo $estimated_payment['downpay'] ; ?></td>
							</tr>
							<tr>
							<th>
							Interest rate</th>
							<td class="zsg-table-col_num">
							<?php echo $estimated_payment['interest'] ; ?>%</td>
							</tr>
							<tr>
							<th>
							Loan term</th>
							<td class="zsg-table-col_num">
							<?php echo $estimated_payment['loan_term'] ; ?> years</td>
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
							<?php echo $estimated_payment['loc_tax'] ; ?> %/yr</td>
							</tr>
							<tr>
							<th>
							Homeowner's insurance</th>
							<td class="zsg-table-col_num">
							$<?php echo $estimated_payment['home_ins'] ; ?>/yr</td>
							</tr>
							<tr>
							<tr>
							<th>
							HOA</th>
							<td class="zsg-table-col_num">
							 $<?php echo $estimated_payment['home_assoc'] ; ?>/mo </td>
						 	</tr>
							</tbody>
						</table>
					</div>

					<div class="pie-graph-breakdown">

						
                               <span class="zsg-h1 zsg-content_collapsed" style="text-transform: initial;">
                               Payment Breakdown
							</span>  

							<div id="chartContainer3" style="height: 300px; width: 100%;">
		                                        	</div>      		
                     

					</div>

					<div class="line-graph-breakdown">

					 

					</div>

					<div id="ammort_table">
					<span class="zsg-h1 zsg-content_collapsed" style="text-transform: initial;">
                              	Amortization
							</span>        		
				
						<?php echo $amort_payment ; ?>
					</div>

				
			</div>


			<div class="col-sm-4">
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
