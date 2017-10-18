<?php 

				function learningWordPress_resources (){
        		wp_enqueue_style ('style', get_stylesheet_uri());
        		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
        		wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
        		wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js' );
                }
    				add_action('wp_enqueue_scripts', 'learningWordPress_resources');
?>

