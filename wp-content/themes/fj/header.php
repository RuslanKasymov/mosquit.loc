<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="KasymovRuslan">
    <meta name="keywords" content="">
    <meta name="description"
          content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="yandex-verification" content="250ff443ad365f76"/>
    <title>Москитные сетки в Омске на заказ</title>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
<div class="wrapper">
    <div class="content">
        <div class="container top-header-hidden"></div>
        <div class="container-fluid top-header ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4 align-items-center">
                        <div class="logo">
                            <?php if ($_SERVER['REQUEST_URI'] == '/') { ?>
                                <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg"
                                     alt="фабрика жалюзи">
                            <?php } else { ?>
                                <a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg"
                                                 alt="фабрика жалюзи"></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-2 col-lg-6">
                        <nav class="navbar navbar-expand-lg navbar-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav" id="menu">
                                    <li class="nav-item">
                                        <a class="nav-link animated"
                                           href="<?php echo !is_front_page() ? home_url('#type-net', 'https') : "#type-net"; ?>">Виды
                                            сеток</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link animated"
                                           href="<?php echo !is_front_page() ? home_url('#compl-t', 'https') : "#compl-t"; ?>">Комплектация</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link animated"
                                           href="<?php echo !is_front_page() ? home_url('#rem-t', 'https') : "#rem-t"; ?>">Ремонт</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link animated"
                                           href="<?php echo !is_front_page() ? home_url('#dost', 'https') : "#dost"; ?>">Доставка</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link animated"
                                           href="<?php echo !is_front_page() ? home_url('#ab-company', 'https') : "#ab-company"; ?>">О
                                            нас</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="d-none d-md-flex d-lg-flex col-md-4 col-lg-2 align-items-center">
                        <a class="btn-fj animated" href="#ab-company">Заказать звонок!</a>
                    </div>
                </div>
            </div>
        </div>
