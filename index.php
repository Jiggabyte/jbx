<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/26/18
 * Time: 5:09 PM
 */
namespace App;
session_start();

$_SESSION['jbx'] = 'Secret_Key';

require_once 'vendor/autoload.php';

require_once 'libraries/functions.php';

require_once 'libraries/Layout.php';

require_once 'models/Model.php';

require_once 'middlewares/Middleware.php';

require_once 'controllers/Controller.php';

require_once 'router/Router.php';

require_once 'router/requests.php';

require_once 'router/route.php';


