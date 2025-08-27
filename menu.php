<div id="page" class="site sm-page">
    <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e('Skip to content', 'saintsmedia'); ?>
    </a>

    <header class="saintsmedia-theme-header">
        <div itemscope itemtype="https://schema.org/ImageObject" class="saintsmedia-theme-logo" tabindex="0"
            aria-label="saintsmedia-theme">
            <meta itemprop="url" content="<?php echo esc_url(get_home_url()); ?>">



            <a href="/">
                <?php
                // if (has_custom_logo()) {
                    // echo get_custom_logo(); // уже со srcset
                    // echo saintsmedia_logo_hardcoded();
                    // echo saintsmedia_logo_responsive();

                    echo '<img src="https://calendariovip.es/wp-content/uploads/2025/08/logo.webp" alt="logo" width="1489" height="1536" srcset="https://calendariovip.es/wp-content/uploads/2025/08/logo-150x150.webp 150w, https://calendariovip.es/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://calendariovip.es/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://calendariovip.es/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://calendariovip.es/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w" sizes="(max-width: 768px) 100vw, 1489px">';
                // } else {
                //     echo '<a href="' . esc_url(home_url('/')) . '" class="site-title">' . esc_html(get_bloginfo('name')) . '</a>';
                // }
                ?>
            </a>
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
            <a rel="sponsored nofollow noopener" target="_blank"
                href="<?php echo esc_url(tfc_go_link($link_btn_menu_1)); ?>">
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
    </header><!-- #masthead -->

    <!-- Хлебные крошки только для домашней стр. -->
    <?php if (is_front_page()) { ?>
    <div id="breadСrumbs" style="display: none;" itemscope itemtype="https://schema.org/BreadcrumbList"
        aria-label="Breadcrumb">
        <ul>
            <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a class="breadcrumbs__link" itemprop="item" href="/"><span itemprop="name">
                        <?php echo esc_html(get_the_title()); ?>
                    </span></a>
                <meta itemprop="position" content="1" />
            </li>
        </ul>
    </div>
    <?php } ?>

    <script>
        // меню (ховер/уход курсора для подпунктов)
        document.querySelectorAll('.has-submenu, .menu-item-has-children').forEach(function (item) {
            let timer;
            item.addEventListener('mouseenter', function () {
                clearTimeout(timer);
                item.classList.add('submenu-open');
            });
            item.addEventListener('mouseleave', function () {
                timer = setTimeout(function () {
                    item.classList.remove('submenu-open');
                }, 250); // задержка 250 мс
            });
        });

        // гамбургер
        document.addEventListener('DOMContentLoaded', function () {
            let saintsmediaThemeMenu = document.querySelector('.saintsmedia-theme-menu');
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.saintsmedia-theme-nav');
            const menu = document.getElementById('saintsmedia-theme-menu');
            if (burger && nav && menu) {
                burger.addEventListener('click', function () {
                    const isOpen = nav.classList.toggle('open');
                    burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                    // Цвет бордера управляется классом .open (место зарезервировано в CSS)
                });
            }
        });

        // Добавляем эффект уменьшения логотипа при прокрутке страницы
        // document.addEventListener('scroll', function() {
        //     const header = document.querySelector('.saintsmedia-theme-header');
        //     const logo = document.querySelector('.saintsmedia-theme-logo img');

        //     if (window.scrollY > 100) {
        //         if (logo) {
        //             logo.style.transition = 'height 0.9s ease';
        //             logo.style.width = '50px';
        //         }
        //     } else {
        //         if (logo) {
        //             logo.style.transition = 'height 0.3s ease';
        //             if (window.innerWidth < 431) {
        //                 logo.style.width = '65px';
        //             } else {
        //                 logo.style.width = '80px';
        //             }
        //         }
        //     }
        // });

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
