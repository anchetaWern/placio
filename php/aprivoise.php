<?php
require_once('classes/conn.php');
require_once('classes/utility.php');
require_once('classes/images.php');
require_once('classes/upload.php');
require_once('classes/storage.php');
$storage = new storage();

$db = new conn("localhost", "root", "1234", "placio"); 
$utility = new utility();
$images = new images();
$uploads = new UploadHandler();

echo date('Y-m-d g:i:s');

//print_r($uploads->get());

echo '<hr/>';
echo $storage->fetch('current_place_id');
?>