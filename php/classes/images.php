<?php
class images{

	function save($place_id, $filename){
		global $db;
		$photo_id = $db->modify("INSERT INTO tbl_photos SET filename='$filename'");
		$db->modify("INSERT INTO tbl_placephotos SET place_id='$place_id', photo_id='$photo_id'");
	}
	
	function get_images($place_id){
		global $db;
		$images = $db->select_list("SELECT filename FROM tbl_placephotos 
							LEFT JOIN tbl_photos ON tbl_placephotos.photo_id = tbl_photos.photo_id
							WHERE place_id='$place_id'");
		return $images;
	}
	
	function image_id(){
		global $db;
		$image_info = $db->select_row("SELECT MAX(photo_id) AS id FROM tbl_photos");
		return $image_info->id;
	}
	
	function rename_image($img_name, $img_path){
		$datetime = date('Y-m-d g:i:s');
		$new_img_name = $datetime. $img_name;
		rename($img_path.$img_name, $img_path.$new_img_name);
	}
}
?>