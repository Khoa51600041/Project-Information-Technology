<?php
	$con = mysqli_connect("localhost","root","","quanlydoan");
	mysqli_set_charset($con, 'UTF8');
	session_start();

	if (isset($_POST['action'])){
		
	if($_POST["action"] == "add") {
		
		$maDT = $_POST['maDT'];
		$maSV = $_POST['maSV'];
			$dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
			value('$maSV','$maDT',now(),'$maSV','1',now());");	
		
		
		/*$check = mysqli_query($con, "SELECT * FROM dang_ky")
		
		if (mysqli_num_rows($check) > 0) {
		
					$avaiable = 0;
			while ($data = mysqli_fetch_array($check)) {
				
				if ($data['maSV'] == $maSV) {
					$avaiable++;
				}
				
				else {
					$dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
					value('$maSV','$maDT',now(),'$maSV','1',now());");	
					
				}
				
			}
			
		}
		
		else {
			
			$dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
					value('$maSV','$maDT',now(),'$maSV','1',now());");	
			
		}*/
		
	}
	

		if($_POST["action"] == 'delete') { 

			$deletedk = mysqli_query($con, "DELETE FROM dang_ky WHERE maSV ='$_POST[del_id]' ");

		}

		
	}

?>