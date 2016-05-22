<?php
/**
 * The template used for displaying carousels on all pages
 *
 * @package martinlab
 */
?>

      <?php 

        if (is_page( 'People' ) )  :

            $args = array(
              'post_type'     => 'carousel',
              'category_name' => 'people'
            );
            $the_query = new WP_Query( $args );

        else :

            $args = array(
              'post_type'     => 'carousel',
              'category_name' => 'home'
            );
            $the_query = new WP_Query( $args );

        endif; 
      ?>  

      <div id="imgCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">

          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
          <li data-target="#imgCarousel" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>
            
          <?php endwhile; endif; ?>

        </ol>

           <?php rewind_posts(); ?>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">

              <?php
                $thumbnail_id = get_post_thumbnail_id(); 
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
              ?>
              <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>">
              <div class="carousel-caption">
                <h4 class="hidden-xs"><?php the_title(); ?></h4>
                <?php if(is_page( 'People' ) ): ?>  
                  <?php 
                  $link_value = get_post_meta($post->ID, 'link', true);
                  // check if the custom field has a value
                  if( ! empty( $link_value ) ) {
                  ?>
                  
                  <a href="<?php echo $link_value ?>"target="_blank" class="btn btn-info hidden-xs">View Facebook album</a>
                  <?php } ?>

                <?php else : ?>
                  <div class="hidden-xs"><?php the_content(); ?></div>

                  <?php if( $the_query->current_post == 0 ):?>
                  <a href="#warhol" data-toggle="modal" class="btn btn-info hidden-sm hidden-xs">View full image</a>
                  <a href="#warhol" data-toggle="modal" class="btn btn-info btn-sm hidden-lg hidden-md">View full image</a>
                  <?php endif; ?>

                  <?php if( $the_query->current_post == 1 ):?>
                  <a href="#radial" data-toggle="modal" class="btn btn-info hidden-sm hidden-xs">View full image</a>
                  <a href="#radial" data-toggle="modal" class="btn btn-info btn-sm hidden-lg hidden-md">View full image</a>
                  <?php endif; ?>

                  <?php if( $the_query->current_post == 2 ):?>
                  <a href="#loss" data-toggle="modal" class="btn btn-info hidden-sm hidden-xs">View full image</a>
                  <a href="#loss" data-toggle="modal" class="btn btn-info btn-sm hidden-lg hidden-md">View full image</a>
                  <?php endif; ?>

                <?php endif; ?>
              </div>
            </div>
            
          <?php endwhile; endif; ?>

        </div><!-- end carousel-inner -->        
          <!-- carousel controls -->
          <a class="left carousel-control" href="#imgCarousel" role="button" data-slide="prev">
            <span class="control-prev"><i class="fa fa-chevron-circle-left fa-2x"></i></span><!--<span class="glyphicon glyphicon-chevron-left"></span>-->
          </a>
          <a class="right carousel-control" href="#imgCarousel" role="button" data-slide="next">
            <span class="control-next"><i class="fa fa-chevron-circle-right fa-2x"></i></span><!--<span class="glyphicon glyphicon-chevron-right"></span>-->
          </a>
      </div><!-- end imgCarousel -->