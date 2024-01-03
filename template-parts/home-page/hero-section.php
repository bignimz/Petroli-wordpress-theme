<?php

$imagePath = get_template_directory_uri() . '/src/assets/images/';



// Fetch ACF data for each post
$sliders = get_field('slider_items'); ?>

<div class="hero-section">
    <div class="slider-items">
        <?php if ($sliders) :
            foreach ($sliders as $slide) { ?>
                <div class="slider-items__item">
                    <img src="<?php echo esc_url($slide['slide_image']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php }
        endif; ?>
    </div>
    <button class="slick-arrow slick-prev custom-prev-arrow"><img src="<?php echo $imagePath . 'bi_arrow-left-short.png'; ?>" alt="Previous"></button>
    <button class="slick-arrow slick-next custom-next-arrow"><img src="<?php echo $imagePath . 'bi_arrow-right-short.png'; ?>" alt="Next"></button>
</div>


