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
    	<?php 
        $pagename = explode('|', wp_title( '|', false, 'right' ));
      	?>

      	<h2><?php echo $pagename[0]; ?></h2>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<p><?php the_content(); ?></p> 

		<?php endwhile; ?>


		<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>
	</section>

<?php get_footer(); ?>