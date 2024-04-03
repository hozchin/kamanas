<?php
add_action('wp_enqueue_scripts', 'kamanas_styles');
add_action('wp_enqueue_scripts', 'kamanas_scripts');


function kamanas_styles() {
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/others/animate.css');
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/assets/css/others/magnific-popup.css');
    wp_enqueue_style('carousel-style', get_template_directory_uri() . '/assets/css/others/owl.carousel.min.css');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/others/font-awesome.min.css');
    wp_enqueue_style('pe-icon-style', get_template_directory_uri() . '/assets/css/others/pe-icon-7-stroke.css');
    wp_enqueue_style('meanmenu-style', get_template_directory_uri() . '/assets/css/others/meanmenu.min.css');
    wp_enqueue_style('kamanas-style', get_stylesheet_uri());    
    wp_enqueue_style('addstyle-style', get_template_directory_uri() . '/assets/css/addstyle.css');       
    wp_enqueue_style('slideup-style', get_template_directory_uri() . '/assets/css/others/slideUp.css');             
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive/responsive.css'); 
    wp_enqueue_style('google-fonts-style', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700|Quicksand:300,400,500,700|Shadows+Into+Light+Two');
    wp_enqueue_style('google-fonts2-style', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,900&display=swap');
}


function kamanas_scripts() {
    
    wp_enqueue_script('kamanas-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    wp_enqueue_script('jquery-scripts', get_template_directory_uri() . '/assets/js/jquery/jquery-2.2.4.min.js', array(), null, true);
    wp_enqueue_script('popper-scripts', get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('plugins-scripts', get_template_directory_uri() . '/assets/js/others/plugins.js', array(), null, true);
    wp_enqueue_script('active-scripts', get_template_directory_uri() . '/assets/js/active.js', array(), null, true);
    wp_enqueue_script('countUp-scripts', get_template_directory_uri() . '/assets/js/others/countUp.js', array(), null, true);    
    wp_enqueue_script('maskedinput-scripts', get_template_directory_uri() . '/assets/js/maskedinput.js', array(), null, true);
    wp_enqueue_script('slideup-scripts', get_template_directory_uri() . '/assets/js/others/slideUp.js', array(), null, true);
    wp_enqueue_script('SmoothScroll-scripts', get_template_directory_uri() . '/assets/js/others/SmoothScroll.js', array(), null, true);
    
}

add_theme_support( 'custom-logo');
add_theme_support( 'menus');

add_filter('nav_menu_link_attributes','filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'nav-item';
    }
}

?>