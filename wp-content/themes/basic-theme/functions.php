<?php
/********************************* CSS **********************************/
// Include Custom Styles
function includeStylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', '1.0.0', 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'includeStylesheets');

/********************************** JS **********************************/
// Include Custom Js
function includeJavascript() {
    wp_register_script('custom',  get_template_directory_uri() . '/js/custom.js', '', '1.0.0', true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'includeJavascript');
