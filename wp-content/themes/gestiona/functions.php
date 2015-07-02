<?php 

function scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'scripts_with_jquery' );

function setup_features() {
    add_theme_support( 'post-thumbnails' );
	add_image_size( 'thumb-home', 690, 320,true );
}
add_action( 'after_setup_theme', 'setup_features' );

function register_my_menus() {
  register_nav_menus(
    array(
      'menu' => __( 'Header Menu' )
	 )
  );
}

add_action( 'init', 'register_my_menus' );

/*add_action( 'admin_init', 'wpse_136058_debug_admin_menu' );look for hooks 

function wpse_136058_debug_admin_menu() {

    echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
}
*/
?>