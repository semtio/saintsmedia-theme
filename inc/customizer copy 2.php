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
		],
		[
			'id'        => 'footer_contact_us',
			'label'     => __('Contact Us', 'saintsmedia'),
			'default'   => '',
			'section'   => 'custom_homepage_settings',
			'type'      => 'text',
			'css_var'   => '',
			'sanitize'  => 'sanitize_text_field',
			'transport' => 'refresh',
		],
		[
			'id'        => 'saintsmedia_font_family',
			'label'     => __('Шрифт', 'saintsmedia'),
			'default'   => '',
			'section'   => 'custom_homepage_settings',
			'type'      => 'select',
			'choices'   => saintsmedia_scan_font_families(),
			'css_var'   => '--sm-font-family',
			'sanitize'  => 'sanitize_text_field',
			'transport' => 'refresh',
		],
		[
			'id'        => 'saintsmedia_homepage_layout',
			'label'     => __('Шаблон главной страницы', 'saintsmedia'),
			'default'   => 'default',
			'section'   => 'custom_homepage_settings',
			'type'      => 'select',
			'choices'   => [
				'key1' => __('По умолчанию', 'saintsmedia'),
				'key2' => __('С героем', 'saintsmedia'),
				'key3' => __('Карточный', 'saintsmedia'),
			],
			'sanitize'  => 'sanitize_text_field',
			'transport' => 'refresh',
		],
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
			case 'select':
				$wp_customize->add_control($field['id'], [
					'label'   => $field['label'],
					'section' => $field['section'],
					'type'    => 'select',
					'choices' => $field['choices'] ?? [],
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
				// для font-family: превращаем слаг папки в читаемое имя ('Lobster-2' -> 'Lobster 2') и берём в кавычки
				if ($field['css_var'] === '--sm-font-family') {
					$value = saintsmedia_pretty_family_label((string) $value);
					$value = '"' . $value . '"';
				}
				$vars[] = $field['css_var'] . ':' . $value;
			}
		}
	}
	$css_parts = [];
	if ($vars) {
		$css_parts[] = ':root{' . implode(';', $vars) . ';}';
	}
	// Генерируем @font-face для выбранного семейства
	$__chosen_family = get_theme_mod('saintsmedia_font_family', '');
	if (!empty($__chosen_family)) {
		$css_parts[] = saintsmedia_generate_font_face_css($__chosen_family);
	}

	if (!empty($css_parts)) {
		$css = implode("\n", $css_parts);
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


/**
 * ===== Fonts helpers =====
 * Папка по умолчанию: /assets/fonts внутри активной темы (можно переопределить фильтрами).
 */
function saintsmedia_get_fonts_dir(): string
{
	$dir = get_stylesheet_directory() . '/assets/fonts';
	return apply_filters('saintsmedia_fonts_dir', $dir);
}

function saintsmedia_get_fonts_url(): string
{
	$url = get_stylesheet_directory_uri() . '/assets/fonts';
	return apply_filters('saintsmedia_fonts_url', $url);
}

/**
 * Сканирует папку шрифтов и возвращает список семейств вида ['Inter' => 'Inter'].
 * Предпочитает имена подпапок как название семейства; при их отсутствии пробует вывести семейство из имён файлов.
 */
function saintsmedia_scan_font_families(): array
{
	$dir = saintsmedia_get_fonts_dir();
	$families = [];

	if (is_dir($dir) && is_readable($dir)) {
		// 1) Подпапки как семейства
		$it = new DirectoryIterator($dir);
		foreach ($it as $fi) {
			if ($fi->isDot()) continue;
			if ($fi->isDir()) {
				$family = trim($fi->getFilename());
				if ($family !== '') {
					$families[$family] = $family;
				}
			}
		}

		// 2) Если подпапок нет — берём семейство из имён файлов
		if (empty($families)) {
			$allowed = ['woff2', 'woff', 'ttf', 'otf'];
			$it2 = new DirectoryIterator($dir);
			foreach ($it2 as $fi) {
				if ($fi->isDot() || !$fi->isFile()) continue;
				$ext = strtolower(pathinfo($fi->getFilename(), PATHINFO_EXTENSION));
				if (!in_array($ext, $allowed, true)) continue;
				$base = pathinfo($fi->getFilename(), PATHINFO_FILENAME);
				$base = str_replace(['_', '-'], ' ', $base);
				$first = trim($base);
				$spacePos = strpos($first, ' ');
				if ($spacePos !== false) {
					$first = substr($first, 0, $spacePos);
				}
				$family = ucwords(strtolower($first));
				if ($family !== '') {
					$families[$family] = $family;
				}
			}
		}
	}

	if (!empty($families)) {
		natcasesort($families);
		$families = array_combine(array_values($families), array_values($families));
	}

	return apply_filters('saintsmedia_font_family_choices', $families);
}


/**
 * Превращает имя папки ('Lobster-2') в читаемое название семейства ('Lobster 2').
 */
function saintsmedia_pretty_family_label(string $slug): string
{
	$label = str_replace(['_', '-'], ' ', trim($slug));
	$label = preg_replace('/\s{2,}/', ' ', $label);
	return ucwords(strtolower($label));
}

/**
 * Определяет вес шрифта по имени файла.
 */
function saintsmedia_map_weight_from_string(string $s): int
{
	$s = strtolower($s);
	if (preg_match('/\b([1-9]00)\b/', $s, $m)) return (int)$m[1];
	$map = [
		'thin' => 100,
		'hairline' => 100,
		'extra light' => 200,
		'ultra light' => 200,
		'extralight' => 200,
		'ultralight' => 200,
		'light' => 300,
		'book' => 400,
		'normal' => 400,
		'regular' => 400,
		'medium' => 500,
		'semibold' => 600,
		'semi bold' => 600,
		'demibold' => 600,
		'demi bold' => 600,
		'bold' => 700,
		'extra bold' => 800,
		'extrabold' => 800,
		'ultra bold' => 800,
		'ultrabold' => 800,
		'heavy' => 800,
		'black' => 900,
		'extra black' => 900,
		'ultra black' => 900,
	];
	foreach ($map as $k => $v) if (strpos($s, $k) !== false) return $v;
	return 400;
}

/**
 * Определяет стиль по имени файла.
 */
function saintsmedia_map_style_from_string(string $s): string
{
	$s = strtolower($s);
	if (strpos($s, 'italic') !== false || strpos($s, 'ital') !== false) return 'italic';
	if (strpos($s, 'oblique') !== false) return 'oblique';
	return 'normal';
}

/**
 * Генерирует @font-face для всех начертаний в подпапке assets/fonts/<семейство>.
 * Возвращает CSS-строку.
 */
function saintsmedia_generate_font_face_css(string $familyFolder): string
{
	$dir = saintsmedia_get_fonts_dir() . '/' . $familyFolder;
	if (!is_dir($dir) || !is_readable($dir)) return '';
	$urlBase = saintsmedia_get_fonts_url() . '/' . rawurlencode($familyFolder);

	$allowed = ['woff2', 'woff', 'ttf', 'otf'];
	$groups = []; // key "weight-style" => ['weight'=>..,'style'=>..,'sources'=>['woff2'=>url,..]]

	$it = new DirectoryIterator($dir);
	foreach ($it as $fi) {
		if ($fi->isDot() || !$fi->isFile()) continue;
		$ext = strtolower(pathinfo($fi->getFilename(), PATHINFO_EXTENSION));
		if (!in_array($ext, $allowed, true)) continue;

		$fn = $fi->getFilename();
		$lower = strtolower($fn);
		$weight = saintsmedia_map_weight_from_string($lower);
		$style  = saintsmedia_map_style_from_string($lower);
		$key = $weight . '-' . $style;

		if (!isset($groups[$key])) $groups[$key] = ['weight' => $weight, 'style' => $style, 'sources' => []];
		$groups[$key]['sources'][$ext] = $urlBase . '/' . rawurlencode($fn);
	}

	if (!$groups) return '';
	$familyName = saintsmedia_pretty_family_label($familyFolder);
	$order = ['woff2', 'woff', 'ttf', 'otf'];
	$css = '';

	foreach ($groups as $g) {
		$srcParts = [];
		foreach ($order as $ext) {
			if (isset($g['sources'][$ext])) {
				$fmt = ($ext === 'ttf') ? 'truetype' : (($ext === 'otf') ? 'opentype' : $ext);
				$srcParts[] = "url('{$g['sources'][$ext]}') format('{$fmt}')";
			}
		}
		if (!$srcParts) continue;
		$styleVal = ($g['style'] === 'oblique') ? 'oblique' : (($g['style'] === 'italic') ? 'italic' : 'normal');
		$css .= "@font-face{font-family:'{$familyName}';font-style:{$styleVal};font-weight:{$g['weight']};font-display:swap;src:" . implode(',', $srcParts) . ";}\n";
	}
	return $css;
}
