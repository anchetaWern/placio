<?php
class conn{
	private $db;
	function __construct($host, $user, $password, $database){
		$this->db = new Mysqli($host, $user, $password, $database);
	}
	
	function modify($query_string){//inserting, updating
		$this->db->query($query_string);
		return $this->db->insert_id;
	}
	
	function select_row($query_string){//selecting single row
		$select_query = $this->db->query($query_string);
		$row = $select_query->fetch_object();
		return $row;
	}
	
	function select_list($query_string){//selecting a group of rows
		$list = array();
		$select_query = $this->db->query($query_string);
		while($row = $select_query->fetch_object()){
			$list[] = $row;
		}
		return $list;
	}
}
?>