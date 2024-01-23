<?php 

$videoImage     = get_field('video_image');
$videoUpload    = get_field('video_file');
$videoILink     = get_field('video_url');
$videoIcon      = get_field('video_icon');
$title          = get_field('section_title');
$content        = get_field('section_content');
$bulletItems    = get_field('bullet_points');


?>

<div class="choose-us_section">
    <div class="container">
        <div class="choose-us_section_wrapper">
            <div class="choose-left wow fadeInLeft" wow-data-delay="2s" wow-data-duration="2s" style="background-image: url('<?php echo esc_html($videoImage); ?>')">

                <?php if($videoUpload) : ?>
                    <div class="video-upload"><?php echo esc_html($videoUpload); ?></div>
                <?php else : ?>
                    <div class="video-iframe"><?php echo esc_url($videoILink); ?></div>
                <?php endif; ?>
            </div>
            <div class="choose-right wow fadeInRight" wow-data-delay="2s" wow-data-duration="2s">
                <h2 class="main-title"><?php esc_html_e($title); ?></h2>
                <p class="choose-content"><?php esc_html_e($content); ?></p>
                <?php if($bulletItems) : ?>
                    <?php foreach($bulletItems as $item) { ?>
                        <?php $bullet = $item['bullet_item']; ?>
                        <div class="bullet-item">
                            <span class="bullet-icon">></span>
                            <p class="bullet"><?php esc_html_e($bullet); ?></p>
                        </div>
                    <?php    } ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>