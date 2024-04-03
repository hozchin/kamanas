<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
   ym(93455564, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/93455564" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
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
        <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
            <a class="call-link" href="tel:+<?php the_field('phone_number_string', 2); ?>">
                        <div class="call-wrapper call-wrapper-mobile text-center">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/call.png" alt="call">
                            <?php the_field('phone_number', 2); ?>
                        </div>
                    </a>
            </div>

                <div class="col-12 col-lg-7">
                    <nav class="navbar navbar-expand-lg">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav"
                            aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i
                                class="fa fa-bars" aria-hidden="true"></i> Меню</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo get_page_link(2); ?>">Главная <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Меню</a>
                                    <div class="dropdown-menu" aria-labelledby="yummyDropdown">
                                        <a class="dropdown-item" href="<?php echo get_page_link(144); ?>">Фуршетное меню</a>
                                        <a class="dropdown-item" href="<?php echo get_page_link(151); ?>">Банкетное меню</a>
                                        <a class="dropdown-item" href="<?php echo get_page_link(161); ?>">Сеты</a>
                                    </div>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="<?php echo get_page_link(774); ?>">Фото</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo get_page_link(1030); ?>">Условия</a>
                                </li>
                                                                                        </ul>
                        </div>
                    </nav>
                </div>

            </div>
                <!-- Logo Area Start -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center logo mx-auto">
                        <img src="<?php the_field('logo-img', 2);?>">                        
                    </div>
                </div>
            </div>
                <!-- Logo Area End -->


        </div>

 


    </header>




    <!-- ****** Header Area End ****** -->

