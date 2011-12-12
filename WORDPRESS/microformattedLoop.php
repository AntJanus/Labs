<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews');?>><!-- START OF POST -->
          
<h1 class="entry-title url"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<p class="meta  vcard"><time class="updated" datetime="<?php
$postDate = get_the_date('c');
$postDate2 = get_the_date('d.m.Y');
echo $postDate ?>" pubdate>
<?php echo $postDate2; ?></time> | <span class="byline fn author"><?php the_author();?></span> | <?php the_category(', '); ?></p> 
   <div class="postContent entry-content">
     <?php the_content(); ?>
     
     

     <p class="postmetadata">Posted in <?php the_category(', '); ?> <br /><?php the_tags(); ?> <br /> Source: <span class="vcard"><span class="source-org copyright"><?php bloginfo('name'); ?></span></span></p>
     
     
     </div>
                </article><!-- END OF POST -->
<?php endwhile; endif;?>