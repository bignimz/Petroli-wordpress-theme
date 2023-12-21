<?php get_header(); ?>    
<div class="blog-posts-section container">
    <?php wp_title(''); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
            <?php get_template_part('./template-parts/content', 'page'); ?>
        <?php endwhile; else : ?>
            <?php get_template_part('./template-parts/content', 'none'); ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>