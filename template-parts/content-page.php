<article <?php post_class('article-post'); ?>>
<h2><a href="<?php get_permalink(); ?>">
    <?php echo the_title(); ?></a></h2>
<p><?php echo the_content(); ?></p>
</article>