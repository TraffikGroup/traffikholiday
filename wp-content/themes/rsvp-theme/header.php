<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('name'); ?><?php wp_title('|',true,''); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/less/style.less" type="text/less" media="screen" />
    <script src="<?php bloginfo('template_url'); ?>/js/less-1.1.3.min.js" type="text/javascript" ></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<header>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
</header>
<nav role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'false' ) ); ?>
</nav>