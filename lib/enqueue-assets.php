<?php

// Enqueue Scripts

function petroli_enqueue_scripts() {
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', [], false, 'all');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['slick-css'], false, 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/src/assets/css/main.css', [], '1.0', 'all');
    wp_enqueue_style('posts-css', get_template_directory_uri() . '/src/assets/css/posts.css', [], '1.0', 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', [], false, 'all');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/src/assets/js/main.js', ['jquery'], '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'petroli_enqueue_scripts');