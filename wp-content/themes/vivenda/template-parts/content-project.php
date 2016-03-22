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
        <?php $images = rwmb_meta( 'rw_project_logo', 'type=image&size=large' ); 
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
        
        <?php the_content(); ?>

        <?php /*the_title( '<h1>', '</h1>' ); */?>
        <!--<dl class="details">
            <dt class="btn btn-rojo">Información del lugar</dt>
            <dd>
            	<?php the_content(); ?>
            </dd>
            <dt class="btn btn-rojo">Características de lotes</dt>
            <dd>
                <?php echo rwmb_meta( 'rw_lot_info'); ?>
            </dd>
            <dt class="btn btn-rojo">Características de condominios</dt>
            <dd>
              <?php echo rwmb_meta( 'rw_condo_info'); ?>
            </dd>
            
        </dl>-->
        
        

        <div class="models">
            <?php $models = rwmb_meta( 'rw_project_model', 'type=image&size=large' ); 
             if ( $models ) {
                    $i = 0;
                ?>
             
               
                        
                     <?php foreach ( $models as $model ){
                            $i++;
                        ?>
                         <a href="<?php echo $model['url'] ?>" class="btn btn-naranja" title="model">Modelo <?php echo $i; ?></a>
                         
                      
                      <?php } 

      
              }
            ?>

        </div>
    </div>
    <div class="page-projectMedia">
        <!--<div class="plan-master">
            <h2>Fotos</h2>
            <?php 
                $images = rwmb_meta( 'rw_project_thumb', 'type=image&size=thumbnail' ); 
                foreach ( $images as $image )
                    {?>
                       
                        <a href="<?php echo $image['full_url'] ?>" data-effect="mfp-zoom-out">
                            <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                        </a>

                    <?php
                      
                     }
                ?>
            
        </div>-->
        <div class="map">
            <h2>Ubicación</h2>
            <?php 
                $args = array(
                    'type'         => 'map',
                    'width'        => '640px',
                    'height'       => '480px',
                    'js_options'   => array(
                        'mapTypeId'   => 'ROADMAP',
                        'zoomControl' => false,
                        'zoom'        => 10, // You can use 'zoom' inside 'js_options' or as a separated parameter
                    )
                );
            echo rwmb_meta( 'rw_map', $args); ?>
            <!--<img src="<?php echo get_template_directory_uri();  ?>/img/map.jpg" alt="mapa" />-->
        </div>
    </div>
    <div class="prices">
            <div class="prices-cuota">
                <span class="prices-cuotaText">Precio desde</span>
                <span class="prices-cuotaNumber">$<?php echo rwmb_meta( 'rw_price'); ?></span>
            </div>
            <div class="prices-get">
                <span class="prices-getText">Su casa desde</span>
                <span class="prices-getNumber"><?php echo rwmb_meta( 'rw_area'); ?></span>
            </div>
        </div>

</article><!-- #post-## -->
