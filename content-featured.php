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
          <h3 class="screen-reader-text">Open Positions</h3>
          <div class="pull-right bioLogo hidden-sm hidden-xs">
              <a href="https://biology.mit.edu/" target="_blank"><img src="<?php bloginfo('template_directory');?>/includes/img/biology_logo_141x35.png" alt="Biology Department logo" class="mit-bio-logo" /></a>
          </div>
          <div style="clear: both;"></div>
          <p><span class="pheading">Interested in Joining the Lab?</span></p>
          <p><?php if ( dynamic_sidebar( 'featured-right-job' ) ); ?></p>

          <?php else : ?>
          <h3 class="screen-reader-text">Research in Focus</h3>
          <div class="pull-right bioLogo hidden-sm hidden-xs">
              <a href="https://biology.mit.edu/" target="_blank"><img src="<?php bloginfo('template_directory');?>/includes/img/biology_logo_141x35.png" alt="Biology Department logo" class="mit-bio-logo" /></a>
          </div>
          <div style="clear: both;"></div>
          <p><span class="pheading">Research in Focus</span></p>
          <p><?php if ( dynamic_sidebar( 'featured-right-focus' ) ); ?></p>
          <?php endif; ?>
          
       </div>    
      </div>