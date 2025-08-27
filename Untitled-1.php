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



    <img src="https://calendariovip.es/wp-content/uploads/2025/08/logo.webp" alt="logo" width="1489" height="1536" srcset="https://calendariovip.es/wp-content/uploads/2025/08/logo-150x150.webp 150w, https://calendariovip.es/wp-content/uploads/2025/08/logo-291x300.webp 291w, https://calendariovip.es/wp-content/uploads/2025/08/logo-768x792.webp 768w, https://calendariovip.es/wp-content/uploads/2025/08/logo-993x1024.webp 993w, https://calendariovip.es/wp-content/uploads/2025/08/logo-1489x1536.webp 1489w" sizes="(max-width: 768px) 100vw, 1489px">


</body>

</html>
