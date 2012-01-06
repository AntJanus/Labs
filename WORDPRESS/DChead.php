<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

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
     
     
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- BELOW IS A SAMPLE DUBLIN CORE META DATA HEADER -->
   <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
	<meta name="DC.title" content="<?php wp_title(''); ?>">
	<meta name="DC.description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>">
	<meta name="DC.language" scheme="ISO639-1" content="en">
    <meta name="DC.publisher" content="<?php bloginfo('name');?>">
    <!-- END DUBLIN CORE -->
</head>
<body <?php body_class();?>>