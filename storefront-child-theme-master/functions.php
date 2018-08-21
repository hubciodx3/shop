<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

function sf_child_theme_js() {
 
    wp_enqueue_script('jquery.tabSlideOut', get_stylesheet_directory_uri().'/js/jquery.tabSlideOut.js', array('jquery'), '1.0', 'screen, projection');
    wp_enqueue_script('rangeSlider', get_stylesheet_directory_uri().'/js/rangeSlider.js', array('jquery'), '1.0', 'screen, projection');
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/custom.js', array('jquery'), '1.0', 'screen, projection');
    wp_enqueue_script('menu', get_stylesheet_directory_uri().'/js/menu.js', array('jquery'), '1.0', 'screen, projection');
}

add_action( 'wp_enqueue_scripts', 'sf_child_theme_js' );

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


