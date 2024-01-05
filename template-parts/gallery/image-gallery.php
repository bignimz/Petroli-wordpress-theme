<?php
    $galleryContent = get_field('gallery_content');
    $galleryBtn     = get_field('gallery_btn_text');
    $btnLink        = get_field('btn_link');
    $images = get_field('image_gallery');
?>

<?php if($images) : ?>
    <div class="container">
        <div class="gallery_header">
            <a class="gallery_link" href="<?php echo esc_url($btnLink); ?>"><?php esc_html_e($galleryBtn) ?></a>
            <p class="gallery_content"><?php esc_html_e(wp_strip_all_tags($galleryContent)); ?></p>
        </div>
        <div class="image-gallery_section">
            <?php foreach($images as $image) { ?>
    
                <div class="gallery_item">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php esc_attr($image['alt']); ?>">
                </div>
    
             <?php } ?>
        </div>
    </div>
<?php endif; ?>