<?php

/**
 * Plugin Name: Bootstrap Pow
 * Description: Binds the framework to early WordPress actions
 *
 * WordPress Must-Use plugin. This binds the application to all significant WordPress actions,
 * which occur before WordPress has fully loaded, i.e. up and until ``wp_loaded``.
 *
 * @see https://codex.wordpress.org/Plugin_API/Action_Reference
 * @package Pow
 * @version 0.0.0
 * @since 0.0.0
 */
$actions = [
    'muplugins_loaded',
    'plugins_loaded',
    'load_textdomain',
    'after_setup_theme',
    'init',
    'wp_loaded'
];

array_walk($actions, function ($name) {
    add_action($name, function (...$args) use ($name) {
        app()->bootstrap($name, $args);
    }, PHP_INT_MAX, 10);
});
