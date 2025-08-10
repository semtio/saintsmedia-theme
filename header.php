<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saintsmedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site sm-page">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'saintsmedia'); ?></a>

		<header class="saintsmedia-theme-header">
			<div class="saintsmedia-theme-logo" tabindex="0" aria-label="saintsmedia-theme">
				<?php
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
				if (has_custom_logo()) {
					echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . ' Logo">';
				} else {
					echo '<span class="site-title">' . get_bloginfo('name') . '</span>';
				}
				?>
			</div>
			<nav class="saintsmedia-theme-nav" aria-label="Main navigation">
				<ul id="saintsmedia-theme-menu" class="saintsmedia-theme-menu">
					<li><a href="#"><span class="icon-app"></span>App</a></li>
					<li><a href="#"><span class="icon-registration"></span>Registration</a></li>
					<li class="has-submenu">
						<a href="#" aria-haspopup="true" aria-expanded="false"><span class="icon-payments"></span>Payments</a>
						<ul class="submenu">
							<li><a href="#">Visa</a></li>
							<li><a href="#">Mastercard</a></li>
						</ul>
					</li>
					<li><a href="#"><span class="icon-promocode"></span>Promocode</a></li>
					<li><a href="#"><span class="icon-signals"></span>Game signals</a></li>
					<li><a href="#"><span class="icon-predictor"></span>Predictor</a></li>
					<li><a href="#"><span class="icon-strategies"></span>Game strategies</a></li>
					<li><a href="#"><span class="icon-demo"></span>Demo <span class="badge">New</span></a></li>
					<li><a href="#"><span class="icon-contact"></span>Contact Us</a></li>
					<li class="has-submenu">
						<a href="#" aria-haspopup="true" aria-expanded="false"><span class="icon-casinos"></span>Casinos</a>
						<ul class="submenu">
							<li><a href="#">Casino 1</a></li>
							<li><a href="#">Casino 2</a></li>
						</ul>
					</li>
				</ul>
				<button class="burger" aria-label="Open menu" aria-controls="saintsmedia-theme-menu" aria-expanded="false"><i class="fa-solid fa-bars" aria-hidden="true"></i><span class="sr-only">Меню</span></button>
			</nav>
			<div class="saintsmedia-theme-cta">
				<button class="saintsmedia-theme-btn play" tabindex="0">Play</button>
				<button class="saintsmedia-theme-btn download" tabindex="0">Download</button>
			</div>
		</header><!-- #masthead -->


		<script>
			// меню
			document.querySelectorAll('.has-submenu').forEach(function(item) {
				let timer;
				item.addEventListener('mouseenter', function() {
					clearTimeout(timer);
					item.classList.add('submenu-open');
				});
				item.addEventListener('mouseleave', function() {
					timer = setTimeout(function() {
						item.classList.remove('submenu-open');
					}, 250); // задержка 250 мс
				});
			});

			// гамбургер
			document.addEventListener('DOMContentLoaded', function() {
				const burger = document.querySelector('.burger');
				const nav = document.querySelector('.saintsmedia-theme-nav');
				const menu = document.getElementById('saintsmedia-theme-menu');
				if (burger && nav && menu) {
					burger.addEventListener('click', function() {
						const isOpen = nav.classList.toggle('open');
						burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
					});
				}
			});
		</script>