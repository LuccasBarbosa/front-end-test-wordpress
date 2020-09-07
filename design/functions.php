<?php

add_image_size( 'adesao', 385, 789, true);
add_image_size( 'image-post', 362, 362, true);


// LIMITAR EXCERPT
function custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length');


add_action('init', 'register_nav_menus_on_init');
 
function register_nav_menus_on_init() {
	register_nav_menus(array(
		'top-header' => 'Top Header',
		'header-menu' => 'Top Pages Menu',
		'footer-menu' => 'Footer Link Menu',
	));
}


add_theme_support( 'custom-logo' );

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


// LIMITAR TITULO
function max_title_length( $title ) {
  $max = 30;

  if( strlen( $title ) > $max ) {
     return substr( $title, 0, $max ). "...";
  } else {
     return $title;
  }
}

add_filter ('the_title', 'max_title_length');


// RESUMO
add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
    add_action( 'init', 'add_support_to_pages' );
}

function add_support_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

// WIDGET
if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'name' => __( 'Widgets para o Rodape' ),
  'id' => 'area-de-widget',
  'description' => __( 'Area de widget do rodape' ),
  'before_widget' => '<div id="%1$s" class="%2$s col-xs-4 col-md-2">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
));

function cria_area_de_widget() {
  if ( is_active_sidebar( 'area-de-widget' ) ) :
    dynamic_sidebar( 'area-de-widget' );
  endif;
  }
  add_action( 'mostra_area_de_widget', 'cria_area_de_widget' );


add_action( 'init', 'custom_slider' );

function custom_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slide'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-star-half',
    'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}


  function scripts() {
    wp_enqueue_style( 'bootstrap_min', get_stylesheet_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'carousel', get_stylesheet_directory_uri().'/css/carousel.css' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.css' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'cep', get_template_directory_uri() . '/js/getCep.js', array(), '', true );
    wp_enqueue_script( 'location', get_template_directory_uri() . '/js/getLocation.js', array(), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );
    wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/jquery.mask.min.js', array(), '', true );
  }

    
    add_action( 'wp_enqueue_scripts', 'scripts' );



  


  


  



