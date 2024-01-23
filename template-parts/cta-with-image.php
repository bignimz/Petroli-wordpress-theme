<?php
$bgColor = get_field('bg_color');
$ctaContent = get_field('cta_content');
$ctaBtnText = get_field('cta_btn_text');
$ctaUrl = get_field('cta_Url');
$coverImage = get_field('cover_image');
$coverImageUrl = get_field('cover_image_url');


?>
<?php if($ctaContent) : ?>
    <div class="cta_image_section">
        <div class="container">
            <div class="cta_image_section_wrapper">
                <div class="left_content wow fadeInLeft" data-wow-duration="2s" style="background-color: <?php esc_html_e($bgColor); ?>">
                    <h3 class="wow fadeIn" data-wow-delay="2s" data-wow-duration="2s"><?php esc_html_e($ctaContent); ?></h3>
                </div>
                <div class="right_content wow slideInRight" data-wow-duration="2s" style="background-image: url('<?php echo $coverImage ? esc_url($coverImage) : esc_url($coverImageUrl); ?>')">
                    <?php if($ctaBtnText) : ?>
                        <a href="<?php echo esc_url($ctaUrl); ?>" class="learn-btn"><?php esc_html_e($ctaBtnText); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>