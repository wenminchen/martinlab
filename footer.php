<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package martinlab
 */
?>
  <footer id="pageFooter">
      <h2 class="screen-reader-text">Footer</h2>
      <div class="row">
        <div class="col-md-1 hidden-xs hidden-sm footer-left">
          <p class="pull-left"><a href="http://web.mit.edu/" target="_blank"><img src="<?php bloginfo('template_directory');?>/includes/img/MIT-logo.gif" alt="MIT logo" /></a></p>
        </div>
        <div class="col-md-8 col-sm-9 col-xs-8 footer-left">
          <p class="img-responsive pull-left"><span class="hidden-xs"><a href="index.html"><?php bloginfo( 'name' );?></a>
            <img src="<?php bloginfo('template_directory');?>/includes/img/sq_divider_cropped.jpg" alt="square divider" /></span> 31 Ames St, 68-459 <span class="hidden-xs"><img src="<?php bloginfo('template_directory');?>/includes/img/sq_divider_cropped.jpg" alt="square divider" /></span><span class="visible-xs-inline"><br /></span> Cambridge, MA 02139<br />
            <span class="hidden-xs">Copyright &copy; 2010-<?php echo date( 'Y' ); ?>. All rights Reserved. <img src="<?php bloginfo('template_directory');?>/includes/img/sq_divider_cropped.jpg" alt="square divider" /> Website by Wenmin Chen</span><span class="visible-xs-block">&copy; 2010-<?php echo date( 'Y' ); ?><a href="<?php bloginfo( 'url' ); ?>"> <?php bloginfo( 'name' ); ?></a></span></p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-4 footer-right">
          <p class="pull-right img-responsive socialIcon"><a href="https://www.facebook.com/martinlabMIT" target="_blank" ><img src="<?php bloginfo('template_directory');?>/includes/img/facebook-32.png" alt="facebook icon" /></a>&nbsp; &nbsp;<a href="mailto:acmartin@mit.edu"><img src="<?php bloginfo('template_directory');?>/includes/img/email-32.png" alt="email icon" /></a></p>
        </div>
      </div>
    </footer>
  </div><!-- end container -->

  <?php get_template_part('content', 'modal'); ?>

  <?php wp_footer(); ?>
   
  </body>
</html>
