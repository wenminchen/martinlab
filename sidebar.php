<?php
/**
 * The sidebar for the front page
 *
 * @package martinlab
 */
?>

	<div id="recentNews" class="col-md-4">
	  <h3>Recent News</h3>
	   <!--if no dynamic sidebar then display the message.-->
	    <?php if ( ! dynamic_sidebar( 'home-slider' ) ): ?>

		<h3>Sidebar Setup</h3>
		<p>Please add widgets to the page sidebar to have them display here.</p>	

		<?php endif; ?>
	</div>
</div><!-- end row -->