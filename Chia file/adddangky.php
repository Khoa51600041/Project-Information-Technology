<?php
	session_start();
    $con = mysqli_connect("localhost","root","","quanlydoan");
    mysqli_set_charset($con,'utf8');
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

if (isset($_POST['load_detai'])) {
	$load_detai = $_POST['load_detai'];
	$search_dang_ky = mysqli_query($con, "SELECT * from dang_ky where maDT = '$load_detai'");
	if (mysqli_num_rows($search_dang_ky) > 0){
		$out ="";
		while ($data = mysqli_fetch_array($search_dang_ky)){
			$out.= $data['maSV']."<a href='#'><i class='fas fa-minus-circle' id='".$data['maSV']."'></i></a><br>";
		}
		
		$data = array(
        
			'mssv'		=>	$out,
			'slsv'		=>	mysqli_num_rows($search_dang_ky)
		);
		
		echo json_encode($data);
	}
	else{
		
		$data = array(
        
		'mssv'		=>	"",
		'slsv'		=>	"0"
		);
		echo json_encode($data);
		
		
	}

}
		
?>