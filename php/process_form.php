<?php
require_once('classes/conn.php');
require_once('classes/utility.php');
require_once('classes/storage.php');

$db = new conn("localhost", "root", "1234", "placio"); 
$utility = new utility();
$storage = new storage();

if(!empty($_POST)){
	print_r($_POST);
	$user_id		= $storage->fetch('user_id');
	$place			= $utility->clean($_POST['place']);
	$description	= $utility->clean($_POST['description']);
	$latitude		= $utility->clean($_POST['lat']);
	$longitude		= $utility->clean($_POST['lng']);
	
	if(empty($_POST['place_id'])){
	
		$place_id = $db->modify("INSERT INTO tbl_places SET place='$place', description='$description', lat='$latitude', lng='$longitude'");
		$db->modify("INSERT INTO tbl_userplaces SET place_id='$place_id', user_id='$user_id'");
	
	}else{
	
		$place_id = $utility->clean($_POST['place_id']);
		$db->modify("UPDATE tbl_places SET place='$place', description='$description', lat='$latitude', lng='$longitude' WHERE place_id='$place_id'");
		
	}
}
?>