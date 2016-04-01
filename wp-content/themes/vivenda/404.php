<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vivenda
 */

get_header(); ?>
<section class="banner">
	<div class="banner-slide" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/bg-404.jpg');">
</section>
	 <section class="main">
           <div class="inner">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Esa pagina no fue encontrada.', 'vivenda' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Parece que no se encontró nada en este lugar. Tal vez probar uno de los enlaces de abajo o una búsqueda?', 'vivenda' ); ?></p>

					<?php get_search_form(); ?>

					<?php /*the_widget( 'WP_Widget_Recent_Posts' );*/ ?>

					<?php if ( vivenda_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'vivenda' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						/* translators: %1$s: smiley */
						/*$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'vivenda' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );*/
					?>

					<?php /*the_widget( 'WP_Widget_Tag_Cloud' );*/ ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

	
		</div><!-- #inner -->
  </section><!-- #main -->

<?php get_footer(); ?>
