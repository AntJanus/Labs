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