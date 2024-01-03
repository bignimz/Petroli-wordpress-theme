<?php
$bgColor = get_field('bg_color');
$ctaContent = get_field('cta_content');
$ctaBtnText = get_field('cta_btn_text');
$ctaUrl = get_field('cta_url');
$coverImage = get_field('cover_image');
$coverImageUrl = get_field('cover_image_url');


?>

<div class="cta_image_section">
    <div class="container">
        <div class="cta_image_section_wrapper">
            <div class="left_content" style="background-color: <?php esc_html_e($bgColor); ?>">
                <h3><?php esc_html_e($ctaContent); ?></h3>
            </div>
            <div class="right_content" style="background-image: url('<?php echo $coverImage ? esc_url($coverImage) : esc_url($coverImageUrl); ?>')">
                <a href="<?php esc_url($ctaUrl); ?>" class="learn-btn"><?php esc_html_e($ctaBtnText); ?></a>
            </div>
        </div>
    </div>
</div>