<?php
/* REQUIRED. Neccessary to create /feed links for RSS and ATOM */
add_theme_support( 'automatic-feed-links' );

/* adds an admin page that lets users modify the body{ background} css style. Very handy */
add_custom_background();

/* depending on the size of your site, change the number below. It represents that largest-maximum width of an oEmbedded object, or any other type of an object such as an image or a video */
if ( ! isset( $content_width ) ) $content_width = 960;

?>