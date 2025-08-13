<?php

/**
 * saintsmedia Theme Customizer
 *
 * @package saintsmedia
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function saintsmedia_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'saintsmedia_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'saintsmedia_customize_partial_blogdescription',
			)
		);
	}

	// === Цвет фона меню (хедера) ===
	// Добавим в стандартную секцию "colors" (можно вынести в отдельную позже)
	$wp_customize->add_setting('saintsmedia_header_bg', [
		'default'           => '#111315',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage', // для live preview
	]);

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'saintsmedia_header_bg', [
		'label'   => __('Фон меню (header)', 'saintsmedia'),
		'section' => 'colors',
	]));

	// --------------------
	$wp_customize->add_setting('asdasdasdasdasdasdasdasd', [
		'default'           => '#e7670cff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage', // для live preview
	]);
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'asdasdasdasdasdasdasdasd', [
		'label'   => __('Фон меню (header)', 'saintsmedia'),
		'section' => 'colors',
	]));
	// --------------------


}
add_action('customize_register', 'saintsmedia_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function saintsmedia_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function saintsmedia_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function saintsmedia_customize_preview_js()
{
	wp_enqueue_script('saintsmedia-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview', 'jquery'), _S_VERSION, true);
}
add_action('customize_preview_init', 'saintsmedia_customize_preview_js');
