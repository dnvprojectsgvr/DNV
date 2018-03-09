<?php

class Todo_Model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
		
	//get all todo items from DB
	function getAll() {
		$sql = "SELECT id, name FROM todos";
		$query = $this->db->query($sql);
		
		return $query->result();
	}
	
	//get a single todo item from DB based on it's ID
	function getOne($id) {
		$sql = "SELECT * FROM todos WHERE id='$id' LIMIT 1";
		$query = $this->db->query($sql);
		
		return $query->row();
	}
	
	//create a new todo item and return it's ID
	function insert($name, $description,$priority) {
		$new_todo = array(
						'name' 			=> $name,
						'description'	=> $description,
						'priority'		=> $priority

					);
		$this->db->insert('todos', $new_todo);
		
		return $this->db->insert_id();
	}
	
}