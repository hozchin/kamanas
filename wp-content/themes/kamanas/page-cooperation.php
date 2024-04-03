<?php
/*
Template Name: Для организаторов
*/
?>

<?php
get_header();
?>


<section class="catalog_area rules_area">
    <div class="container p-0">
        <div class="catalog-wrapper">
            <h4 class="catalog-catagory-name text-center py-3">У нас есть приятное предложение!</h4>


                <div class="catalog-descr rules-name text-center">Свяжитесь с нами по телефону или оставьте заявку и мы вам
                    перезвоним!
                </div>
                <div class="catalog-item catalog-descr rules-descr">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mx-auto mt-3">
                            <?php echo do_shortcode('[contact-form-7 id="847" title="Для организаторов"]') ?>
                        </div>
                    </div>
                </div>
                <div class="catalog-descr rules-name text-center mt-5">Отправляя данные вы подтверждаете, что ознакомились и принимаете <a href="privacy-policy">политику обработки персональных данных</a>
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




