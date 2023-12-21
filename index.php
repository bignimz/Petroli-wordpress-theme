<?php get_header('no-topbar'); ?>    
<div class="blog-posts-section container">
    <?php wp_title(''); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>    
            <?php get_template_part('./template-parts/content'); ?>
        <?php endwhile; else : ?>
            <?php get_template_part('./template-parts/content', 'none'); ?>
    <?php endif; ?>
    <?php paginate_links(); ?>
</div>
<?php get_footer(); ?>