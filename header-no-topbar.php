<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- Header Section Start -->
        <section class="header-section">
            <div class="container">
                <div class="header-section-container">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a href="<?php home_url(); ?>">Petroli</a>
                    </div>
                    <!-- Header Menu -->
                    <nav class="header-nav" role="navigation" aria-label="<?php esc_html_e('Main Navigation', 'petroli'); ?>">
                        <?php  
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => 'ul',
                            'menu_class' => 'nav-list',
                        ));
                        ?>
                    </nav>
                    <!-- Mobile Menu -->
                    <?php get_template_part('./template-parts/mobile-menu'); ?>
                </div>
            </div>
        </section>
        <!-- Header Section End -->

    
