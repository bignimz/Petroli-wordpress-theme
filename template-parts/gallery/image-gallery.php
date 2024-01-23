<?php
    $galleryContent = get_field('gallery_content');
    $galleryBtn     = get_field('gallery_btn_text');
    $btnLink        = get_field('btn_link');
    $images         = get_field('image_gallery');
?>

<?php if ($images) : ?>
    <div class="container">
        <div class="gallery_header wow fadeInDown" wow-data-duration="4s" wow-data-delay="6s">
            <a class="gallery_link" href="<?php echo esc_url($btnLink); ?>"><?php esc_html_e($galleryBtn) ?></a>
            <p class="gallery_content"><?php esc_html_e(wp_strip_all_tags($galleryContent)); ?></p>
        </div>
        <div class="image-gallery_section">
            <?php foreach ($images as $image) { ?>

                <div class="gallery_item wow fadeIn" wow-data-delay="3s" wow-data-duration="4s">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php esc_attr($image['alt']); ?>" class="popup-trigger">
                </div>

            <?php } ?>
        </div>
    </div>
    <div class="overlay"></div>
    <!-- Gallery Pop Up -->
    <div class="gallery-popup">
        <div class="popup-content">
            <img id="popupImage" src="" alt="" class="popup-image">
            <span class="close-popup">&times;</span>
        </div>
    </div>

<?php endif; ?>
