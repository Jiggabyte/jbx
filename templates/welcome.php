<!DOCTYPE html>
<html>
<head>
	<title>JiggaByte X</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

	<style>
		html, body {
			height: 100%;
		}

		body {
			margin: 0;
			padding: 0;
			width: 100%;
			display: table;
			font-weight: 100;
			font-family: 'Lato';
		}

		.container {
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.content {
			text-align: center;
			display: inline-block;
		}

		.title {
			font-size: 96px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="content">
		<div class="title">JiggaByte X</div>
	</div>
</div>
</body>
</html>

<?php

$uri = $_SERVER['REQUEST_URI'];

//$route_string = $route;

$route = '/';

$ruto = str_replace('/','',$route);

$road = '#^'.$route.'.#';

$re = preg_match($road,$uri,$match);

echo $re;

echo $road;