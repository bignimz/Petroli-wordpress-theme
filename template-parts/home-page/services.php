<?php
$services = get_field('services');
?>

<div class="services_section">
    <div class="services_wrapper">
        <?php
        if ($services) {
            foreach ($services as $service) {
                $introTitle = $service['service_intro_title'];
                $introDesc = $service['intro_description'];
                $serviceImage = $service['service_image'];
                $serviceTitle = $service['service_title'];
                $btnText = $service['button_text'];
                $btnLink = $service['button_url'];

                $hasIntroTitle = !empty($introTitle); // Check if intro title exists
                $serviceItemClasses = $hasIntroTitle ? 'service_item has-intro' : 'service_item';

                // Define additional styles for background image and gradient if no intro title exists
                $serviceItemStyle = $hasIntroTitle ? '' : 'background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url(' . esc_url($serviceImage) . ')';
        ?>
                <div class="<?php echo esc_attr($serviceItemClasses); ?>" style="<?php echo esc_attr($serviceItemStyle); ?>">
                    <?php if ($introTitle) : ?>
                        <div class="service_content">
                            <h2 class="service_intro_title"><?php esc_html_e($introTitle); ?></h2>
                            <p class="service_intro_desc"><?php esc_html_e($introDesc); ?></p>
                        </div>
                    <?php else : ?>
                        <div class="service_content">
                            <h3 class="service_title"><?php esc_html_e($serviceTitle); ?></h3>
                            <a href="<?php echo esc_url($btnLink); ?>" class="service-btn"><?php esc_html_e($btnText); ?></a>
                        </div>
                    <?php endif ?>
                </div>
        <?php }
        } else {
            echo 'No data found.';
        }
        ?>
    </div>
</div>
