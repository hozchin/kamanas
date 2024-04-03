<?php
/*
Template Name: Галерея
*/
?>

<?php
get_header();
?>

<!-- ****** Galley Area Start ****** -->
<section class="label_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="label_menu label_menu_gallery wow fadeInUp" data-wow-delay=".3s">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>
                                    <?php the_title(); ?>
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container">

    <div class="container">
        <?php
        include 'main-carousel.php';
        ?>
    </div>
    <div class="gallery-item wow fadeInUp" data-wow-delay=".3s">
        <?php if (function_exists('photo_gallery')) {
            photo_gallery(4);
        } ?>
    </div>

</div>

<!-- ****** Galley Area Start ****** -->

<?php
get_footer();
?>