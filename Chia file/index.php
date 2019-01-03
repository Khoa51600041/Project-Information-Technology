<?php
    $con = mysqli_connect("localhost","root","","quanlydoan");
	mysqli_set_charset($con, 'UTF8');

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TRANG CHỦ</title>
    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Custrom boostrap script  ... -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="js/all.js"></script>
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.tabledit.js"></script>

    <script>
        $(document).ready(function () {
            $("#showHomepage").click(function () {
                $(".home-page").show();
                $("#table-signup").hide();
                $(".form-table").hide();
                $(".title-notfi").hide();
                $(".result").hide();
            });
            $("#showSignInProject").click(function () {
                $("#table-signup").show();
                $("#signinProjectTable").show();
                $("#btn-modal").show();
                $(".title-notfi").show();
                $(".home-page").hide();
                $("#user_form").hide();
                $(".result").hide();
            });
            $("#showSiginResult").click(function () {
                $(".result").show();
                $("#title-result").show();
                $("#table-result").show();
                $(".table").show();
                $("#table-signup").hide();
                $("#signinProjectTable").hide();
                $("#btn-modal").hide();
                $(".title-notfi").hide();
                $(".home-page").hide();
                $("#user_form").hide();
            });
        });
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
</head>

<body>
	<div id="kiemtrathu"> o day </div>
    <div class="container-">
        <!-- Header-->
        <?php
			require('header.php');
			
		?>
        <!-- Side Menu-->
        <div class="sidenav">
            <a href="#" id="showHomepage"><i class="fas fa-home"></i> TRANG CHỦ</a>
            <a href="#" id="showSignInProject"><i class="fas fa-sign-in-alt"></i> ĐĂNG KÍ ĐỀ TÀI</a>
            <a href="#" id="showSiginResult"><i class="fas fa-poll"></i> KẾT QUẢ ĐĂNG KÍ</a>
            <a href="#"><i class="fas fa-chalkboard-teacher"></i> GIẢNG VIÊN</a>
        </div>


        <div class="container">
            <div class="main-content">
                <!-- Trang Chủ-->
                <?php
					require('trangchu.php');
				?>

                <!-- Đăng kí đề tài -->
				<?php
				
					require('dotdangky.php');
					require('dkdetai.php');

				?>
                
            </div>
        </div>

        <!-- Modal -->
				<?php
					require('modal.php');
				?>
    </div>
</body>
</html>

<script>
	
    var search;
    var index = 0;
    var mang_sinh_vien =  new Array();
    $(document).ready(function(){
        function load_data(query) {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                dataType: 'json',     
                data:{query:query},
                success:function(data) {
                    var table = data['table'];
                    var row = data['row'];
                    $('#result').html(table + '<tr><td>'+row["maSV"]+'</td><td>'+ row["tenSV"] + '</td><td>' + row["maLop"] + '</td></tr></table>');
                }
            });
        }
        $('.search_text').keyup(function() {
            search = $(this).val();
            if(search != '') {
                load_data(search);
                $(this).val() = "";
            } else {
                load_data('');
                $('#result');
            }
        }); 
    });
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*$(document).on('click','.them', function(){
		var id = $(this).attr("id");
		var maDT = $('#maDT'+id).val(); //lưu tên chứa trong hidden input có id = id cua button
		var maSV = $('.search_text').val(); //lưu tên chứa trong hidden input có id = id cua button
		var action = "add";
		

		$.ajax({
			
			url:"adddangky.php",
			method:"POST",
			dataType: "json",
			data:{maDT:maDT, maSV:maSV,action:action},
			success: function(data){
				
				$("#result_return"+id).html(data.mssv);
				
			},
			error: function(){
				
			alert("error");
			
			}
			
		});
		
	});*/

    /*
    function memory() {
        var query = search;
        $.ajax({
            url:"fetch.php",
            method:"POST",
            dataType: 'json',     
            data:{query:query},
            success:function(data) {
                var row = data['row'];
                var add = document.getElementById("add-list");
                add.innerHTML += '<span class="name">' + row["tenSV"] + '</span> - <span class="id">' + row["maSV"] + '</span></br>';
                mang_sinh_vien[index] = row;
                index++;
            }
        });
    }
    function store(){
    }*/
</script>