<?php
get_header();
?>
<section class="promo">
    <div class="container h-100">
        <div class="promo-wrapper">
            <div class="promo-left">
                <div class="promo-left-text blur p-md-4 m-md-4 p-2 m-2">
                    <div class="promo-text">От Домашнего<br>Пикника</div>
                    <div class="promo-descr">
                        Уютное и вкусное<br>событие
                    </div>
                </div>
            </div>
            <div class="promo-right">
                <div class="promo-right-text blur p-md-4 m-md-5 p-2 m-2">
                    <div class="promo-text">До Грандиозного<br>Банкета</div>
                    <div class="promo-descr">
                        Профессиональное ресторанное<br>обслуживание
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="service_area py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 service-wrapper wow fadeInUp" data-wow-delay=".3s">
                <a href="<?php echo get_page_link(144); ?>">
                    <div class="service-item service-link h-100 text-center">
                        <div class="col-12 service-thumb">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/7.png" alt="">
                        </div>
                        <div class="col-12 service-title">
                            <h6>Фуршет</h6>
                        </div>
                        <div class="col-12 service-descr counter__title"></div>
                        <div class="menu-btn p-2 ">меню</div>
                    </div>
            </div>
            </a>

            <div class="col-12 col-md-6 col-lg-3 service-wrapper wow fadeInUp" data-wow-delay=".6s">
                <a href="<?php echo get_page_link(151); ?>">
                    <div class="service-item service-link h-100 text-center">
                        <div class="col-12 service-thumb">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/6_2.png" alt="">
                        </div>
                        <div class="col-12 service-title">
                            <h6>Банкет</h6>
                        </div>
                        <div class="col-12 service-descr counter__title"></div>
                        <div href="" class="menu-btn p-2">меню</div>
                    </div>
                </a>

            </div>
            <div class="col-12 col-md-6 col-lg-3 mobile-hide service-wrapper wow fadeInUp" data-wow-delay=".9s">
                <div class="service-item h-100 text-center">
                    <div class="col-12 service-thumb">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/10.png" alt="">
                    </div>
                    <div class="col-12 service-title">
                        <h6>Пикник, на яхту</h6>
                    </div>
                    <div class="col-12 service-descr counter__title"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mobile-hide service-wrapper wow fadeInUp" data-wow-delay="1.1s">
                <div class="service-item h-100 text-center">
                    <div class="col-12 service-thumb">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/1_1.png" alt="">
                    </div>
                    <div class="col-12 service-title">
                        <h6>Доставка</h6>
                    </div>
                    <div class="col-12 service-descr counter__title"></div>

                </div>
            </div>
            <!-- <div class="col-12 col-md-6 col-lg-3 mobile-hide service-wrapper wow fadeInUp" data-wow-delay=".9s">
          
                <div class="row service-item h-100 text-center action motserrat m-auto py-3 d-flex">
                <div class="col-12 service-thumb m-auto">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/13.png" alt="">
                    </div>
                <div class="col-12 m-auto"><span>Акция! </span> При заказе от 100 т.р. <br>"Кофе-брейк" в подарок* <br> <a href="<?php echo get_page_link(1030); ?>">(акция действительна до 01.06.2024)</a></div>
                </div>
            </div> -->
            <div class="action-mobile col-12 col-md-6 col-lg-3 service-wrapper wow fadeInUp" data-wow-delay="1.1s">
                <div class="service-item h-100 action montserrat py-3 text-center ">
                    <span>Акция! </span> При заказе от 100 т.р. <br>"Кофе-брейк" в подарок* <br><a href="<?php echo get_page_link(1030); ?>">(акция действительна до 01.06.2024)</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter_area text-center">
    <div class="container">
        <!-- <div class="number" data-max="600">100</div> -->
        <div class="row align-items-center counter__wrapper justify-content-center wow fadeInUp" data-wow-delay=".3s">
            <div class="col-12 col-md-6 col-lg-4 counter__item wow fadeInUp" data-wow-delay=".3s">
                <div class="row justify-content-center align-items-center">
                    <div class="col-5 col-md-6 col-lg-auto counter__number">
                        10
                    </div>
                    <div class="col-5 col-md-6 col-lg-auto counter__title align-items-center">
                        лет в сфере услуг<br> кейтеринга
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 counter__item wow fadeInUp" data-wow-delay=".3s">
                <div class="row justify-content-center align-items-center">
                    <div class="col-5 col-md-6 col-lg-auto counter__number">
                        1200+
                    </div>
                    <div class="col-5 col-md-6 col-lg-auto counter__title align-items-center">
                        проведенных <br>мероприятий
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-lg-auto counter__item wow fadeInUp" data-wow-delay=".3s">
                <div class="row justify-content-center align-items-center">
                    <div class="col-5 col-md-6 col-lg-auto counter__number"">
                        80%
                    </div>
                    <div class=" col-5 col-md-6 counter__title align-items-center">
                        клиентов приходят к нам по рекомендации
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>


