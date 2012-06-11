<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Placio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="/placio/libs/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="/placio/css/main.css" rel="stylesheet"/>
	<link rel="placio icon" href="/placio/img/placio.ico">
	
	<link rel="stylesheet" href="/placio/css/bootstrap-image-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="/placio/css/jquery.fileupload-ui.css">
	
	<script src="/placio/js/jquery.min.js"></script>
	
	
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
		
		
			<h1><a href="homy.php" style="text-decoration:none;">Placio</a></h1>
		
	</div>