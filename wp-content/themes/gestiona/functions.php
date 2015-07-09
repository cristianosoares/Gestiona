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
	add_image_size( 'thumb-conhecimento', 364, 190,true );
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

if ( function_exists('register_sidebar') ) {

	register_sidebar(array(

		'name' => 'Barra Lateral',

		'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',

		'after_widget' => '</div>',

		'before_title' => '<h3 class="widget-title">',

		'after_title' => '</h3>',

	));

}
add_action( 'wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts' );
add_action( 'wp_ajax_load-filter', 'prefix_load_cat_posts' );
function prefix_load_cat_posts () {
    $cat_id = $_POST[ 'cat' ];
	$offset = $_POST[ 'off' ];
         $args = array (
        'cat' => $cat_id,
        'posts_per_page' => 10+$offset,
		'offset'         => $offset,
        'order' => 'DESC'

    );

    $posts = get_posts( $args );

    ob_start ();
    foreach ( $posts as $post ) {
    setup_postdata( $post ); 
?>

    <div class="col-sm-6 post-single">
        <?php
			//verifica e coloca thumb
            if ( has_post_thumbnail( $post->ID ) ) {
                
                echo get_the_post_thumbnail( $post->ID, 'thumb-conhecimento',array( 'class' => 'img-responsive' ) );
            }
        ?>
        <div class="post-single-content">
        <span class="post-list-cat">
		<?php 
			$permalinkName = "+ ver mais";
			
			foreach((get_the_category($post->ID)) as $category) {
				if(get_cat_name( $category->category_parent  ) == "Biblioteca"){
					$permalinkName = "download";
				} 
    			echo get_cat_name( $category->category_parent  ).' / '.$category->cat_name;
			}
		 ?>
         </span>
         
        <h2><?php echo get_the_title($post->ID); ?></h2>
        <?php echo apply_filters('the_content', substr(get_the_content(), 0, 200) ); ?>
        <a href="<?php echo get_permalink($post->ID); ?>" class="post-saiba-mais"><?php echo $permalinkName; ?></a>
        </div><!--post-single-content-->
    </div><!--post-single-->

   <?php } wp_reset_postdata();

   $response = ob_get_contents();
   ob_end_clean();

   echo $response;
   die(1);
   }
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/*add_action( 'admin_init', 'wpse_136058_debug_admin_menu' );look for hooks 

function wpse_136058_debug_admin_menu() {

    echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
}
*/
?>