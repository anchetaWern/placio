<?php
class conn{
	private $db;
	function __construct(){
		$this->db = new Mysqli("localhost", "root", "1234", "placio");
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
	
	function numrows($query_string){
		$select_query = $this->db->query($query_string);
		return $select_query->num_rows;
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