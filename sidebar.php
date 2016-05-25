<?php
/**
 * The sidebar for the front page
 *
 * @package martinlab
 */
?>

	<div id="recentNews" class="col-md-4">
	  <h3>Recent News</h3>

		<?php
		  $args = array(
		    'post_type'     => 'post',
		    'category_name' => 'news',
		    'orderby' => 'date',
		    'posts_per_page' => '3',
		  );
		  $the_query = new WP_Query( $args );
		?>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
   
          <article class="post">
            
            <h5><a href="<?php the_permalink(); ?>"><?php the_title('',' | '); ?></a><?php echo the_time('F, Y');?></h5>

      	    <p><span class="alignleft"><?php the_post_thumbnail();?></span>
      	    <?php the_excerpt(); ?></p>
			<hr>

	      <?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</div><!-- end row -->