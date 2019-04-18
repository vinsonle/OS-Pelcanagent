<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel='stylesheet' id='bootstrap-css'  href='/wp-content/themes/twentyseventeen-child/css/bootstrap.min.css' type='text/css' media='all' />
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/wp-content/themes/twentyseventeen-child/css/animations.css" rel="stylesheet">
<link href="/wp-content/themes/twentyseventeen-child/css/style.css" rel="stylesheet">
<link href="/wp-content/themes/twentyseventeen-child/css/responsive.css" rel="stylesheet">

<!-- Owl Stylesheets -->
    <link rel="stylesheet" href="/wp-content/themes/twentyseventeen-child/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/wp-content/themes/twentyseventeen-child/css/owl.theme.default.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<nav class="navbar navbar-default inNavBar head-social" role="navigation">
  <div class="navbarIn">
    <div class="container">
      <div class="navbar-header">
        <div class="serchBlock visible-xs">

              <?php dynamic_sidebar( 'custom-side-bar12' ); ?>
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="<?php bloginfo('url');?>"><img src="<?php the_field('logo','option');?>"  alt="logo"/></a> </div>
     
      <!-- <div class="topHeader">
        <div class="socialSearch">  -->
          <!-- <ul>
            
            <?php //dynamic_sidebar( 'Social-links' ); ?>
                    
          </ul> -->
            
          
        <!-- </div>
       </div>  -->
         <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <?php
          wp_nav_menu( array(
          'theme_location' => 'top',
          'menu_class'     => 'nav navbar-nav',
           ) );
      ?>  
        </ul>

        <ul id="nav" class="nav navbar-nav navbar-right">
            <li class="serchBlock hidden-xs">

              <?php dynamic_sidebar( 'custom-side-bar12' ); ?>
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
          </li>
   <!--  <li><a class="btn-login" href="#">sign up</a></li>
          <li><a class="btn-login btn-register" href="/log-in">login</a></li>

   <li><a class="btn-login" href="/log-in">Logout</a></li> -->

   <?php if ( is_user_logged_in() ) { 
   
    $current_id= get_current_user_id();
    $user_data = get_user_meta($current_id, 'account_status', true );

global $current_user;
wp_get_current_user();


    ?>
     <li class="parent menu-item-has-children"><a class="btn-login"> Hi, <?php echo $current_user->display_name;  ?>!</a>
     <ul class="sub-nav">
       <li><a href="/profile/">My Interests</a></li>
       <li><a href="/profile/">My Favorites</a></li>
       <li><a href="/profile/" target="_blank">Settings</a></li>
       <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
     </ul>
     </li>          
   <!-- <li><a class="btn-login btn-register" href="<?php //echo wp_logout_url( home_url() ); ?>">Logout</a></li> -->
  <?php  }
   else { ?>
      <!--  <li><a class="btn-login" href="/sign-up">sign up</a></li> -->

      <li class="sign-menu"><a class="btn-login btn-register" href="/log-in">Join or log in</a></li>
   <?php } ?>

          

        </ul>
      </div>
      <!--/.nav-collapse --> 
    
    </div>
  </div>
</nav>

  <div class="site-content-contain">
    <div id="content" class="site-content">
