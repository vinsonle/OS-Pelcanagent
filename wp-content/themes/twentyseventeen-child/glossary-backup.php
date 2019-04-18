<?php 
/*

*/
get_header(); ?>

	<section class="bannerTop innerDetails glossary">
	<div class="container">
		<h1 class="heading">GLOSSARY</h1>
		<ul class="glossary_menu clearfix">
			<li class="active"><a href="javascript:void(0)" class="all_cat">ALL</a></li>
		
<ul class="glossary_cat">
          <?php

            $cat_args = array(
            	'taxonomy' => 'glossary-category',
            	'hide_empty' => false
              
            );


            $cats = get_categories($cat_args);

            foreach($cats as $cat){
              echo '<li><a href="javascript:void(0)" data-slug="' . $cat->term_id . '" class="js-category-button">' . $cat->name . '</a></li>';
            }
          ?>
    </ul>
		</ul>
		
		<div class="menu">
			<ul>
				<li><a href="#">ALL</a></li>
				<li><a href="#">#</a></li>
				<li><a href="#">A</a></li>
				<li><a href="#">B</a></li>
				<li><a href="#">C</a></li>
				<li><a href="#">D</a></li>
				<li><a href="#">E</a></li>
				<li><a href="#">F</a></li>
				<li><a href="#">G</a></li>
				<li><a href="#">H</a></li> 
				<li><a href="#">I</a></li> 
				<li><a href="#">J</a></li>
				<li><a href="#">K</a></li>
				<li><a href="#">L</a></li>
				<li><a href="#">M</a></li>
				<li><a href="#">N</a></li>
				<li><a href="#">O</a></li>
				<li><a href="#">P</a></li>
				<li><a href="#">Q</a></li>
				<li><a href="#">R</a></li>
				<li><a href="#">S</a></li>
				<li><a href="#">T</a></li>
				<li><a href="#">U</a></li>
				<li><a href="#">V</a></li>
				<li><a href="#">W</a></li>
				<li><a href="#">X</a></li>
				<li><a href="#">Y</a></li>
				<li><a href="#">Z</a></li>
			</ul>
		</div>
		<div class="row">
			<div class=" col-md-4">
				<div class="searchdiv">
				<form id="post-search">
					<input type="text" id="post-search" class="form-control" placeholder="Search" value="">
					<i class="fa fa-search searchicon" aria-hidden="true"></i>
				</form>
				</div>
			</div>
		</div>
		<div class="row">
		   <div class="col-md-12">
			   <div class="table-responsive">
				   <table class="table">
					   <thead>
						   <tr>
							   <th style="width: 15%">Term</th> 
							   <th style="width: 85%">Definition</th>
						   </tr>
					   </thead>
					   <tbody class="the-news">

					   	<?php 

$args = array(
    'post_type' => 'glossary',
    'order'    => 'ASC'
    );              

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


						   <tr>
							   <td class="tdata"> <h2><?php the_title(); ?></h2></td>
							   <td>
								   <?php the_content(); ?>
							   </td>
						   </tr>
						   <?php endwhile;endif;
?>
					   </tbody>
				   </table>
			   </div>
			</div>
		</div>
	
	<div class="social_media_right">
		<ul>
			<li class="fb-bg">
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
			</li>
		</ul>
	</div>
</div>
</section>

<?php get_footer('blog');
