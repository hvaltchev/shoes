<?php
/**
 * sodaandcookies's functions and definitions
 *
 * @package sodaandcookies
 * @since sodaandcookies 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 800; /* pixels */
 
if ( ! function_exists( 'sodaandcookies_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function sodaandcookies_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'sodaandcookies', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'sodaandcookies' ),
        'secondary' => __('Secondary Menu', 'sodaandcookies' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // sodaandcookies_setup
add_action( 'after_setup_theme', 'sodaandcookies_setup' );

function mycustom_embed_defaults($embed_size){
  $embed_size['width'] = 620;
  $embed_size['height'] = 360;
  return $embed_size;
  }
add_filter('embed_defaults', 'mycustom_embed_defaults');

function sodaandcookies_support() {

    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style.css' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );

}

function _remove_script_version( $src ){
    $parts = explode( '?', $src );
    return $parts[0];
    }
    add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
    add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

function wpb_remove_version() {

    return '';
        
    }
    add_filter('the_generator', 'wpb_remove_version');


remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );

function no_wordpress_errors(){
    return 'Something is wrong!';
  }
  add_filter( 'login_errors', 'no_wordpress_errors' );

?>