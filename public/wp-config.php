<?php

# Add the Composer autoloader
#

require_once(dirname(__DIR__) . '/vendor/autoload.php');

# Start the application
#

$app = new Pow\Pow(
    realpath(__DIR__ . '/../')
);

# Define WordPress constants
#

require_once(dirname(__DIR__) . '/config/wordpress.php');

# Setup WordPress variables and includes
#

require_once(ABSPATH . 'wp-settings.php');
