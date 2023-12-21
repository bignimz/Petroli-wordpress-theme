 <!-- Mobile Menu Icon -->
 <div class="mobile-menu-icon">
    <i class="fa fa-bars" aria-hidden="true"></i>
    <i class="fa fa-times" aria-hidden="true"></i>
</div>
<!-- Mobile Menu -->
<nav class="mobile-menu" role="navigation" aria-label="<?php esc_html_e('Mobile Navigation', 'petroli'); ?>">
    <!-- Mobile-specific menu content -->
    <?php  
    wp_nav_menu(array(
        'theme_location' => 'main-menu', // Define your mobile menu location
        'container' => 'div',
        'menu_class' => 'mobile-nav-list',
    ));
    ?>
</nav>