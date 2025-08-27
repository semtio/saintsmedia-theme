<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    у меня есть вот такие размеры миниатюр для WordPress
    logo-1489x1536.webp
    logo-150x150.webp
    logo-291x300.webp
    logo-768x792.webp
    logo-993x1024.webp
    logo.webp

    Можешь переписать этот код так что бы в шаблон выводился бы всегда нужный размер моего лого?
    <a href="/">
        <?php
        if (has_custom_logo()) {
            echo get_custom_logo(); // уже со srcset
        } else {
            echo '<a href="' . esc_url(home_url('/')) . '" class="site-title">' . esc_html(get_bloginfo('name')) . '</a>';
        }
        ?>
    </a>


    ВАРИАНТ 1

    <?php
    function saintsmedia_logo_responsive($sizes_attr = '(max-width:430px) 150px, (max-width:600px) 291px, (max-width:900px) 768px, (max-width:1200px) 993px, 1489px')
    {
        $logo_id = get_theme_mod('custom_logo');
        if (! $logo_id) {
            echo '<a class="site-title" href="' . esc_url(home_url('/')) . '">' . esc_html(get_bloginfo('name')) . '</a>';
            return;
        }
        $full   = wp_get_attachment_image_src($logo_id, 'full');
        $src    = $full ? $full[0] : '';
        $srcset = wp_get_attachment_image_srcset($logo_id, 'full'); // WP сам соберёт (если размеры зарегистрированы)
        $alt    = esc_attr(get_bloginfo('name'));
        echo '<a class="site-logo" href="' . esc_url(home_url('/')) . '" rel="home">'
            . '<img src="' . esc_url($src) . '" srcset="' . esc_attr($srcset) . '" sizes="' . esc_attr($sizes_attr) . '" alt="' . $alt . '" decoding="async" fetchpriority="high" />'
            . '</a>';
    }
    ?>

    ВАРИАНТ 2
    <?php
    function saintsmedia_logo_hardcoded()
    {
        $logo_id = get_theme_mod('custom_logo');
        if (! $logo_id) {
            echo '<a class="site-title" href="' . esc_url(home_url('/')) . '">' . esc_html(get_bloginfo('name')) . '</a>';
            return;
        }
        $full = wp_get_attachment_image_src($logo_id, 'full');
        $base = $full ? trailingslashit(dirname($full[0])) : '';
        $srcset = implode(', ', [
            $base . 'logo-150x150.webp 150w',
            $base . 'logo-291x300.webp 291w',
            $base . 'logo-768x792.webp 768w',
            $base . 'logo-993x1024.webp 993w',
            $base . 'logo-1489x1536.webp 1489w',
            $base . 'logo.webp 2000w'
        ]);
        $sizes = '(max-width:430px) 150px, (max-width:600px) 291px, (max-width:900px) 768px, (max-width:1200px) 993px, 1489px';
        $alt = esc_attr(get_bloginfo('name'));
        echo '<a class="site-logo" href="' . esc_url(home_url('/')) . '" rel="home">'
            . '<img src="' . esc_url($base . 'logo-291x300.webp') . '" srcset="' . esc_attr($srcset) . '" sizes="' . esc_attr($sizes) . '" alt="' . $alt . '" decoding="async" fetchpriority="high" />'
            . '</a>';
    }
    ?>

</body>

</html>
