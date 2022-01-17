<?php
include_once ("dbconnection.php");
class auth extends dbconnection{

	
	function __construct() {
     parent::__construct();
   }

   public function check_login($email){
   	 $sql = "SELECT * FROM usertab WHERE email = '$email' AND password = '$password'"; 
        $query = $this->connection->query($sql);
 
        if($query->num_rows > 0){
            $row = $query->fetch_array();
            return $row['id'];
        }
        else{
            return false;
        }
    }

   }

?>