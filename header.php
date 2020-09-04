<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BN
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
<main class="bn-main">

	<header class="bn-header">

		<div class="container"> 
		
			<nav class="navbar navbar-expand-lg ">
				<div class="d-flex align-items-center bn-header__logo">
				<a class="d-block" href="<?php echo home_url(); ?>">
					<img src="<?php echo SD_THEME_IMAGE_URI; ?>/logo.png">
				</a>
		  		 <span class="bn-header__desc">Блог о крыпте, деньгах <br>
				и технологиях</span>
					</div>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

		  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <?php 
						if( has_nav_menu( 'main_menu' ) ) {
							wp_nav_menu(array(
								'menu' => 'main_menu',
								'menu_class' => 'navbar-nav mr-auto ml-xl-auto',
								'theme_location' => 'main-menu',
								'container' => false,
							));
						}										
					?>
					
				</div>
				<div class="bn-header__box">
					<div class="bn-header__option">
						<input type="text" name="" class="bn-header__input input input--search" placeholder="Поиск по сайту">
						<span class="icon icon--search bn-header__search">1</span>
						<span class="icon icon--exit bn-header__exit">2 </span>
					</div>
				</div>
				<!-- // --><!-- <span  class="bn-header__language">RU<?php if( has_nav_menu( 'lang-menu' ) ) { 
						// wp_nav_menu(array(
						// 	'menu' => 'lang-menu',
						// 	'menu_class' => 'lang-menu',
						// 	'theme_location' => 'lang-menu',
						// 	'container' => 'ul',
						// ));
					} ?></span> -->
			</nav>
			
		</div>
	</header>
