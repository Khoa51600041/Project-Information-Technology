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

		$search_dang_ky = mysqli_query($con, "SELECT * from dang_ky");
		if (mysqli_num_rows($search_dang_ky) > 0){
		$out ="";
		while ($data = mysqli_fetch_array($search_dang_ky)){
				$out.= $data['maSV']."<a href='#'><i class='fas fa-minus-circle' id='".$data['maSV']."'></i></a><br>";
		}
	}

	$data = array(
        
		'mssv'		=>	$out
		
	);
		echo json_encode($data);
    //}
	
	

?>