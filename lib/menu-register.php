<?php

// Register Nav Menus
function petroli_nav_menus() {
    register_nav_menus(
        array(
            "main-menu"     => esc_html__('Main Menu'),
            "footer-menu"   => esc_html__('Footer Menu')
        )
    );
}

add_action('init', 'petroli_nav_menus');