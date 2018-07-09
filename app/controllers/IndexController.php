<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 08/07/2018
 * Time: 09:59 PM
 */

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        echo '<h1>Hello!</h1>';
    }

    public function registerAction($param)
    {
        echo "register page =". $param;
    }
}