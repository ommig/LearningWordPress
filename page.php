<?php 
get_header();
	if(have_posts()):
		while (have_posts()) : the_post();?>
		
        
            <article class="a_post_wrapper">
                <h2> <?php the_title(); ?> </a></h2>
                <?php the_content();?>
            </article>

		<?php endwhile;
    else :
    	echo '<p> No Content has been Found</p>';
        
    endif;
    get_footer();
?>
