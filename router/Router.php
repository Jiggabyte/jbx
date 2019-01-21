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

		$controller = new Controller();


		if(in_array($route,Router::$route_arr)){

		} else {
			array_push(Router::$route_arr,$route);
		}

		$ury = $_SERVER['REQUEST_URI'];

		$uri = $_SERVER['REQUEST_URI'];

		$roda = '`^/\w{1,}`';

		if($route == '/' and preg_match($roda,$uri,$match)){
			$route = '/No_Path';
		}

		if(substr($ury, -1) == '/') {
			$ury = substr($ury, 0, -1);
			header('Location:'.$ury);
		}

		$rodi = '`^'.$route.'\?jb=x`';

		if($uri == $route or preg_match($rodi,$uri,$match)){

			$GLOBALS['rote'] = true;
			call_user_func(array($controller, $task));

		}

		return '';
	}



	public static function list(){

		return Router::$route_arr;

	}


}
