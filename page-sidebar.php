<?php
/**
 *
 * Template Name: Right Sidebar
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
      <div class="row" > 
        <div class="col-md-9 col-sm-8">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
      	  <p><?php the_content(); ?></p>        

	      <?php endwhile; endif; ?>
        </div><!-- end news -->
	
   <?php get_sidebar( 'resources' ); ?>
   </section> 

<?php get_footer(); ?>