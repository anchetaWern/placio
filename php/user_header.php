<?php
require_once('classes/storage.php');
require_once('classes/conn.php');

$storage 	= new storage();
$db			= new conn("localhost", "root", "1234", "placio");
$user_id	= $storage->fetch('user_id');
if(!empty($user_id)){


$places 	= $db->select_list("SELECT tbl_places.place_id, place, description, lat, lng FROM tbl_places 
								LEFT JOIN tbl_userplaces ON tbl_places.place_id = tbl_userplaces.place_id
								WHERE user_id='$user_id'");
								
?>
	<div id="logout_link">
		<a href="/placio/php/logout.php">Logout</a>
	</div>
	
<?php 
}else{
	header('Location:index.php');
}	
?> 
	