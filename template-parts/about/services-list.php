<?php

/**
 * Services Lists Layout
 */

//  Get ACF fields

$mainTitle = get_field('services_title');
$shortDesc = get_field('services_short_description');
$services = get_field('services_list');
?>

<?php
if ($services) { ?>
    <div class="services_lists_wrapper">
        <div class="container">
            <div class="services_header wow fadeInUp" wow-data-delay="2s">
                <h2 class="services-title"><?php echo esc_html($mainTitle); ?></h2>
                <p class="services-desc"><?php echo esc_html($shortDesc); ?></p>
            </div>
            <div class="services_lists">

                <?php foreach ($services as $service) {
                    $serviceIcon = $service['service_icon'];
                    $serviceName = $service['service_name'];
                    $serviceDesc = $service['service_description'];
                    $serviceTextLink = $service['service_link_text'];
                    $serviceUrl = $service['service_link_url'];
                ?>

                    <div class="service_item wow fadeInUp" wow-data-delay="2s">
                        <div class="service-icon">
                            <img src="<?php echo esc_url($serviceIcon); ?>" alt="<?php echo esc_attr($serviceName); ?>">
                        </div>
                        <h3 class="service_name"><?php echo esc_html($serviceName); ?></h3>
                        <p class="service_desc"><?php echo esc_html($serviceDesc); ?></p>
                        <a href="<?php echo esc_url($serviceUrl); ?>" class="service_link"><?php echo esc_html($serviceTextLink); ?></a>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
