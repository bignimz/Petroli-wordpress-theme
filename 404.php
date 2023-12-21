<?php get_header(); ?>    
<div class="blog-posts-section container">
    <h1 class="error-title">404 <?php wp_title(''); ?></h1>
    <?php get_template_part('./template-parts/content', 'none'); ?>
</div>
<?php get_footer(); ?>