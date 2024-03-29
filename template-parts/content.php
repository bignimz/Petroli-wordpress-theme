<article <?php post_class('article-post'); ?>>
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
    <h2><a href="<?php echo esc_url(get_permalink()); ?>">
        <?php echo get_the_title(); ?></a>
    </h2>
    <p class="post-details">Posted By: <?php echo get_the_author_meta('display_name'); ?> <span class="post-date">On: <?php echo get_the_date('F j, Y'); ?></span></p>
    <p><?php echo the_excerpt(); ?></p>
</article>
