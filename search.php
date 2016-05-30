<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package martinlab
 */

get_header(); ?>

<section id="mainContent"> 
	<?php if ( have_posts() ) : ?>

		<header>
			<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'martinlab' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</header><!-- .page-header -->

		<?php // start the loop. ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'search' ); ?>

		<?php endwhile; ?>

		<?php martinlab_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; // end of loop. ?>
</section>

<?php get_footer(); ?>