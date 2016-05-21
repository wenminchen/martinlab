<?php get_header(); ?>

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
      <h2 class="screen-reader-text">Main Content</h2>
      <div class="row">
        <div id="mainText" class="col-md-8">
          <h3 class="screen-reader-text">Welcome to <?php bloginfo( 'name' ); ?>!</h3>
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
      	  <p><?php the_content(); ?></p>        

	      <?php endwhile; endif; ?>

        </div>

        <?php get_sidebar(); ?>
	   </section>
	
<?php get_footer(); ?>