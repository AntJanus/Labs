<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php bloginfo('language');?>">
<head profile="http://gmpg.org/xfn/11">

	<title><?php wp_title(); ?></title>
		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.ico" /><meta name="generator" content="WordPress" /> 
		<meta name="title" content="<?php wp_title(''); ?>" />
		
		
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="viewport" content="width=device-width" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
     
     
	<?php $templateUri = get_template_directory_uri(); ?>
     
     
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>