<?php

/**
 * saintsmedia Theme Customizer
 *
<?php
/**
 * Unified Customizer configuration (single source of truth)
 *
 * @package saintsmedia
 */

/**
 * Возвращает массив полей кастомайзера.
 * Каждое поле: id, label, default, section, type, css_var, live (массив селекторов+свойств), sanitize, transport.
 */
function saintsmedia_get_customizer_fields(): array
{
	$fields = [
		[
			'id'        => 'saintsmedia_header_bg',
			'label'     => __('Фон меню (header)', 'saintsmedia'),
			'default'   => '#111315',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-header-bg',
			'live'      => [
				['selector' => '.saintsmedia-theme-header', 'property' => 'background-color']
			],
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_link_color',               // уникальный ID
			'label'     => __('Цвет текста меню', 'saintsmedia'),     // подпись в кастомайзере
			'default'   => '#ffffff',                                     // дефолт
			'section'   => 'colors',                                      // куда положить (вкладка "Colors")
			'type'      => 'color',                                       // тип контрола
			'css_var'   => '--sm-header-link',                            // имя CSS-переменной
			'live'      => [                                              // мгновенное обновление (опц.)
				['selector' => '.saintsmedia-theme-header a', 'property' => 'color']
			],
			'sanitize'  => 'sanitize_hex_color',                          // санитайзер под тип
			'transport' => 'postMessage',                                 // live-превью без перезагрузки
		],
	];
	return apply_filters('saintsmedia_customizer_fields', $fields);
}

/**
 * Регистрация всех полей из единой конфигурации.
 */
function saintsmedia_customize_register_unified(WP_Customize_Manager $wp_customize)
{
	// Сохраняем postMessage для базовых полей темы underscores
	foreach (['blogname', 'blogdescription', 'header_textcolor'] as $core_id) {
		$setting = $wp_customize->get_setting($core_id);
		if ($setting) {
			$setting->transport = 'postMessage';
		}
	}

	// Selective refresh для стандартных (оставляем как было)
	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial('blogname', [
			'selector'        => '.site-title a',
			'render_callback' => 'bloginfo',
			'container_inclusive' => false,
			'args'            => ['name'],
		]);
		$wp_customize->selective_refresh->add_partial('blogdescription', [
			'selector'        => '.site-description',
			'render_callback' => 'bloginfo',
			'args'            => ['description'],
		]);
	}

	foreach (saintsmedia_get_customizer_fields() as $field) {
		$args = [
			'default'           => $field['default'] ?? '',
			'transport'         => $field['transport'] ?? 'refresh',
			'sanitize_callback' => $field['sanitize'] ?? null,
		];
		$wp_customize->add_setting($field['id'], $args);

		// Контрол
		switch ($field['type']) {
			case 'color':
				$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $field['id'], [
					'label'   => $field['label'],
					'section' => $field['section'],
				]));
				break;
			// При необходимости: text, select, etc.
			default:
				$wp_customize->add_control($field['id'], [
					'label'   => $field['label'],
					'section' => $field['section'],
					'type'    => $field['type'],
				]);
		}
	}
}
add_action('customize_register', 'saintsmedia_customize_register_unified');

/**
 * Генерация CSS-переменных из настроек.
 */
function saintsmedia_customizer_output_css()
{
	$fields = saintsmedia_get_customizer_fields();
	$vars = [];
	foreach ($fields as $field) {
		if (!empty($field['css_var'])) {
			$value = get_theme_mod($field['id'], $field['default']);
			if ($value !== '') {
				$vars[] = $field['css_var'] . ':' . $value;
			}
		}
	}
	if ($vars) {
		$css = ':root{' . implode(';', $vars) . ';}';
		// Подключаем к базовой таблице стилей темы
		wp_add_inline_style('saintsmedia-style', $css);
	}
}
add_action('wp_enqueue_scripts', 'saintsmedia_customizer_output_css', 20);

/**
 * Скрипт live preview + передача конфигурации.
 */
function saintsmedia_customize_preview_assets()
{
	wp_enqueue_script('saintsmedia-customizer', get_template_directory_uri() . '/js/customizer.js', ['customize-preview', 'jquery'], _S_VERSION, true);
	$export = [];
	foreach (saintsmedia_get_customizer_fields() as $field) {
		$export[] = [
			'id'      => $field['id'],
			'css_var' => $field['css_var'] ?? '',
			'live'    => $field['live'] ?? [],
		];
	}
	wp_add_inline_script('saintsmedia-customizer', 'window.saintsmediaCustomizerFields=' . wp_json_encode($export) . ';', 'before');
}
add_action('customize_preview_init', 'saintsmedia_customize_preview_assets');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function saintsmedia_customize_preview_js()
{
	wp_enqueue_script('saintsmedia-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview', 'jquery'), _S_VERSION, true);
}
add_action('customize_preview_init', 'saintsmedia_customize_preview_js');
