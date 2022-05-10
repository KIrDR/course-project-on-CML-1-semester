﻿<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
require("shopping/connection.php");
if (isset($_GET['page'])) {
    $pages = array("products", "cart");
    if (in_array($_GET['page'], $pages)) {
        $_page = $_GET['page'];
    } else {
        $_page = "products";
    }
} else {
    $_page = "products";
}
?>
<!DOCTYPE html>
<html lang="ru">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, in itial-scale=1, user-scalable=0">
    <title>О компании - k-store</title>
    <meta name="description"
          content="Фермерское хозяйство “Грицкевичей” в широком ассортименте предлагает купить орехи оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
    <meta name="keywords" content="">
    <link rel="preload" href="k-store/static/fonts/ElegantIcons.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="k-store/static/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="k-store/static/fonts/Cera%20Pro%20Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="k-store/static/fonts/Cera%20Pro%20Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="k-store/static/fonts/Cera%20Pro%20Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="k-store/static/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="k-store/static/css/packedmin_all_css.css">
    <link rel="shortcut icon" href="k-store/static/images/fav.png">
    <meta property="og:site_name" content="ФХ “Грицкевичей” - Фермерское хозяйство “Грицкевичей”, k-store">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title"
          content="Фермерское хозяйство “Грицкевичей” в широком ассортименте предлагает купить орехи оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
    <meta property="og:type" content="website">
    <meta property="og:image" content="k-store/static/images/logoV2.png">
    <meta property="og:url" content="index.php">
    <meta property="og:description"
          content="ФХ “Грицкевичей” - Фермерское хозяйство “Грицкевичей”, k-store. В широком ассортименте предлагает купить орехи оптом с доставкой. Мы осуществляем продажу овощей оптом от производителя">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NQ6247F');
    </script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQ6247F"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="preload">
    <div class="preload-box">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<div id="main">
    <header>
        <div class="header-block d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="header-left d-flex flex-column flex-md-row align-items-center">
                            <p class="d-flex align-items-center"><a href="mail:" class="contact-line-field"><i
                                            class="fas fa-envelope"></i>kartoshkastore@gmail.com</a></p>
                            <p class="d-flex align-items-center"><a href="tel:" class="contact-line-field url-phone"><i
                                            class="fas fa-phone"></i>+375 29 846 77 77</a></p>
                            <div class="phone-link d-flex">
                                <a href="https://telegram.me/?"><i class="fab fa-telegram"> </i></a>
                                <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://www.viber.com/en/"><i class="fab fa-viber"> </i></a>
                                <a href="https://www.instagram.com/kartoshkastoreit/" target="_blank"><i
                                            class="fab fa-instagram"> </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="header-right d-flex flex-column flex-md-row justify-content-md-end justify-content-center align-items-center">
                            <div class="social-link d-flex">
                                <p>Магазин техники "K-store"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <a class="logo" href="index.php">
                            <img src='k-store/static/images/logoV2.png' width="150px">
                        </a>
                    </div>
                    <div class="col-8">
                        <div class="navgition-menu d-flex align-items-center justify-content-center">
                            <ul class="mb-0">
                                <li class="toggleable">
                                    <a class="menu-item" href="index.php">Главная</a>
                                </li>
                                <li class="toggleable">
                                    <a class="menu-item" href="catalog/all.php">Техника</a>
                                </li>
                                <li class="toggleable">
                                    <a class="menu-item" href="about_company.php">О компании</a>
                                </li>
                                <li class="toggleable">
                                    <a class="menu-item" href="blog.php">Новости</a>
                                </li>
                                <li class="toggleable">
                                    <a class="menu-item" href="contact.php">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="product-function d-flex align-items-center justify-content-end">
                            <div id="cart"><?php if ($_SESSION['totalq'] > 0) {
                                    echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';
                                } ?><a class="function-icon icon_bag_alt" href="shopping/index.php"><span>КОРЗИНА</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="mobile-menu">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="mobile-menu_block d-flex align-items-center">
                            <a class="mobile-menu--control" href="#"><i class="fas fa-bars"></i></a>
                            <div id="ogami-mobile-menu">
                                <button class="no-round-btn" id="mobile-menu--closebtn">МЕНЮ</button>
                                <div class="mobile-menu_items">
                                    <ul class="mb-0 d-flex flex-column">
                                        <li class="toggleable">
                                            <a class="menu-item" href="index.php">Главная</a>
                                        </li>
                                        <li class="toggleable">
                                            <a class="menu-item" href="catalog/all.php">Техника</a>
                                        </li>
                                        <li class="toggleable">
                                            <a class="menu-item" href="about_company.php">О компании</a>
                                        </li>
                                        <li class="toggleable">
                                            <a class="menu-item" href="blog.php">Новости</a>
                                        </li>
                                        <li class="toggleable">
                                            <a class="menu-item" href="contact.php">Контакты</a>
                                        </li>
                                        <!--<li class="toggleable"> </li>
                                           <li class="toggleable"><a class="menu-item" href="#">Пример вложенности</a><span class="sub-menu--expander"><i class="icon_plus"></i></span>
                                             <ul class="sub-menu" style="display: none;">
                                               <li><a href="404.html">404</a></li>
                                               <li><a href="blog_detail.html">страница новости</a></li>
                                               <li><a href="shop.html">страница каталога</a></li>
                                               <li><a href="produkt.html">страница товара</a></li>
                                             </ul>
                                           </li>-->
                                    </ul>
                                </div>
                                <div class="mobile-login">
                                    <a href="tel:" class="url-phone"><i class="fas fa-phone"></i> +375 29 846 77 77</a>
                                    <a href="mail:"><i class="fas fa-envelope"></i> export@gretsky.by</a>
                                </div>
                                <div class="mobile-social justify-content-center">
                                    <a href="https://telegram.me/?"><i class="fab fa-telegram"> </i></a>
                                    <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.viber.com/en/"><i class="fab fa-viber"> </i></a>
                                    <a href="https://www.instagram.com/kartoshkastoreit/" target="_blank"><i
                                                class="fab fa-instagram"> </i></a>
                                </div>
                            </div>
                            <div class="ogamin-mobile-menu_bg"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mobile-menu_logo text-center d-flex justify-content-center align-items-center"><a
                                    href="index.php"><img src="k-store/static/images/logo.png" alt=""></a></div>
                    </div>
                    <div class="col-3">
                        <div class="mobile-product_function d-flex align-items-center justify-content-end">
                            <?php if ($_SESSION['totalq'] > 0) {
                                echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';
                            } ?><a class="function-icon icon_bag_alt" href="shopping/index.php"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-filter">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
                        <div class="department-menu_block">
                            <div class="department-menu d-flex justify-content-between align-items-center"><i
                                        class="fas fa-bars"></i>Каталог<span><i class="arrow_carrot-down"></i></span>
                            </div>
                            <div class="department-dropdown-menu" style="display: none;">
                                <ul>
                                    <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;">
                                        <b>СВЕЖИЕ ОРЕХИ</b></li>
                                    <li><a href="catalog/fistashki.php" class=""> - <img class="ico-menu"
                                                                                         src="k-store/static/images/ico/Fistashki.svg"
                                                                                         alt="">Фисташки</a></li>
                                    <li><a href="catalog/funduk.php"> - <img class="ico-menu"
                                                                             src="k-store/static/images/ico/Funduk.svg"
                                                                             alt="">Фундук</a></li>
                                    <li><a href="catalog/k-store_oreh.php"> - <img class="ico-menu"
                                                                                   src="k-store/static/images/ico/k-store_orekh.svg"
                                                                                   alt="">Грецкий Орех</a></li>
                                    <li><a href="catalog/mindal.php"> - <img class="ico-menu"
                                                                             src="k-store/static/images/ico/Mindal.svg"
                                                                             alt="">Миндаль</a></li>
                                    <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;">
                                        <b>ОБЖАРЕННЫЕ ОРЕХИ</b></li>
                                    <li><a href="catalog/obzh_lesnoy.php" class=""> - <img class="ico-menu"
                                                                                           src="k-store/static/images/ico/Lesnoy_orekh.svg"
                                                                                           alt="">Фундук</a></li>
                                    <li><a href="catalog/obzh_fistashki.php"> - <img class="ico-menu"
                                                                                     src="k-store/static/images/ico/Fistashki.svg"
                                                                                     alt="">Фисташки</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
                        <div class="website-search">
                            <div class="row no-gutters">
                                <form style="display: flex; width:100%;" name="search" action="search/search.php"
                                      method="post">
                                    <div class="col-8 col-md-8 col-lg-9 col-xl-10"
                                         style="padding-left: 0; padding-right:0;">
                                        <div class="search-input">
                                            <input class="no-round-input no-border" name="query" type="search"
                                                   placeholder="Что хотите искать?">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-3 col-xl-2"
                                         style="padding-left: 0; padding-right:0;">
                                        <button class="no-round-btn">Поиск</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  -->
    <!-- End header-->
    <div class="ogami-breadcrumb">
        <div class="container">
            <ul>
                <li><a class="breadcrumb-link" href="index.php"> <i class="fas fa-home"></i>Главная</a></li>
                <li><a class="breadcrumb-link active">О компании</a></li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb-->
    <div class="about-us">
        <div class="container">
            <div class="our-story">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="our-story_text">
                            <h1 class="title green-underline">Хотите использовать технологии будущего уже сейчас? </h1>
                            <p>"K-store" сотрудничает с множеством зарубежных постащиков, что позволяет получать новые
                                продукты транснациональных компаний с дня их появления на рынке. Мы специализируемся на
                                поставке ноутбуков по Беларуси и России, регулярно изучаем спрос и предложение рынка,
                                тем самым предлагая Вам лучшую цену. Среди большого ассортимента привычных ноутбуков мы
                                предлагаем уникальные продукты, которые не поставляют иные интернет магазины. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="our-story_video">
                            <br>
                            <iframe width="500" height="280" src="https://www.youtube.com/embed/y9a8xjdTChE"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            <!--img src="/k-store/static/images/pages/video_play.png" alt="play video">
                               <a-- class="play-btn" href="https://youtu.be/5Mko8G7ikWs" target="_blank"><i class="fas fa-play"></i></a-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-number">
                <div class="row">
                    <div class="col-md-3">
                        <div class="our-number_block">
                            <div class="our-number_icon" style="margin-left: 40px; margin-right:0px;">
                                <img src="k-store/static/images/pages/about_us_icon_1.svg" alt="icon">
                            </div>
                            <div class="our-number_info">
                                <h2 class="nummber-increase">
                                    <span class="numscroller" data-min="1" data-max="300" data-delay="10"
                                          data-increment="7">300</span>
                                </h2>
                                <p>Поступление техники в месяц</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="our-number_block">
                            <div class="our-number_icon"><img src="k-store/static/images/pages/about_us_icon_2.png"
                                                              alt="icon"></div>
                            <div class="our-number_info">
                                <h2 class="nummber-increase">
                                    <span class="numscroller" data-min="1" data-max="7" data-delay="2"
                                          data-increment="1">7</span>
                                </h2>
                                <p>Видов <br> упаковки</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="our-number_block">
                            <div class="our-number_icon" style="margin-left: 40px; margin-right:0px;">
                                <img src="k-store/static/images/pages/about_us_icon_3.svg" alt="icon">
                            </div>
                            <div class="our-number_info">
                                <h2 class="nummber-increase">
                                    <span class="numscroller" data-min="1" data-max="28" data-delay="2"
                                          data-increment="1">28</span>
                                </h2>
                                <p>Cкладов<br/></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="our-number_block">
                            <div class="our-number_icon"><img src="k-store/static/images/pages/about_us_icon_4.png"
                                                              alt="icon"></div>
                            <div class="our-number_info">
                                <h2 class="nummber-increase">
                                    <span class="numscroller" data-min="1" data-max="20" data-delay="2"
                                          data-increment="1">20</span>
                                </h2>
                                <p>Курьеров</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-fluid">
            <div class="why-choose-us">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-4 align-self-end">
                            <div class="wcu_img"><img src="k-store/static/images/pages/wcu_img1.png" alt="image"></div>
                        </div>
                        <div class="col-sm-10 col-md-8">
                            <div class="wcu-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Шаг 1</h5>
                                        <h2 class="title green-underline">Выбор устройства</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="wcu-block">
                                                    <div class="wcu_intro">
                                                        <p>Подбор устройства следует вести из ваших потребностей.
                                                            Производительные ноутбуки имеют немалый вес и габариты.
                                                            Для повседневного использования лучше выбрать Laptop, малые
                                                            габариты позволят оперативно выполнять работу
                                                            не требующих больших вычислительных мощностей в любом месте
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8 p-50 order-2 order-sm-2 order-lg-1 justify-content-rieght ">
                            <div class="wcu-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Шаг 2</h5>
                                        <h2 class="title green-underline">Модель ноутбука</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="wcu-block">
                                                    <div class="wcu_intro">
                                                        <p>Каждый ноутбук имеет различную комплектацию.Разный объем
                                                            оперативной памяти, разрешение экрана, размер жёсткиого и
                                                            твердотельного диска.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-4 align-self-end order-1">
                            <div class="wcu_img"><img src="k-store/static/images/pages/wcu_img22.png" alt="image"></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-4 align-self-end">
                            <div class="wcu_img"><img src="k-store/static/images/pages/wcu_img3.png" alt="image"></div>
                        </div>
                        <div class="col-sm-10 col-md-8">
                            <div class="wcu-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Шаг 3</h5>
                                        <h2 class="title green-underline">Оформление заказа</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="wcu-block">
                                                    <div class="wcu_intro">
                                                        <p>
                                                            Доставка прямо к вам домой из нашего магазина или склада.
                                                            Бесплатный подъём на этаж. Проверка комплектности и
                                                            отсутствие внешних повреждений техники. В случае брака товар
                                                            возвращается в магазин
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-10 col-md-8 p-50 order-2 order-sm-2 order-lg-1 ">
                            <div class="wcu-wrapper">
                                <div class="row">
                                    <div class="col-12">
                                        <h5>Шаг 4</h5>
                                        <h2 class="title green-underline">Мы доставляем</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="wcu-block">
                                                    <div class="wcu_intro">
                                                        <p>В распоряжении нашего магазина 20 курьеров с собственным
                                                            автомобильным парком,
                                                            который мы активно используем для доставки продукции нашим
                                                            портнёрам.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-4 align-self-end order-1">
                            <div class="wcu_img"><img src="k-store/static/images/pages/wcu_img44.png" alt="image"></div>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="our-farmer">
                <h2 class="title green-underline">"K-store" поддерживает Глобальный Договор ООН</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-9 col-lg-9">
                        <div class="our-farmer-block our-farmer-block--1">
                            <div class="farmer-img">
                                <img src="k-store/static/images/certificate/uiglobalcompact-min.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    <div class="partner">
        <div class="container">
            <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 10}">
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/mvideo.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/amazon.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/apple.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/google.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/lenovo.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/samsung.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/xiaomi.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/strela.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/elemeent5.svg"
                                                            alt="partner logo"></a></div>
                <div class="partner--logo"><a href="#"><img src="k-store/static/images/partner/i-store.svg"
                                                            alt="partner logo"></a></div>
            </div>
        </div>
    </div>
    <!-- -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 text-sm-center text-md-left">
                    <div class="footer-logo"><img src="k-store/static/images/logo.png" alt=""></div>
                    <div class="footer-contact">
                        <p>г. Минск, ул. Передовая 73, 220037</p>
                        <p><a href="tel:+37530301" class="contact-line-field url-phone">+375 29 846 77 77</a></p>
                        <p><a href="mail:exporiy.by" class="contact-line-field">kartoshkastore@gmail.com</a></p>
                    </div>
                    <div class="footer-social">
                        <a class="round-icon-btn" href="https://web.whatsapp.com/">
                            <i class="fab fa-whatsapp"> </i>
                        </a>
                        <a class="round-icon-btn" href="https://www.viber.com/en/">
                            <i class="fab fa-viber"> </i>
                        </a>
                        <a class="round-icon-btn" href="https://telegram.me/?">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a class="round-icon-btn" href="https://www.instagram.com/kartoshkastoreit/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a><br/>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://vk.com"
                           target="_blank">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://www.facebook.com/?"
                           target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://twitter.com/?"
                           target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="round-icon-btn" style="margin-top: 0.5em;" href="https://www.youtube.com/channel/?"
                           target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12 col-sm-4 text-sm-center text-md-left">
                            <div class="footer-quicklink">
                                <h5>Карта сайта</h5>
                                <a href="index.php">Главная</a>
                                <a href="catalog/all.php">Техника</a>
                                <a href="about_company.php">О компании</a>
                                <a href="blog.php">Новости</a>
                                <a href="contact.php">Контакты</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 text-sm-center text-md-left">
                            <div class="footer-quicklink">
                                <h5>разные виды</h5>
                                <a href="catalog/job.php">Работа</a>
                                <a href="catalog/games.php">Игры</a>
                                <a href="catalog/everyday.php">Повседневное</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 text-sm-center text-md-left">
                            <div class="footer-quicklink">
                                <h5>В наличие</h5>
                                <a href="catalog/InStock.php">Уже в продаже</a>
                                <a href="catalog/OutOfStock.php">В будущем</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newletter">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="newletter_text text-center text-md-left">
                            <h5>Остались вопросы?</h5>
                            <p>Оставьте свой номер, мы перезвоним и ответим на все ваши вопросы!</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="newletter_input">
                            <form id="recoll_me" action="#" method="post">
                                <input class="round-input" type="phone" name="phone" required placeholder="Ваш номер">
                                <input type="hidden" name="csrfmiddlewaretoken"
                                       value="l4jT4Eg9UdEzs0mkKfsipxeroypBHA9BAHBNfFpwSbG0yhP3DOolZfZpqt6B5wjj">
                                <button>Перезвоните</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-credit">
            <div class="container">
                <div class="footer-creadit_block d-flex flex-column flex-md-row justify-content-start justify-content-md-between align-items-baseline align-items-md-center">
                    <p class="author">© 2022 K-store | Магазин техники "K-store" | Все права защищены</p>
                </div>
            </div>
        </div>
        <div class="form-feedback" id="feedback-form">
            <form id="f_contact" name="contact" action="#" method="post">
                <h2>Оставить заявку</h2>
                <input class="no-round-input mt-20" name="name" type="text" placeholder="Имя"><br>
                <input class="no-round-input mt-20" name="phone" type="phone" required placeholder="Телефон"><br>
                <input class="no-round-input mt-20" name="email" type="email" required placeholder="Email"><br>
                <textarea class="textarea-form mt-20" name="msg" cols="30" rows="10"
                          placeholder="Ваше сообщение"></textarea>
                <br>
                <input type="hidden" name="csrfmiddlewaretoken"
                       value="l4jT4Eg9UdEzs0mkKfsipxeroypBHA9BAHBNfFpwSbG0yhP3DOolZfZpqt6B5wjj">
                <button id="f_send" class="normal-btn mt-20">Отправить сообщение</button>
            </form>
        </div>
    </footer>
    <!-- -->
</div>
<script src="k-store/static/js/packedmin.js"></script>
<script>
    let inputs = document.getElementsByClassName('parallax-img');

    for (let input of inputs) {
        let paralaximg = new Parallax(input, {
            hoverOnly: true,
        });
    }

</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": Магазин
        техники
        "K-store",
        "legalName": "ФХ “Грицкевичей",
        "url": "https://k-store.by/",
        "logo": "https://k-store.by/k-store/static/images/logo.png",
        "foundingDate": "2001",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "ул. Независимости",
            "addressLocality": "4А область, г.Лунинец",
            "addressRegion": "BY",
            "postalCode": "221234",
            "addressCountry": "Belarus"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "sales",
            "telephone": "[+375 (29) 846 77 77]",
            "email": "kartoshkastore@gmail.com"
        }
    }
</script>
</body>
</html>