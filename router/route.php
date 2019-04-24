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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

Router::query('/','home');









