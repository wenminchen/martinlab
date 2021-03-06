<?php
/**
 * The template for displaying search forms in martinlab
 *
 * @package martinlab
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'martinlab' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'martinlab' ); ?>">
	</label>
	<!--<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'martinlab' ); ?>">-->
	<button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
</form>
