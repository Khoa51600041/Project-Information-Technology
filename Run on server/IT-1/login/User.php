<?php 
class User {
	private $dbHost     = "localhost";
    private $dbUsername = "pvhuyc5_doan";
    private $dbPassword = "Doan123";
    private $dbName     = "pvhuyc5_doan";
    private $userTbl_1    = 'giang_vien';
    private $userTbl_2    = 'sinh_vien';
    
	function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            mysqli_query($conn,"SET NAMES 'UTF8'");
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
            $prevQuery_1 = "SELECT * FROM ".$this->userTbl_1." WHERE email = '".$userData['email']."'"; //email sẽ thay đổi thành mã giảng viên sau
            $prevQuery_2 = "SELECT * FROM ".$this->userTbl_2." WHERE email = '".$userData['email']."'";

            $prevResult_1 = $this->db->query($prevQuery_1);
            $prevResult_2 = $this->db->query($prevQuery_2);
            if($prevResult_1->num_rows > 0){
                //Update user data if already exists
                $query = "SELECT".$this->userTbl." WHERE ma = '".$userData['ma']."'";
                //Get user data from the database
                $result = $this->db->query($prevQuery_1);
                $userData = $result->fetch_assoc();
                $_SESSION['gv'] = 'gv';
                
            } else if ($prevResult_2->num_rows > 0){ 
                $query = "SELECT".$this->userTbl_2." WHERE ma = '".$userData['ma']."'";
                $result = $this->db->query($prevQuery_2);
                $userData = $result->fetch_assoc();
                $_SESSION['sv'] = 'sv';

            }else{

            }
        }
        
        //Return user data
        return $userData;
    }
}
?>