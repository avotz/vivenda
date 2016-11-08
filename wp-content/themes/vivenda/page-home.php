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

 	<section id="intro" class="intro">
		<div class="inner">
			<?php rewind_posts(); ?>
			  <?php query_posts( 'post_type=page&page_id=199' ); //116?>
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			           <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		    		   <?php the_content(); ?>

			        <?php endwhile; ?>
			        <!-- post navigation -->
			      
			    <?php endif; ?>
    
		</div>
 	</section>
 	<section id="testimonials" class="testimonials">
		<div class="inner">
			<?php rewind_posts(); ?>
			  <?php query_posts( 'post_type=page&page_id=201' ); //119?>
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			           <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		    		   <?php the_content(); ?>

			        <?php endwhile; ?>
			        <!-- post navigation -->
			      
			    <?php endif; ?>
    
		</div>
 	</section>

        
  <?php get_template_part( 'template-parts/content', 'projects-filters' ); ?>

  <!--<section id="home-contact" class="home-contact">
		<div class="inner">
			<div id="contactForm" class="page-promo-contact">
			    <p class="page-promo-contact-info">PARA MÁS INFORMACIÓN REGISTRARSE AQUÍ:</p>
			    <?php echo do_shortcode ( '[contact-form-7 id="79" title="Formulario Promociones"]' ) ?>
			  </div>
    
		</div>
 	</section>-->
         

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
