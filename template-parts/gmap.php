<?php
$gmap = get_field('gmap_image');
$gmap_iframe = get_field('gmap_iframe');
?>

<div class="gmap_section">
    <?php if($gmap) :  ?>
    <img src="<?php esc_html_e($gmap); ?>" alt="">
    <?php else : ?>
        <?php esc_html_e($gmap_iframe); ?>
    <?php endif ?>
</div>