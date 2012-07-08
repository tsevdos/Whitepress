<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if (is_home()) { bloginfo('name'); 
			 } elseif (is_category() || is_page() ||is_single() || is_category() || is_tag() || is_date() || is_author() || is_archive() || is_search() ) {
			 bloginfo('name'); echo ' > ';
			 } 
				wp_title(''); 
			?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/whitepress-favicon.gif" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/print.css" type="text/css" media="print" />

<!--[if IE]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lib/ie_all.css" type="text/css"/>
<![endif]-->

<!--[if IE 6]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lib/ie6.css" type="text/css"/>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lib/ie7.css" type="text/css"/>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/whitepress.js"></script>

<!--we need this for plugins-->
<?php wp_head(); ?>
</head>

<body>

	<div id="accessibilitylinks">
		<ul>
			<li><a href="#content" title="Go to content">Skip to content</a></li>
			<li><a href="#navigation" title="Go to main navigation">Skip to main navigation</a></li>
			<li><a href="#search" title="Go to Search form">Skip to Search form</a></li>
		</ul>
	</div>

<div id="container">

	<div id="navigation">
		<ul>
			<li <?php if ( is_home() ) { echo 'class="current_page_item"'; } ?> ><a title="Home" href="<?php echo get_settings('home'); ?>">Home</a></li>
		    <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
			<li id="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to the RSS feed"><img src="<?php bloginfo('template_directory'); ?>/images/rss_icon.png" width="25" height="25" alt="Subscribe to the RSS feed" /></a></li>
		</ul>
	</div>

	<div id="header">
		<h1><a href="<?php echo get_settings('home'); ?>" title="Home"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</div>
<!--header.php end-->