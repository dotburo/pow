<?php

return [

    #
    # Custom event post type
    # ````
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
    )
];
