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