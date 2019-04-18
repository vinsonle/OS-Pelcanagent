<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
</div><!-- Content close -->


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/scrolling-nav.js"></script>
<!-- vendors -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/wow.min.js"></script>
   
 <!--    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script> -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/highlight.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/app.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/owl.carousel.min.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri();?>/js/homepage.js"></script>

<script type="text/javascript">

    var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    
    var term_id = "<?php echo  $category->term_id; ?>";
  
    var page = 2;

    jQuery(function($) {

        $('body').on('click', '.loadmore', function() {

            var data = {

                'action': 'load_posts_by_ajax',

                'page': page,
                'term_id': term_id,
                
                'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'

            };

     		

            $.post(ajaxurl, data, function(response) {
            	// if(data.trim()==''){alert("Nothing Found");}
                $('.my-posts').append(response);
                
 
                page++;



            });


        });

    });

    </script>

<?php wp_footer(); ?> 

</body>
</html>
