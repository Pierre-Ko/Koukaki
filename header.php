<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <ul id="titreMenu">
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>
            <div class="burgerBtn" id="burgerBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="fullscreenMenu">
            <img id="logomenu" src='wp-content/themes/foce-child/assets/images_koukaki/logoMenu.png'; ?>
                <li id="li1"><a class="menu-link" href="#story">Histoire</a></li>
                <li id="li2"><a class="menu-link" href="#characters">Personnages</a></li>
                <li id="li3"><a class="menu-link" href="#place">Lieu</a></li>
                <li id="li4"><a class="menu-link" href="#studio">Studio Koukaki</a></li>
                <p>STUDIO KOUKAKI</p>
            </ul> 
        </nav><!-- #site-navigation -->

            
            
	</header><!-- #masthead -->