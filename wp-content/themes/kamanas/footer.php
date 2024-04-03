
    <!-- ****** Instagram Area Start ****** -->
    <div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

    <?php
            // параметры по умолчанию
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'insta_carousel',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
        ?>
          
        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="<?php the_field('insta_carousel-img'); ?>">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="yummy-table">
                    <div class="yummy-table-cell">
                        <div class="follow-me text-center">
                            <a href="https://kamanas.ru/" rel="nofollow"><i class="fa fa-instagram" aria-hidden="true"></i> kamanasvictor</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
        }

        wp_reset_postdata(); // сброс
    ?>


    </div>
    <!-- ****** Our Creative Portfolio Area End ****** -->

    <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area">           
    <div id="footer-wrapper" class="footer-wrapper">

        <div class="container">

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 footer-list">
                    <div class="col-12 footer-item"><h5>Заказать фуршет</h5></div>
                    <div class="col-12 footer-item">в офис &bull; на день рождения &bull; на выставку &bull; на яхту &bull; на свадьбу &bull; новогодний &bull; на 8 марта &bull; на 23 февраля</div>
                    <div class="col-12 footer-item"><h5>Заказать банкет</h5></div>
                    <div class="col-12 footer-item">свадебный &bull; на природе &bull; в офис</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 footer-list">
                    <div class="col-12 footer-item"><h5>Кейтеринг</h5></div>
                    <div class="col-12 footer-item">на мероприятии &bull; на день рождения &bull; на выставке &bull; в офис &bull; на природе &bull; новогодний &bull; вегетарианский &bull; кофе-брейк</div>
                    <div class="col-12 footer-item"><h5>Меню</h5></div>
                    <div class="col-12 footer-item"><a href="banketnoe-menyu">банкетное </a>&bull; <a href="furshetnoe-menyu">фуршетное </a></div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 footer-list">
                    <div class="col-12 footer-item"><h5><?php the_field('phone_number', 2); ?></h5></div>
                    <div class="col-12 footer-item"><strong>admin@kamanas.ru</strong></div>
                    <div class="col-12 footer-item"><?php the_field('adress', 2); ?><br><?php the_field('name_company', 2); ?><br><?php the_field('inn_company', 2); ?><br><?php the_field('ogrn_company', 2); ?></div>
                    <div class="col-12 footer-item"><a href="privacy-policy" rel="nofollow" target="_blank">Политика конфиденциальности</a></div>
                    <div class="col-4 col-md-4">
                        <a href="https://yandex.ru/maps/org/kamanas/219058268934/?ll=39.748493%2C43.605412&z=16" rel="nofollow" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer-img/1.png" alt="yandex">
                        </a>
                    </div>
                </div>
            </div>
        <div class="footer-logo mx-auto text-center col-12">
            <img src="<?php the_field('footer-img', 2);?>">
        </div>
        </div>
    </div>
    <!-- <div class="divider"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>Copyright © 2023 Все права защищены | <i class="fa fa-heart-o" aria-hidden="true"></i> Kamanas | Создание сайта <a href="#" target="_blank">hzn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   
    <!-- ****** Footer Menu Area End ****** -->

    <div class="overlay">
        <div class="row">
            <div class="modal" id="thanks_modal">
                <div class="modal-close">&times;</div>
                <div class="modal-text">Ваша заявка принята,<br>мы свяжемся с вами в ближайшее время</div>
                <div class="modal-okay btn btn-success">Ок</div>
            </div>
        </div>
    </div>

    <?php
        wp_footer();
    ?>

</body>
