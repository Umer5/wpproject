<?php


   // load the theme's framework
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname(__FILE__) . '/admin/ReduxCore/framework.php' ) ) {
require_once( dirname(__FILE__) . '/admin/ReduxCore/framework.php' );
}

// load the theme's options 
if ( !isset( $redux_owd ) && file_exists( dirname(__FILE__) . '/admin/sample/sample-config.php' ) ) {
require_once( dirname(__FILE__) . '/admin/sample/sample-config.php' );
}



/**
 * Register our Menu areas.
 *
 */
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

register_sidebar(array('name' => 'Footer Area 1', 'id' => 'footer-area-1', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h2>', 'after_title'   => '</h2>'));
	register_sidebar(array('name' => 'Footer Area 2', 'id' => 'footer-area-2','before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h2>', 'after_title'   => '</h2>'));
	
	global $redux_demo; 
	$footerColumns = (!empty($redux_demo['widget-columns'])) ? $redux_demo['widget-columns'] : '4';
	if($footerColumns == '3' || $footerColumns == '4'){
		register_sidebar(array('name' => 'Footer Area 3', 'id' => 'footer-area-3', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h2>', 'after_title'   => '</h2>'));
	}
	if($footerColumns == '4'){
		register_sidebar(array('name' => 'Footer Area 4', 'id' => 'footer-area-4', 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>', 'before_title'  => '<h2>', 'after_title'   => '</h2>'));
	}
// Load the theme stylesheets
function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	wp_register_style( 'flexslider', get_template_directory_uri() . '/assets/plugins/revolution_slider/css/rs-style.css' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/plugins/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/plugins/fancybox/source/jquery.fancybox.css' );
	wp_enqueue_style( 'settings', get_template_directory_uri() . '/assets/plugins/revolution_slider/rs-plugin/css/settings.css' );
	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/assets/plugins/bxslider/jquery.bxslider.css' );
	wp_enqueue_style( 'metronic', get_template_directory_uri() . '/css/style-metronic.css' );
	wp_enqueue_style( 'blue', get_template_directory_uri() . '/css/themes/blue.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/style-responsive.css' );
	
	
	// Conditionally load the FlexSlider CSS on the homepage
	if(is_page('home')) {
		wp_enqueue_style('flexslider');
	}

}
add_action('wp_enqueue_scripts', 'theme_styles');

// Load the theme scripts
function theme_scripts()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	wp_register_script( 'flexslider', get_template_directory_uri() . '/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/plugins/jquery-1.10.2.min.js' );
	wp_enqueue_script( 'migrate', get_template_directory_uri() . '/assets/plugins/jquery-migrate-1.2.1.min.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js' );
	wp_enqueue_script( 'back-to-top', get_template_directory_uri() . '/assets/plugins/back-to-top.js' );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/plugins/fancybox/source/jquery.fancybox.pack.js' );
	wp_enqueue_script( 'themepunch', get_template_directory_uri() . '/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js' );
	wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/' );
	wp_enqueue_script( 'metronic', get_template_directory_uri() . '/assets/plugins/bxslider/jquery.bxslider.min.js' );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/scripts/app.js' );
	wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/scripts/index.js' );
		
	// Conditionally load the FlexSlider CSS on the homepage
	if(is_page('home')) {
		wp_enqueue_script('flexslider');
	}

}
add_action('wp_enqueue_scripts', 'theme_scripts');

?>

