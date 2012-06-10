<?php
class images{

	function save(){
		$photo_id = $db->modify("INSERT INTO tbl_photos SET filename='$filename'");
		$db->modify("INSERT INTO tbl_placephotos SET place_id='$place_id', photo_id='$photo_id'");
	}
}
?>