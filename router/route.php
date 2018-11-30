<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/26/18
 * Time: 5:09 PM
 */

use Router\Router;
use Controllers\Controller;

$router = new Router();

$controller = new Controller();
function home(){
	$controllar = new Controller();
	return $controllar->home();
}


function contact(){
	$controllar = new Controller();
	return $controllar->contact();
}

$rote = false;

$router->query('/',$controller,'home');

$router->query('/contact',$controller,'contact');

$routes = array('/','/contact');

$uri = $_SERVER['REQUEST_URI'];


if(in_array($uri,$routes) or $rote){


} else {

	require_once 'models/error.php';
	require_once 'templates/error.php';
	require_once 'templates/welcome.php';
}