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
    # To pass extra arguments to the add_theme_support function, given array as
    # value instead of ``true``
    #
    'theme_support' => [

        'post-thumbnails' => true,
    ],
];
