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
        <div class="description">
            <?php the_content(); ?>
        </div>
        
        <span class="separator"></span>
        <div class="models">
            <h1>Modelos de casas</h1>
            <?php $models = rwmb_meta( 'rw_project_model', 'type=image&size=large' ); 
             if ( $models ) {
                    $i = 0;
                ?>
             
               
                        
                     <?php foreach ( $models as $model ){
                            $i++;
                        ?>
                         <a href="<?php echo $model['url'] ?>" class="btn btn-model" title="model">Modelo <?php echo $i; ?></a>
                         
                      
                      <?php } 

      
              }
            ?>
            <div class="models-note"> 
              *Imagenes con fines ilustrativos, precios sujetos a disponibilidad. Cuota calculada con prima de 15%,
                y es principal más intereses. No incluye seguros ni gastos. Cuota mensual calculada con una tasa de
                6.5% a 30 años plazo. El precio corresponde a casas terminadas. Crédito otorgado por un tercero. 
                Aprobación de crédito sujeta a análisis.
            </div>
  
        </div>
    </div>
    <div class="page-projectMedia">
        
        <div class="prices">
            <div class="prices-get">
                <span class="prices-getText">Precio desde:</span>
                <span class="prices-getNumber">$<?php echo rwmb_meta( 'rw_price'); ?></span>
            </div>
            <div class="prices-cuota">
                <span class="prices-cuotaText">Cuota desde:</span>
                <span class="prices-cuotaNumber">$<?php echo rwmb_meta( 'rw_cuota'); ?></span>
            </div>
            <div class="prices-apartado">
                <span class="prices-apartadoText">Separe la suya con:</span>
                <span class="prices-apartadoNumber">$<?php echo rwmb_meta( 'rw_apartado'); ?></span>
            </div>
        </div>
        <div class="map">
            
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
            <!--<img src="<?php echo get_template_directory_uri();  ?>/img/map.jpg" alt="mapa" />-->
        </div>
    </div>
    

</article><!-- #post-## -->
