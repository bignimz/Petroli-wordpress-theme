<?php
    // Homepage Advanced Custom Fields
    $homeIntro      = get_field('intro_title');
    $introContent   = get_field('intro_content');
    $imageOne   = get_field('image');
    $imageTwo   = get_field('image_2');
    $imageThree   = get_field('image_3');
    $imageFour   = get_field('image_4');
?>

<div class="site-content">
    <div class="intro_section wow fadeInLeft" data-wow-duration="2s">
        <h1 class="intro-title"><?php esc_html_e($homeIntro); ?></h1>
        <div class="intro-description"><?php esc_html_e(wp_strip_all_tags($introContent)); ?></div>
    </div>
</div>