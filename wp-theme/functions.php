<?php

function wpb_remove_version() {

return '';

}
add_filter('the_generator', 'wpb_remove_version');

add_theme_support( 'post-thumbnails' );

remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );

function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

function mycustom_embed_defaults($embed_size){
  $embed_size['width'] = 620;
  $embed_size['height'] = 360;
  return $embed_size;
  }
  add_filter('embed_defaults', 'mycustom_embed_defaults');

if ( ! function_exists( 'sodaandcookies_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 *
	 * @return void
	 */
	function sodaandcookies_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

if ( ! function_exists('custom_theme_features') ) {

  // Register Theme Features
  function custom_theme_features()  {
  
    // Add theme support for Post Formats
    add_theme_support( 'post-formats', array( 'gallery', 'image' ) );
  
    // Add theme support for Custom Header
    $header_args = array(
      'default-image'          => '',
      'width'                  => 0,
      'height'                 => 0,
      'flex-width'             => false,
      'flex-height'            => false,
      'uploads'                => true,
      'random-default'         => false,
      'header-text'            => false,
      'default-text-color'     => '',
      'wp-head-callback'       => '',
      'admin-head-callback'    => '',
      'admin-preview-callback' => '',
      'video'                  => true,
      'video-active-callback'  => '',
    );
    add_theme_support( 'custom-header', $header_args );
  
    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'gallery' ) );
  
    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );
  }
  add_action( 'after_setup_theme', 'custom_theme_features' );
  
  }
  
/*********************
REMOVE QUERY STRING FROM URL
*********************/

function _remove_script_version( $src ){
$parts = explode( '?', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


?>