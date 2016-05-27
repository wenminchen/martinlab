<?php
/**
 * The template used for displaying featured section on all pages
 *
 * @package martinlab
 */
?>

      <!-- featured left and featured right region -->
      <div class="row">
        <div id="featuredLeft" class="col-md-6 col-sm-12">
          <h3 class="screen-reader-text">Featured Videos</h3>
          
          <?php if (is_page( 'Research' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-research' ) ); ?>
         
          <?php elseif (is_page( 'People' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-people' ) ); ?>

          <?php elseif (is_page( 'Publications' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-publications' ) ); ?>

          <?php elseif (is_page( 'Home' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-front' ) ); ?>

          <?php else : ?>
          <?php if ( dynamic_sidebar( 'featured-left-news' ) ); ?>
          <?php endif; ?>
         
         </div>
        <div id="featuredRight" class="col-md-6 col-sm-12">

          <?php if (is_page( 'People' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-right-job' ) ); ?>

          <?php else : ?>
          <?php if ( dynamic_sidebar( 'featured-right-focus' ) ); ?>
          <?php endif; ?>
          
       </div>    
      </div>