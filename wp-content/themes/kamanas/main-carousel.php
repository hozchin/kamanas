<section class="welcome-post-sliders owl-carousel">

<?php
// параметры по умолчанию
$my_posts = get_posts(
    array(
        'numberposts' => -1,
        'category_name' => 'main_carousel',
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

    <!-- Single Slide -->
    <div class="welcome-single-slide">
        <!-- Post Thumb -->
        <img src="<?php the_field('main_carousel-img'); ?>">
        <!-- Overlay Text -->
        <div class="project_title">
            <a href="#">
                <h5>
                    <?php the_title(); ?>
                </h5>
            </a>
        </div>
    </div>

    <?php
}

wp_reset_postdata(); // сброс
?>

</section>
 <!-- ****** Carousel Post Area End ****** -->
