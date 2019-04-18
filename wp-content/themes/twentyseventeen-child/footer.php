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

<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="main-footer-brdr">
				<div class="foot-main">
				<div class="container">
				<div class="row">
				<div class="main-footer">
				<div class="col-sm-2 col-sm-6 col-xs-12">
									<?php
									if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
										<div class="widget-column footer-widget-1">
											<?php dynamic_sidebar( 'sidebar-2' ); ?>
										</div>
									<?php }?>
				</div>

				<div class="col-sm-3 col-sm-6 col-xs-12">
									<?php
									if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
										<div class="widget-column footer-widget-1">
											<?php dynamic_sidebar( 'sidebar-3' ); ?>
										</div>
									<?php }?>
				</div>

				<div class="col-sm-3 col-sm-6 col-xs-12">
									<?php
									if ( is_active_sidebar( 'custom-side-bar3' ) ) { ?>
										<div class="widget-column footer-widget-1">
											<?php dynamic_sidebar( 'custom-side-bar3' ); ?>
										</div>
									<?php }?>
				</div>

				<div class="col-sm-4 col-sm-6 col-xs-12">

									<?php
									if ( is_active_sidebar( 'custom-side-bar4' ) ) { ?>
										<div class="widget-column footer-widget-1">
											<?php dynamic_sidebar( 'custom-side-bar4' ); ?>
										</div>
									<?php }?>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>

				<div class="botttomfooter">
				<div class="container">
				<div class="copyright">
					<?php
									if ( is_active_sidebar( 'custom-side-bar5' ) ) { ?>
										<div class="widget-column footer-widget-1">
											<?php dynamic_sidebar( 'custom-side-bar5' ); ?>
										</div>
					<?php }?>
					
				</div>
				</div>
				</div>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">


<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<select class="selectpicker" data-live-search="true">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Barbecue</option>
</select>					
			</footer>
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
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/autocomplete.js"></script>
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
    <script type="text/javascript">
    $(document).ready(function() {

  //you have to use keyup, because keydown will not catch the currently entered value
  $('input[type=password]').keyup(function() {

    // set password variable
    var pswd = $(this).val();

    //validate the length
    if (pswd.length < 8) {
      $('#length').removeClass('valid').addClass('invalid');
    } else {
      $('#length').removeClass('invalid').addClass('valid');
    }

    //validate letter
    if (pswd.match(/[A-z]/)) {
      $('#letter').removeClass('invalid').addClass('valid');
    } else {
      $('#letter').removeClass('valid').addClass('invalid');
    }

    //validate uppercase letter
    if (pswd.match(/[A-Z]/)) {
      $('#capital').removeClass('invalid').addClass('valid');
    } else {
      $('#capital').removeClass('valid').addClass('invalid');
    }

    //validate number
    if (pswd.match(/\d/)) {
      $('#number').removeClass('invalid').addClass('valid');
    } else {
      $('#number').removeClass('valid').addClass('invalid');
    }

  }).focus(function() {
    $('#pswd_info').show();
  }).blur(function() {
    $('#pswd_info').hide();
  });

});
</script>

<?php wp_footer(); ?> 

</body>
</html>
