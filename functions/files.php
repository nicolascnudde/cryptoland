<?php

function load_styles_and_scripts()
{
    wp_enqueue_style('main', get_theme_file_uri('/assets/css/main.css'), [], '1.0.0');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
