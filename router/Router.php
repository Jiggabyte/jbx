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

		$uri = $_SERVER['REQUEST_URI'];

		$route_string = $route;

		$roda = '`^/\w{1,}?`';

		if($route == '/' and preg_match($roda,$uri,$match)){
			$route = 'xxx';
		}

		$road = '`^'.$route.'?`';

		$roda = '`/$`';

		$contas = substr_count($uri,'/');

		if($contas > 1){
			header('Location:/');
		}

		if(preg_match($roda,$uri,$match)){
			if(substr($uri, -1) == '/') {
				$uri = substr($uri, 0, -1);
				header('Location:'.$uri);
			}

		}
		

		if($uri == $route_string or preg_match($road,$uri,$match)){

			$GLOBALS['rote'] = true;

			call_user_func( array( $controller, $task ) );


		}

		return '';
	}



	public static function list(){

		return Router::$route_arr;

	}


}
