
<section id="projects" class="projects">
            <div class="inner">
                <div class="projects-title">
                    <h2>Nuestros Proyectos</h2>
                    <h4>Lotificaciones, residenciales y condominios</h4>
                </div>
                <div class="projects-filter">
                    <div class="projects-filter-item">
                        <select name="category" id="category">
                            <option value="">Categoria</option>
                            <option value="Lotes">Lotes</option>
                            <option value="Residenciales">Residenciales</option>
                            <option value="Condominios">Condominios</option>
                        </select>
                    </div>
                    
                    <div class="projects-filter-item">
                        <select name="province" id="province">
                            <option value="">Zona</option>
                            <option value="Guanacaste">Guanacaste</option>
                            <option value="San Jose">San Jose</option>
                            <option value="Alajuela">Alajuela</option>
                            <option value="Heredia">Heredia</option>
                            <option value="Cartago">Cartago</option>
                            <option value="Puntarenas">Puntarenas</option>
                            <option value="Limon">Limón</option>
                        </select>
                    </div>
                    <div class="projects-filter-item">
                        <select name="price" id="price">
                            <option value="">Precio</option>
                            <option value="rp1">De $0 a $50.0000</option>
                            <option value="rp2">De $50.000 a $100.000</option>
                            <option value="rp3">De $100.000 a $200.000</option>
                            <option value="rp4">Más de $200.000</option>
                            
                        </select>
                    </div>
                     <div class="projects-filter-item">
                     <button class="btn btn-rojo btn-filter">Buscar</button>
                        
                    </div>
                </div>
            </div>
                    
            <div class="projects-bg">
                <div class="inner">
                
                    <?php
                          if ( get_query_var('paged') ) {
                              $paged = get_query_var('paged');
                          } else if ( get_query_var('page') ) {
                              $paged = get_query_var('page');
                          } else {
                              $paged = 1;
                          } 
            
                          $args = array(
                            'post_type' => 'projects',
                            'paged' => $paged,
                            'posts_per_page' => -1
                            
                          );
                          $temp = $wp_query; 
                          $wp_query = null;
                          $wp_query = new WP_Query( $args );

                          if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) :  $wp_query->the_post();
                             
                              $terms = get_the_terms( $post->ID, 'category_project' );
                             
                              if ( $terms && ! is_wp_error( $terms ) ) { 
                             
                                  foreach ( $terms as $term ) {
                                      $categories[] = $term->name;
                                  }
                              }
                                $currency = rwmb_meta( 'rw_coin');
                                $itemPrice = ($currency == '₡') ? (floatval(rwmb_meta( 'rw_price') / 545)) : floatval(rwmb_meta( 'rw_price') );
                                $rpItem = "";
                                  if($itemPrice >= 0 && $itemPrice <= 50000) $rpItem .= " rp1";
                                  if($itemPrice >= 50000 && $itemPrice <= 100000) $rpItem .= " rp2";
                                  if($itemPrice >= 100000 && $itemPrice <= 200000) $rpItem .= " rp3";
                                  if($itemPrice > 200000) $rpItem .= " rp4";

                              ?>
                                 
                                 <article class="project mix <?php echo implode(' ', $categories);  ?> <?php echo $rpItem ?> <?php echo rwmb_meta( 'rw_province'); ?>">
                                    <div class="project-icon">
                                        <?php $images = rwmb_meta( 'rw_project_logo', 'type=image&size=large' ); 
                                         if ( $images ) {?>
                                         
                                         
                                            
                                                 <?php foreach ( $images as $image ){?>
                                                     
                                                     <img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>" />
                                                  
                                                  <?php } ?>

                                           

                                         <?php         
                                              }else{
                                                    the_title( '<h1 class="page-projectDetails-title">', '</h1>' ); 
                                              }
                                          ?>
                                    </div>
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
                                    <a href="<?php the_permalink(); ?>" class="project-link">Ver proyecto</a>
                                   
                                   
                                </article>
                                
                                
                               <?php endwhile; ?>
                            <!-- post navigation -->
                          

                        <?php endif; ?>
                        
                          <?php 
                            $wp_query = null; 
                            $wp_query = $temp;  // Reset
                          ?>


                    
                            
                    
                </div>
                
            </div>
            
        </section>