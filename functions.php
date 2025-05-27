<?php 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'skt_juice_and_shakes_lite_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function skt_juice_and_shakes_lite_setup() {
	$GLOBALS['content_width'] = apply_filters( 'skt_juice_and_shakes_lite_content_width', 640 );
	load_theme_textdomain( 'skt-juice-and-shakes-lite', get_stylesheet_directory_uri() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 75,
		'width'       => 200,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'skt-juice-and-shakes-lite' )				
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f7fafc'
	) );
} 
endif; // skt_juice_and_shakes_lite_setup
add_action( 'after_setup_theme', 'skt_juice_and_shakes_lite_setup' );

function skt_juice_and_shakes_lite_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'skt-juice-and-shakes-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-juice-and-shakes-lite' ),
		'id'            => 'fc-1-rfl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'skt-juice-and-shakes-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-juice-and-shakes-lite' ),
		'id'            => 'fc-2-rfl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'skt-juice-and-shakes-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-juice-and-shakes-lite' ),
		'id'            => 'fc-3-rfl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'skt-juice-and-shakes-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'skt-juice-and-shakes-lite' ),
		'id'            => 'fc-4-rfl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );	
}
add_action( 'widgets_init', 'skt_juice_and_shakes_lite_widgets_init' );


add_action( 'wp_enqueue_scripts', 'skt_juice_and_shakes_lite_enqueue_styles' );
function skt_juice_and_shakes_lite_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 

add_action( 'wp_enqueue_scripts', 'skt_juice_and_shakes_lite_child_styles', 99);
function skt_juice_and_shakes_lite_child_styles() {
  wp_enqueue_style( 'skt-juice-and-shakes-lite-child-style', get_stylesheet_directory_uri()."/css/responsive.css" );
} 

function skt_juice_and_shakes_lite_admin_style() {
  wp_enqueue_script('skt-juice-and-shakes-lite-admin-script', get_stylesheet_directory_uri()."/js/skt-juice-and-shakes-lite-admin-script.js");
}
add_action('admin_enqueue_scripts', 'skt_juice_and_shakes_lite_admin_style');

function skt_juice_and_shakes_lite_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_skt_juice_and_shakes_lite_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'skt-juice-and-shakes-lite-about-page-style', get_stylesheet_directory_uri() . '/css/skt-juice-and-shakes-lite-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'skt_juice_and_shakes_lite_admin_about_page_css_enqueue' );

function skt_juice_and_shakes_lite_admin_css_style() {
  wp_enqueue_style('skt-juice-and-shakes-lite-admin-style', get_stylesheet_directory_uri()."/css/skt-juice-and-shakes-lite-admin-style.css");
}
add_action('admin_enqueue_scripts', 'skt_juice_and_shakes_lite_admin_css_style');

