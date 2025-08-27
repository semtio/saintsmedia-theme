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

    как добавить setsrc в такой шаблон:
    <img src="https://calendariovip.es/wp-content/uploads/2025/08/logo.webp" alt="logo">

    Если мои миниатюры WordPress такие:
    1489x1536
    150x150
    291x300
    768x792
    993x1024


    <a href="/">
        <?php
        if (has_custom_logo()) {
            echo get_custom_logo(); // уже со srcset
        } else {
            echo '<a href="' . esc_url(home_url('/')) . '" class="site-title">' . esc_html(get_bloginfo('name')) . '</a>';
        }
        ?>
    </a>



    <img src="https://calendariovip.es/wp-content/uploads/2025/08/logo.webp" alt="logo" width="1489" height="1536" srcset="https://calendariovip.es/wp-content/uploads/2025/08/logo-150x150.webp 150w, https://calendariovip.es/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://calendariovip.es/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://calendariovip.es/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://calendariovip.es/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w" sizes="(max-width: 768px) 100vw, 1489px">


    echo '<img src="" alt="logo" width="1489" height="1536" srcset="https://calendariovip.es/wp-content/uploads/2025/08/logo-150x150.webp 150w, https://calendariovip.es/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://calendariovip.es/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://calendariovip.es/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://calendariovip.es/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w" sizes="(max-width: 768px) 100vw, 1489px">';


    вар.1
    <img src="https://calendariovip.es/wp-content/uploads/2025/08/logo-291x300.webp" alt="logo" width="80" height="83" srcset=" https://calendariovip.es/wp-content/uploads/2025/08/logo-150x150.webp 150w, https://calendariovip.es/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://calendariovip.es/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://calendariovip.es/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://calendariovip.es/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w" sizes="(max-width:431px) 65px, 80px">

    вар.2
    <img width="1537" height="1585" src="https://kaz3.local/wp-content/uploads/2025/08/logo.webp" class="custom-logo" alt="logo" decoding="async" fetchpriority="high" srcset="https://kaz3.local/wp-content/uploads/2025/08/logo.webp 1537w, https://kaz3.local/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://kaz3.local/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://kaz3.local/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://kaz3.local/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w, https://kaz3.local/wp-content/uploads/2025/08/logo-65x67.webp 65w, https://kaz3.local/wp-content/uploads/2025/08/logo-130x134.webp 130w" sizes="(max-width: 1537px) 100vw, 1537px">

    <img width="1537" height="1585" src="https://kaz3.local/wp-content/uploads/2025/08/logo.webp" class="custom-logo" alt="logo" decoding="async" fetchpriority="high" srcset="https://kaz3.local/wp-content/uploads/2025/08/logo.webp 1537w, https://kaz3.local/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://kaz3.local/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://kaz3.local/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://kaz3.local/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w, https://kaz3.local/wp-content/uploads/2025/08/logo-65x67.webp 65w, https://kaz3.local/wp-content/uploads/2025/08/logo-130x134.webp 130w" sizes="(max-width: 1537px) 100vw, 1537px">



    ----


    ДО
    <img width="1537" height="1585" src="https://kaz3.local/wp-content/uploads/2025/08/logo.webp" class="custom-logo" alt="logo" decoding="async" fetchpriority="high" srcset="https://kaz3.local/wp-content/uploads/2025/08/logo.webp 1537w, https://kaz3.local/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://kaz3.local/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://kaz3.local/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://kaz3.local/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w, https://kaz3.local/wp-content/uploads/2025/08/logo-65x67.webp 65w, https://kaz3.local/wp-content/uploads/2025/08/logo-130x134.webp 130w" sizes="(max-width: 1537px) 100vw, 1537px">

    ПОСЛЕ
    <img width="1537" height="1585" src="https://calendariovip.es/wp-content/uploads/2025/08/logo.webp" class="custom-logo" alt="logo" decoding="async" fetchpriority="high" srcset="https://calendariovip.es/wp-content/uploads/2025/08/logo.webp 1537w, https://calendariovip.es/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://calendariovip.es/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://calendariovip.es/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://calendariovip.es/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w" sizes="(max-width: 1537px) 100vw, 1537px">






</body>

</html>
