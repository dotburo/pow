<?php
/**
 * Global app configuration options
 *
 * @package Pow
 * @version 0.0.0
 * @since 0.0.0
 */
return [

    #
    # Toolbar
    # ````
    #
    'toolbar'  => [

        'logo' => false,
        'howdy' => false,
        'username' => false,
        'search' => false,
        'view-site-submenu' => false
    ],

    #
    # Services for the application service container
    # ````
    #
    'providers' => [

        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        Pow\NoComments\NoCommentsProvider::class,
    ]
];