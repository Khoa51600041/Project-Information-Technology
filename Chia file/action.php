<?php
	$con = mysqli_connect("localhost","root","","quanlydoan");
	mysqli_set_charset($con, 'UTF8');
	session_start();

	if (isset($_POST['action'])){
		
	if($_POST["action"] == "add") {
		
		$maDT = $_POST['maDT'];
		$maSV = $_POST['maSV'];
			//$dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
			//value('$maSV','$maDT',now(),'$maSV','1',now());");	
		
		
		$checksv = mysqli_query($con, "SELECT * FROM sinh_vien where maSV ='$maSV'");
		
		if (mysqli_num_rows($checksv) > 0) {
		
			
					$dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
					value('$maSV','$maDT',now(),'$maSV','1',now());");	
					
			
		}
		

		
	}
	

		if($_POST["action"] == 'delete') { 

			$deletedk = mysqli_query($con, "DELETE FROM dang_ky WHERE maSV ='$_POST[del_id]' ");

		}

		
	}

?>