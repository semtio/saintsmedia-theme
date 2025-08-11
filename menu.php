<div id="page" class="site sm-page">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'saintsmedia'); ?></a>

    <header class="saintsmedia-theme-header">
        <div class="saintsmedia-theme-logo" tabindex="0" aria-label="saintsmedia-theme">
            <a href="/">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . ' Logo">';
                } else {
                    echo '<span class="site-title">' . get_bloginfo('name') . '</span>';
                }
                ?>
            </a>
        </div>
        <nav class="saintsmedia-theme-nav" aria-label="Main navigation">
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
            ?>
            <button class="burger" aria-label="Open menu" aria-controls="saintsmedia-theme-menu" aria-expanded="false"><i class="fa-solid fa-bars" aria-hidden="true"></i><span class="sr-only">Меню</span></button>
        </nav>
        <div class="saintsmedia-theme-cta">
            <button class="saintsmedia-theme-btn play" tabindex="0">Play</button>
            <button class="saintsmedia-theme-btn download" tabindex="0">Download</button>
        </div>
    </header><!-- #masthead -->


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
                    saintsmediaThemeMenu.style.border = "solid 10px #6DA2FE";
                });
            }
        });
    </script>