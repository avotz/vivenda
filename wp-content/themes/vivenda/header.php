<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naturalia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="top">
	<div class="inner">
		<div class="top-phone"><i class="icon-phone"></i> 8879-8893</div>
		<div class="top-email"><i class="icon-mail"></i> info@vivendacr.com</div>
	</div>
</div>
<header class="header">
            <div class="inner">
                <!--<div class="menu-bg">
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img class="header-logoImg" src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Vivenda" /></a>
	                <?php
						wp_nav_menu(
							 array(
							 	'theme_location' => 'primary',
							 	'container'       => 'nav',
								'container_class' => 'menu',
								'container_id'    => '',
								'menu_class'      => 'menu-ul',
								'menu_id'         => '',
							 	 ) 

					);?>
                </div>-->


                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img class="header-logoImg" src="<?php echo get_template_directory_uri();  ?>/img/logo-color.png" alt="Vivenda" /></a>
	                
	                <?php
						wp_nav_menu(
							 array(
							 	'theme_location' => 'primary',
							 	'container'       => 'nav',
								'container_class' => 'menu',
								'container_id'    => '',
								'menu_class'      => 'menu-ul',
								'menu_id'         => '',
							 	 ) 

					);?>
                
                
                <button id="btn-menu" class="header-btn-menu"><i class="icon-menu"></i></button>
            </div>
        </header>
       
       



