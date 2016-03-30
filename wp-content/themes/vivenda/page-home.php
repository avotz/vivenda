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
        
  <?php get_template_part( 'template-parts/content', 'projects-filters' ); ?>
         

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
