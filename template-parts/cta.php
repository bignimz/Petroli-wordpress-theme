<?php
$ctaText = get_field('cta_text');
$ctaButtonText = get_field('cta_button_text');
$ctaLink = get_field('cta_link');

?>

<div class="cta_section">
    <div class="container">
        <div class="cta-container">
            <h3 class="cta-text"><?php esc_html_e($ctaText); ?></h3>
            <a href="<?php esc_url($ctaLink); ?>" class="cta-btn"><?php esc_html_e($ctaButtonText); ?></a>
        </div>
    </div>
</div>