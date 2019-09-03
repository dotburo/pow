<?php

#
# Add Composer's autoloader
# ````
#
require_once(dirname(__DIR__) . '/vendor/autoload.php');

#
# Instantiate the application
# ````
#
$app = new Pow\Pow(
    realpath(__DIR__ . '/../')
);

#
# Load most of WordPress
# ````
#
require_once(ABSPATH . 'wp-settings.php');

#
# Run
# ````
#
$app->run();

