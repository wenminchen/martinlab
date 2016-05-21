      <?php $page_name = trim( wp_title('',false) ); ?>

      <!-- featured left and featured right region -->
      <div class="row">
        <div id="featuredLeft" class="col-md-6 col-sm-12">

          <?php if ($page_name == 'Research') : ?>
          <?php if ( dynamic_sidebar( 'featured-left-research' ) ); ?>
         
          <?php elseif ($page_name == 'People') : ?>
          <?php if ( dynamic_sidebar( 'featured-left-people' ) ); ?>

          <?php elseif ($page_name == 'Publications') : ?>
          <?php if ( dynamic_sidebar( 'featured-left-publications' ) ); ?>

          <?php elseif ($page_name == 'News and Resources') : ?>
          <?php if ( dynamic_sidebar( 'featured-left-news' ) ); ?>

          <?php else : ?>
          <?php if ( dynamic_sidebar( 'featured-left-front' ) ); ?>
          <?php endif; ?>
         
         </div>
        <div id="featuredRight" class="col-md-6 col-sm-12">
          <?php if ( dynamic_sidebar( 'featured-right' ) ); ?>
       </div>    
      </div>