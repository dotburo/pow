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
# Define environment variables & WordPress constants
# ````
#
new \Pow\Configuration\LoadEnvironment($app->getBasePath());

#
# Load most of WordPress
# ````
#
require_once(ABSPATH . 'wp-settings.php');

#
# Run
# ````
#
if ($app->WP_SIDE === 'site') {
    $app->run();
}
