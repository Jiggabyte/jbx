<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Africa/Lagos" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=creditsh" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "wulfclan" );
define( "CLASS_PATH", "templates/classes" );
define( "TEMPLATE_PATH", "templates/articler/templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require("classes/Article.php");

function handleException( $exception ) {
	echo "Sorry, a problem occurred. Please try later.";
	error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );


?>
