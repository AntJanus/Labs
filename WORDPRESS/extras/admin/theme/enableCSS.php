<?php 
//add to functions.php

// add admin css
add_action( 'admin_print_styles', 'load_custom_admin_css' );
function load_custom_admin_css()
{
wp_enqueue_style('my_style', WP_CONTENT_URL . '/themes/mytheme/custom_admin.css');
}
//end admin css

?>