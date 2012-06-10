<?php
require_once('classes/storage.php');
$storage = new storage();

$place_id 	= $_POST['place_id'];
$place		= $_POST['place'];

$storage->store('current_place_id', $place_id);
$storage->store('current_place', $place);
?>