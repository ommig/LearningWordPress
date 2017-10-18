	<footer class="site-footer">
  					<nav class="site-nav">
                        <?php wp_nav_menu(); ?>
						    <?php
						    $args=array(
						    	'theme_location' => 'footer'
						    );
						    ?>

                    </nav>

		<p> <?php bloginfo ('name')?> -&copy; <?php echo date ('Y');?></p>
    </footer>
    </div> <!-- Closing Div for container-->

    <?php wp_footer($args); ?>
    </body>
    </html>