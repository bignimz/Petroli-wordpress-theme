<?php get_header(); ?>    
<div class="blog-posts-section">
    <div class="container">
        <?php wp_title(''); ?>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>    
                <?php get_template_part('./template-parts/content'); ?>
            <?php endwhile; else : ?>
                <?php get_template_part('./template-parts/content', 'none'); ?>
        <?php endif; ?>
        <?php paginate_links(); ?>
    </div>
    <?php echo get_template_part('template-parts/cta'); ?>
</div>
<?php get_footer(); ?>