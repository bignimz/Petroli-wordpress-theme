<?php

// Menu Filter
function petroli_menu_item_wrapper($items, $args) {
    foreach ($items as &$item) {
        if ($item->title === 'Contact') {
            $item->classes[] = 'menu-item-btn'; // Add a custom class to the menu item
            $item->title = '<a href="' . get_permalink($item->object_id) . '">' . $item->title . '</a>'; // Wrap the title with anchor tag
            $item->menu_item_parent = 0; // Ensure it's a top-level item
            $item->url = get_permalink($item->object_id); // Update the URL
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'petroli_menu_item_wrapper', 10, 2);