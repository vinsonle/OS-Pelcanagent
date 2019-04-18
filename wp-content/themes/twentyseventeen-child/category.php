<?php 
/*
Template Name: category
*/
get_header('social'); ?>

<!--banner section-->
<section class="bannerTop">
<div class="category">
<div class="container">
<h1 class="innerPgTitle"><?php single_cat_title() ?></h1>
<div class="row">
	<div class="col-sm-8 rightBR">
		<div class="news_Section wow fadeInUp">

				<?php
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;
				$category = get_queried_object();
     if ($category->count == 0){
     		
				$args = array(
'post_type' => 'post',
'posts_per_page' => '0',
'cat'  => $category_id ,
	        'paged' => 0,
	        'post_status'    => 'publish'

	        

	    );
			echo'<div class="no_cat"><div class="my-posts">There are no post available in this category.</div></div>' ;
   }else{
				
	   $args = array(
'post_type' => 'post',
'posts_per_page' => '4',
'cat'  => $category_id ,
	        'paged' => 1,
	        'post_status'    => 'publish'

	    );

	    $my_posts = new WP_Query( $args );

	    if ( $my_posts->have_posts() ) :

	    ?>

	        <div class="my-posts">

	            <?php while ( $my_posts->have_posts() ) : $my_posts->the_post() ?>
	            	<div class="news_Section1 wow fadeInUp">

	                <h3 class="title_News addpadding"><a href="<?php echo the_permalink() ?>"><?php the_title() ?></a></h3>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'masonry_thumb_large');
                      	?>
                      	<img src="<?php echo $image[0]; ?>" alt="" class="blog-img"/>
	                	<?php the_excerpt() ?>
	          		 	<a href="<?php echo the_permalink() ?>" class="click-more">read more</a> 
	               		<div class="newsseprater">
							<img src="/wp-content/themes/twentyseventeen-child/images/sepImg.jpg" />
						</div>
						</div>
	            <?php endwhile ?>
	        </div>
	       <div class="loadmore"><img src="/wp-content/themes/twentyseventeen-child/images/moreLinkImg.jpg" />Load More</div>
	       <div class="nopost">Sorry! There are no more post.</div>
	    <?php endif ;
	    }
	    ?>
	    	 	 


<!-- <?php //echo do_shortcode('[ajax_load_more]'); ?> -->
			

		</div>	
		<!-- 
		<div class="loadMore_Link">
			<a href="#"><img src="/wp-content/themes/twentyseventeen-child/images/moreLinkImg.jpg" width="34" alt="img " /> Load More</a>
		</div> -->
	</div>
	<div class="col-sm-4">
		<div class="latestNewsCate">
			<div class="infoContent">
					<h6>Latest <?php single_cat_title() ?></h6>
					
					<!-- <div class="media">
					  <div class="media-left">
						<img src="/wp-content/themes/twentyseventeen-child/images/otherImg.png" class="media-object" style="width:60px" alt="img">
					  </div>
					  <div class="media-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor .</p>
						<span class="updatedTime">2 Hours Ago</span>
					  </div>
					</div>
					<div class="media">
					  <div class="media-left">
						<img src="/wp-content/themes/twentyseventeen-child/images/otherImg.png" class="media-object" style="width:60px" alt="img">
					  </div>
					  <div class="media-body">
						<p>Lorem ipsum sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<span class="updatedTime">2 Hours Ago</span>
					  </div>
					</div>
					<div class="media">
					  <div class="media-left">
						<img src="/wp-content/themes/twentyseventeen-child/images/otherImg.png" class="media-object" style="width:60px" alt="img">
					  </div>
					  <div class="media-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor magna aliqua.</p>
						<span class="updatedTime">2 Hours Ago</span>
					  </div>
					</div> -->
				
				<?php 	
				// $cat = get_the_category();
				$categories = get_the_category();
				$category_id = $categories[0]->cat_ID;
				$category = get_queried_object();
				if ($category->count == 0){

					$args = array( 'numberposts' => '0',
						'post_type' => 'post',
				'category' => $category_id ,

				);
					echo '<div class="no_rec_post"><div class="media">There are no post available in this category.</div></div>' ;
					?>
					<script type="text/javascript">
						jQuery('.latestNewsCate').css("min-height", "100px");
					</script>
					<?php
				}else{
				
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
}
			?>		
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
	<div class="social_media_right social_media_left">
		<ul>
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
				<?php dynamic_sidebar( 'custom-side-bar13' ); ?> 
		</ul>
	</div>
	</div>
</section>
<!-- / banner section-->

<?php get_footer('blog'); ?>