<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- Topbar Section Start -->
        <section class="topbar-section">
            <div class="container">
                <div class="topbar-section-container">
                    <div class="topbar-section-left">
                        <span class="top-contact-link">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            mail@peteroli.com
                        </span>
                        <span class="top-contact-link">+254 - 711000000</span>
                    </div>
                    <div class="topbar-section-right">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- Topbar Section End -->

        <!-- Header Section Start -->
        <section class="header-section">
            <div class="container">
                <div class="header-section-container">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                            ?>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.png" alt="Logo"> -->
                        </a>
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

    
