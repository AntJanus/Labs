!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11" lang="<?php bloginfo('language');?>">

	<title><?php wp_title(); ?></title>
		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.ico" /><meta name="generator" content="WordPress" /> 
		<meta name="title" content="<?php wp_title(''); ?>" />
		
		
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" type="text/css" media="all" href="<?php get_stylesheet_directory_uri(); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="viewport" content="width=device-width" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
     
     
	<?php $templateUri = get_template_directory_uri(); ?>
     
     
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>
<body <?php body_class();?>>