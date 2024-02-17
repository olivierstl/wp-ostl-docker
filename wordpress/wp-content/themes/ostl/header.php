<!doctype html>
<html lang="fr">

  <head>
    <title>
      <?php bloginfo('name') ?>
      <?php if ( is_404() ) : ?> -
        <?php _e('Not Found') ?>
      <?php elseif ( is_home() ) : ?> -
        <?php bloginfo('description') ?>
      <?php else : ?>
        <?php wp_title() ?>
      <?php endif ?>
    </title>
    
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="Olivier STELL, freelance webdesigner">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,Wordpress,Logo,Design,Webdesign">
    <meta name="author" content="Olivier STELL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/img/favicon.png'?>">
    <?php $t = time(); ?>
   
    <!--
    <link rel="stylesheet" href="<?php // bloginfo('stylesheet_url'); echo '?'; echo $t; ?>" type="text/css" media="screen" />
    -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <?php //wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); <?php wp_head(); ?>
    
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?'; echo $t; ?>" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif%7CRubik:300,400,700?<?php echo $t ?>" rel="stylesheet">
  </head>

  <body id="body">
    <?php include_once("analytics.php") ?>
   
   
    <?php get_template_part( 'menu' ); ?>
    
    <div class="wrapper">
      

