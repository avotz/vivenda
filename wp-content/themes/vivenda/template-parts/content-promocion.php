<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vivenda
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div id="contactForm" class="page-promo-contact">
    <p class="page-promo-contact-info">PARA MÁS INFORMACIÓN REGISTRARSE AQUÍ:</p>
    <?php echo do_shortcode ( '[contact-form-7 id="79" title="Formulario Promociones"]' ) ?>
  </div>
	<div class="page-promo">
        
        <?php $images = rwmb_meta( 'rw_promo_logo', 'type=image&size=large' ); 
         if ( $images ) {?>
         
         
            <div class="page-promo-logo">
                 <?php foreach ( $images as $image ){?>
                     
                     <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                  
                  <?php } ?>

                 
            </div>

         <?php         
              }else{
                    the_title( '<h1 class="page-promo-title">', '</h1>' ); 
              }
          ?>

        <div class="description">
            
            <?php the_content();  ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-vivenda"><img class="header-logoImg" src="<?php echo get_template_directory_uri();  ?>/img/logo-color.png" alt="Vivenda" /></a>
        </div>
        <div class="details">
           <h2>Detalles del Proyecto</h2>
           <?php echo rwmb_meta( 'rw_details'); ?>
           
        </div>
        <?php $images = rwmb_meta( 'rw_promo_thumb', 'type=image&size=medium' ); 
            if ( $images ) {?>
           <div class="photos">
              <?php foreach ( $images as $image ){?>
                     
                     <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                  
                  <?php } ?>
           </div>
           <?php         
              }?>
         <div class="location">
            <h2>Ubicación</h2>
           <p><?php echo rwmb_meta( 'rw_location'); ?></p>
           
           <a href="#contactForm" class="anchor btn btn-naranja animated infinite tada">Contáctenos Hoy</a>
         </div>
       <div class="promo-map">
            
            <?php 
                $args = array(
                    'type'         => 'map',
                    'width'        => '640px',
                    'height'       => '300px',
                    'js_options'   => array(
                        'mapTypeId'   => 'ROADMAP',
                        'zoomControl' => false,
                        'zoom'        => 10, // You can use 'zoom' inside 'js_options' or as a separated parameter
                    )
                );
            echo rwmb_meta( 'rw_map', $args); ?>
            
        </div>
        
    </div>
    
    

</article><!-- #post-## -->
