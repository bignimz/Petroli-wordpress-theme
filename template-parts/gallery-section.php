<?php
$imageOne   = get_field('image');
$imageTwo   = get_field('image_2');
$imageThree   = get_field('image_3');
$imageFour   = get_field('image_4');

$galleryImages = get_field('gallery_images');
?>

<div class="gallery_section wow fadeInRight" data-wow-delay="1s" data-wow-duration="3s">
    <?php if($galleryImages) {
        foreach($galleryImages as $image) {
            $galleryImage = $image['image'];

            ?>
                <img src="<?php esc_html_e($galleryImage); ?>" alt="" class="img-fluid">
        <?php  }
    } ?>
</div>
