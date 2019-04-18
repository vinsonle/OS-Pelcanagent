<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('social'); ?>

<section class="bannerTop innerDetails">



<div class="container ">
<div class="innerTopBG">
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'masonry_thumb_large');
                      	?>
                      	<img src="<?php echo $image[0]; ?>" alt=""/>
	
</div>
<div class="row">
	<div class="col-sm-8">
		<div class="news_Section  wow fadeInUp">
			<h3 class="title_News"><?php echo get_the_title( $post_id ); ?></h3>
			<!--  <div class="add_fav"></div>  -->
			<!-- <div class="share_link">
				<ul>
					<li class="share-text">
						<p><i class="fa fa-share-alt"></i> Share With</p>
					</li>
					<li>
					<?php //.dynamic_sidebar( 'custom-side-bar14' ); ?> 
					</li>
				</ul>
			</div> -->
			
			<p>
				<?php 

echo get_post_field('post_content', $post_id);

 ?>
	
			</p>
			
			<div class="newsseprater">
				<img src="/wp-content/themes/twentyseventeen-child/images/sepImg.jpg" alt="img " />
			</div>
		</div>	
	
		
	</div>
	<div class="col-sm-4">
		<div class="latestNewsCate">
			<div class="infoContent">
			<?php $category = get_the_category();
$firstCategory = $category[0]->cat_name; ?>
					<h6>Latest <?php echo $firstCategory ?></h6>
					
				<?php

					$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;


					$args = array( 'numberposts' => '3',
						
				'category' => $category_id
				);

$recent_posts = wp_get_recent_posts($args);

    foreach( $recent_posts as $recent ){
    	echo '<div class="media">
		    	<div class="media-left">
			  	</div>
			  	<div class="media-body">
			  	<p>'.the_post_thumbnail('thumbnail').'</p>
					<p><a href="'. get_permalink($recent["ID"]) .'">'.$recent["post_title"].'</a></p>
					<span class="updatedTime">'. get_the_date() .'</span>
				  </div>
				</div>';
    	
    };
?>
					
					
				</div>
		</div>
		<div class="latestNewsCate">
			<div class="infoContent">
					<h6>categories</h6>
					<ul class="categoriesList">
						<ul class="categoriesList">
						
						<?php 
						$args = array( 
						'post_type' => 'post', 
    'hide_empty'               => FALSE,    
    'exclude'                  =>array(1,3,4,5,6,29,30,31,32) // desire id
);
wp_list_categories($args);
?>
						
					</ul>
						
					</ul>
					
				</div>
		</div>
	</div>
</div>
<div class="social_media_right social_media_left">
		
			<!-- <li class="fb-bg">
				<a href="#"><i class="fa fa-facebook facebook"></i></a>
			</li>
			<li class="tw-bg">
				<a href="#"><i class="fa fa-twitter twitter"></i></a>
			</li>
			<li class="g-plus-bg">
				<a href="#"><i class="fa fa-google-plus google-plus"></i></a>
			</li>
			<li class="lin-bg">
				<a href="#"><i class="fa fa-linkedin linkedin"></i></a>
			</li> -->
			<li class="fav-bg"><?php wpfp_link() ?></li>
				<?php dynamic_sidebar( 'custom-side-bar14' ); ?> 
		
	</div>
	<div class="more-blog">
	<div class="related-header">
	<hr width="100%" height="2px">
	
		<span>Recommended Articles</span>
	</div>
		<div class="row">
		<?php 
	 $category = get_the_category();
$firstCategory = $category[0]->cat_name;

				
				$category_id = $category[0]->cat_ID;

			$args = array( 'posts_per_page' => '3',
						
				'category' => $category_id
				);

 $my_query = new WP_Query($args);


 if ( $my_query->have_posts() ) :
while ( $my_query->have_posts() ) : $my_query->the_post() ?>
 
	<div class="col-sm-4">
			   <div class="info_Block_inner">
<div class="cat_img">
						<?php the_post_thumbnail('thumbnail') ?>
					</div>
					<!-- 
						<a id="cat_name1"><?php //echo $firstCategory?></a> -->
					

<div class="cat_content">
						<h5><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h5>
						<span class="updatedTime"><?php echo get_the_date(); ?></span>
					</div>

</div>
			</div>
<?php endwhile;
endif; ?>
				
		</div>
	</div>
</div>
</section>
<!-- / banner section-->

<?php get_footer('blog'); ?>