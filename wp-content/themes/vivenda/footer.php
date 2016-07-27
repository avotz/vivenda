<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naturalia
 */

?>

	<footer class="footer">
            <div class="inner">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo"><img class="footer-logoImg" src="<?php echo get_template_directory_uri();  ?>/img/logo-color.png" alt="Vivenda" /></a>
                
                   <?php
					wp_nav_menu(
						 array(
						 	'theme_location' => 'secondary',
						 	'container'       => 'nav',
							'container_class' => 'footer-column footer-menu',
							'container_id'    => '',
							'menu_class'      => 'footer-menu-ul',
							'menu_id'         => '',
						 	 ) 

					);?>
                
                    
               <div class="footer-redes">
                        <a href="#" class="footer-redesLink"><i class="icon-facebook"></i></a>
                        <a href="#" class="footer-redesLink"><i class="icon-twitter"></i></a>
                        <a href="#" class="footer-redesLink"><i class="icon-googleplus"></i></a>
                    </div>
            <div class="footer-contact">
                <h2 class="number-contactTitle">Llámenos al: &nbsp;<span class="number-contactNumber">8879-8893</span></h2>
               
            </div>
                <!--<div class="footer-column footer-contact">
                    <div class="footer-redes">
                        <a href="#" class="footer-redesLink"><i class="icon-facebook"></i></a>
                        <a href="#" class="footer-redesLink"><i class="icon-twitter"></i></a>
                        <a href="#" class="footer-redesLink"><i class="icon-googleplus"></i></a>
                    </div>
                    <div class="number-contact">
                        <h2 class="number-contactTitle">Llámenos al</h2>
                        <h1 class="number-contactNumber">8879-8893</h1>
                    </div>
                </div>-->
            </div>
            <div class="copy">
                Copyright 2016 &copy; <a href="https://www.avotz.com" target="_blank"><i class="icon-avotz"></i></a>. <a href="<?php echo esc_url( home_url( '/terminos-y-condiciones' ) ); ?>">Términos y condiciones</a>
            </div>
        </footer>

	</div><!-- #content -->
    <div class="social-fixed">
        <a href="#" class="social-fixed-link facebook"><i class="icon-facebook"></i></a>
        <a href="#" class="social-fixed-link twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="social-fixed-link googleplus"><i class="icon-googleplus"></i></a>
    </div>
    <?php get_template_part( 'template-parts/float', 'contact' ); ?>

<?php wp_footer(); ?>

</body>
</html>
