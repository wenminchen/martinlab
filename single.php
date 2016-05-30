<?php
/**
 * The Template for displaying all single posts.
 *
 * @package martinlab
 */

get_header(); ?>

<section id="mainContent"> 
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="post">
            
            <h4><?php the_title('',' | '); ?><?php echo the_time('F, Y');?></h4>

      	    <p><?php the_content(); ?></p>        

	      <?php endwhile; ?>
          
        </article>

	<?php endif; // end of the loop. ?>

</section>

<?php get_footer(); ?>