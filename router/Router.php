<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */

namespace Router;

use Controllers\Controller;

class Router{

    public static $route_arr = [];


    public static function query($route, $task){

        $uri = $_SERVER['REQUEST_URI'];
        $rodi = '`^'.$route.'\?jb=x`';

        if($uri != $route ){
            if(preg_match($rodi,$uri,$match)){

            } else {
                return false;
            }

        }

        $controller = new Controller();

        if(in_array($route,Router::$route_arr)){

        } else {
            array_push(Router::$route_arr,$route);
        }


        if($uri === $route or preg_match($rodi,$uri,$match)){

            $_SESSION['rote'] = true;
            call_user_func(array($controller, $task));

        }


    }



    public static function lister(){

        return Router::$route_arr;

    }


}
