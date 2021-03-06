<?php
/**
 * LamarMcMiller.Me functions and definitions
 *
 * @package LamarMcMiller.Me
 */

if ( ! function_exists( 'lm_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lm_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on LamarMcMiller.Me, use a find and replace
		 * to change 'lm' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lamarmcmiller.me', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary Menu'),
		) );

      add_action( 'after_setup_theme', 'lm_setup' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lm_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 60,
			'width'       => 60,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;

function lm_add_editor_style() {
add_editor_style('/dist/css/editor-style.css');
}
add_action('admin_init', 'lm_add_editor_style');

add_action( 'after_setup_theme', 'lm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lm_content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'lm_content_width', 1120 );
}
add_action( 'after_setup_theme', 'lm_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */

function lm_scripts() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );

   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.css');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/fonts/font-awesome.min.css' );

   wp_register_script('popper', '/src/js/popper.min.js'. false, '', true);

   wp_enqueue_script('jquery',
	get_template_directory_uri() .'/src/js/jquery.min.js',
	array(), '20180315', true);

	wp_enqueue_script('bootstrapjs', get_template_directory_uri().
	'/src/js/bootstrap.min.js', array('jquery'), '20180315', true);

	wp_enqueue_script('bootstrap-hover', get_template_directory_uri() .
	'/src/js/bootstrap-hover.js', array('jquery'), '20180315', true);

	wp_enqueue_script('nav-scroll', get_template_directory_uri() .
	'/src/js/nav-scroll.js', array('jquery'), '20180315', true);

	wp_enqueue_script('navbar-fixed', get_template_directory_uri() .
	'/src/js/navbar-fixed.js', array('jquery'), '20180326', true);

	wp_enqueue_script('navbar-fixed', get_template_directory_uri() .
	'/src/js/waypoints.js', array('jquery'), '20180326', true);

	wp_enqueue_script('navbar-fixed', get_template_directory_uri() .
	'/src/js/main.js', array('jquery'), '20180326', true);

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'gulp-wordpress-javascript', get_template_directory_uri() . '/dist/js/app.min.js', array(), '20180316', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lm_scripts' );


 // Add excerpt support for pages
 function my_add_excerpts_to_pages() {
      add_post_type_support('page', 'excerpt');
 }
 add_action('init', 'my_add_excerpts_to_pages');

// Add excerpt support for posts
 function my_add_excerpts_to_posts() {
      add_post_type_support('post', 'excerpt');
 }
 add_action('init', 'my_add_excerpts_to_posts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widgets file.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Bootstrap NavWalker file.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('get_custom_logo','change_logo_class');

function change_logo_class($html)
{
	$html = str_replace('custom-logo', 'logo-img', $html);
	return $html;
}
//  Remove Wordpress Admin bar
 show_admin_bar(false);
