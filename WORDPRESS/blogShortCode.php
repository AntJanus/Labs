<?php
function showBlogPosts( $atts ) {
	extract( shortcode_atts( array(
	// what categories to show, default = all. 
		'cat' => '',
	// number of posts
		'num' => 5,
	// The following variables work on an "on/off" switch, 1 to allow, 0 to disallow
	// excerpt or content. default = excerpt
		'excerpt' => 1,
	// show meta or not. default = yes
		'meta' => 1,
		'meta2' => 1,

	//paged. default on no. Determines if page should be paginated or not
		'pnavi' => 0
	), $atts ) );
	global $loopMeta, $loopExcerpt, $loopMeta2;
	$loopMeta = $meta;
	$loopExcerpt = $excerpt;
	$loopMeta2 = $meta2;
	
 wp_reset_query();
global $paged;
$args = array( 'posts_per_page' => $num, 'cat'=> $cat );
if($pnavi == 1){
$args['paged'] = get_query_var('page');
}
query_posts($args );
 while ( have_posts() ) : the_post();
/* for the loop part, use your own loop.php that contains only the post format. 
** See my "micrLoopPart.php" to see how all the options play out
*/
include(locate_template('microLoopPart.php'));
   endwhile; 

if($pnavi == 1){
echo'<div id="blogNav">';
posts_nav_link( ' ', '&raquo;', '&laquo;' );
echo '</div>';
}
 wp_reset_query();
}
add_shortcode( 'blogPosts', 'showBlogPosts' );
?>