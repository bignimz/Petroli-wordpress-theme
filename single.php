<?php get_header(); ?>    
<div class="container">
    <div class="blog-posts-section">
        <main class="main-content" role="main-content">
            <!-- <?php wp_title(''); ?> -->
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>    
                    <?php get_template_part('./template-parts/content', 'single'); ?>
                <?php endwhile; else : ?>
                    <?php get_template_part('./template-parts/content', 'none'); ?>
            <?php endif; ?>
            <?php paginate_links(); ?>
        </main>
        <?php if(is_active_sidebar('primary-sidebar')) : ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>
    </div>
    <?php echo get_template_part('template-parts/cta'); ?>
</div>
<?php get_footer(); ?>