<html>
<head>
<style>

/************************* NEWS
**********************************************/
#newsWidget{
	
	width: 280px;
	min-height: 200px;
	h4{
		color:@dark-grey;	
	}
	ul{
		list-style-type: none;
		padding: 0;
		display: inline-block;
		*display: inline;
		zoom: 1;
		vertical-align: top;
		width: 230px; 
		
		li{
			padding: 10px 0;	
			border-bottom:1px solid #aeaeae;
			
			&:first-child{
				padding-top: 0;	
			}
		}
		
		img{
		width: 100%;
		height: 100%;	
		padding: 5px;
		border: 1px solid #aeaeae;
		}
		
		div{
		float:right;	
		width: 65%;
		font-size: .9em;
			span{
				display:block;
				font-size: .7em;	
			}
		}
	}	
}

.newsSquare{
	width:55px;
	height:55px;
	float:left;
}

.newsWidgetLink{
display: inline-block;
*display: inline;
zoom:1;
vertical-align: top;	
width: 45px;
}

</style>
</head>
<body>


<?php 

// INTERNAL
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
<h4>RECENT BLOG POSTS</h4>
<ul>
<?php
foreach( $posts_array as $post ) :	setup_postdata($post); ?>
<li class="clearfix"><p class="newsSquare"><?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
  echo get_the_post_thumbnail($post->ID);
} else {
   echo '<img src="#" />';
}  ?></p><div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="newsDate"><?php the_date(); ?></span></div><div class="clear"></div></li>
<?php endforeach; ?>
</ul>
</div>



<?php 
// EXTERNAL
include_once(ABSPATH . WPINC . '/feed.php');
$rss = fetch_feed('http://blog.assemblesystems.com/CMS/UI/Modules/BizBlogger/rss.aspx?tabid=646730&moduleid=1341403&maxcount=25&u=22560'); 

if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity(5); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems); 
endif;
?>
<div id="newsWidget">
<div class="newsWidgetLink"><img src="<?php echo get_template_directory_uri();
echo "/images/bim-news-events.jpg" ?>" />
</div>
<ul>
<?php
 foreach ( $rss_items as $item ) :	 
 $description = $item->get_description();
 preg_match("!http://[a-z0-9\-\.\/]+\.(?:jpe?g|png|gif)!Ui", $description, $matches);

 
 
 ?>
<li class="clearfix"><p class="newsSquare"><img src="<?php  echo $matches[0]; ?>"></p><div><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a> <span class="newsDate"><?php echo $item->get_date(); ?></span></div></li>
<?php endforeach; ?>
</ul>
</div>
</body>
</html>