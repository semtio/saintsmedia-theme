<?php

/**
 * saintsmedia Theme Customizer
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
			'label'     => __('Фон меню + подвал', 'saintsmedia'),
			'default'   => '#111315',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-bg',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_bg_sub_menu',
			'label'     => __('Фон дочерних элем.меню', 'saintsmedia'),
			'default'   => '#222222',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-sub-bg',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_bg_hover_menu',
			'label'     => __('Фон наводки дочерних элем.меню', 'saintsmedia'),
			'default'   => '#E61E4D',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-hover-bg',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_link_color',               // уникальный ID
			'label'     => __('Цвет текста меню', 'saintsmedia'),     // подпись в кастомайзере
			'default'   => '#ffffff',                                     // дефолт
			'section'   => 'colors',                                      // куда положить (вкладка "Colors")
			'type'      => 'color',                                       // тип контрола
			'css_var'   => '--sm-menu-link',                              // имя CSS-переменной
			'sanitize'  => 'sanitize_hex_color',                          // санитайзер под тип
			'transport' => 'postMessage',                                 // live-превью без перезагрузки
		],
		[
			'id'        => 'saintsmedia_focus_outline',
			'label'     => __('Цвет фокуса (outline)', 'saintsmedia'),
			'default'   => '#6CA2FF',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-focus-outline',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_menu_text',
			'label'     => __('Текст в шапке по умолчанию', 'saintsmedia'),
			'default'   => '#B8BDC5',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-text',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_burger_color',
			'label'     => __('Цвет иконки-бургера', 'saintsmedia'),
			'default'   => '#B8BDC5',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-burger-color',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_menu_badge_bg',
			'label'     => __('Бейдж: фон', 'saintsmedia'),
			'default'   => '#E61E4D',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-badge-bg',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_menu_badge_color',
			'label'     => __('Бейдж: текст', 'saintsmedia'),
			'default'   => '#FFFFFF',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-badge-color',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		// Footer links
		[
			'id'        => 'saintsmedia_footer_link',
			'label'     => __('Футер: цвет ссылки', 'saintsmedia'),
			'default'   => '#B8BDC5',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-footer-link',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_footer_link_hover',
			'label'     => __('Футер: ссылка при наведении', 'saintsmedia'),
			'default'   => '#FFFFFF',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-footer-link-hover',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_first_btn_bg',
			'label'     => __('Фон кнопки #1 (меню)', 'saintsmedia'),
			'default'   => '#F0A21A',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-first-btn-bg',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_first_btn_cl',
			'label'     => __('Текст кнопки #1 (меню)', 'saintsmedia'),
			'default'   => '#FFFFFF',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-first-btn-color',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_second_btn_bg',
			'label'     => __('Фон кнопки #2 (меню)', 'saintsmedia'),
			'default'   => '#FF3156',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-second-btn-bg',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_header_second_btn_cl',
			'label'     => __('Текст кнопки #2 (меню)', 'saintsmedia'),
			'default'   => '#FFFFFF',
			'section'   => 'colors',
			'type'      => 'color',
			'css_var'   => '--sm-menu-second-btn-color',
			'sanitize'  => 'sanitize_hex_color',
			'transport' => 'postMessage',
		],
		[
			'id'        => 'saintsmedia_enable_footer_menu',
			'label'     => __('Страницы в подвале', 'saintsmedia'),
			'default'   => false,
			'section'   => 'custom_homepage_settings',
			'type'      => 'checkbox',
			'css_var'   => '',
			'sanitize'  => 'wp_validate_boolean',
			'transport' => 'refresh',
		],
		[
			'id'        => 'saintsmedia_text_botton_1',
			'label'     => __('Текст кнопки #1', 'saintsmedia'),
			'default'   => '',
			'section'   => 'custom_homepage_settings',
			'type'      => 'text',
			'css_var'   => '',
			'sanitize'  => 'sanitize_text_field',
			'transport' => 'refresh',
		],
		[
			'id'        => 'saintsmedia_link_botton_1',
			'label'     => __('Ссылка кнопки #1', 'saintsmedia'),
			'default'   => '',
			'section'   => 'custom_homepage_settings',
			'type'      => 'url',
			'css_var'   => '',
			'sanitize'  => 'esc_url_raw',
			'transport' => 'refresh',
		],
		[
			'id'        => 'saintsmedia_text_botton_2',
			'label'     => __('Текст кнопки #2', 'saintsmedia'),
			'default'   => '',
			'section'   => 'custom_homepage_settings',
			'type'      => 'text',
			'css_var'   => '',
			'sanitize'  => 'sanitize_text_field',
			'transport' => 'refresh',
		],
		[
			'id'        => 'saintsmedia_link_botton_2',
			'label'     => __('Ссылка кнопки #2', 'saintsmedia'),
			'default'   => '',
			'section'   => 'custom_homepage_settings',
			'type'      => 'url',
			'css_var'   => '',
			'sanitize'  => 'esc_url_raw',
			'transport' => 'refresh',
		],
		[
			'id'        => 'footer_mail_link',
			'label'     => __('Почта в подвале', 'saintsmedia'),
			'default'   => '',
			'section'   => 'custom_homepage_settings',
			'type'      => 'text',
			'css_var'   => '',
			'sanitize'  => 'sanitize_text_field',
			'transport' => 'refresh',
		]
	];
	return apply_filters('saintsmedia_customizer_fields', $fields);
}

/**
 * Регистрация всех полей из единой конфигурации.
 */
function saintsmedia_customize_register_unified(WP_Customize_Manager $wp_customize)
{
	// Новая секция для дополнительных настроек главной страницы (регистрируем заранее)
	if (!$wp_customize->get_section('custom_homepage_settings')) {
		$wp_customize->add_section('custom_homepage_settings', [
			'title'       => __('Дополнительные настройки страниц | текста, логика', 'saintsmedia'),
			'description' => __('Здесь можно включить дополнительные параметры.', 'saintsmedia'),
			'priority'    => 30,
		]);
	}

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
			case 'checkbox':
				$wp_customize->add_control($field['id'], [
					'label'   => $field['label'],
					'section' => $field['section'],
					'type'    => 'checkbox',
				]);
				break;
			case 'text':
				$wp_customize->add_control($field['id'], [
					'label'   => $field['label'],
					'section' => $field['section'],
					'type'    => 'text',
				]);
				break;
			case 'url':
				$wp_customize->add_control($field['id'], [
					'label'   => $field['label'],
					'section' => $field['section'],
					'type'    => 'url',
				]);
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
