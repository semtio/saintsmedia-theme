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