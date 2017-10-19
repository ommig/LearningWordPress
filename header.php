<!DOCTYPE html>
	<html <?php language_attributes(); ?> >
        <head>
            	   <meta charset="<?php bloginfo ('charset');?>">
                   <meta name="viewport" content="width=device-width">
            	<title>
                    <?php  bloginfo('name')?>
                </title>
           	<?php wp_head(); ?>
		</head>
     
    <body <?php body_class(); ?> >
    	<div class="container">
        	<!--  Site Header -->
            	<header class="site-header">



                    <h1><a href="<?PHP echo home_url (); ?>"> <?php bloginfo ('name');?> </a></h1>

                    <span class="a_sub_title"> <?php bloginfo('description');?> </span>                         
                    <nav class="a_site_header">

                         <?php 

                        $args = array(
                            'theme_location' => 'primary'
                        );

                        ?>
                        <?php wp_nav_menu($args); ?>
                    </nav><br>


                </header>
