<?php 
get_header();
	if(have_posts()):
		while (have_posts()) : the_post();?>
		
        
            <article class="a_post_wrapper">
                    <!-- Divide in Row with the help of Bootstrap -->
                <div class="row">
                <div class="col-2"><h2> <?php the_title(); ?></h2></div>
                

               <div class="col-10"> <?php the_content();?></div>

                </div>

                <!-- Divide in Row with the help of Bootstrap -->
            
            </article>

		<?php endwhile;
    else :
    	echo '<p> No Content has been Found</p>';
        
    endif;
    get_footer();
?>


