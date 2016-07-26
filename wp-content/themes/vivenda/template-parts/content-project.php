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
  
  <div class="page-project">
      <?php $images = rwmb_meta( 'rw_project_logo', 'type=image&size=medium' ); 
             if ( $images ) {?>
             
             
                <div class="page-project-logo">
                     <?php foreach ( $images as $image ){?>
                         
                         <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                          <!--<span style="background-image: url('<?php echo $image['url'] ?>');"></span>-->
                      <?php } ?>

                     
                </div>

             <?php         
                  }else{
                        the_title( '<h1 class="page-projectDetails-title">', '</h1>' ); 
                  }
              ?>
              <div class="prices">
                  <div class="prices-get">
                      <span class="prices-getText">Precio desde:</span>
                      <span class="prices-getNumber"><?php echo rwmb_meta( 'rw_coin'); ?><?php echo number_format(floatval(rwmb_meta( 'rw_price')), 0, ",", "."); ?></span>
                  </div>
                  <div class="prices-cuota">
                      <span class="prices-cuotaText">Cuota desde:</span>
                      <span class="prices-cuotaNumber"><?php echo rwmb_meta( 'rw_coin'); ?><?php echo number_format(floatval(rwmb_meta( 'rw_cuota')), 0, ",", "."); ?></span>
                  </div>
                  <div class="prices-apartado">
                      <span class="prices-apartadoText">Separe la suya con:</span>
                      <span class="prices-apartadoNumber"><?php echo rwmb_meta( 'rw_coin'); ?><?php echo number_format(floatval(rwmb_meta( 'rw_apartado')), 0, ",", "."); ?></span>
                  </div>
              </div>
              <div class="details">
               <h2>Detalles del Proyecto</h2>
                <?php the_content(); ?>
              </div>
              <div class="photos">
             
              
                  <?php $models = rwmb_meta( 'rw_project_model', 'type=image&size=large' );
              
                 if ( $models ) {
                        $i = 0;
                    ?>
                    <div class="gallery">
                   
                        
                         <?php foreach ( $models as $model ){
                                $i++;
                            
                             if ( $i == 1 ) {?>
                                
                                <a href="<?php echo $model['url'] ?>" class="btn-model img" title="Modelo 1 - <?php echo $i; ?>" style="background-image: url('<?php echo $model['url'] ?>');" ></a>
                             
                             <?php }else { ?>
                                <a href="<?php echo $model['url'] ?>" title="Modelo 1 - <?php echo $i; ?>" ></a>
                          <?php }
                        } ?>
                    </div>
                      
              <?php   
               }
                ?>
              
              <?php $models = rwmb_meta( 'rw_project_model_2', 'type=image&size=large' );
              
                 if ( $models ) {
                        $i = 0;
                    ?>
                    <div class="gallery">
                   
                        
                         <?php foreach ( $models as $model ){
                                $i++;
                            
                             if ( $i == 1 ) {?>
                                
                                <a href="<?php echo $model['url'] ?>" class="btn-model img" title="Modelo 2- <?php echo $i; ?>" style="background-image: url('<?php echo $model['url'] ?>');"></a>
                             
                             <?php }else { ?>
                                <a href="<?php echo $model['url'] ?>" title="Modelo 2 - <?php echo $i; ?>"></a>
                          <?php }
                        } ?>
                    </div>
                      
              <?php   
               }
                ?>

                <?php $models = rwmb_meta( 'rw_project_model_3', 'type=image&size=large' );
              
                 if ( $models ) {
                        $i = 0;
                    ?>
                    <div class="gallery">
                   
                        
                         <?php foreach ( $models as $model ){
                                $i++;
                            
                             if ( $i == 1 ) {?>
                                
                                <a href="<?php echo $model['url'] ?>" class="btn-model img" title="Modelo 3 - <?php echo $i; ?>" style="background-image: url('<?php echo $model['url'] ?>');"></a>
                             
                             <?php }else { ?>
                                <a href="<?php echo $model['url'] ?>" title="Modelo 3 - <?php echo $i; ?>"></a>
                          <?php }
                        } ?>
                    </div>
                      
              <?php   
               }
                ?>

                <?php $models = rwmb_meta( 'rw_project_model_4', 'type=image&size=large' );
              
                 if ( $models ) {
                        $i = 0;
                    ?>
                    <div class="gallery">
                   
                        
                         <?php foreach ( $models as $model ){
                                $i++;
                            
                             if ( $i == 1 ) {?>
                                
                                <a href="<?php echo $model['url'] ?>" class="btn-model img" title="Modelo 4 - <?php echo $i; ?>" style="background-image: url('<?php echo $model['url'] ?>');"></a>
                             
                             <?php }else { ?>
                                <a href="<?php echo $model['url'] ?>" title="Modelo 4 - <?php echo $i; ?>"></a>
                          <?php }
                        } ?>
                    </div>
                      
              <?php   
               }
                ?>

                <?php $models = rwmb_meta( 'rw_project_model_5', 'type=image&size=large' );
              
                 if ( $models ) {
                        $i = 0;
                    ?>
                    <div class="gallery">
                   
                        
                         <?php foreach ( $models as $model ){
                                $i++;
                            
                             if ( $i == 1 ) {?>
                                
                                <a href="<?php echo $model['url'] ?>" class="btn-model img" title="Modelo 5 - <?php echo $i; ?>" style="background-image: url('<?php echo $model['url'] ?>');"></a>
                             
                             <?php }else { ?>
                                <a href="<?php echo $model['url'] ?>" title="Modelo 5 - <?php echo $i; ?>"></a>
                          <?php }
                        } ?>
                    </div>
                      
              <?php   
               }
                ?>

                <?php $models = rwmb_meta( 'rw_project_model_6', 'type=image&size=large' );
              
                 if ( $models ) {
                        $i = 0;
                    ?>
                    <div class="gallery">
                   
                        
                         <?php foreach ( $models as $model ){
                                $i++;
                            
                             if ( $i == 1 ) {?>
                                
                                <a href="<?php echo $model['url'] ?>" class="btn-model img" title="Modelo 6 - <?php echo $i; ?>" style="background-image: url('<?php echo $model['url'] ?>');"></a>
                             
                             <?php }else { ?>
                                <a href="<?php echo $model['url'] ?>" title="Modelo 6 - <?php echo $i; ?>"></a>
                          <?php }
                        } ?>
                    </div>
                      
              <?php   
               }
                ?>
          </div>
           <div class="location">
              <h2>Ubicación</h2>
             <p><?php echo rwmb_meta( 'rw_location'); ?></p>
             
             <a href="#contactForm" class="anchor btn btn-naranja animated infinite tada">Contáctenos Hoy</a>
            
           </div>
         <div class="promo-map">
              <div class="btns">
                <?php if(rwmb_meta( 'rw_google_maps')) : ?>
                    <a href="<?php echo rwmb_meta( 'rw_google_maps'); ?>" class="btn btn-naranja " target="_blank">Abrir en Google Maps</a>
                 <?php endif ?>
                 <?php if(rwmb_meta( 'rw_waze')) : ?>
                    <a href="<?php echo rwmb_meta( 'rw_waze'); ?>" class="btn btn-naranja " target="_blank">Abrir en Waze</a>
                  <?php endif ?>
              </div>
              
              <?php $images = rwmb_meta( 'rw_project_map', 'type=image&size=large' ); 
             if ( $images ) {?>
             
             
                
                     <?php foreach ( $images as $image ){?>
                         
                         <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                         
                      <?php } ?>

                     
               

             <?php         
                  }
              ?>
              
          </div>

     



  </div>
	<div id="contactForm" class="page-promo-contact">
    <p class="page-promo-contact-info">PARA MÁS INFORMACIÓN REGISTRARSE AQUÍ:</p>
    <?php echo do_shortcode ( '[contact-form-7 id="79" title="Formulario Promociones"]' ) ?>
  </div>
   
        

    

</article><!-- #post-## -->
