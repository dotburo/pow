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
    # Services for the application service container
    # ````
    #
    'bootstrap' => [

        'muplugins_loaded' => [],

        'plugins_loaded' => [
            \Pow\Bootstrap\RegisterProviders::class,
            \Pow\Bootstrap\BindController::class,
            \Pow\Bootstrap\ModelQueryResults::class,
        ],

        'init' => [
            \Pow\Bootstrap\RegisterUser::class,
        ]
    ],


    #
    # Services for the application service container
    # ````
    #
    'providers' => [
        Pow\Providers\EventServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
    ]
];