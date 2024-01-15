<?php
$spacer = get_field('height');
$spacer_numeric = intval($spacer);
?>

<div class="spacer" style="height: <?php echo esc_html($spacer_numeric); ?>px;"></div>
