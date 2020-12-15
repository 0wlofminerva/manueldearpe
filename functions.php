<?php 

// Registter Custom Navigation Walker
	require_once get_template_directory() . '/template-parts/navbar.php';

function tema1_agregar_css_js(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('bootstrtap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');
	// wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/font?????awesome.css');

	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array ( 'jquery' ), '1.14', true);

	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ( 'popper' ), '4.3', true);



	wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/ea529ee051.js');




	// JS Personalizados
	wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('bootstrap-js'), '1.0', true);


}
add_action('wp_enqueue_scripts', 'tema1_agregar_css_js');

function tema1_setup(){

// Soporte Imagenes Destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }

 add_theme_support( 'title-tag' );


}
 add_action( 'after_setup_theme', 'tema1_setup' );

 // Agregar Sidebar
 function tema1_widgets(){
 	register_sidebar(array(
 		'id' => 'widgets-derecha',
 		'name' => __('Widget Derecha'),
 		'description' => __( 'Arrastra lo que quieras' ),
 		'before_widget' => '<div class="card-body bluu_wi">',
 		'after_widget' => '</div>',
 		'before_title' => '<h4>',
 		'after_title' => '</h4><hr>'
 	));
 }
 add_action('widgets_init', 'tema1_widgets');

// Registrar Menus
 function tema1_register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menú Superior' ),
      'menu-secundario' => __( 'Menú Inferior' ),
      'menu-terciario' => __( 'Menú Social' )

     )
   );
 }
 add_action( 'init', 'tema1_register_my_menus' );

// 19108 15:12pm


//custome post register_nav_menus
add_action( 'init', 'custom_bootstrap_slider' );
/**

    Register a Custom post type for.
    */
    function custom_bootstrap_slider() {
    $labels = array(
    'name' => _x( 'Slider', 'post type general name'),
    'singular_name' => _x( 'Slide', 'post type singular name'),
    'menu_name' => _x( 'Bootstrap Slider', 'admin menu'),
    'name_admin_bar' => _x( 'Slide', 'add new on admin bar'),
    'add_new' => _x( 'Add New', 'Slide'),
    'add_new_item' => __( 'Name'),
    'new_item' => __( 'New Slide'),
    'edit_item' => __( 'Edit Slide'),
    'view_item' => __( 'View Slide'),
    'all_items' => __( 'All Slide'),
    'featured_image' => __( 'Featured Image', 'text_domain' ),
    'search_items' => __( 'Search Slide'),
    'parent_item_colon' => __( 'Parent Slide:'),
    'not_found' => __( 'No Slide found.'),
    'not_found_in_trash' => __( 'No Slide found in Trash.'),
    );

    $args = array(
    'labels' => $labels,
    'menu_icon' => 'dashicons-star-half',
    'description' => __( 'Description.'),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail')
    );

    register_post_type( 'slider', $args );
    }



// 191009



    // register_post_type( $prelaunch_Price, 'prelaunch_price' ); 
    // register_post_type( 'prelaunch_price', $prelaunch_Price  ); 

// Add new post type portfolio item
function my_custom_portfolio_item() {
    $args = array();
    register_post_type( 'portfolio_item', $args );
}

add_action( 'init', 'my_custom_portfolio_item' );

// 

function my_custom_post_type() {
    $args = array();
    register_post_type( 'custom_post', $args );
}

add_action( 'init', 'my_custom_post_type' );

// 


// 191010

// Advance Custom Fields
// $income_feature_image   = get_field('income_feature_image');
// $income_section_title   = get_field('income_section_title');
// $income_section_desc    = get_field('income_section_description');
// $reason_1               = get_field('reason_1_title');
// $reason_1_descripition  = get_field('reason_1_description');
// $reason_2               = get_field('reason_2_title');
// $reason_2_descripition  = get_field('reason_2_description');

// RReplaces tthe  excerpt 'more' ttextt by a link.

function new_excerpt_more($more) {
    global $post;
    return '... <a class="morertag" href="' . get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
