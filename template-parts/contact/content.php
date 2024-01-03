<?php

$shortcode      =   get_field('contact_form_shortcode');
$title          =   get_field('contact_title');
$email          =   get_field('email_address');
$phone          =   get_field('phone_number');
$address        =   get_field('contact_address');

?>

<div class="contact_section">
    <div class="contact_left">
        <h1 class="contact-title"><?php esc_html_e($title); ?></h1>
        <p class="contact-text"><?php esc_html_e($email); ?></p>
        <p class="contact-text"><?php esc_html_e($phone); ?></p>
        <p class="contact-text"><?php esc_html_e($address); ?></p>
    </div>
    <div class="contact_right">
        <?php echo $shortcode; ?>
    </div>
</div>