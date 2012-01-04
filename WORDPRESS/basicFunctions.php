<?php
/* REQUIRED. Neccessary to create /feed links for RSS and ATOM */
add_theme_support( 'automatic-feed-links' );

/* adds an admin page that lets users modify the body{ background} css style. Very handy */
add_custom_background();

/* depending on the size of your site, change the number below. It represents that largest-maximum width of an oEmbedded object, or any other type of an object such as an image or a video */
if ( ! isset( $content_width ) ) $content_width = 960;


/* Adds a "designed by" in the admin footer */
function remove_footer_admin () {
    echo "Theme designed and developed by YourNameHere";
}
add_filter('admin_footer_text', 'remove_footer_admin');
?>