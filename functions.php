<?php 

function learningWordPress_resources (){
	wp_enqueue_style ('style', get_stylesheet_uri());
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jQuery'),true );

	wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js' ,array('jQuery','bootstrap_js') ,true);
	}
 add_action('wp_enqueue_scripts', 'learningWordPress_resources');


 // Navigation menu

//  register_nav_menus(array(

//  	'primary' => __('Primary menu'),
//  	'footer' => __('Footer menu'),
//  ));
//  function atg_menu_classes($classes, $item, $args) {
//  	if($args->theme_location == 'primary') {
//  		$classes[] = 'nav-item';
//  	}
//  	return $classes;
//  }
//  add_filter('nav_menu_css_class','atg_menu_classes',1,3);


// //  function add_nav_class($output) {
// //     $output= preg_replace('/<a/', '<a class="nav-link"', $output, 1);
// //     return $output;
// // }
// // add_filter('wp_nav_menu', 'add_nav_class');

function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    // $classes     = implode(' ', $item->classes);
    $item_output = preg_replace('/<a /', '<a class="nav-link"', $item_output, 1);
    return $item_output;
 }
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);

