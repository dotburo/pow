<?php

/**
 * Admin configuration options
 *
 * @package Pow
 * @version 0.0.0
 * @since 0.0.0
 */
return [

    #
    # Toggle theme features
    # ````
    # @see https://developer.wordpress.org/reference/functions/add_theme_support/
    # Check also config/site.php; not all theme support features need to
    # be enabled on the admin side and vice versa for the site config.
    # To pass extra arguments to the add_theme_support function, give array as
    # value instead of ``true``
    #
    'theme_support' => [

        'post-thumbnails' => true,
    ],

    #
    # CSS & JS
    # ````
    # If passing a string it will be considered a json manifest file, which will be read
    # to find the newly build files; an array of paths relative to the public directory can also be given.
    #
    'enqueue' => 'manifest.json',

    #
    # Disable admin pages
    # ````
    # @see https://wordpress.stackexchange.com/a/52151
    # If ``.php`` is not appended to an item, it will be considered as a post type;
    # for submenu pages, separate the parent and child pages with a colon
    #
    'disable-pages' => [

        'tools.php',
    ],

    #
    # Footer
    # ````
    #
    'footer' => [

        'left' => '',
        'right' => '',
        'show-version' => true
    ]
];
