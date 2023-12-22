<?php $thumbnail_url = get_the_post_thumbnail_url(null, 'slider-image'); ?>
<div class="hero-section">
    <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>">
</div>
