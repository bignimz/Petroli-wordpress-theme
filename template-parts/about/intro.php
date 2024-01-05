<?php

$title      = get_field('about_title');
$content    = get_field('about_content');
?>


<div class="about_section wow fadeInDown">
    <div class="container">
        <h1 class="about-intro"><?php esc_html_e($title); ?></h1>
        <p class="about-content"><?php esc_html_e(wp_strip_all_tags($content)); ?></p>
    </div>
</div>