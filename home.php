<?php
/**
 * The template used for displaying blog listing page (News and Resources page in this case)
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
        <div class="col-md-9 col-sm-8 news">
          <h2>Lab News</h2>
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <h5><?php the_title('',' | '); ?><?php echo the_time('F, Y');?></h5>

            <p><?php the_content(); ?></p> 
            <p>&nbsp;</p>       

          <?php endwhile; ?>

          <?php martinlab_paging_nav(); endif; ?>
         
        </div>

    <?php get_sidebar( 'resources' ); ?>

	</section>
      
<?php get_footer(); ?>