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

          <?php if (is_page( 'Research' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-research' ) ); ?>
         
          <?php elseif (is_page( 'People' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-people' ) ); ?>

          <?php elseif (is_page( 'Publications' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-publications' ) ); ?>

          <?php elseif (is_page( 'News and Resources' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-left-news' ) ); ?>

          <?php else : ?>
          <?php if ( dynamic_sidebar( 'featured-left-front' ) ); ?>
          <?php endif; ?>
         
         </div>
        <div id="featuredRight" class="col-md-6 col-sm-12">
          
          <?php if (is_page( 'People' ) ) : ?>
          <?php if ( dynamic_sidebar( 'featured-right-job' ) ); ?>

          <?php else : ?>
          <?php if ( dynamic_sidebar( 'featured-left-focus' ) ); ?>
          <?php endif; ?>
          
       </div>    
      </div>