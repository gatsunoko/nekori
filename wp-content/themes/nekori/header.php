<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head ?>
</head>
<body id="<?php the_slug(); ?>" <?php body_class(); ?>>
<div class="container">

  <div class="header">
    <p class="site_title"><a href="<?php echo home_url(); ?>">NEKORI</a></p>
  </div>