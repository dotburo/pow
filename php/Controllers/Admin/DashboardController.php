<?php namespace App\Controllers\Admin;

use Pow\Controllers\ControllerAbstract;

/**
 * Admin index page controller
 *
 * @package App\Controllers\Admin
 * @version 0.0.0
 * @since 0.0.0
 */
class DashboardController extends ControllerAbstract
{
    public function render($models, $wp_query)
    {
        echo 'DashboardController render!' ,'<br>';
    }
}
