<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vivenda
 */

get_header(); ?>
<?php 
         $images = rwmb_meta( 'rw_project_thumb', 'type=image&size=large' ); 
         if ( $images ) {?>
            <section class="banner">
                <div class="cycle-slideshow" data-cycle-slides=".banner-slide" data-cycle-pager=".banner-pager" data-cycle-timeout="10000"  data-cycle-pager-template="<a href=#></a>">
                    <div class="cycle-pager banner-pager"></div>
               
               <?php foreach ( $images as $image )
                    {?>
                       
                         <div class="banner-slide" style="background-image: url('<?php echo $image['url'] ?>');">          
                   
                    	 </div>
                           
                        

                    <?php
                      
                     }
                ?>
                    <div class="center">
                        <a id="prevGallery" href="#"><i class="icon-angle-left"></i></a>
                        <a id="nextGallery" href="#"><i class="icon-angle-right"></i></a>
                    </div>
                </div>
                
            </section>

         <?php         
              }
          ?>
<section class="main">
           <div class="inner">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if ( get_post_type( $post ) == 'projects' ) : ?>
				<?php get_template_part( 'template-parts/content', 'project' ); ?>
			
			<?php else : ?>
				<div class="posts-area">
					<?php get_template_part( 'template-parts/content', 'single' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;?>
				</div>
			<?php
				 get_sidebar(); 
			endif; ?>
		<?php endwhile; // End of the loop. ?>

		</div><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>
