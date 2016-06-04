<?php

//require 'inc/custom-routes.php';
require 'inc/custom-routes.php';

require 'inc/angular-enqueue.php';


class angularjs_wp_theme {
	
	function init() {
		
		add_action( 'init', array( $this, 'register_my_menus' ) );
		add_action( 'init', array( $this, 'register_my_sidebar' ) );
		add_action( 'after_setup_theme', array( $this, 'add_awesome_theme_support' ) );
		add_action( 'admin_init', array( $this, 'apiCheck' ) );
		
		$angularScripts = new angular_enqueue();
		$angularScripts->init();
		
		$ang_routes = new angular_theme_routes();
		$ang_routes->__init();
		
	}
	
	function apiCheck(){
		
		if ( !class_exists( 'WP_REST_Response' ) ) {
		  add_action( 'admin_notices', array( $this, 'apiError' ) );
		} 
		
	}
	function apiError(){
		
		echo '<div class="error"><p><strong>JSON REST API</strong> must be installed and activated for this theme to work properly</p></div>';
		
	}

	/* THEME SUPPORT */
	function add_awesome_theme_support(){
		
		add_theme_support( 'post-thumbnails' );
		add_post_type_support( 'page', 'excerpt' );
		
	}

	// REGISTER MENUS
	function register_my_menus() {
		
	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'footer-menu' => __( 'Footer Menu' )
	    )
	  );
	  
	}

	//REGISTER SIDEBAR
	function register_my_sidebar() {
		
		register_sidebar(array(
			'name' 			=> 'Right Side',
			'id' 			=> 'right-sidebar',
			'before_widget' => '<section>',
			'after_widget' 	=> '</section>',
			'before_title' 	=> '<h4>',
			'after_title' 	=> '</h4>'
		));
		
	}

}

$angularJStheme = new angularjs_wp_theme();
$angularJStheme->init();








// The register_post_type() function is not to be used before the 'init'.
add_action( 'init', 'add_deed_content_type' );

/* Here's how to create your customized labels */
function add_deed_content_type() {
  $labels = array(
    'name' => _x( 'Deed', 'post type general name' ),
    'singular_name'     => _x( 'Deed', 'post type singular name' ),
    'add_new'           => _x( 'Add New', 'deed' ),
    'add_new_item'      => __( 'Add New deed' ),
    'edit_item'         => __( 'Edit Deed ' ),
    'new_item'          => __( 'New Deed ' ),
    'view_item'         => __( 'View Deed' ),
    'search_items'      => __( 'Search Deeds' ),
    'not_found'         =>  __( 'No deeds found' ),
    'not_found_in_trash' => __( 'No deeds found in Trash' ),
    'parent_item_colon' => ''
  );

  // Create an array for the $args
  $args = array( 'labels' => $labels, 
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 15,
    'menu_icon' => 'dashicons-smiley',
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' )
  ); 

  register_post_type( 'deed', $args ); 
}

add_action( 'init', 'create_deed_taxonomies', 0 );

function create_deed_taxonomies() {

  // Taxonomy for Deeds
  $labels = array(
    'name' => _x( 'Deed Category', 'taxonomy general name' ),
    'singular_name'     => _x( 'Deed Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Deed Categories' ),
    'all_items'         => __( 'All Deed Categories' ),
    'parent_item'       => __( 'Parent Deed Categories' ),
    'parent_item_colon' => __( 'Parent Deed Categories:' ),
    'edit_item'         => __( 'Edit Deed Category' ),
    'update_item'       => __( 'Update Deed Category' ),
    'add_new_item'      => __( 'Add New Deed Category' ),
    'new_item_name'     => __( 'New Deed Category Name' ),
    'menu_name'         => __( 'Deed Categories' ),
  );  

  register_taxonomy( 'deeds', array( 'deed' ), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'public' => true,
  ));
}



?>