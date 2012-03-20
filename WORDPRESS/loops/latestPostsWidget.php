<?php 

$args = array(
    'numberposts'     => 5,
    'offset'          => 0,
    'orderby'         => 'post_date',
    'order'           => 'DESC',
    'post_type'       => 'post',
    'post_status'     => 'publish' ); 

$posts_array = get_posts( $args ); 
?>
<div id="newsWidget">
<ul>
<?php
foreach( $posts_array as $post ) :	setup_postdata($post); ?>
<li><?php the_post_thumbnail();?><div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="newsDate"><?php the_date(); ?></span></div></li>
<?php endforeach; ?>
</ul>
</div>


<?php 

// Outside feed ?>

<?php 

include_once(ABSPATH . WPINC . '/feed.php');
$rss = fetch_feed('http://feedurl.feed.com/feed.rss'); 

if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity(5); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems); 
endif;
?>
<div id="newsWidget">
<ul>
<?php
 foreach ( $rss_items as $item ) :	 
 
 $description = $item->get_description();
 // get the image urls from the post
 preg_match("!http://[a-z0-9\-\.\/]+\.(?:jpe?g|png|gif)!Ui", $description, $matches);

 
 
 ?>
<li class="clearfix"><img src="<?php  echo $matches[0]; ?>"><div><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a> <span class="newsDate"><?php echo $item->get_date(); ?></span></div></li>
<?php endforeach; ?>
</ul>
</div>