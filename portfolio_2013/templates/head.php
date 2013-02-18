<!DOCTYPE html>
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
	<meta name="description" content="Works of Alex Lim" />
	<meta name="author" content="Alex Lim">
	<meta name="publisher" content="Alex Lim"/>
	<meta name="keywords" content="Web design, Creative direction, Digital media">

<!-- Favicon & Touch icon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">

<!-- Responsive On/Off -->
  <?php if (current_theme_supports('bootstrap-responsive')) { ?>   
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <? } else { ?><meta name="viewport" content="width=1100" />  
  <?php } ?>
  
<!-- Legacy Browser Support -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>

<!-- Scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/tour.js"></script><!-- Tour add-on-->
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>

<!-- Font 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
-->

  <?php wp_head(); ?>

  <?php if (wp_count_posts()->publish > 0) : ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name') ?> Feed" href="<?php echo home_url() ?>/feed/">
  <?php endif; ?>
</head>
