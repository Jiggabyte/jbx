<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */

if(!isset($_SESSION['jbx'])){

	exit();
}


$host = '';
$db = '';
$userN = '';
$passN = '';

$link = mysqli_connect($host,$userN,$passN,$db);

mysqli_select_db($link,$db);