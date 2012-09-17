<?php
session_start();

class storage{
	function store($key, $value){
		$_SESSION[$key] = $value;
	}
	
	function fetch($key){
		return $_SESSION[$key];
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