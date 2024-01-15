<article <?php post_class('article-post'); ?>>
<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
?>
<h2><a href="<?php get_permalink(); ?>">
    <?php echo the_title(); ?></a></h2>
<p><?php echo the_excerpt(); ?></p>
</article>
