<?php
$imageOne   = get_field('image');
$imageTwo   = get_field('image_2');
$imageThree   = get_field('image_3');
$imageFour   = get_field('image_4');

?>

<div class="gallery_section">
    <img src="<?php esc_html_e($imageOne); ?>" alt="" class="img-fluid">
    <img src="<?php esc_html_e($imageTwo); ?>" alt="" class="img-fluid">
    <img src="<?php esc_html_e($imageThree); ?>" alt="" class="img-fluid">
    <img src="<?php esc_html_e($imageFour); ?>" alt="" class="img-fluid">
    <img src="<?php esc_html_e($imageThree); ?>" alt="" class="img-fluid">
</div>