<div class="container">
    <?php
    include 'main-carousel.php';
    ?>
</div>

<section class="form_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form-wrapper wow fadeInUp text-center" data-wow-delay=".3s">
                    <div class="col-12 col-md-6 col-lg-4 form-item">
                        <div class="col-12">
                            <div class="form-maintitle m-2">
                                <h2>Заказать услугу кейтеринга</h2>
                            </div>
                            <div class="blur m-2 form-title p-2">
                                Расскажите о вашем мероприятии и мы поможем составить уникальное меню!
                            </div>
                        </div>
                        <div class="col-12">

                            <a class="call-link" href="tel:+<?php the_field('phone_number_string', 2); ?>" rel="nofollow">
                                <div class="call-wrapper-main">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/call.png" alt="call">
                                    <?php the_field('phone_number', 2); ?>
                                </div>
                            </a>
                        </div>

                        <div class="col-12">

                            <a class="wa-link" href="https://wa.me/<?php the_field('phone_number_string', 2); ?>" rel="nofollow">
                                <div class="wa-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/wa.png" alt="wa">
                                    Написать в WhatsApp
                                </div>
                            </a>
                        </div>
                        <div class="col-12">

                            <div class="col-12 form-title blur p-2">
                                Можем вам перезвонить
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="143" title="Форма заявки"]') ?>
                            <!-- <form class="form" method="post" action="<?php echo bloginfo('template_url'); ?>/assets/php/send.php">
                                <div class="form-item">
                                    <div class="row">
                                        <input id="phone" class="col-8 form-input tel" type="text" name="phone" placeholder="+7(000)000-00-00" required>     
                                        <input data-modal="thanks_modal" class="col-4 form-input btn btn-success form-btn" type="submit" value="Отправить">
                                        <input type="hidden" name="act" value="order">
                                    </div>
                                </div>
                            </form> -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ****** Order Area End ****** -->

<!-- ****** Advantages Area Start ****** -->

<section class="advantages_area">
    <div class="container">
        <div class="advantages-title text-center wow fadeInUp" data-wow-delay=".3s">
        </div>
        <div class="row">
            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="advantages-item">
                    <div class="advantages-img">
                        <img class="rounded" src="<?php echo bloginfo('template_url'); ?>/assets/img/bonus-img/2.jpg" alt="">
                    </div>
                    <div class="col-12 counter__title text-center my-3">
                        <h5>Индвидуальный подход к каждому мероприятию</h5>
                    </div>
                    <div class="col-12 counter__title text-center">Формат проведения и меню специально для вас!
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="advantages-item">
                    <div class="advantages-img">
                        <img class="rounded" src="<?php echo bloginfo('template_url'); ?>/assets/img/bonus-img/3.jpg" alt="">
                    </div>
                    <div class="col-12 counter__title text-center my-3">
                        <h5>Только свежие и натуральные продукты</h5>
                    </div>
                    <div class="col-12 counter__title text-center">Можем приготовить некоторые блюда для дегустации
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="advantages-item">
                    <div class="advantages-img">
                        <img class="rounded" src="<?php echo bloginfo('template_url'); ?>/assets/img/bonus-img/4.jpg" alt="">
                    </div>
                    <div class="col-12 counter__title text-center my-3">
                        <h5>Комплексное проведение</h5>
                    </div>
                    <div class="col-12 counter__title text-center">Приготовление, оформление, посуда, обслуживание
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="advantages-item">
                    <div class="advantages-img">
                        <img class="rounded" src="<?php echo bloginfo('template_url'); ?>/assets/img/bonus-img/1.jpg" alt="">
                    </div>
                    <div class="col-12 counter__title text-center my-3">
                        <h5>Ваше мероприятие в надежных руках</h5>
                    </div>
                    <div class="col-12 counter__title text-center">Профессиональная команда в сфере кейтеринга</div>
                </div>
            </div>
        </div>

    </div>

    </div>

    <div class="advantages-main d-flex my-4">
        <div class="advantages-main-title mx-auto text-center">А самое главное - мы умеем ну очень вкусно готовить!</div>
        <!-- <div class="row">
            <img class="col-12 rounded" src="<?php echo bloginfo('template_url'); ?>/assets/img/bonus-img/5.jpg" alt="">
        </div> -->
    </div>
