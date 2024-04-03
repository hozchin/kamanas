<?php
/*
Template Name: Условия
*/
?>

<?php
get_header();
?>

<section class="catalog_area rules_area">
    <div class="container p-0">
        <div class="catalog-wrapper">
            <h4 class="catalog-catagory-name text-center py-3">Условия работы<h4></h4>


                <div class="catalog-name rules-name">Уважаемые гости, мы благодарны вам за выбор «Kamanas». Прежде, чем
                    мы начнем обговаривать ваше событие, пожалуйста, ознакомтесь с условиями работы:
                </div>
                <div class="catalog-item catalog-descr rules-descr">
                    <?php the_field('rules', 1030); ?>
                </div>
        </div>
    </div>
</section>
<?php
include 'slideUp.php';
?>
<?php
get_footer();
?>