<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Loading The Base Structure.
|--------------------------------------------------------------------------
|The classes are autoloaded with regards to their namespaces.
|
*/
require_once ('core.php');

use App\Bootstrap;

/*
|--------------------------------------------------------------------------
| Starting The Application.
|--------------------------------------------------------------------------
|
*/
$app = new Bootstrap();

$app->run();


