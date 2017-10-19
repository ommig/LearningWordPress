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
        <h5 class="a_sub_title"> <?php bloginfo('description');?> 
            <?php if (is_page(30)) { ?>
            ---Thanks for view this page.
            <?php }?>
        </h5> 


        <nav class="a_site_header">
           <?php 
           $args = array(
           'theme_location' => 'primary'
           );



           $args2 = array(
               'theme_location'        => 'primary',
               'container'             => 'div',
               'container_class'       => 'collapse navbar-collapse',
               'container_id'          => 'navbarSupportedContent',
               'menu_class'            => 'navbar-nav mr-auto',
               'menu_id'               => '',
               'before'                => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
           );

           ?>
           <?php wp_nav_menu($args); ?>
       </nav>


       
<!--         <?php wp_nav_menu($args2); ?>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Something</a>
                    </li>
                </ul>
            </div>
            <?php wp_nav_menu($args2); ?>
        </nav> -->
    </header>
