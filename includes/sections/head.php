<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>Jeff Aug | Official Website - Guitarist & Recording Artist</title>
    <meta name="description" content="Official website of guitarist and recording artist Jeff Aug. Featuring original music, international tour dates, discography, and collaborations.">
    <meta name="keywords" content="Jeff Aug, guitarist, recording artist, instrumental music, acoustic guitar">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.jeffaug.com/">
    <meta property="og:title" content="Jeff Aug | Official Website - Guitarist & Recording Artist">
    <meta property="og:description" content="Official website of guitarist and recording artist Jeff Aug. Featuring original music, international tour dates, discography, and collaborations.">
    <meta property="og:image" content="https://jeffaug.com/assets/img/jeff-aug-social.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@jeffaug">
    <meta name="twitter:creator" content="@jeffaug">
    <meta name="twitter:title" content="Jeff Aug | Official Website - Guitarist & Recording Artist">
    <meta name="twitter:description" content="Official website of guitarist and recording artist Jeff Aug. Featuring original music, international tour dates, discography, and collaborations.">
    <meta name="twitter:image" content="https://jeffaug.com/assets/img/jeff-aug-social.jpg">

    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Preload Critical Assets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS and JavaScript -->
    <?php
    $manifest = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/dist/.vite/manifest.json'), true);
    ?>
    <script type="module" src="/dist/<?= $manifest['src/main.js']['file'] ?>"></script>
    <link rel="stylesheet" href="/dist/<?= $manifest['src/main.js']['css'][0] ?>">
    <script src="https://cdn.tailwindcss.com"></script>


</head>
