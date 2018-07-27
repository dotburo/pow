<?php namespace App\Controllers;

use Pow\Controllers\ControllerAbstract;

/**
 * Default fallback controller
 *
 * @package App\Controllers
 * @version 0.0.0
 * @since 0.0.0
 */
class DefaultController extends ControllerAbstract
{
    public function render($models, $wp_query)
    {
        //echo 'DefaultController render!', '<br>';
        //dd($models, $wp_query);
        $this->app->view('pages.posts');
    }
}
