<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */

use Router\Router;
use Controllers\Controller;

$controller = new Controller();

$rote = false;


if(!isset($_SESSION['jbx'])){

	exit();
}

/***  Start:- index.php redirect to '/'           ***/

Router::query('/index.php','_index');
/***  End:- index.php redirect to '/'           ***/





////////////////////////////////////////////////////////////////////////////////////////
/**
 *
 * Build Routes Below.
 *
 */
////////////////////////////////////////////////////////////////////////////////////////

Router::query('/','home');


















////////////////////////////////////////////////////////////////////////////////////////
/**
 * Build Routes Above.
 *
 */
////////////////////////////////////////////////////////////////////////////////////////
/**
 * Below Are Route Functionality Codes.
 *
 */


//Routes Array For Filter.
$routes = Router::list();

//Routes Filter For Non Existent Routes
$uri = $_SERVER['REQUEST_URI'];


if(in_array($uri,$routes) or $rote){


} else {

	require_once 'templates/error.php';
	require_once 'templates/template.php';
}

////////////////////////////////////////////////////////////////////////////////////////