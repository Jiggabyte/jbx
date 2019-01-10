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
use App\Bootstrap;

require_once 'core.php';


/*
|--------------------------------------------------------------------------
| Starting The Application.
|--------------------------------------------------------------------------
|
*/
$app = new Bootstrap();

$app->run();


