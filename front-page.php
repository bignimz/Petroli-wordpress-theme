<?php get_header(); ?>    
<div class="main-content">
    <?php get_template_part('./template-parts/hero-image'); ?>
    <div class="container">
        <?php wp_title(''); ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>    
                <?php get_template_part('./template-parts/content', 'page'); ?>
            <?php endwhile; else : ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>