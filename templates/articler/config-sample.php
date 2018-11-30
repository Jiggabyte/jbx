<?php
ini_set( "display_errors", false );
date_default_timezone_set( "Africa/Lagos" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=mysql.medicaladvicehub.com;dbname=ja213750" );
define( "DB_USERNAME", "ja213750" );
define( "DB_PASSWORD", "Wulfdoggy@7" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "articler/templates" );
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