</section>


<!-- ****** Advantages Area End ****** -->

<!-- ****** Order Area Start ****** -->

<!-- <section class="form_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="advantages-wrapper wow fadeInUp text-center" data-wow-delay=".3s">
                    <div class="col-12">
                        <div class="col-12 form-title py-3">
                            <h5>
                                <?php the_field('slogan', 2); ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ****** About Area Start ****** -->

<section class="about_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 wow fadeInUp" data-wow-delay=".2s">
                <div class="post-thumb">
                    <img src="<?php the_field('about_photo'); ?>" alt="">
                </div>

            </div>
            <div class="col-12 col-md-8 col-lg-4 text-center wow fadeInUp" data-wow-delay=".2s">
                <div class="widget-title service-title">
                    <h6>О нас</h6>
                </div>
                <div class="about-me-widget-thumb">
                    <img src="<?php the_field('about_avatar'); ?>" alt="">
                </div>
                <h4 class="font-shadow-into-light">
                    <?php the_field('about_name'); ?>
                </h4>
                <p>
                    <?php the_field('about_text'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ****** About Area End ****** -->
<!-- ****** Order Area End ****** -->

<!-- ****** How order Area start ****** -->

<section class="order_area">
    <div class="container">
        <div class="order-title text-center wow fadeInUp" data-wow-delay=".3s">
            <h6>Как сделать заказ?</h6>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 order-wrapper wow fadeInUp" data-wow-delay=".3s">
                <div class="order-item h-100">
                    <div class="col-12 order-number">1</div>
                    <div class="col-12">
                        <p>Позвоните нам или напишите в WhatsApp, либо оставьте заявку и мы вам перезвоним.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 order-wrapper wow fadeInUp" data-wow-delay=".6s">
                <div class="order-item h-100">
                    <div class="col-12 order-number">2</div>
                    <div class="col-12">
                        <p>Расскажите о вашем мероприятии, мы предложим варианты меню и поможем с выбором.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 order-wrapper wow fadeInUp" data-wow-delay=".9s">
                <div class="order-item h-100">
                    <div class="col-12 order-number">3</div>
                    <div class="col-12">
                        <p>Вы можете самостоятельно сформировать меню, выбрав подходящие блюда.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ****** How order Area End ****** -->





<!-- ****** Partners Area Start ****** -->

<section class="partners_area">
    <!-- <div class="container">
            <div class="widget-title text-center service-title wow fadeInUp" data-wow-delay=".3s">
                <h6>Нам доверяют</h6>
            </div>
        </div>   -->
    <div class="partners-wrapper wow fadeInUp" data-wow-delay=".6s">
        <div class="container">
            <div class="text-center service-title py-4 wow fadeInUp" data-wow-delay=".3s">
                <h6>Нам доверяют</h6>
            </div>
            <div class="row justify-content-center">
                <?php
                // параметры по умолчанию
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category_name' => 'partners',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                        // подавление работы фильтров изменения SQL запроса
                    )
                );

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                ?>

                    <div class="col-4 col-lg-2">
                        <div class="partners-thumb">
                            <img src="<?php the_field('partners-img'); ?>">
                        </div>
                    </div>



                <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ****** Partners Area End ****** -->

<?php
get_footer();
?>