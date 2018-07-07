<?php /* Plugin Name: Load Pow */

add_action('muplugins_loaded', function () {
    echo 'pow: muplugins_loaded', '<br>';
}, 0, 0);

add_action('plugins_loaded', function () {
    echo 'pow: plugins_loaded', '<br>';
}, 0, 0);

add_action('load_textdomain', function () {
    echo 'pow: load_textdomain', '<br>';
}, 0, 0);

add_action('after_setup_theme', function () {
    echo 'pow: after_setup_theme', '<br>';
}, 0, 0);

add_action('init', function () {
    global $pagenow, $wp_query;
    echo 'pow: init, pagenow: ', $pagenow, '<br>';
    //var_dump($wp_query);
}, 0, 0);

add_filter('pre_get_posts', function ($query) {
    echo 'pow: pre_get_posts', '<br>';
    echo 'is_home: ', $query->is_home(), '<br>';
    echo 'is_single: ', $query->is_single(), '(', $query->get('post_type', 'post'), ')<br>';
    echo 'is_page: ', $query->is_page(), '<br>';
    echo 'is_search: ', $query->is_search(), '<br>';
    echo 'is_archive: ', $query->is_archive(), '<br>';
}, PHP_INT_MAX - 1, 1);