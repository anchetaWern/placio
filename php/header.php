<!doctype html>
<head>
	<title>Placio</title>
	<meta charset="utf-8"/>
	<link href="/placio/libs/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
	<link href="/placio/libs/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="/placio/libs/bootstrap/assets/css/docs.css" rel="stylesheet">
	<link href="/placio/css/main.css" rel="stylesheet"/>
	<link rel="placio icon" href="/img/placio.ico">
</head>
<body>
<div id="container">
<?php 
require_once('php/classes/conn.php');
require_once('php/classes/utility.php');
require_once('php/classes/storage.php');

$db = new conn("localhost", "root", "1234", "placio"); 
$utility = new utility();
$storage = new storage();

?>
	<div id="app_name">
		
			<img src="/placio/img/placio.png" id="app_icon"/>
		
		
			<h1>Placio</h1>
		
	</div>