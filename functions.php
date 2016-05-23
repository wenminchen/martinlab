<?php
/**
 * martinlab functions and definitions
 *
 * @package martinlab
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'martinlab_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function martinlab_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( 'martinlab_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on martinlab, use a find and replace
	 * to change 'martinlab' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'martinlab', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Primary Menu', 'martinlab' ),
		) );

}
endif; // martinlab_setup
add_action( 'after_setup_theme', 'martinlab_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 * The approach used is different from wordpress recommended method
 * The code was based on Zac Gordon's code (https://wp.zacgordon.com/2013/06/12/create-a-function-to-create-wordpress-widgets/)
 */
function martinlab_create_widget( $name, $id, $description ) {
	register_sidebar( array(
		'name'          => __( $name ),
		'id'            => $id,
		'description' => __( $description ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
martinlab_create_widget( 'Home Sidebar', 'home-sidebar', 'Display on the side of homepage' );
martinlab_create_widget( 'Resources Sidebar', 'resources-sidebar', 'Displays on the side of page with sidebar' );
martinlab_create_widget( 'Featured Right Focus', 'featured-right-focus', 'Displays on the right of featured section' );
martinlab_create_widget( 'Featured Right Job', 'featured-right-job', 'Displays on the right of featured section' );
martinlab_create_widget( 'Featured Left Front', 'featured-left-front', 'Displays on the left of featured section' );
martinlab_create_widget( 'Featured Left Research', 'featured-left-research', 'Displays on the left of featured section' );
martinlab_create_widget( 'Featured Left People', 'featured-left-people', 'Displays on the left of featured section' );
martinlab_create_widget( 'Featured Left Publications', 'featured-left-publications', 'Displays on the left of featured section' );
martinlab_create_widget( 'Featured Left News', 'featured-left-news', 'Displays on the left of featured section' );

/**
 * Enqueue scripts and styles
 */
function martinlab_scripts() {

	// Import the necessary Bootstrap WP CSS additions
	wp_enqueue_style( 'martinlab-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load Font Awesome css
	wp_enqueue_style( 'martinlab-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	//Add google fonts
	wp_enqueue_style( 'martinlab-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Lato|Varela+Round|Shadows+Into+Light|Oswald');

	// load martinlab styles (includes bootstrap stylesheet generate from less)
	wp_enqueue_style( 'martinlab-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('martinlab-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( 'martinlab-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( 'martinlab-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'martinlab-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

	wp_enqueue_script( 'martinlab-scriptsjs', get_template_directory_uri() . '/includes/js/scripts.js', array('jquery', 'martinlab-bootstrapjs'), '', true );

	// load HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
	wp_enqueue_script( 'martinlab-htm5shivjs', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js');
	wp_script_add_data( 'martinlab-htm5shivjs', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'martinlab-respondjs', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
	wp_script_add_data( 'martinlab-respondjs', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'martinlab_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';

/**
 * Adds WooCommerce support
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
