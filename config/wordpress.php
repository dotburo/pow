<?php
$root_dir = dirname(__DIR__);
$public_dir = $root_dir . '/public';
$is_production = env('APP_ENV') === 'production';

#
# Application URLs & protocol
# ````
#
define('FORCE_SSL_ADMIN', $is_production);
define('WP_HOME', env('APP_URL'));
define('WP_SITEURL', WP_HOME . '/wp');

#
# Theme and plugin edition
# ````
#
define('WP_USE_THEMES', false);
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', $is_production);

#
# Paths & URLs
# ````
#
define('ABSPATH', "$root_dir/public/wp/");
define('WP_CONTENT_DIR', $public_dir);
define('WP_CONTENT_URL', WP_HOME);
define('WP_PLUGIN_DIR', "$public_dir/wp/wp-plugins");
define('WP_PLUGIN_URL', WP_SITEURL . '/wp-plugins');
define('WPMU_PLUGIN_DIR', "$public_dir/wp/wp-mu-plugins");
define('WPMU_PLUGIN_URL', WP_SITEURL . '/wp-mu-plugins');
define('WP_LANG_DIR', "$root_dir/storage/languages");

# Since it is always appended to ``ABSPATH``, the ``UPLOADS`` constant is not defined through Pow.
# The following serve the install script to define ``upload_path`` and ``upload_url_path`` in the database.
# @see wp/wp-includes/functions.php
define('POW_UPLOADS_DIR', "$public_dir/uploads");
define('POW_UPLOADS_URL', WP_HOME . '/uploads');

#
# Database
# ````
#
define('DB_HOST', env('DB_HOST', 'localhost'));
define('DB_NAME', env('DB_NAME'));
define('DB_USER', env('DB_USER'));
define('DB_PASSWORD', env('DB_PASS', ''));
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
$GLOBALS['table_prefix'] = env('DB_PREFIX', 'pow_');

#
# Authentication key salts
# ````
#
define('AUTH_KEY', env('AUTH_KEY'));
define('SECURE_AUTH_KEY', env('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', env('LOGGED_IN_KEY'));
define('NONCE_KEY', env('NONCE_KEY'));
define('AUTH_SALT', env('AUTH_SALT'));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', env('LOGGED_IN_SALT'));
define('NONCE_SALT', env('NONCE_SALT'));

#
# Custom settings
# ````
#
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', false);

define('AUTOSAVE_INTERVAL', 3600);
define('WP_POST_REVISIONS', false);

#
# Debugging
# ````
#
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG', env('APP_DEBUG', !$is_production));

if (env('APP_DEBUG')) {
    ini_set('error_log', "$root_dir/storage/logs/debug.log");
}
