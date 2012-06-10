<?php
require_once('places.php');

$places_r = array();
foreach($places as $row){
	$places_r[] = array('place_id'=>$row->place_id, 'lat'=>$row->lat, 'lng'=>$row->lng, 'place'=>$row->place, 'description'=>$row->description);
}
echo json_encode($places_r);
?>