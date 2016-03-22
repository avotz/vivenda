<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vivenda
 */

?>
<div id="contact" class="contact white-popup mfp-hide mfp-with-anim">
    
    <?php rewind_posts(); ?>
	  <?php query_posts( 'post_type=page&page_id=13' ); ?>
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	           <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    		   <?php the_content(); ?>

	        <?php endwhile; ?>
	        <!-- post navigation -->
	      
	    <?php endif; ?>
    
          
 </div>

