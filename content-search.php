<?php
/**
 * @package martinlab
 */
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h4><?php the_title('',' | '); ?><?php echo the_time('F, Y');?></h4>
    
    	  <?php echo strip_tags(get_the_excerpt()); ?>
        <p class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></p>
    </article>
