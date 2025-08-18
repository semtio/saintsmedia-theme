<?php

/**
 * The template for displaying the footer
 *
 * @package saintsmedia
 */

?>




<footer class="saintsmedia-theme-footer" role="contentinfo">

	<nav class="saintsmedia-theme-nav" aria-label="Main navigation">
		<?php

		$footer_menu = $is_enabled = get_theme_mod('saintsmedia_enable_footer_menu', false);
		// Выводим только родительские элементы меню (без подменю)
		if (has_nav_menu('menu-1')) {
			$locations = get_nav_menu_locations();
			$menu_id = $locations['menu-1'];
			$menu_items = wp_get_nav_menu_items($menu_id);

			if ($menu_items && $footer_menu) {
				echo '<ul id="saintsmedia-theme-menu" class="saintsmedia-theme-menu semtio">';
				foreach ($menu_items as $item) {
					if ($item->menu_item_parent == 0) {
						echo '<li class="menu-item menu-item-' . esc_attr($item->ID) . '">';
						echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
						echo '</li>';
					}
				}
				echo '</ul>';
			}
		}
		?>
	</nav>






	<div class="footer-inner">
		<div class="footer-logo" aria-label="Footer logo">
			<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = $custom_logo_id ? wp_get_attachment_image_src($custom_logo_id, 'full') : false;
			if ($logo) {
				echo '<img src="' . esc_url($logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . ' Logo">';
			} else {
				echo '<span class="site-title">' . esc_html(get_bloginfo('name')) . '</span>';
			}
			?>
		</div>

		<div class="footer-info">
			<?php
			$domain = wp_parse_url(home_url(), PHP_URL_HOST);
			$year   = wp_date('Y');
			echo '<span class="domain">' . esc_html($domain) . '</span> &copy; ' . esc_html($year);
			?>
		</div>

		<div class="footer-contact">
			<?php
			$email = get_option('admin_email');
			?>
			<a href="mailto:<?php echo esc_attr($email); ?>" class="footer-contact-link">Contact Us: <?php echo esc_html($email); ?></a>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
