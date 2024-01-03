<?php get_header(); ?>    
<div class="main-content">
    
    <?php get_template_part('./template-parts/home-page/hero-section'); ?>
    <div class="container">
        <?php get_template_part('./template-parts/home-page/home-intro'); ?>
    </div>
    <?php get_template_part('./template-parts/gallery-section'); ?>
    <?php get_template_part('./template-parts/home-page/services'); ?>
    <?php get_template_part('./template-parts/cta-with-image'); ?>
    <div class="container">
        <?php get_template_part('./template-parts/partners'); ?>
    </div>
    <?php get_template_part('./template-parts/blog-insight'); ?>
    <?php get_template_part('./template-parts/gmap'); ?>
    <?php get_template_part('./template-parts/cta'); ?>
</div>
<?php get_footer(); ?>