<?php
/**
 * Template Name: Page Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package naturalia
 */

get_header(); ?>
 <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <!--<section class="menu-slider">
            <ul class="cycle-slideshow" data-cycle-slides=".menu-sliderSlide" data-cycle-pager=".menuslider-pager"  data-cycle-pager-template="<a href=#></a>" data-cycle-fx="carousel" data-cycle-timeout="8000" data-cycle-carousel-visible="5" >
                <li class="menu-sliderSlide" data-index="1" >
                    <a href="#" data-popup="gallery-popup">
                        <img width="392" height="270" src="<?php echo get_template_directory_uri();  ?>/img/menu-slider1.jpg" class="attachment-portfolioslide wp-post-image" alt="img_23">
                    </a>
                </li><li class="menu-sliderSlide" data-index="2" >
                    <a href="#" data-popup="gallery-popup">
                        <img width="392" height="270" src="<?php echo get_template_directory_uri();  ?>/img/menu-slider2.jpg" class="attachment-portfolioslide wp-post-image" alt="img_27">
                    </a>
                </li><li class="menu-sliderSlide" data-index="3">
                    <a href="#" data-popup="gallery-popup">
                        <img width="392" height="270" src="<?php echo get_template_directory_uri();  ?>/img/menu-slider3.jpg" class="attachment-portfolioslide wp-post-image" alt="img_24">
                    </a>
                </li><li class="menu-sliderSlide" data-index="4" >
                    <a href="#" data-popup="gallery-popup">
                        <img width="392" height="270" src="<?php echo get_template_directory_uri();  ?>/img/menu-slider4.jpg" class="attachment-portfolioslide wp-post-image" alt="img_21">
                    </a>
                </li><li class="menu-sliderSlide" data-index="5" >
                    <a href="#" data-popup="gallery-popup">
                        <img width="392" height="270" src="<?php echo get_template_directory_uri();  ?>/img/menu-slider5.jpg" class="attachment-portfolioslide wp-post-image" alt="img_20">
                    </a>
                </li><li class="menu-sliderSlide" data-index="6" >
                    <a href="#" data-popup="gallery-popup">
                        <img width="392" height="270" src="<?php echo get_template_directory_uri();  ?>/img/menu-slider6.jpg" class="attachment-portfolioslide wp-post-image" alt="img_19">
                    </a>
                </li>
                 <div class="menuslider-pager"></div>
                
            </ul>
        </section>-->
 
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
                            <option value="lotes">Lotes</option>
                            <option value="residenciales">Residenciales</option>
                            <option value="condominios">Condominios</option>
                        </select>
                    </div>
                    
                    <div class="projects-filter-item">
                        <select name="category" id="category">
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
                            <option value="">De $100.000 a $200.000</option>
                            <option value="">De $200.000 a $300.000</option>
                            <option value="">De $300.000 a $400.000</option>
                            <option value="">De $400.000 a $500.000</option>
                            
                        </select>
                    </div>
                </div>
            </div>
                    
            <div class="projects-bg">
                <div class="inner">
                
                    <?php
                          $args = array(
                            'post_type' => 'projects',
                            
                          );
                          $projects = new WP_Query( $args );
                          if( $projects->have_posts() ) {
                            while( $projects->have_posts() ) {
                              $projects->the_post();
                              $terms = get_the_terms( $post->ID, 'category_project' );
                              if ( $terms && ! is_wp_error( $terms ) ) { 
                             
                                foreach ( $terms as $term ) {
                                    $categories[] = $term->name;
                                }
                            }

                              ?>
                                 
                                 <article class="project <?php echo implode(' ', $categories);  ?> <?php echo rwmb_meta( 'rw_price'); ?> <?php echo rwmb_meta( 'rw_province'); ?>">
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
                                         <p><i class="icon icon-calendar"></i> Cuota desde $<?php echo rwmb_meta( 'rw_cuota'); ?></p>
                                        <?php } ?>
                                        <p><i class="icon icon-dollar"></i> Desde $<?php echo rwmb_meta( 'rw_price'); ?></p>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="project-link">Ver proyecto</a>
                                   
                                   
                                </article>
                                
                                
                              <?php
                            }
                          }
                        ?>
                        <article class="project">
                            <div class="project-icon">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/cartago.png" alt="">
                            </div>
                            <div class="project-description">
                               <h3 class="project-title"> Sit amet</h3>

                                <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                                <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                                <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                            </div>
                            <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                        </article>
                         <article class="project">
                            <div class="project-icon">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/cartago.png" alt="">
                            </div>
                            <div class="project-description">
                               <h3 class="project-title"> Sit amet</h3>

                                <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                                <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                                <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                            </div>
                            <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                        </article>
                         <article class="project">
                            <div class="project-icon">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/cartago.png" alt="">
                            </div>
                            <div class="project-description">
                               <h3 class="project-title"> Sit amet</h3>

                                <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                                <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                                <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                            </div>
                            <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                        </article>
                         <article class="project">
                            <div class="project-icon">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/cartago.png" alt="">
                            </div>
                            <div class="project-description">
                               <h3 class="project-title"> Sit amet</h3>

                                <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                                <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                                <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                            </div>
                            <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                        </article>
                         <article class="project">
                            <div class="project-icon">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/cartago.png" alt="">
                            </div>
                            <div class="project-description">
                               <h3 class="project-title"> Sit amet</h3>

                                <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                                <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                                <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                            </div>
                            <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                        </article>

                    
                    <!--<article class="project">
                        <div class="project-icon">
                            <img src="<?php echo get_template_directory_uri();  ?>/img/grano-oro.png" alt="">
                        </div>
                        <div class="project-description">
                            <h3 class="project-title"> Grano de Oro</h3>

                            <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                            <p><i class="icon icon-mail"></i> info@vivendacr.com</p>
                            <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                        </div>
                        <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                       
                       
                    </article>
                    <article class="project">
                        <div class="project-icon">
                            <img src="<?php echo get_template_directory_uri();  ?>/img/samara.png" alt="">
                        </div>
                       <div class="project-description">
                           <h3 class="project-title"> Samara</h3>

                            <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                            <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                            <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                        </div>
                        <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>   
                    </article>
                    <article class="project">
                        <div class="project-icon">
                            <img src="<?php echo get_template_directory_uri();  ?>/img/vista-mar.png" alt="">
                        </div>
                        <div class="project-description">
                           <h3 class="project-title"> Vista del Mar</h3>

                           <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                            <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                            <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                        </div>
                        <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                    </article>
                     <article class="project">
                        <div class="project-icon">
                            <img src="<?php echo get_template_directory_uri();  ?>/img/cartago.png" alt="">
                        </div>
                        <div class="project-description">
                           <h3 class="project-title"> Sit amet</h3>

                            <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                            <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                            <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                        </div>
                        <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                    </article>
                    <article class="project">
                        <div class="project-icon">
                            <img src="<?php echo get_template_directory_uri();  ?>/img/loma.png" alt="">
                        </div>
                        <div class="project-description">
                           <h3 class="project-title"> Sit amet</h3>

                           <p><i class="icon icon-map-marker"></i> Escobal, Atenas, Alajuela</p>
                            <p><i class="icon icon-calendar"></i> Cuota desde $500</p>
                            <p><i class="icon icon-dollar"></i> Desde c30.000.000</p>
                        </div>
                        <a href="./projects/vista-mar/" class="project-link">Ver proyecto</a>
                    </article>-->
                    
                </div>
                
            </div>
            
        </section>

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
