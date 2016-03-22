<?php
/**
 * The template for displaying Category products
 *
 * 
 *
 * @package fourenergy
 */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<section class="main">
           <div class="inner">
			<h1 class="featured__title color">
	         	<?php single_cat_title( 'Proyectos en ', true ); ?>
			 </h1>
			<ul class="projects-container">
			<?php while ( have_posts() ) : the_post(); ?>

				
	                <li class="projects-item" data-index="1" >
	                    <a href="<?php the_permalink(); ?>" data-popup="gallery-popup" class="projects-item-link">
	                    	<?php if ( has_post_thumbnail() ) :

			                    $id = get_post_thumbnail_id($post->ID);
			                    $thumb_url = wp_get_attachment_image_src($id,'large', true);
			                    ?>
			                    
			                  
			                        <img  src="<?php echo $thumb_url[0] ?>" class="projects-item-img wp-post-image" alt="img_23">
			                <?php endif; ?>
			                <h1 class="projects-item-title"><?php the_title(); ?></h1>
	                        
	                    </a>
	                </li>
	                <li class="projects-item" data-index="1" >
	                    <a href="<?php the_permalink(); ?>" data-popup="gallery-popup" class="projects-item-link">
	                    	<?php if ( has_post_thumbnail() ) :

			                    $id = get_post_thumbnail_id($post->ID);
			                    $thumb_url = wp_get_attachment_image_src($id,'medium', true);
			                    ?>
			                    
			                  
			                        <img  src="<?php echo $thumb_url[0] ?>" class="projects-item-img wp-post-image" alt="img_23">
			                <?php endif; ?>
			                <h1 class="projects-item-title"><?php the_title(); ?></h1>
	                        
	                    </a>
	                </li>
	                <li class="projects-item" data-index="1" >
	                    <a href="<?php the_permalink(); ?>" data-popup="gallery-popup" class="projects-item-link">
	                    	<?php if ( has_post_thumbnail() ) :

			                    $id = get_post_thumbnail_id($post->ID);
			                    $thumb_url = wp_get_attachment_image_src($id,'medium', true);
			                    ?>
			                    
			                  
			                        <img  src="<?php echo $thumb_url[0] ?>" class="projects-item-img wp-post-image" alt="img_23">
			                <?php endif; ?>
			                <h1 class="projects-item-title"><?php the_title(); ?></h1>
	                        
	                    </a>
	                </li>
	                <li class="projects-item" data-index="1" >
	                    <a href="<?php the_permalink(); ?>" data-popup="gallery-popup" class="projects-item-link">
	                    	<?php if ( has_post_thumbnail() ) :

			                    $id = get_post_thumbnail_id($post->ID);
			                    $thumb_url = wp_get_attachment_image_src($id,'medium', true);
			                    ?>
			                    
			                  
			                        <img  src="<?php echo $thumb_url[0] ?>" class="projects-item-img wp-post-image" alt="img_23">
			                <?php endif; ?>
			                <h1 class="projects-item-title"><?php the_title(); ?></h1>
	                        
	                    </a>
	                </li>
	                <li class="projects-item" data-index="1" >
	                    <a href="<?php the_permalink(); ?>" data-popup="gallery-popup" class="projects-item-link">
	                    	<?php if ( has_post_thumbnail() ) :

			                    $id = get_post_thumbnail_id($post->ID);
			                    $thumb_url = wp_get_attachment_image_src($id,'medium', true);
			                    ?>
			                    
			                  
			                        <img  src="<?php echo $thumb_url[0] ?>" class="projects-item-img wp-post-image" alt="img_23">
			                <?php endif; ?>
			                <h1 class="projects-item-title"><?php the_title(); ?></h1>
	                        
	                    </a>
	                </li>
	                <li class="projects-item" data-index="1" >
	                    <a href="<?php the_permalink(); ?>" data-popup="gallery-popup" class="projects-item-link">
	                    	<?php if ( has_post_thumbnail() ) :

			                    $id = get_post_thumbnail_id($post->ID);
			                    $thumb_url = wp_get_attachment_image_src($id,'medium', true);
			                    ?>
			                    
			                  
			                        <img  src="<?php echo $thumb_url[0] ?>" class="projects-item-img wp-post-image" alt="img_23">
			                <?php endif; ?>
			                <h1 class="projects-item-title"><?php the_title(); ?></h1>
	                        
	                    </a>
	                </li>
               

			<?php endwhile; // End of the loop. ?>
			 </ul>

		</div><!-- #inner -->
  </section><!-- #main -->

	
		


<?php get_footer(); ?>
