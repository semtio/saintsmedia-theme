<div id="page" class="site sm-page">
    <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e('Skip to content', 'saintsmedia'); ?>
    </a>

    <header class="saintsmedia-theme-header">
        <div itemscope itemtype="https://schema.org/ImageObject" class="saintsmedia-theme-logo" tabindex="0"
            aria-label="saintsmedia-theme">
            <meta itemprop="url" content="<?php echo esc_url(get_the_post_thumbnail_url()); ?>">


            <?php
            if (has_custom_logo()) {
                the_custom_logo(); // сам выведет <a><img …></a>
            } else {
                echo '<a href="' . esc_url(home_url('/')) . '" class="site-title">' . esc_html(get_bloginfo('name')) . '</a>';
            }
            ?>


        </div>

        <?php
        // переменные для кнопок в меню шапки
        $btn_menu_1 = get_theme_mod('saintsmedia_text_botton_1', '');
        $btn_menu_2 = get_theme_mod('saintsmedia_text_botton_2', '');

        // переменные для ссылок кнопок
        $link_btn_menu_1 = get_theme_mod('saintsmedia_link_botton_1', '');
        $link_btn_menu_2 = get_theme_mod('saintsmedia_link_botton_2', '');
        ?>

        <div class="saintsmedia-theme-cta menu-nav-buttons--desktop">
            <a target="_blank" href="<?php echo esc_url(tfc_go_link($link_btn_menu_1)); ?>">
                <button class="saintsmedia-theme-btn play" tabindex="0">
                    <?php echo esc_html($btn_menu_1); ?>
                </button>
            </a>

            <a target="_blank" href="<?php echo esc_url(tfc_go_link($link_btn_menu_2)); ?>">
                <button class="saintsmedia-theme-btn download" tabindex="0">
                    <?php echo esc_html($btn_menu_2); ?>
                </button>
            </a>
        </div>

        <nav class="saintsmedia-theme-nav semtio" aria-label="Main navigation">

            <?php
            // Выводим меню WordPress с сохранением ваших классов/ID
            if (has_nav_menu('menu-1')) {
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'container'      => false,
                    'menu_id'        => 'saintsmedia-theme-menu',
                    'menu_class'     => 'saintsmedia-theme-menu',
                    // 0 = без ограничения уровней вложенности
                    'depth'          => 0,
                    'fallback_cb'    => false,
                ]);
            }

            if (has_nav_menu('menu-1')) {
                echo '<button class="burger" aria-label="Open menu" aria-controls="saintsmedia-theme-menu" aria-expanded="false"><i class="fa-solid fa-bars" aria-hidden="true"></i><span class="sr-only">Меню</span></button>';
            };
            ?>

        </nav>

        <div class="saintsmedia-theme-cta menu-nav-buttons--mobile">
            <a rel="noreferrer nofollow noopener" target="_blank"
                href="<?php echo esc_url(tfc_go_link($link_btn_menu_1)); ?>">
                <button class="saintsmedia-theme-btn play" tabindex="0">
                    <?php echo esc_html($btn_menu_1); ?>
                </button>
            </a>

            <a rel="noreferrer nofollow noopener" target="_blank"
                href="<?php echo esc_url(tfc_go_link($link_btn_menu_2)); ?>">
                <button class="saintsmedia-theme-btn download" tabindex="0">
                    <?php echo esc_html($btn_menu_2); ?>
                </button>
            </a>
        </div>
    </header><!-- #masthead -->

    <!-- Schema - Article -->
    <?php if (is_front_page()) { ?>
        <div style="display:none;" class="hiden-schema">
            <!-- Article -->
            <div itemprop="mainEntity" itemscope itemtype="https://schema.org/Article">
                <!-- Заголовок/описание/URL -->
                <meta itemprop="headline" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <meta itemprop="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
                <meta itemprop="mainEntityOfPage" content="<?php echo esc_url(home_url('/')); ?>">
                <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">

                <!-- Даты (ISO 8601) -->
                <meta itemprop="datePublished" content="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                <meta itemprop="dateModified" content="<?php echo esc_attr(get_post_modified_time(DATE_W3C, true)); ?>">

                <!-- Паблишер (Organization + logo) -->
                <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <meta itemprop="url" content="<?php echo esc_url(get_site_icon_url(512)); ?>">
                        <meta itemprop="width" content="512">
                        <meta itemprop="height" content="512">
                    </span>
                </span>

                <!-- Картинка статьи (ImageObject) -->
                <?php
                $img_id  = get_post_thumbnail_id();
                if ($img_id) {
                    $src  = wp_get_attachment_image_src($img_id, 'full');
                    $alt  = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                    $meta = wp_get_attachment_metadata($img_id);
                    if ($src) :
                ?>
                        <span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="<?php echo esc_url($src[0]); ?>">
                            <meta itemprop="contentUrl" content="<?php echo esc_url($src[0]); ?>">
                            <?php if (!empty($meta['width']) && !empty($meta['height'])) : ?>
                                <meta itemprop="width" content="<?php echo esc_attr($meta['width']); ?>">
                                <meta itemprop="height" content="<?php echo esc_attr($meta['height']); ?>">
                            <?php endif; ?>
                            <?php if ($alt) : ?>
                                <meta itemprop="caption" content="<?php echo esc_attr($alt); ?>">
                            <?php endif; ?>
                        </span>
                <?php
                    endif;
                }
                ?>
            </div>
            <!-- Article END -->
            <!-- WebPage -->
            <div itemscope itemtype="https://schema.org/WebPage">
                <meta itemprop="name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <meta itemprop="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
                <meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $front_id = (int) get_option('page_on_front');
                if ($front_id) {
                    $published = get_post_time('c', true, $front_id);
                    $modified  = get_post_modified_time('c', true, $front_id);
                } else {
                    $published = get_the_date('c');
                    $modified  = get_the_modified_date('c');
                }
                ?>
                <?php if (has_custom_logo()) :
                    $logo_id = get_theme_mod('custom_logo');
                    $logo    = wp_get_attachment_image_src($logo_id, 'full');
                    if ($logo) : ?>
                        <div itemprop="primaryImageOfPage" itemscope itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="<?php echo esc_url($logo[0]); ?>">
                        </div>
                <?php endif;
                endif; ?>
            </div>
            <!-- WebPage END -->
        </div>
    <?php } ?>

    <script>
        // меню (ховер/уход курсора для подпунктов)
        document.querySelectorAll('.has-submenu, .menu-item-has-children').forEach(function(item) {
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
            let saintsmediaThemeMenu = document.querySelector('.saintsmedia-theme-menu');
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.saintsmedia-theme-nav');
            const menu = document.getElementById('saintsmedia-theme-menu');
            if (burger && nav && menu) {
                burger.addEventListener('click', function() {
                    const isOpen = nav.classList.toggle('open');
                    burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                    // Цвет бордера управляется классом .open (место зарезервировано в CSS)
                });
            }
        });

        // Добавляем эффект уменьшения логотипа при прокрутке страницы
        document.addEventListener('scroll', function() {
            const header = document.querySelector('.saintsmedia-theme-header');
            const logo = document.querySelector('.saintsmedia-theme-logo img');

            if (window.scrollY > 100) {
                if (logo) {
                    logo.style.transition = 'height 0.9s ease';
                    logo.style.width = '50px';
                }
            } else {
                if (logo) {
                    logo.style.transition = 'height 0.3s ease';
                    if (window.innerWidth < 431) {
                        logo.style.width = '65px';
                    } else {
                        logo.style.width = '80px';
                    }
                }
            }
        });

        let burger = document.querySelector('button.burger');
        let buttonsPosition = document.querySelector('.saintsmedia-theme-cta.menu-nav-buttons--desktop');
        let saintsmediaCtaButtons = document.querySelector('.saintsmedia-theme-cta');

        if (burger === null) {
            buttonsPosition.style.justifyContent = "flex-end";
            saintsmediaCtaButtons.style.position = 'fixed';
            saintsmediaCtaButtons.style.right = '16px';
        } else {
            saintsmediaCtaButtons.style.marginLeft = '15px';
        }
    </script>
