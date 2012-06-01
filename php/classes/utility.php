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
}
?>