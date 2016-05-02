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

	<div class="page-projectDetails">
        <span class="corner"></span>
        <?php $images = rwmb_meta( 'rw_project_logo', 'type=image&size=medium' ); 
         if ( $images ) {?>
         
         
            <div class="page-projectDetails-logo">
                 <?php foreach ( $images as $image ){?>
                     
                     <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                  
                  <?php } ?>

                 
            </div>

         <?php         
              }else{
                    the_title( '<h1 class="page-projectDetails-title">', '</h1>' ); 
              }
          ?>
        <div class="description">
            <?php the_content(); ?>
        </div>
        <div class="map">
            
            <?php 
                $args = array(
                    'type'         => 'map',
                    'width'        => '500px',
                    'height'       => '300px',
                    'js_options'   => array(
                        'mapTypeId'   => 'ROADMAP',
                        'zoomControl' => false,
                        'zoom'        => 10, // You can use 'zoom' inside 'js_options' or as a separated parameter
                    )
                );
            echo rwmb_meta( 'rw_map', $args); ?>
            <!--<img src="<?php echo get_template_directory_uri();  ?>/img/map.jpg" alt="mapa" />-->
        </div>
         <div class="models-note">
              <?php echo rwmb_meta( 'rw_notes'); ?> 
              
            </div>
        
        
       
    </div>
    <div class="page-projectMedia">
        
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
        <div class="files">
          <?php if(rwmb_meta( 'rw_video')) : ?> 
            <a href="<?php echo rwmb_meta( 'rw_video'); ?>" class="btn-video">Ver video del proyecto <i class='icon icon-youtube'></i></a>
          <?php endif ?>
          <?php $files = rwmb_meta( 'rw_project_file' );              // Since 4.8.0
              $files = rwmb_meta( 'rw_project_file', 'type=file' ); // Prior to 4.8.0
              if ( !empty( $files ) ) {
                  foreach ( $files as $file ) {
                      echo "<a href='{$file['url']}' title='{$file['title']}' class='btn-pdf'>Descargue PDF del proyecto <i class='icon icon-download'></i></a>";
                  }
              }
          ?>
          
        </div>
         <span class="separator"></span>
        <div class="models">
            <h1>Modelos de casas</h1>
            
                <?php $models = rwmb_meta( 'rw_project_model', 'type=image&size=large' );
            
               if ( $models ) {
                      $i = 0;
                  ?>
                  <div class="gallery">
                 
                      
                       <?php foreach ( $models as $model ){
                              $i++;
                          
                           if ( $i == 1 ) {?>
                              
                              <a href="<?php echo $model['url'] ?>" class="btn btn-model" title="Modelo 1 - <?php echo $i; ?>" >Modelo 1</a>
                           
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
                              
                              <a href="<?php echo $model['url'] ?>" class="btn btn-model" title="Modelo 2- <?php echo $i; ?>">Modelo 2</a>
                           
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
                              
                              <a href="<?php echo $model['url'] ?>" class="btn btn-model" title="Modelo 3 - <?php echo $i; ?>">Modelo 3</a>
                           
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
                              
                              <a href="<?php echo $model['url'] ?>" class="btn btn-model" title="Modelo 4 - <?php echo $i; ?>">Modelo 4</a>
                           
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
                              
                              <a href="<?php echo $model['url'] ?>" class="btn btn-model" title="Modelo 5 - <?php echo $i; ?>">Modelo 5</a>
                           
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
                              
                              <a href="<?php echo $model['url'] ?>" class="btn btn-model" title="Modelo 6 - <?php echo $i; ?>">Modelo 6</a>
                           
                           <?php }else { ?>
                              <a href="<?php echo $model['url'] ?>" title="Modelo 6 - <?php echo $i; ?>"></a>
                        <?php }
                      } ?>
                  </div>
                    
            <?php   
             }
              ?>

            
           
  
        </div>
        
    </div>
    

</article><!-- #post-## -->
