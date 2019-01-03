<?php
	$con = mysqli_connect("localhost","root","","quanlydoan");
	mysqli_set_charset($con, 'UTF8');
session_start();
if (isset($_POST['maSV'])){
if (isset($_POST['action'])){
		
	if($_POST["action"] == "add") {

			$dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
			value($_POST[maSV],$_POST[maDT],now(),$_POST[maSV],'1',now());");	
			
			//$deletedk = mysqli_query($con, "DELETE FROM dang_ky WHERE maSV ='51600022' ");

	}	
	//if (isset($_POST['del_id'])){
		if($_POST["action"] == 'delete') { 
			//foreach($_SESSION["dsdangky"] as $keys => $values) {
				//$maSV = $_POST['del_id'];				
					$deletedk = mysqli_query($con, "DELETE FROM dang_ky WHERE maSV ='51600053' ");
			
				//}
			//}
		}
	//}
	
	
}

}
	
?>