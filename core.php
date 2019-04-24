<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */
namespace App;


/**
 * This is the core of the application.
 *
 *
 */
class Bootstrap {

	public function run(){

		$_SESSION['jbx'] = 'Session_Key';

        $_SESSION['rote'] = false;

		require_once 'vendor/autoload.php';

		require_once 'libraries/functions.php';

		require_once 'libraries/Layout.php';

		require_once 'models/Model.php';

		require_once 'middlewares/Middleware.php';

		require_once 'controllers/Controller.php';

		require_once 'router/Router.php';

		require_once 'router/requests.php';

		require_once 'router/BaseRoute.php';



		return session_start();




	}
}


