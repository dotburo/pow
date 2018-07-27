<?php namespace App\Controllers\RSS;

use Pow\Controllers\ControllerAbstract;

/**
 * Event post type RSS feed Controller
 *
 * @package App\Controllers\RSS
 * @version 0.0.0
 * @since 0.0.0
 */
class EventController extends ControllerAbstract
{
    public function render($models, $wp_query)
    {
        echo 'RSS EventController render!' ,'<br>';
    }
}
