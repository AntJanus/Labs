<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- start meta -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="title" content="<?php wp_title(''); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="language" content="EN" />
<!-- End basic meta -->

<title><?php wp_title(); ?></title>

<!-- links and stuff -->
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<!-- end links -->

<?php wp_head(); ?>
<?php $templateUri = get_template_directory_uri(); ?>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body <?php body_class();?>>