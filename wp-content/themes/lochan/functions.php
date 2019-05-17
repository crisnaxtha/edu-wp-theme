<?php
/**
 * lochan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lochan
 */

if ( ! function_exists( 'lochan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lochan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lochan, use a find and replace
		 * to change 'lochan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lochan', get_template_directory() . '/languages' );

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
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'lochan' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'lochan_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lochan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lochan_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lochan_content_width', 640 );
}
add_action( 'after_setup_theme', 'lochan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lochan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lochan' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lochan' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lochan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lochan_scripts() {
	wp_enqueue_style( 'lochan-style', get_stylesheet_uri() );
	wp_enqueue_style( 'lochan-css', get_template_directory_uri() .'/assets/css/style.css' );
	wp_enqueue_style( 'lochan-font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'lochan-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'lochan-bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'lochan-bootstrap-theme', get_template_directory_uri() .'/assets/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'lochan-main-menu', get_template_directory_uri() .'/assets/css/main-menu-styles.css' );
	wp_enqueue_style( 'lochan-owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'lochan-owl-theme-default', get_template_directory_uri() .'/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'lochan-fancy-box', get_template_directory_uri() .'/assets/css/fancybox.min.css' );
	wp_enqueue_style( 'lochan-animate', get_template_directory_uri() .'/assets/css/animate.css' );
	

	wp_enqueue_script( 'lochan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'lochan-jquery', get_template_directory_uri() . '/assets/js/jquery/jquery.js', array(), '' );
	wp_enqueue_script( 'lochan-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery/jquery-migrate.min.js', array(), '' );
	wp_enqueue_script( 'lochan-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-jquery-1.11.2', get_template_directory_uri() . '/assets/js/vendor/jquery-1.11.2.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-jquery-match-height', get_template_directory_uri() . '/assets/js/jquery/jquery-match-height.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-main', get_template_directory_uri() . '/assets/js/main.js', array(), '', true );
	wp_enqueue_script( 'lochan-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-main-menu', get_template_directory_uri() . '/assets/js/main-menu.js', array(), '', true );
	wp_enqueue_script( 'lochan-fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-prettyphoto', get_template_directory_uri() . '/assets/js/prettyPhoto.js', array(), '', true );
	wp_enqueue_script( 'lochan-particle', get_template_directory_uri() . '/assets/js/particles.min.js', array(), '', true );
	wp_enqueue_script( 'lochan-app', get_template_directory_uri() . '/assets/js/app.js', array(), '', true );
	

	wp_enqueue_script( 'lochan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lochan_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/************************ Deepmala Sidebar/ Widgets  *****************************/
require get_template_directory() . '/inc/widgets/widgets-functions/register-widgets.php';
require get_template_directory() . '/inc/widgets/widgets-functions/page-box-widget.php';
require get_template_directory() . '/inc/widgets/widgets-functions/page-box-two-widget.php';
require get_template_directory() . '/inc/widgets/widgets-functions/category-box-widget.php';
require get_template_directory() . '/inc/widgets/widgets-functions/category-box-two-widget.php';
require get_template_directory() . '/inc/widgets/widgets-functions/youtube-widget.php';



