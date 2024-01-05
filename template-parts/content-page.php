<?php

// Check if it's the 'About' page
if (is_page('about')) {
    get_template_part('template-parts/about/intro');
    get_template_part('template-parts/cta-with-image');
    get_template_part('template-parts/gallery-section');
    get_template_part('template-parts/cta');
    
} 
// Check if it's the 'Gallery' page
elseif (is_page('gallery')) {
    get_template_part('template-parts/gallery/image-gallery');
    get_template_part('template-parts/cta');
}
// Check if it's the 'Services' page
elseif (is_page('services')) {
    the_content(); 
}
else {
    the_content(); // Display regular content for other pages
}
