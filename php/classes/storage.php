<?php
class storage{
	function store($key, $value){
		$_SESSION[$key] = $value;
	}
	
	function check($key){
		$exists = false;
		if(!empty($_SESSION[$key])){
			$exists = true;
		}
		return $exists;
	}
	
	function destroy(){
		session_destroy();
	}
}
?>