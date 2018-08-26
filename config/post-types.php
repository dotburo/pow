<?php

return [

    #
    # Rename default content types
    # ````
    # To rename a default post type of taxonomy, three arguments are should be
    # passed in an array: label, labels and menu_icon
    # @see https://codex.wordpress.org/Function_Reference/register_post_type#Arguments
    #
    'rename' => [
        'post' => [
            'label' => 'test',
            'labels' => [
                'name' => 'Tests',
                'singular_name' => 'Test',
                'add_new_item' => 'Add New Test',
                'edit_item' => 'Edit Test',
                'new_item' => 'New Test',
                'view_item' => 'View Test',
                'view_items' => 'View Tests',
                'search_items' => 'Search Tests',
                'menu_name' => 'Tests',
                'name_admin_bar' => 'Test',
                'all_items' => 'All Tests'
            ],
            'menu_icon' => 'dashicons-excerpt-view'
        ],
        'category' => [
            'label' => 'types',
            'labels' => [
                'name' => 'Types',
                'singular_name' => 'Type',
                'add_new_item' => 'Add New Type',
                'edit_item' => 'Edit Type',
                'search_items' => 'Search Types',
                'menu_name' => 'Types',
                'parent_item' => 'Parent Type',
                'parent_item_colon' => 'Parent Type:'
            ],
        ]
    ],

    #
    # Custom event post type
    # ````
    # @see https://codex.wordpress.org/Function_Reference/register_post_type
    #
    register_post_type(
        'event',
        [
            'labels' => [
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new' => 'New event',
                'edit_item' => 'Edit event',
                'add_new_item' => 'New event',
                'view_item' => 'View event',
                'search_items' => 'Search events'
            ],
            'map_meta_cap' => true,
            'taxonomies' => [],
            'public' => true,
            'show_ui' => true,
            'menu_position' => 6,
            'has_archive' => 'events',
            'supports' => ['title', 'editor'],
            'menu_icon' => 'dashicons-calendar-alt'
        ]
    ),

    #
    # Define what default post types support
    # ````
    # Passing ``null`` for thr post type will disable it all together from the admin!
    # Custom post types can also be redefined here, but that is better done through
    # the ``register_post_type`` function - with the exception of disabling the slug meta box.
    #
    # Comments can be disabled here, but specific posts which where allowed to have comments
    # before will still have the related meta boxes. Use ``dotburo/pow-no-comments`` to globally
    # disable comments through all of WordPress.
    #
    # @see https://codex.wordpress.org/Function_Reference/add_post_type_support
    #
    'support' => [
        'attachment' => [
            'title'             => true,
            'slug'              => false,
            'comments'          => false,
            'author'            => false,
            'description'       => false,
            'alt-text'          => false,
            'caption'           => false,
            'display-settings'  => true,
            'single'            => false,
        ],
        'event' => [
            'slug'              => false,
        ],
        'post' => [
            'title'             => true,
            'slug'              => false,
            'editor'            => true,
            'comments'          => false,
            'author'            => false,
            'thumbnail'         => true,
            'excerpt'           => false,
            'custom-fields'     => false,
            'revisions'         => false,
            'post-formats'      => false,
            'trackbacks'        => false,
        ],
        'page' => [
            'slug'           => false,
            'excerpt'        => false,
            'thumbnail'      => false,
            'author'         => false,
            'comments'       => false,
            'custom-fields'  => false,
            'page-attributes'=> false
        ]
    ],

];
