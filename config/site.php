<?php

/**
 * Site configuration options
 *
 * @package Pow
 * @version 0.0.0
 * @since 0.0.0
 */
return [

    #
    # Toggle oEmbed support
    # ````
    #
    'oEmbed' => false,


    #
    # Toggle emoji rendering support
    # ````
    #
    'emoji' => false,


    #
    # Display toolbar
    # ````
    #
    'force_hide_toolbar' => true,


    #
    # Toggle theme features
    # ````
    # @see https://developer.wordpress.org/reference/functions/add_theme_support/
    # Check also config/admin.php; not all theme support features need to
    # be enabled on the site side and vice versa for the admin side.
    #
    'theme_support' => [

        'automatic-feed-links' => true,
    ],

    #
    # Add your short codes
    # ````
    # @see https://codex.wordpress.org/Shortcode_API
    #
    'shortcodes' => [

        'secure' => 'Pow\Helpers\ShortCodes\ObfuscateEmail',
    ],


    #
    # Toggle actions
    # ````
    # This is currently restricted to functions hooked to the wp_head action.
    # The priority of the of the function that needs to be disabled can be
    # appended to the name after a colon.
    #
    'enable_actions' => [

        'wp_generator' => false,

        'wlwmanifest_link' => false,

        'rest_output_link_wp_head' => false,

        'rsd_link' => false,

        'adjacent_posts_rel_link_wp_head' => false,

        'feed_links_extra:3' => false,

        'wp_shortlink_wp_head' => false,

        'rel_canonical' => false,

        'wp_resource_hints:2' => false,
    ],


    #
    # Toggle filters
    # ````
    #
    'enable_filters' => [

        'feed_links_show_posts_feed' => false,

        'feed_links_show_comments_feed' => false,
    ],

];
