<?php
    $con = mysqli_connect("localhost","root","","quanlydoan");
    mysqli_set_charset($con,'utf8');
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_POST['id'])){

        $maSV = $_POST['maSV'];
        $maDT = $_POST['maDT'];
        $dangky_detai = mysqli_query($con, "INSERT INTO dang_ky(maSV, maDT, ngayDK, maNhom, ttDK, ngayTT) 
        value('$maSV','$maDT','now()','$maSV','WaitSV','now()');");
    }

    $data = array(
        'mssv'		=>	$maSV
    );	
    echo json_encode($data);
?>