function skt_juice_and_shakes_lite_dequeue_skt_plants_custom_js() {
	wp_dequeue_script( 'skt-plants-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '01062020', true );
	wp_dequeue_script( 'skt-plants-customscripts', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'skt_juice_and_shakes_lite_dequeue_skt_plants_custom_js', 20 );

add_action( 'wp_enqueue_scripts', 'skt_juice_and_shakes_lite_child_navigation', 99);
function skt_juice_and_shakes_lite_child_navigation() {
  wp_enqueue_script('skt-juice-and-shakes-lite-custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), null, true );
  wp_enqueue_script( 'skt-juice-and-shakes-lite-child-navigation', get_stylesheet_directory_uri(). '/js/navigation.js');
}

/**
 * Show notice on theme activation
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'skt_juice_and_shakes_lite_activation_notice' );
}
function skt_juice_and_shakes_lite_activation_notice(){
    ?>
    <div class="notice notice-info is-dismissible"> 
        <div class="skt-juice-and-shakes-lite-notice-container">
        	<div class="skt-juice-and-shakes-lite-notice-img"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/icon-skt-templates.png' ); ?>" alt="<?php echo esc_attr('SKT Templates');?>" ></div>
            <div class="skt-juice-and-shakes-lite-notice-content">
            <div class="skt-juice-and-shakes-lite-notice-heading"><?php echo esc_html__('Thank you for installing SKT Juice and Shakes Lite!', 'skt-juice-and-shakes-lite'); ?></div>
            <p class="largefont"><?php echo esc_html__('SKT Juice and Shakes Lite comes with 150+ ready to use Elementor templates. Install the SKT Templates plugin to get started.', 'skt-juice-and-shakes-lite'); ?></p>
            </div>
            <div class="skt-juice-and-shakes-lite-clear"></div>
        </div>
    </div>
    <?php
}

if ( ! function_exists( 'skt_juice_and_shakes_lite_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function skt_juice_and_shakes_lite_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

function skt_juice_and_shakes_lite_load_dashicons(){
   wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'skt_juice_and_shakes_lite_load_dashicons', 999);

/**
 * Retrieve webfont URL to load fonts locally.
 */
/**
* Enqueue theme fonts.
*/
function skt_juice_and_shakes_lite_fonts() {
$fonts_url = skt_juice_and_shakes_lite_get_fonts_url();

// Load Fonts if necessary.
if ( $fonts_url ) {
	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
	wp_enqueue_style( 'skt-juice-and-shakes-lite-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
}
}
add_action( 'wp_enqueue_scripts', 'skt_juice_and_shakes_lite_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'skt_juice_and_shakes_lite_fonts', 1 );
 
function skt_juice_and_shakes_lite_get_fonts_url() {
	$font_families = array(
		'Poppins:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
		'Assistant:200,300,400,500,600,700,800',
		'Anton:200,300,400,500,600,700,800',
		'Chewy:400',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'skt_juice_and_shakes_lite_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}

define('SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_URL','https://www.sktthemes.org');
define('SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_PRO_THEME_URL','https://www.sktthemes.org/shop/juice-bar-wordpress-theme/');
define('SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_FREE_THEME_URL','https://www.sktthemes.org/shop/free-smoothie-wordpress-theme/');
define('SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_THEME_DOC','https://www.sktthemesdemo.net/documentation/skt-plants-doc');
define('SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_LIVE_DEMO','https://sktperfectdemo.com/themepack/juice/');
define('SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_THEMES','https://www.sktthemes.org/themes');
define('SKT_JUICE_AND_SHAKES_LITE_SKTTHEMES_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function skt_juice_and_shakes_lite_remove_parent_function(){	 
	remove_action( 'admin_notices', 'skt_plants_activation_notice');
	remove_action( 'admin_menu', 'skt_plants_abouttheme');
	remove_action( 'customize_register', 'skt_plants_customize_register');
	remove_action( 'wp_enqueue_scripts', 'skt_plants_custom_css');
}
add_action( 'init', 'skt_juice_and_shakes_lite_remove_parent_function' );

function skt_juice_and_shakes_lite_remove_parent_theme_stuff() {
    remove_action( 'after_setup_theme', 'skt_plants_setup' );
}
add_action( 'after_setup_theme', 'skt_juice_and_shakes_lite_remove_parent_theme_stuff', 0 );

function skt_juice_and_shakes_lite_unregister_widgets_area(){
	unregister_sidebar( 'fc-1' );
	unregister_sidebar( 'fc-2' );
	unregister_sidebar( 'fc-3' );
}
add_action( 'widgets_init', 'skt_juice_and_shakes_lite_unregister_widgets_area', 11 );

require_once get_stylesheet_directory() . '/inc/about-themes.php';  
require_once get_stylesheet_directory() . '/inc/customizer.php';

add_action( 'wp_enqueue_scripts', 'skt_juice_and_shakes_lite_custom_enqueue_wc_cart_fragments' );
function skt_juice_and_shakes_lite_custom_enqueue_wc_cart_fragments() {
    wp_enqueue_script( 'wc-cart-fragments' );
}

add_filter( 'woocommerce_add_to_cart_fragments', 'skt_juice_and_shakes_lite_mini_cart_count');
function skt_juice_and_shakes_lite_mini_cart_count($fragments){
    ob_start();
    ?>
    <div id="mini-cart-count">
        <?php echo esc_html(WC()->cart->get_cart_contents_count()); ?>
    </div>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}