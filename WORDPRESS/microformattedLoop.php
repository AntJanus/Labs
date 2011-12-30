<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID();?>" <?php post_class('post hentry hnews single');?>><!-- START OF POST -->
          
<h1 class="entry-title item fn"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>
<span class="meta  vcard">
      <time class="updated" datetime="<?php
$postDate = get_the_date('c');
$postDate2 = get_the_date('d.m.Y');
echo $postDate ?>" pubdate> <?php echo $postDate2; ?></time>
      | <span class="byline fn author">
      <?php the_author_posts_link(); ?>
      </span> | <a href="mailto:<?php the_author_meta('email'); ?>" class="email author">email</a> |
      <?php the_category(', '); ?>
      </span></span>
   <div class="postContent entry-content">
     <?php the_content(); ?>
     
     

     <p class="postmetadata">Posted in <?php the_category(', '); ?> <br /><?php the_tags(); ?> <br /> Source: <span class="vcard"><span class="source-org copyright"><?php bloginfo('name'); ?></span></span></p>
     
     
     </div>
                </article><!-- END OF POST -->
<?php endwhile; endif;?>