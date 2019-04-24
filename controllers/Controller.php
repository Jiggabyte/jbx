<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */

namespace Controllers;

use Libraries;
use Models\Model;
use Middleware\Middleware;


if(!isset($_SESSION['jbx'])){

    exit();
}


class Controller {
////////////////////////////////////////////////////////////////////////////////////////
    use Libraries\Layout;
    /***  Start:- index.php redirect to '/'           ***/
    public function _index(){
        return $this->lay_index();
    }
    /***  End:- index.php redirect to '/'           ***/
////////////////////////////////////////////////////////////////////////////////////////




    public function home(){
        $model = new Model();
        $model->select();
        return $this->view('home.php',$model->select());
    }










////////////////////////////////////////////////////////////////////////////////////////
    /***  End:- Controller Class         ***/
}