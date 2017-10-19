	<footer class="site-footer">
                    <nav class="a_site_footer">

                    	 <?php 

                        $args = array(
                            'theme_location' => 'footer'
                        );

                        ?>
                        <?php wp_nav_menu(); ?>
                    </nav>

		<p> <?php bloginfo ('name')?> -&copy; <?php echo date ('Y');?></p>
    </footer>
    </div> <!-- Closing Div for container-->

    <?php wp_footer(); ?>
    </body>
    </html>