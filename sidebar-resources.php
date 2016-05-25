<?php
/**
 * The sidebar for News and Resources page
 *
 * @package martinlab
 */
?>

	<div class="col-md-3 col-sm-4 resources">
	   <h2>Resources</h2>
	   <!--if no dynamic sidebar then display the message.-->
	    <?php if ( ! dynamic_sidebar( 'resources-sidebar' ) ): ?>

		<h3>Sidebar Setup</h3>
		<p>Please add widgets to the page sidebar to have them display here.</p>	

		<?php endif; ?>
	</div> <!-- end resources -->
</div><!-- end row -->