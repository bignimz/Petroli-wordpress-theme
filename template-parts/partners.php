<?php
$partner1 = get_field('partner_image_1');
$partner2 = get_field('partner_image_2');
$partner3 = get_field('partner_image_3');
$partner4 = get_field('partner_image_4');
$partner5 = get_field('partner_image_5');

?>

<div class="partners_section">
    <div class="partner-logo"><img src="<?php esc_html_e($partner1); ?>" alt=""></div>
    <div class="partner-logo"><img src="<?php esc_html_e($partner2); ?>" alt=""></div>
    <div class="partner-logo"><img src="<?php esc_html_e($partner3); ?>" alt=""></div>
    <div class="partner-logo"><img src="<?php esc_html_e($partner4); ?>" alt=""></div>
    <div class="partner-logo"><img src="<?php esc_html_e($partner5); ?>" alt=""></div>
</div>