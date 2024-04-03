<?php
/*
Template Name: Оплата
*/
?>

<?php
get_header();
?>

<section class="payment_area pb-5">
    <div class="container">
        <div class="payment py-4">
        <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
                <div class="qr-img text-center">
                    <img class="w-100" src="<?php echo bloginfo('template_url'); ?>/assets/img/payment-img/qr_code.jpg" alt="qr">
                </div>
                <a href="https://qr.nspk.ru/BS1A007UU3S1BDQT9GG9P854PISE7R13?type=01&bank=100000000008&crc=E390" target="_blank" rel="nofollow" class="wa-link">
                    <div class="qr-link wa-wrapper text-center mx-3">
                        Оплатить
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-8 m-auto">
                <div class="order-title text-center align-items-center p-3 h-100 m-auto">
                    <div class="montserrat">Для оплаты отсканируйте QR-код или нажмите кнопку "Оплатить"</div>
                </div>
                <div class="payment-img text-center p-2">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/payment-img/all.jpg" alt="payment">
                </div>
            </div>


        </div>
        </div>
        




    </div>
</section>
<?php
get_footer();
?>