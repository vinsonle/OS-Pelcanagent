<?php 
/*
Template Name: glossary
*/
get_header(); ?>

	<section class="bannerTop innerDetails glossary">
	<div class="container">
		<h1 class="heading">GLOSSARY</h1>

		<ul class="glossary_menu clearfix">
			<li class="active" id="all_cat_parent"><a href="javascript:void(0)" class="all_cat">ALL</a></li>
		
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
				<li><a href="javascript:void(0)" class="all_alph">ALL</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('A')">A</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('B')">B</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('C')">C</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('D')">D</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('E')">E</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('F')">F</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('G')">G</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('H')">H</a></li> 
				<li><a href="javascript:void(0)" onclick="myglossary('I')">I</a></li> 
				<li><a href="javascript:void(0)" onclick="myglossary('J')">J</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('K')">K</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('L')">L</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('M')">M</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('N')">N</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('O')">O</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('P')">P</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('Q')">Q</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('R')">R</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('S')">S</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('T')">T</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('U')">U</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('V')">V</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('W')">W</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('X')">X</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('Y')">Y</a></li>
				<li><a href="javascript:void(0)" onclick="myglossary('Z')">Z</a></li>
			</ul>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<div class="searchdiv hide_search">
				<form id="post-search">
					<input type="text" id="post-search1" class="form-control" placeholder="Search" value="">
					<i class="fa fa-search searchicon" aria-hidden="true"></i>
				</form>
				</div>
			</div>
		<div class="new-gloss">
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
if($the_query->have_posts() ) { while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


						   <tr>
							   <td class="tdata"> <h2><?php the_title(); ?></h2></td>
							   <td>
								   <?php the_content(); ?>
							   </td>
						   </tr>
						   <?php endwhile;}
						   else{?>
						   	  <tr>
                               <td class="tdata"></td>
                               <td>
                                  <h4 class="no_terms">No terms available</h4>
                               </td>
                           </tr>
						<?php   }
?>
					   </tbody>
				   </table>
			   </div>
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

<!-- / banner section-->
 
<?php get_footer('blog');
