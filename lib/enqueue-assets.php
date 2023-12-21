<?php

// Enqueue Scripts

function petroli_enqueue_scripts() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/src/assets/css/main.css', [], '1.0', 'all');
    wp_enqueue_style('posts-css', get_template_directory_uri() . '/src/assets/css/posts.css', [], '1.0', 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/src/assets/js/main.js', ['jquery'], '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'petroli_enqueue_scripts');