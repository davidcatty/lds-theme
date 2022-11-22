<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function () {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('bootstrap');
});
