<?php

$imagePath = get_template_directory_uri() . '/dist/assets/images/';

// Fetch ACF data for each post
$sliders = get_field('slider_items'); 
?>

<div class="hero-section">
    <div class="slider-items">
        <?php if ($sliders) :
            foreach ($sliders as $slide) { 
                $image = $slide['slide_image'];
                $description = $slide['slide_content'];
                $ctaText = $slide['cta_text'];
                $ctaLink = $slide['cta_link'];
        ?>

                <div class="slider-items__item" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('<?php echo esc_url($image); ?>')">
                    <div class="slider-items__content wow slideInUp" data-wow-duration="2s">
                        <?php if($description) : ?>
                        <p><?php esc_html_e($description); ?></p>
                            <a href="<?php echo esc_url($ctaLink); ?>" class="hero-btn"><?php esc_html_e($ctaText); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

        <?php } endif; ?>
    </div>
    <button class="slick-arrow slick-prev custom-prev-arrow"><img src="<?php echo $imagePath . 'bi_arrow-left-short.png'; ?>" alt="Previous"></button>
    <button class="slick-arrow slick-next custom-next-arrow"><img src="<?php echo $imagePath . 'bi_arrow-right-short.png'; ?>" alt="Next"></button>
</div>


