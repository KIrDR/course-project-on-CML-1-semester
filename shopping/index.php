<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
require("connection.php");
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="../k-store/static/css/packedmin_all_css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Корзина - k-store</title>
    <meta name="description"
          content="k-store">
    <meta name="keywords" content="">
    <link rel="preload" href="../k-store/static/fonts/ElegantIcons.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../k-store/static/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="../k-store/static/fonts/Cera%20Pro%20Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../k-store/static/fonts/Cera%20Pro%20Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../k-store/static/fonts/Cera%20Pro%20Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="../k-store/static/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="shortcut icon" href="../k-store/static/images/fav.png">
</head>

<body>
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
                    <a class="logo" href="../index.php">
                        <img src='../k-store/static/images/logoV2.png' width="150px">
                    </a>
                </div>
                <div class="col-8">
                    <div class="navgition-menu d-flex align-items-center justify-content-center">
                        <ul class="mb-0">
                            <li class="toggleable">
                                <a class="menu-item" href="../index.php">Главная</a>
                            </li>
                            <li class="toggleable">
                                <a class="menu-item" href="../catalog/all.php">Техника</a>
                            </li>
                            <li class="toggleable">
                                <a class="menu-item" href="../about_company.php">О компании</a>
                            </li>
                            <li class="toggleable">
                                <a class="menu-item" href="../blog.php">Новости</a>
                            </li>
                            <li class="toggleable">
                                <a class="menu-item" href="../contact.php">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="product-function d-flex align-items-center justify-content-end">
                        <div id="cart"><?php if ($_SESSION['totalq'] > 0) {
                                echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';
                            } ?><a class="function-icon icon_bag_alt" href="../shopping/index.php"><span>КОРЗИНА</span></a>
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
                        <div id="   mi-mobile-menu">
                            <button class="no-round-btn" id="mobile-menu--closebtn">МЕНЮ</button>
                            <div class="mobile-menu_items">
                                <ul class="mb-0 d-flex flex-column">
                                    <li class="toggleable">
                                        <a class="menu-item" href="../index.php">Главная</a>
                                    </li>
                                    <li class="toggleable">
                                        <a class="menu-item" href="../catalog/all.php">Техника</a>
                                    </li>
                                    <li class="toggleable">
                                        <a class="menu-item" href="../about_company.php">О компании</a>
                                    </li>
                                    <li class="toggleable">
                                        <a class="menu-item" href="../blog.php">Новости</a>
                                    </li>
                                    <li class="toggleable">
                                        <a class="menu-item" href="../contact.php">Контакты</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mobile-login">
                                <a href="tel:" class="url-phone"><i class="fas fa-phone"></i> +375 29 846 77 77</a>
                                <a href="mail:"><i class="fas fa-envelope"></i> kartoshkastore@gmail.com</a>
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
                                href="index.php"><img src="../k-store/static/images/logo.png" alt=""></a></div>
                </div>
                <div class="col-3">
                    <div class="mobile-product_function d-flex align-items-center justify-content-end">
                        <?php if ($_SESSION['totalq'] > 0) {
                            echo '<i style="font-weight: bolder; color : red;">&bull;</i> ';
                        } ?><a class="function-icon icon_bag_alt" href="../shopping/index.php"></a>
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
                                    <b>ВИД ДЕЙТЕЛЬНОСТИ</b></li>
                                <li><a href="../catalog/job.php" class=""> - Работа</a></li>
                                <li><a href="../catalog/games.php"> - Игры</a></li>
                                <li><a href="../catalog/everyday.php"> - Повседневное</a></li>
                                <li style="text-align: center;font-size: 2ex;border-bottom: 1px solid black;border-top: 1px solid black;">
                                    <b>В наличие</b></li>
                                <li><a href="../catalog/InStock.php" class=""> - Уже в продаже</a></li>
                                <li><a href="../catalog/OutOfStock.php"> - В будущем</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
                    <div class="website-search">
                        <div class="row no-gutters">
                            <form style="display: flex; width:100%;" name="search" action="../search/search.php"
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

<div id="container">

    <div id="sidebar">
        <h1>Заказ</h1>

        <?php
        $_SESSION['totalq'] = '';
        if (isset($_SESSION['cart'])) {
            $sql = "SELECT * FROM `product` ORDER BY name ASC";
            $query = mysqli_query($dbconnect, $sql);
            while ($row = mysqli_fetch_array($query)) {

                $temp_quantity = $_SESSION['cart'][$row['id']]['quantity'];
                if ($temp_quantity != '') {
                    echo '<p class="cart_p">';
                    $text = '' . $row['name'] . ' x ' . $temp_quantity . '';
                    echo '</p>';
                    $text1 = $text1 + $text;
                    echo $text;
                    $_SESSION['totalq'] = $temp_quantity;
                }

            }

            ?>
            <?php


        } else {

            echo "<p>Ваша корзина пуста.</p>";

        }


        ?>
    </div><!--end sidebar-->
    <div id="main" style="margin-top:-115px;">
        <?php require("cart.php"); ?>
    </div><!--end main-->
</div><!--end container-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 text-sm-center text-md-left">
                <div class="footer-logo"><img src="../k-store/static/images/logo.png" alt=""></div>
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
                            <a href="../index.php">Главная</a>
                            <a href="../catalog/all.php">Техника</a>
                            <a href="../about_company.php">О компании</a>
                            <a href="../blog.php">Новости</a>
                            <a href="../contact.php">Контакты</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 text-sm-center text-md-left">
                        <div class="footer-quicklink">
                            <h5>разные виды</h5>
                            <a href="../catalog/job.php">Работа</a>
                            <a href="../catalog/games.php">Игры</a>
                            <a href="../catalog/everyday.php">Повседневное</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 text-sm-center text-md-left">
                        <div class="footer-quicklink">
                            <h5>В наличие</h5>
                            <a href="../catalog/InStock.php">Уже в продаже</a>
                            <a href="../catalog/OutOfStock.php">В будущем</a>
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
                                   value="9S8Mcg2E5Nk04ejx2Hj5T15tVDFUzOeBovqGnhb13LmravMgVgf8tJQrXymUXKoj">
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
                   value="9S8Mcg2E5Nk04ejx2Hj5T15tVDFUzOeBovqGnhb13LmravMgVgf8tJQrXymUXKoj">
            <button id="f_send" class="normal-btn mt-20">Отправить сообщение</button>
        </form>
    </div>
</footer>
<!-- -->
<script src="../k-store/static/js/packedmin.js"></script>

</body>
</html>