<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11" lang="<?php bloginfo('language');?>">

<!-- start primary meta -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width" />
<meta name="title" content="<?php wp_title(''); ?>" />
<!-- end primary meta -->

<title><?php wp_title(); ?></title>

<!-- links -->
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<!-- end links! -->

<?php wp_head(); ?>
<?php $templateUri = get_template_directory_uri(); ?>

</head>
<body <?php body_class();?>>