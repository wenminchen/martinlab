<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package martinlab
 */

get_header(); ?>

<!-- image carousel -->
    <section id="featuredArea">
      <h2 class="screen-reader-text">Featured Area</h2>
      <h3 class="screen-reader-text">Image Carousel</h3>

      <?php 
        get_template_part('content', 'carousel'); 
        get_template_part('content', 'featured'); 
      ?>

    </section><!-- end featuredArea -->  

<!-- main content -->
    <section id="mainContent"> 

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>


	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>