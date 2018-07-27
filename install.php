#!/usr/bin/env php
<?php
/**
 * Install Pow
 *
 * @todo Q&A => db setup
 * @todo no comments ? => clean up db, set options
 * @todo create Site Manager role ?
 *
 * @package Pow
 * @version 0.0.0
 * @since 0.0.0
 */

$public_dir = __DIR__ . '/public';
$wp_dir = $public_dir . '/wp';
$run = $argv[1] ?? null;

if ($run && function_exists($run)) {
    /** @var Callable $run */
    $run();
}

/**
 * Pre install actions
 *
 * Move custom plugin folders temporarily outside WordPress folder,
 * so they are not overwritten by the composer installed WordPress.
 *
 * @return void
 */
function pre()
{
    global $public_dir, $wp_dir;

    # move plugins folders inside /public/wp
    if (is_dir("$wp_dir/wp-mu-plugins")) {
        rename("$wp_dir/wp-mu-plugins", "$public_dir/wp-mu-plugins");
    }
    if (is_dir("$wp_dir/wp-plugins")) {
        rename("$wp_dir/wp-plugins", "$public_dir/wp-plugins");
    }
}

/**
 * Post install actions
 *
 * Move plugin folders back; remove installed wp-content folder
 * with all its themes; copy env file.
 *
 * @return void
 */
function post()
{
    global $public_dir, $wp_dir;

    require_once("$wp_dir/wp-includes/formatting.php");
    require_once("$wp_dir/wp-includes/class-wp-error.php");
    require_once("$wp_dir/wp-admin/includes/class-wp-filesystem-base.php");
    require_once("$wp_dir/wp-admin/includes/class-wp-filesystem-direct.php");

    # delete downloaded wp-content
    $fs = new WP_Filesystem_Direct('');
    $fs->delete("$wp_dir/wp-content", true);

    # move plugins folders back into place
    if (is_dir("$public_dir/wp-mu-plugins")) {
        rename("$public_dir/wp-mu-plugins", "$wp_dir/wp-mu-plugins");
    }
    if (is_dir("$public_dir/wp-plugins")) {
        rename("$public_dir/wp-plugins", "$wp_dir/wp-plugins");
    }

    if (!file_exists('.env')) {
        copy('.env-example', '.env');
    }
}
