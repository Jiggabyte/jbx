<?php
//$host = '';
//$db = '';
//$userN = '';
//$passN = '';

$host = 'localhost';
$db = 'creditsh';
$userN = 'root';
$passN = 'wulfclan';

$link = mysqli_connect($host,$userN,$passN,$db);

mysqli_select_db($link,$db);