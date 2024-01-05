<?php

// Enqueue Scripts

function petroli_enqueue_scripts() {
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', [], false, 'all');
    // wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', ['slick-css'], false, 'all');
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', [], '3.7.2', 'all');
    wp_enqueue_style('aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', [], '2.3.4', 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('bundle-css', get_template_directory_uri() . '/dist/assets/css/bundle.css', [], '1.0', 'all');

    wp_enqueue_script('wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', [], false, 'all');
    wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', [], false, 'all');
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', [], false, 'all');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/assets/js/bundle.js', ['jquery'], '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'petroli_enqueue_scripts');