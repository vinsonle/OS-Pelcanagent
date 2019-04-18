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


			<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
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
