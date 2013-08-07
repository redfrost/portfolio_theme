<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
<head>

<meta charset="utf-8">

<!--
|~)[~|~\|~|~)/~\(~~|~
|~\[_|_/|~|~\\_/_) | 
When you look into an abyss, the abyss also looks into you. 
-->    
         
                                             
<!--

I have skills & experiences in following areas:
FRONT-END / RESPONSIVE LAYOUT / HTML5 / CSS3 / FRAMEWORKS / WORDPRESS / RICH & FLASH

Contact me if you need a fancy modern website.

*Note:
This website is built on latest technologies such as CSS3 animation and HiDPI support for demonstration porpose.
Therefore some functions may not follow Web Standards Compliance.
Please use a modern browser to unlock full features.

-->


<!-- Site info -->          
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta property="og:url" content="http://simonalex.com/portfolio/" />
  <meta property="og:site_name" content="Works of Alex Lim" />
  <meta property="og:title" content="Works of Alex Lim" />
  <meta property="og:description" name="description" content="Works of Alex Lim" />
  <!-- <meta property="fb:app_id" content="" /> -->
  <meta property="og:type" content="website" />

  <meta name="author" content="Alex Lim">
  <meta name="designer" content="Alex Lim">
  <meta name="dcterms.rightsHolder" content="Copyright (c) simonalex.com">
  <meta name="keywords" content="Front-end, Web design, Creative direction, Digital media"> 


<!-- Icons -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" />
  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css">


<!-- Responsive On/Off -->
  <?php if (current_theme_supports('bootstrap-responsive')) { ?>   
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <? } else { ?><meta name="viewport" content="width=1100" />  
  <?php } ?>
  

<!-- Scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>


  <?php wp_head(); ?>

  <?php if (wp_count_posts()->publish > 0) : ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name') ?> Feed" href="<?php echo home_url() ?>/feed/">
  <?php endif; ?>
</head>
