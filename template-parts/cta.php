<?php
$ctaText = get_field('cta_text');
$ctaButtonText = get_field('cta_button_text');
$ctaLink = get_field('cta_link');

?>

<?php if($ctaText) : ?>
    <div class="cta_section">
        <div class="container">
            <div class="cta-container wow fadeInDown">
                <h3 class="cta-text"><?php esc_html_e($ctaText); ?></h3>
                <?php if($ctaButtonText) : ?>
                    <a href="<?php echo esc_url($ctaLink); ?>" class="cta-btn"><?php esc_html_e($ctaButtonText); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>