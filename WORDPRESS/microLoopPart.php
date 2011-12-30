<article id="post-<?php the_ID();?>" <?php post_class($classes);?> ><!-- START OF POST -->
      
      <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url">
        <?php the_title(); ?>
        </a></h1>
      <span class="meta vcard" style=" <?php if($loopMeta == 0){ echo "display:none"; }?> ">
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
        <?php 
		if($loopExcerpt == 0){
		the_content();
		}
		else{
			 echo '<div class="post-thumbnail">';
			 the_post_thumbnail();
			 echo '</div>';
       the_excerpt();
		}
		?>
        <p class="postmetadata" style=" <?php if($loopMeta == 0){ echo "display:none"; }?> ">Posted in
          <?php the_category(', '); ?>
          <br />
          <?php the_tags(); ?>
          <br />
          Source: <span class="vcard"><span class="source-org copyright">
          <?php bloginfo('name'); ?>
          </span></span></p>
      </div>
    </article>