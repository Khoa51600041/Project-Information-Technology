<?php
	session_start();
    $con = mysqli_connect("localhost","root","","quanlydoan");
    mysqli_set_charset($con,'utf8');
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	//session_start();

	
	
	
    //if (isset($_POST['maSV'])){
		
		
		
      /* $maSV = $_POST['maSV'];
        $maDT = $_POST['maDT'];
        $dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
        value('$maSV','$maDT',now(),'$maSV','1',now());");*/
		
		//$_SESSION['dsdk'] = $_POST['maSV'];
	if(!empty($_SESSION["dsdangky"])) {
		$out ="";
		foreach($_SESSION["dsdangky"] as $keys => $values) {
				$out.= $values['maSV'];
		
		}
	}
	else{
		$out='hello';
		
	}
	$data = array(
        
		'mssv'		=>	$out +"<br>"
		
	);
		echo json_encode($data);
    //}
	
	

?>