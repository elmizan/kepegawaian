<?php

//koneksi database dan tabel
private $conn;
private $table_name = "user";

class User
{
	
	function __construct($db){
		$this->conn = $db;
	}

	function getLogin(){
		$query = "SELECT id FROM " . $this->table_name . "WHERE username = ?";
	}
}