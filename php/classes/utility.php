<?php
class utility{
	function clean($string){//sanitizes a string
		return trim(mysql_real_escape_string($string));
	}
	
	function has_empty($items){
		$has = false;
		$item_count = count($items);
		$true_count	= count(array_filter($items));
		if($true_count != $item_count){
			$has = true;;
		}
		return $has;
	}
	
	function split_str($str, $delimiter){
		$start_position = strpos($str, $delimiter) + 1;
		$last_position = strlen($str);
		return substr($str, $start_position, $last_position);
	}
	
	function renameFile($str, $index){
		$str_length = strlen($str);
		$delimiter_pos = strripos($str, '.');
		$filename = substr($str, 0, $delimiter_pos);
		$file_ext = substr($str, $delimiter_pos, $str_length);
		
		$append_str = ' ('. $index .')';
		$new_filename = $filename . $append_str . $file_ext;
		
		return $new_filename;
	}
	
	function get_id(){
		$current_url = $_SERVER["REQUEST_URI"];
		$url_len = strlen($current_url);
		$last_str = $current_url[$url_len - 1];
		
		if($last_str == '/'){
			$current_url = substr($current_url, 0, $url_len - 1);
		}
		$explode = explode("/", $current_url);
		
		return $explode[sizeof($explode) - 1];
	}
}
?>