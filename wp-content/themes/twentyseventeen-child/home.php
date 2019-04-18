<?php
/**
 * Template Name: Home
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="page_body">
<!--banner section-->
<section class="bannerSection bannerTop" style="background: url(<?php the_field('banner_image','option');?>);">
<div class="container">
<div class="row">
	<div class="col-sm-8">
		<div class="bannerText">
			<h1><?php the_field('main_title','option');?></h1>
			<p><?php the_field('banner_content','option');?></p>
		</div>
	</div>
	<div class="col-sm-4">
	
		<div class="featureArticles">
	<div class="articleBR">
	<div class="topHR"></div>
	<div class="articleBRText"><?php the_field('articles_title','option');?></div>
	<div class="bottomHr"></div>
	</div>
			<ul>			
				<?php dynamic_sidebar( 'custom-side-bar7' ); ?>
				<a href="#" class="allArticles">Search all articles <i class="fa fa-angle-right"></i></a>
			</ul>
					</div>
	</div>
</div>
</div>
</section>
<!-- / banner section-->

<!--mortgage rate-->
    <section id="" class="mortgageBlock">
     <div class="">
       <div class="mortageTitle">
       	<p><?php the_field('mortgage_title','option');?></p>
       </div>
        <div class="mortgageRate">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="rateBlock">
              	<p><?php the_field('slide1-rate','option');?></p>
              	<span><?php the_field('slide1-duration','option');?></span>
              </div>
            </div>
            <div class="item">
              <div class="rateBlock">
              	<p><?php the_field('slide2-rate','option');?></p>
              	<span><?php the_field('slide2-duration','option');?></span>
              </div>
            </div>
            <div class="item">
             <div class="rateBlock">
              	<p><?php the_field('slide3-rate','option');?></p>
              	<span><?php the_field('slide3-duration','option');?></span>
              </div>
            </div>
            <div class="item">
              <div class="rateBlock">
              	<p><?php the_field('slide4-rate','option');?></p>
              	<span><?php the_field('slide4-duration','option');?></span>
              </div>
            </div>
            <div class="item">
              <div class="rateBlock">
              	<p><?php the_field('slide5-rate','option');?></p>
              	<span><?php the_field('slide5-duration','option');?></span>
              </div>
            </div>
            
          </div>
      </div>
      </div>
    </section>
<!--mortgage rate-->


<!--See All Calculators Section-->
<section class="calculatorSection">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="calculatorBlock">
					<img src="<?php the_field('monthly_mortgage_icon','option');?>" alt="img" />
					<h6><?php the_field('monthly_mortgage_title','option');?></h6>
					<p><?php the_field('monthly_mortgage_content','option');?></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="calculatorBlock">
					<img src="<?php the_field('home_affordability_icon','option');?>" alt="img" />
					<h6><?php the_field('home_affordability_title','option');?></h6>
					<p><?php the_field('home_affordability_content','option');?></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="calculatorBlock">
					<img src="<?php the_field('rent_vs_buy_icon','option');?>" alt="img" />
					<h6><?php the_field('rent_vs_buy_title','option');?></h6>
					<p><?php the_field('rent_vs_buy_content','option');?></p>
				</div>
			</div>
		</div>
		<div class="btn-row-see">
			<a href="<?php the_field('more_button_url','option');?>"><button type="button" class="btn btn-default seeallBtn"> <?php the_field('more_button','option');?>  &nbsp; <i class="fa fa-angle-right" ></i></button></a>
		</div>
	</div>
</section>
<!-- /See All Calculators Section-->

<!--Other info section -->
<section class="otherInfo">
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="info_Block">
			<h4 class="infotitle"><?php the_field('news_title','option');?></h4>
				<div class="info_img">
					<img src="<?php the_field('news_featured_image','option');?>" alt="img" />
				</div>
				<div class="infoContent">
					 <h5><?php the_field('news_sub_title','option');?></h5>
					
					<?php dynamic_sidebar( 'custom-side-bar8' ); ?> 
					<div class="linkBlock">
						<a href="#" class="moreLink">More News  &nbsp; <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="info_Block">
			<h4 class="infotitle"><?php the_field('review_title','option');?></h4>
				<div class="info_img">
					<img src="<?php the_field('review_featured_image','option');?>" alt="img" />
				</div>
				<div class="infoContent">
					<h5><?php the_field('review_sub_title','option');?></h5>
					
					<?php dynamic_sidebar( 'custom-side-bar9' ); ?> 
					<div class="linkBlock">
						<a href="#" class="moreLink">More Reviews  &nbsp; <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="info_Block">
			<h4 class="infotitle"><?php the_field('tips_&_hacks_title','option');?></h4>
				<div class="info_img">
					<img src="<?php the_field('tips_&_hacks_fetured_image','option');?>" alt="img" />
				</div>
				<div class="infoContent">
					<h5><?php the_field('tips_&_hacks_sub_title','option');?></h5>
					
					<?php dynamic_sidebar( 'custom-side-bar10' ); ?> 
					<div class="linkBlock">
						<a href="#" class="moreLink">More Tips and Hacks  &nbsp; <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
</section>
<!--Other info section -->

<!--Find Info Section-->
<section class="find_rate">

<div class="leftBox">
	<div class="rateInner">
	<h2><?php the_field('mortgage_rate_title','option');?></h2>
	<p><?php the_field('mortgage_content','option');?></p>
	</div>
</div>
<div class="rightBox">
<div class="rateInner">
<?php dynamic_sidebar( 'custom-side-bar11' ); ?></div>
</div>
	
</section>
<!--Find Info Section-->
</div>

<?php get_footer();
