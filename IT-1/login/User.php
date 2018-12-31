<?php
class User {
	private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "quanlydoan";
    private $userTbl    = 'giang_vien';
	
	function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
	
	function checkUser($userData = array()){
        if(!empty($userData)){
            //Check whether user data already exists in database
            $prevQuery = "SELECT * FROM ".$this->userTbl." WHERE maGV = '".$userData['maGV']."'";
            $prevResult = $this->db->query($prevQuery);
            if($prevResult->num_rows > 0){
                //Update user data if already exists
                $query = "SELECT".$this->userTbl." WHERE maGV = '".$userData['maGV']."', tenGV = '".$userData['tenGV']."', email = '".$userData['email']."'";
                //Get user data from the database
                
            }else{
                //Insert user data
            }
            
            $result = $this->db->query($prevQuery);
                $userData = $result->fetch_assoc();
        }
        
        //Return user data
        return $userData;
    }
}
?>