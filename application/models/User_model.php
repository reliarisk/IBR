<?php

class User_model extends CI_Model{
	
	function testDB(){
		
		$data = $this->db->query("SHOW DATABASES");
		return $data;	
	}
	
	function getUser($input){
		return "chichito";	
	}
		
}