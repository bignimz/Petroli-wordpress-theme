<?php
// Theme Support

function petroli_theme_features(){ 
    
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'automatic-feed-links' );
    
    add_theme_support( 'custom-logo', array( 
    'height' => 240,
    'width' => 240, 
    'flex-height' => true,
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    add_theme_support( 'post-formats', array(
        'aside',
        'image', 
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );
    
    add_theme_support( 'customize-selective-refresh-widgets' );

    $args = array(
		'default-image'      => '',
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 450,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );

    add_theme_support( 'post-thumbnails');
	set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails, hard crop mode
	add_image_size( 'post-image', 600, 200, true ); // Post thumbnails, hard crop mode
	add_image_size( 'slider-image', 1920, 500, true ); // Post thumbnails for slider, hard crop mode
	add_theme_support('custom-background');
    add_theme_support( 'custom-header' );
} 

add_action('after_setup_theme', 'petroli_theme_features');
