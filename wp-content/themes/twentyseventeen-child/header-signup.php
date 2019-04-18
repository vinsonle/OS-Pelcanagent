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


	<div class="site-content-contain">
		<div id="content" class="site-content">
