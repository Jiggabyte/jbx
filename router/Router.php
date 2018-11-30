<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/28/18
 * Time: 3:02 PM
 */

namespace Router;
//require_once 'controllers/Controller.php';

use Controllers\Controller;

class Router{


	public function query($route, object $action, callable $task){

		$uri = $_SERVER['REQUEST_URI'];

		$route_string = $route;

		$roda = '`^/\w{1,}?`';

		if($route == '/' and preg_match($roda,$uri,$match)){
			$route = 'xxx';
		}

		$road = '`^'.$route.'?`';

		if($uri == $route_string or preg_match($road,$uri,$match)){

			$GLOBALS['rote'] = true;

			return $action->$task();

		}

		return '';
	}



}

