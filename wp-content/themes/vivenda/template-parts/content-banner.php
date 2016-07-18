<section class="banner">
            <div class='center'>
                <span id=prev-banner><i class="icon-arrow-left"></i></span>
                <span id=next-banner> <i class="icon-arrow-right"></i></span>
            </div>
            <div class="cycle-slideshow" data-cycle-slides=".banner-slide" data-cycle-pager=".banner-pager" data-cycle-timeout="10000"  data-cycle-pager-template="<a href=#></a>" data-cycle-prev="#prev-banner"    data-cycle-next="#next-banner">
                    
                <?php
                          $args = array(
                            'post_type' => 'banners',
                            
                          );
                          $banners = new WP_Query( $args );
                          if( $banners->have_posts() ) {
                            while( $banners->have_posts() ) {
                              $banners->the_post();
                             

                              ?>
                              <?php if ( has_post_thumbnail() ) :

                                $id = get_post_thumbnail_id($post->ID);
                                $thumb_url = wp_get_attachment_image_src($id,'full', true);
                                ?>
                                
                              <div class="banner-slide" style="background-image: url('<?php echo $thumb_url[0] ?>');">
                                    <div class="banner-info">
                                        <!--<span class="banner-text1">
                                            <?php /*echo rwmb_meta( 'rw_text1');*/ ?>
                                        <!--</span>
                                        <span class="banner-text2">
                                            <?php /*echo rwmb_meta( 'rw_text2');*/ ?>
                                        <!--</span>-->
                                        <?php 
                                        $project_id = rwmb_meta( 'rw_project_select'); 
                                         if ( $project_id ) {
                                         $args = array(
                                            'post_type' => 'projects',
                                            'p' => rwmb_meta( 'rw_project_select')
                                          );
                                          
                                          $projects = new WP_Query( $args );
                                        
                                          if( $projects->have_posts() ) {
                                              while( $projects->have_posts() ) {
                                                 $projects->the_post();

                                                        ?>
                                                        <article class="project">
                                                           
                                                            <div class="project-description">
                                                                <h3 class="project-title"><?php the_title(); ?></h3>

                                                                <p><i class="icon icon-map-marker"></i> <?php echo rwmb_meta( 'rw_zone'); ?>, <?php echo rwmb_meta( 'rw_province'); ?></p>
                                                                <?php if(rwmb_meta( 'rw_contact')) { ?>
                                                                 <p><i class="icon icon-mail"></i> info@vivendacr.com</p>
                                                                <?php } ?>
                                                                <?php if(rwmb_meta( 'rw_cuota')) { ?>
                                                                 <p><i class="icon icon-calendar"></i> Cuota desde <?php echo rwmb_meta( 'rw_coin'); ?><?php echo number_format(floatval(rwmb_meta( 'rw_cuota')),0,",","."); ?></p>
                                                                <?php } ?>
                                                                <p><i class="icon icon-<?php echo (rwmb_meta( 'rw_coin') == '$') ? 'dollar': rwmb_meta( 'rw_coin'); ?>"></i> Desde <?php echo rwmb_meta( 'rw_coin'); ?><?php echo number_format(floatval(rwmb_meta( 'rw_price')), 0, ",", "."); ?>
                                                                </p>
                                                            </div>
                                                            <a href="<?php the_permalink(); ?>" class="project-link">Más Detalles</a>
                                                           
                                                           
                                                        </article>

                                                      <?php
                                                          } // cierre while post
                                                        } // cierre if have posts
                                            } // cierre if de project_id
                                            ?>

                                    </div>
                                   <?php $images = rwmb_meta( 'rw_banner_logo', 'type=image&size=medium' ); 
                                   if ( $images ) {?>
                                   
                                   
                                      <div class="banner-logo">
                                           <?php foreach ( $images as $image ){?>
                                               
                                               <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                                            
                                            <?php } ?>

                                           
                                      </div>

                                  <?php } ?>
                                    <span class="restricciones">*Aplican restricciones para cada caso</span>
                              </div>
                                    
                            <?php endif; ?>
                                 
                                 
                                
                                
                              <?php
                            }
                          }
                        ?>

                    
        
                    <div class="banner-pager"></div>
            </div>
            <a href="#contact" class="adv" title="Consulta Aqui">
               
                <!--<span class="adv-1">
                    <span class="adv-title">Sin prima.. <br />Sin fiador.. <br />Coutas fijas..</span>
                </span>-->
                <!--<span class="adv-2">
                     <span class="adv-fina">Teléfono </span><span class="adv-porc">8879-8893</span>
                </span>
                <i class="adv-icon icon-phone"></i>-->
                <span class="adv-contact"><img src="<?php echo get_template_directory_uri();  ?>/img/consulta-aqui.png" alt="Consulta Aqui" /></span>
            </a>
        </section>