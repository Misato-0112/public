<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title><?php bloginfo('name'); ?></title> -->
    <meta name="description" content="Ms-10's works.はWebデザインとコーディング、建築パースを作成しているフリーランス「misato」の仕事を紹介するサイトです。">

    <!-- OGP設定 -->
    <meta property="og:title" content="Webデザインと建築パース | Ms-10's works.">
    <meta property="og:description" content="Ms-10's works.はWebデザインとコーディング、建築パースを作成しているフリーランス「misato」の仕事を紹介するサイトです。">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://ms-10s.biz/">
    <meta property="og:site_name" content="Ms-10's works.">

    <!-- cssリセット -->
    <?php wp_enqueue_style('ress', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css'); ?>

    <!-- Google fontの読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap'); ?>

    <!-- スタイルシート読み込み -->
    <?php wp_enqueue_style('ms-10s-main', get_template_directory_uri() . '/assets/css/main.css'); ?>
    <!-- JQuaryとjs読み込み -->
    <?php
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'ms-10s-main',
        get_template_directory_uri() . '/assets/script/main.js',
        array('jquery'),
        null,
        true
    );
    ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><img class="header__logo-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Ms-10's works."></a></h1>
            <nav class="header-nav">
                <ul class="header-nav__list">
                    <li class="header-nav__item">
                        <a href="#service" class="header-nav__link">Service</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#works" class="header-nav__link">Works</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#news" class="header-nav__link">News</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="#about" class="header-nav__link">About</a>
                    </li>
                    <li>
                        <a class="header__button contact__button">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="hamburger-menu">
                <button class="hamburger__button">
                    <span class="hamburger__line hamburger__line--first"></span>
                    <span class="hamburger__line hamburger__line--second"></span>
                </button>
                <nav class="hamburger-nav">
                    <ul class="hamburger-nav__list">
                        <li class="hamburger-nav__item">
                            <a href="#service" class="hamburger-nav__link">Service</a>
                        </li>
                        <li class="hamburger-nav__item">
                            <a href="#works" class="hamburger-nav__link">Works</a>
                        </li>
                        <li class="hamburger-nav__item">
                            <a href="#news" class="hamburger-nav__link">News</a>
                        </li>
                        <li class="hamburger-nav__item">
                            <a href="#about" class="hamburger-nav__link">About</a>
                        </li>
                        <li>
                            <a class="hamburger__button contact__button">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>