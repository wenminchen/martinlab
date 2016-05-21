<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
    	<h2><?php wp_title(''); ?></h2>
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
      <p><?php the_content(); ?></p>        

	    <?php endwhile; endif; ?>

	</section>  
          
<?php get_footer(); ?>
