<?php namespace App\Controllers;

use Pow\Controllers\ControllerAbstract;

/**
 * Posts Controller
 *
 * @package App\Controllers
 * @version 0.0.0
 * @since 0.0.0
 */
class PostController extends ControllerAbstract
{
    public function render($models, $wp_query)
    {
        //echo 'PostController render!', '<br>';
        //dd($models, $wp_query);
        $this->app->view('pages.posts');
    }
}
