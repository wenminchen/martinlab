<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package martinlab
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<section id="mainContent" class="content-padder error-404 not-found">

		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', '_martinlab' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', 'martinlab' ); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->

	</section><!-- .content-padder -->

<?php get_footer(); ?>