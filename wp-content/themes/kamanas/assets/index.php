<?php
    get_header();
?>

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
                        <div class="form-maintitle">
                            Заказать услугу кейтеринга
                        </div>
                    </div>    

                        <div class="col-12">
                            
                        <div class="col-12 form-title">
                            Расскажите нам о вашем мероприятии, мы предложим варианты меню или поможем с выбором
                        </div>
                        </div>
                        <div class="col-12">

                            <a class="call-link" href="tel:+<?php the_field('phone_number_string', 2); ?>">
                                <div class="call-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/call.png" alt="call">
                                    <?php the_field('phone_number', 2); ?>
                                </div>
                            </a>
                        </div>

                        <div class="col-12">

                            <a class="wa-link" href="https://wa.me/<?php the_field('phone_number_string', 2); ?>">
                                <div class="wa-wrapper">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons-img/wa.png" alt="wa">
                                    Написать в WhatsApp
                                </div>
                            </a>
                        </div>
                                     <div class="col-12 form-title">
                            admin@kamanas.ru
                        </div>
                        <div class="col-12">

                            <div class="col-12 form-title">
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

    <!-- ****** Categories Area Start ****** -->
    <section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/catagory-img/1.jpg" alt="">
                        <div class="catagory-title">
                            <a href="<?php echo get_page_link(144); ?>">
                                <h5>Фуршетное меню</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/catagory-img/2.jpg" alt="">
                        <div class="catagory-title">
                            <a href="<?php echo get_page_link(151); ?>">
                                <h5>Банкетное меню</h5>
                            </a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- ****** Categories Area End ****** -->


    <section class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 service-wrapper wow fadeInUp" data-wow-delay=".3s">   
                    <div class="service-item h-100 text-center">
                        <div class="col-12 service-thumb">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/7.png" alt="">
                            </div>
                            <div class="col-12 service-title"><h6>Фуршет</h6></div>
                            <div class="col-12 service-descr counter__title">Развитие бизнеса со вкусом</div>                
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 service-wrapper wow fadeInUp" data-wow-delay=".6s">  
                    <div class="service-item text-center">
                        <div class="col-12 service-thumb">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/6_2.png" alt="">
                        </div>
                        <div class="col-12 service-title"><h6>Банкет</h6></div>
                        <div class="col-12 service-descr counter__title">Профессиональное обслуживание торжеств</div>
                    </div> 
                </div>
                <div class="col-12 col-md-6 col-lg-3 service-wrapper wow fadeInUp" data-wow-delay=".9s"> 
                    <div class="service-item h-100 text-center">
                        <div class="col-12 service-thumb">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/10.png" alt="">
                        </div>
                        <div class="col-12 service-title"><h6>В офис, на яхту</h6></div>
                        <div class="col-12 service-descr counter__title">Вкусные мероприятия и праздники</div>
                    </div>                   
                        </div>
                <div class="col-12 col-md-6 col-lg-3 service-wrapper wow fadeInUp" data-wow-delay="1.1s">
                    <div class="service-item h-100 text-center">
                        <div class="col-12 service-thumb">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/service-img/1_1.png" alt="">
                        </div>
                        <div class="col-12 service-title"><h6>Доставка</h6></div>
                        <div class="col-12 service-descr counter__title">Готовые блюда к вашему столу</div>
                
                    </div>
                        </div>
            </div>
        </div>
    </section>



    <!-- ****** Counter Start ****** -->
    <section class="counter_area text-center">
        <div class="container">
            <!-- <div class="number" data-max="600">100</div> -->
                <div class="row align-items-center counter__wrapper justify-content-center wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-12 col-md-6 col-lg-3 counter__item wow fadeInUp" data-wow-delay=".3s">                       
                        <div class="row justify-content-center align-items-center">
                            <div class="col-4 col-md-6 col-lg-auto counter__number" id="myCounters">                                
                                0
                            </div>
                            <div class="col-4 col-md-6 col-lg-auto counter__title align-items-center">
                            лет в сфере услуг<br> кейтеринга
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 counter__item wow fadeInUp" data-wow-delay=".3s">                       
                        <div class="row justify-content-center align-items-center">
                            <div class="col-4 col-md-6 col-lg-auto counter__number" id="myCounters_2">
                                0
                            </div>
                            <div class="col-4 col-md-6 col-lg-auto counter__title align-items-center">
                            проведенных <br>мероприятий
                            </div>
                        </div>
                    </div>                    
                    <div class="col-12 col-md-6 col-lg-3 col-lg-auto counter__item wow fadeInUp" data-wow-delay=".3s">                       
                        <div class="row justify-content-center align-items-center">
                            <div class="col-4 col-md-6 col-lg-auto counter__number" id="myCounters_3">
                                0
                            </div>
                            <div class="col-4 col-md-6 counter__title align-items-center">
                            % клиентов<br>приходят по рекомендации
                            </div>
                        </div>
                    </div>                    
                    <div class="col-12 col-md-6 col-lg-3 counter__item wow fadeInUp" data-wow-delay=".3s">                       
                        <div class="row justify-content-center align-items-center">
                            <div class="col-4 col-md-6 col-lg-auto counter__number" id="myCounters_4">
                                0
                            </div>
                            <div class="col-4 col-md-6 col-lg-auto counter__title align-items-center">
                            персон<br>
                            единовременно
                            </div>
                        </div>
                    </div>
                    
                </div>

          
        </div>
    </section>
    <!-- ****** Counter End ****** -->

    <!-- ****** About Area Start ****** -->

    <section class="about_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 wow fadeInUp" data-wow-delay=".2s">
                    <div class="post-thumb">
                        <img src="<?php the_field('about_photo');?>" alt="">
                    </div>
                    
                </div>
                <div class="col-12 col-md-8 col-lg-4 text-center wow fadeInUp" data-wow-delay=".2s">
                    <div class="widget-title service-title">
                        <h6>О нас</h6>
                    </div>
                    <div class="about-me-widget-thumb">
                        <img src="<?php the_field('about_avatar');?>" alt="">
                    </div>
                    <h4 class="font-shadow-into-light"><?php the_field('about_name');?></h4>
                    <p>
                        <?php the_field('about_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ****** About Area End ****** -->

    <!-- ****** Advantages Area Start ****** -->

    <section class="advantages_area">
        <div class="container">
        <div class="advantages-title text-center wow fadeInUp" data-wow-delay=".3s">
                <!-- <h6>Сотрудничество с нами вас точно порадует!</h6> -->
            </div>
        <div class="row">            
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="advantages-item">
                        <div class="col-12 counter__title text-center"><h5>Индвидуальный подход к каждому мероприятию</h5></div>
                        <div class="col-12 counter__title text-center">Разработаем меню и приготовим специально для вас!</div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="advantages-item">
                        <div class="col-12 counter__title text-center"><h5>Комплексное обслуживание</h5></div>
                        <div class="col-12 counter__title text-center">Приготовим, доставим и проведем полное обслуживание мероприятия, оставив после себя чистоту</div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="advantages-item">
                        <div class="col-12 counter__title text-center"><h5>Только свежие и натуральные продукты</h5></div>
                        <div class="col-12 counter__title text-center">Можем приготовить некоторые блюда для дегустации</div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="advantages-item">
                        <div class="col-12 counter__title text-center"><h5>Ваше мероприятие в надежных руках</h5></div>
                        <div class="col-12 counter__title text-center">Профессиональная команда в сфере ресторанного обслуживания</div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- ****** Advantages Area End ****** -->

 <!-- ****** Order Area Start ****** -->
   
 <section class="form_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advantages-wrapper wow fadeInUp text-center" data-wow-delay=".3s">
                        <div class="col-12">
                            <div class="col-12 form-title">
                                <h5><?php the_field('slogan', 2); ?></h5>
                            </div>                       
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

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
                        <div class="col-12"><p>Позвоните нам или напишите в WhatsApp, либо оставьте заявку и мы вам перезвоним.
                        </p></div>
                    </div>
                </div>
                <div class="col-12 col-md-4 order-wrapper wow fadeInUp" data-wow-delay=".6s">
                    <div class="order-item h-100">
                        <div class="col-12 order-number">2</div>
                        <div class="col-12"><p>Расскажите о вашем мероприятии, мы предложим варианты меню и поможем с выбором.</p></div>
                    </div>
                </div>
                <div class="col-12 col-md-4 order-wrapper wow fadeInUp" data-wow-delay=".9s">
                    <div class="order-item h-100">
                        <div class="col-12 order-number">3</div>
                        <div class="col-12"><p>Вы можете самостоятельно сформировать меню, выбрав подходящие блюда.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ****** How order Area End ****** -->


   


    <!-- ****** Partners Area Start ****** -->

    <section class="partners_area">
        <div class="container">
            <div class="widget-title text-center service-title wow fadeInUp" data-wow-delay=".3s">
                <h6>Нам доверяют</h6>
            </div>
        </div>  
            <div class="partners-wrapper wow fadeInUp" data-wow-delay=".6s">
                <div class="container">               
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

