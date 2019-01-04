<?php
    session_start();
    $con = mysqli_connect("localhost","pvhuyc5_doan","Doan123","pvhuyc5_doan");
    mysqli_set_charset($con, 'UTF8');
    
    // Check connection
    if (mysqli_connect_error()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if(!isset($_SESSION['userData'])){
        header("Location: ../login/index.php");
    }
    $user_data = $_SESSION['userData'];
    
    $user_name = '';
    $icon_action = '';
    if(isset($_SESSION['gv'])){
        $user_name = $user_data['tenGV']; 
        $icon_action_table_1 = '<a href="#"><i class="fas fa-check"></i></a><span>/</span><a href="#"><i class="fas fa-edit"></i></a><span>/</span><a href="#"><i class="fas fa-trash-alt"></i></a>'; 
        $icon_action_table_2 = '<a href="#"><i class="fas fa-check"></i></a><span>/</span><a href="#"><i class="fas fa-times"></i></a>'; 
    }else if(isset($_SESSION['sv'])){ //Phân Quyền truy cập: icon cho bảng đề tài
        $user_name = $user_data['tenSV'];
        $icon_action_table_1 = '<a href="#"><i class="fas fa-check"></i></a><span>/</span><a href="#"><i class="fas fa-redo-alt"></i></a>';
    }else {
    ?>
    <script language="javascript" type="text/javascript">
        alert("Sai Tài Khoản!! Liên hệ phòng C004");
        window.location = "/login/logout.php";
    </script>
    <?php
    }
?>