<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="fb32c605a856761b" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>
        <?php bloginfo('name');
        echo " | ";
        bloginfo('description'); ?>
    </title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/assets/img/core-img/favicon.ico">

    <?php
    wp_head();
    ?>
    <!-- Yandex.Metrika counter -->
    <script
        type="text/javascript"> (function (m, e, t, r, i, k, a) { m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) }; m[i].l = 1 * new Date(); for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } } k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a) })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(40692059, "init", { clickmap: true, trackLinks: true, accurateTrackBounce: true }); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/40692059" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> <!-- /Yandex.Metrika counter -->
    <script src="//code.jivo.ru/widget/dvDwQq0mkg" async></script>
</head>
<!-- Background Pattern Swither -->
<!-- <div id="pattern-switcher">
        Орешки)
    </div>
    <div id="patter-close">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div> -->


<body class="bg-pattern">
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <!-- Background Pattern Swither -->
    <!-- <div id="pattern-switcher">
        Орешки?
    </div>
    <div id="patter-close">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div> -->

    <!-- ****** Top Header Area Start ****** -->

    <div class="top_area">
        <div class="container">
            <div class="row justify-content-end">
                <!--  Login Register Area -->
            </div>
        </div>
    </div>


    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">


        <div class="container mobile-menu">
            <nav class="navbar navbar-light navbar-expand-lg" style="background-color: rgba (0,0,0,0);">
                <div class="d-flex justify-content-between w-100">
                    <div class="flex-row d-flex align-items-center justify-content-center">
                        <div class="d-flex">
                            <div class="tg mx-1">
                                <a href="https://t.me/+<?php the_field('phone_number_string', 2); ?>" rel="nofollow">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/icons8-telegram-96.png"
                                        alt="tg-link">
                                </a>
                            </div>
                            <div class="wa mx-1">
                                <a href="https://wa.me/<?php the_field('phone_number_string', 2); ?>" rel="nofollow">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/icons8-whatsapp-logo-96.png"
                                        alt="wa-link">
                                </a>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="top-phone d-flex text-center">
                                <a href="tel:+<?php the_field('phone_number_string', 2); ?>">
                                    <?php the_field('phone_number', 2); ?>
                                </a>

                            </div>
                            <div class="top-mail text-center">admin@kamanas.ru</div>
                        </div>
                    </div>

                    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>


                <a class="navbar-brand text-center mr-0 pt-4" href="<?php echo get_page_link(2); ?>">
                    <img class="w-50" src="<?php the_field('footer-img', 2); ?>" alt="kamanas">
                    <div class="top-label text-center">
                        <h1 class="pattaya">Кейтеринг</h1>
                    </div>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto text-center pt-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo get_page_link(2); ?>">Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_page_link(144); ?>">Фуршетное меню</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_page_link(151); ?>">Банкетное меню</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_page_link(774); ?>">Галерея</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_page_link(1030); ?>">Условия</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_page_link(1190); ?>">Для организаторов</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_page_link(1187); ?>">Оплата</a>
                        </li>
                    </ul>
                    <div class="worktime motserrat text-center m-auto py-2">Режим работы<br>ежедневно 9:00-21:00</div>

                </div>
            </nav>
        </div>

        <div class="container pc-menu">
            <div class="row d-flex justify-content-between top-nav">
                <div class="col-3 text-center justify-content-start">
                    <a href="<?php echo get_page_link(2); ?>" class="top-logo">
                        <img src="<?php the_field('footer-img', 2); ?>">
                    </a>
                    <div class="top-label text-center">
                        <h1 class="pattaya">Кейтеринг</h1>
                    </div>
                </div>
                <div class="col-3 action motserrat text-center m-auto rounded py-1"> <span>Акция! </span> При заказе от 100 т.р. <br>"Кофе-брейк" в подарок* <br> <a href="<?php echo get_page_link(1030); ?>">(акция действительна до 01.06.2024)</a></div>
                <div class="col-3 worktime motserrat text-center m-auto">Режим работы<br>ежедневно 9:00-21:00</div>
                <div class="col-3 flex-row d-flex align-items-center justify-content-center">
                    <div class="d-flex mx-2">
                        <div class="tg mx-1">
                            <a href="https://t.me/+<?php the_field('phone_number_string', 2); ?>" rel="nofollow">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/icons8-telegram-96.png"
                                    alt="tg-link">
                            </a>
                        </div>
                        <div class="wa mx-1">
                            <a href="https://wa.me/<?php the_field('phone_number_string', 2); ?>" rel="nofollow">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/icons8-whatsapp-logo-96.png"
                                    alt="wa-link">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="top-phone d-flex text-center">
                            <a href="tel:+<?php the_field('phone_number_string', 2); ?>">
                                <?php the_field('phone_number', 2); ?>
                            </a>

                        </div>
                        <div class="top-mail text-center">admin@kamanas.ru</div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-2 m-auto p-md-0 px-lg-3">
                    <div class="org-link p-lg-3 p-md-2 text-center">
                        <a href="<?php echo get_page_link(845); ?>">Для организаторов</a>
                    </div>
                </div> -->

            </div>
        </div>
        <div class="container-fluid divider pc-menu"></div>
        <div class="container pc-menu">
            <div class="row down-nav d-flex justify-content-center my-5">
                <a class="down-nav-item px-2" href="<?php echo get_page_link(2); ?>">Главная</a>
                <a class="down-nav-item px-2" href="<?php echo get_page_link(144); ?>">Фуршетное меню</a>
                <a class="down-nav-item px-2" href="<?php echo get_page_link(151); ?>">Банкетное меню</a>
                <a class="down-nav-item px-2" href="<?php echo get_page_link(774); ?>">Галерея</a>
                <a class="down-nav-item px-2" href="<?php echo get_page_link(1030); ?>">Условия</a>
                <a class="down-nav-item px-2" href="<?php echo get_page_link(1190); ?>">Для организаторов</a>
                <a class="down-nav-item px-2" href="<?php echo get_page_link(1187); ?>">Оплата</a>
            </div>
        </div>


        </div>
    </header>



    <!-- ****** Header Area End ****** -->