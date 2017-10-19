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

 register_nav_menus(array(

 	'primary' => __('Primary menu'),
 	'footer' => __('Footer menu'),
 ));

