<?php
class dbconnection{

private $host = "localhost"; 
private $username = "root"; 
private $password = "admin"; 
private $database = "productmanagement"; 

public $connection;
private $db;
public $result;


	public function __construct(){
		$this->connect(); 
	}

	public function connect(){
		$this->connection = new mysqli_connect($this->db['host'], $this->db['username'], $this->db['password'], $this->['database']);
		if (mysqli_connect_error()){
			return "cannot connect to database ".mysqli_connect_error();  
		}
	}

	public function run($query){
	$this->result = $this->connection->query($query);
	return $this->result; 
	}

	public function fetch(){
	if(!$this->result){
		return "no results";
	}
	while($row = $this->result->fetch_assoc()){
		$rows[] = $row;
	}
	return $rows;
}


}


?>