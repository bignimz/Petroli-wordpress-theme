<?php

function petroli_sidebar_widgets() {
    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => esc_html__('Primary Sidebar', 'petroli'),
        'description' => esc_html__('Blog posts sidebar', 'petroli'),
        'before_widget' => '<section id="%1$s" class="sidebar-widget" %1$s>',
        'after_widget' => '</section>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>' 
    )); 
}

$footer_layout = "3,3,3,3";
$columns = explode(',', $footer_layout);
$footer_bg = 'dark';

foreach ($columns as $i => $column) {
    register_sidebar(array(
        'id' => 'footer-sidebar-' . ($i + 1), // Adding a unique identifier for each sidebar
        'name' => sprintf(esc_html__('Footer Widgets Column %s', 'petroli'), $i + 1),
        'description' => esc_html__('Footer Widgets', 'petroli'),
        'before_widget' => '<section id="%1$s" class="site-footer-col" %1$s>',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>' 
    )); 
}



add_action('widgets_init', 'petroli_sidebar_widgets');