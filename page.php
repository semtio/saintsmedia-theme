<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package saintsmedia
 */

?>

<?php get_header(); ?>

<div class="spacer-on-top"></div>

<?php if (function_exists('saintsmedia_breadcrumbs')) {
	saintsmedia_breadcrumbs();
} ?>

<div id="primary" class="content-area" style="width:100%; margin:0 auto;">
	<main id="main" class="site-main">
		<?php
		while (have_posts()) :
			the_post();
			the_content();
		endwhile;
		?>
	</main>
</div>

<?php get_footer(); ?>

<script>
	// Добавляем в шапку высоту менюшки - 2px
	// Так как меню position:fixed елементы под ним сдвигаются вверх
	let menuHeight = document.querySelector('.saintsmedia-theme-header');
	let spacerOnTop = document.querySelector('.spacer-on-top');

	window.addEventListener('DOMContentLoaded', function() {
		if (menuHeight && spacerOnTop) {
			spacerOnTop.style.height = (menuHeight.clientHeight - 2) + 'px';
		}
	});

	// Добавляем эффект уменьшения логотипа при прокрутке страницы
	document.addEventListener('scroll', function() {
		const header = document.querySelector('.saintsmedia-theme-header');
		const logo = document.querySelector('.saintsmedia-theme-logo img');

		if (window.scrollY > 100) {
			if (logo) {
				logo.style.transition = 'height 0.3s ease';
				logo.style.height = '50px';
			}
		} else {
			if (logo) {
				logo.style.transition = 'height 0.3s ease';
				logo.style.height = '80px';
			}
		}
	});
</script>
