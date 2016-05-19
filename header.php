<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package martinlab
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); <?php bloginfo( 'name' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<h1 class="hiddenHeader"><?php bloginfo( 'name' ); ?></h1>
    <header id="mainHeader">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <h2 class="hiddenHeader">main navigation</h2> <!-- hide this heading from view using CSS -->
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <?php 
            $sitename = get_bloginfo( 'name' );
            $pieces = explode(' ', $sitename);
            ?>

            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory');?>/includes/img/logo.png" class="logo">
              <span class="labName_part1"> <?php echo $pieces[0] ?></span><span class="labName_part2"><?php echo $pieces[1]; ?></span><br /><span class="tagline"><?php bloginfo( 'description' ); ?></span></a>
          </div><!-- end navbar-header -->
          <div class="navbar-collapse collapse">
            
            <?php 
              $args = array(
                'menu' => 'header-menu',
                'menu_class' => 'nav navbar-nav navbar-right',
                'container' => 'false',
                'walker'    => new wp_bootstrap_navwalker()
              );
              wp_nav_menu ( $args );
            ?>
            
          </div><!-- end navbar-collapse -->
        </div><!-- end container -->
      </nav>
    </header>
  <div class="container">


