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

$rote = false;




function jigga(){
	$controllar = new Controller();
	return $controllar->jigga();
}

function home(){
	$controllar = new Controller();
	return $controllar->home();
}


function contact(){
	$controllar = new Controller();
	return $controllar->contact();
}



$router->query('/jigga',$controller,'jigga');

$router->query('/',$controller,'home');

$router->query('/contact',$controller,'contact');

$routes = array('/','/contact','/jigga');









$uri = $_SERVER['REQUEST_URI'];


if(in_array($uri,$routes) or $rote){


} else {

	require_once 'templates/error.php';
	require_once 'templates/welcome.php';
}