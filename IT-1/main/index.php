<?php
    session_start();
    $con = mysqli_connect("localhost","root","","quanlydoan");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if(!isset($_SESSION['userData'])){
        header("Location: ../login/index.php");
    }
    $user_data = $_SESSION['userData'];

    $user_name = '';
    if(isset($_SESSION['gv'])){
        $user_name = $user_data['tenGV'];
    }
    if(isset($_SESSION['sv'])){
        $user_name = $user_data['tenSV'];
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <div class="container-">
        <!-- Header-->
        <div class="top-content">
            <div class="row">
                <div class="img-logo col-sm-2">
                    <img src="images/logo/TĐT_logo.png" alt="TDT-logo">
                </div>
                <div class="col-sm-7">
                    <h1 id="top-title">ĐĂNG KÍ ĐỒ ÁN KHOA CÔNG NGHỆ THÔNG TIN</h1>
                </div>
                <div class="col-sm-3">
                    <div id="user-info">
                        <span id="user-name"><?php echo $user_name; ?></span>
                        <a href="http://localhost/IT-1/login/logout.php">
                            <span id="icon-off">
                                <i class="fas fa-power-off"></i>
                            </span>
                        </a> <!-- Fix trả về logout -->
                    </div>
                </div>
            </div>
            <hr id="hr-top-content">
        </div>

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
                <div class="home-page">
                    <h1>Thông báo</h1>
                    <p>Maecenas erat diam, mollis non sem ut, mollis dignissim est. Pellentesque tempus, ex id mattis
                        bibendum, nisl augue scelerisque augue, eget lacinia eros tellus sit amet urna. Aenean sodales
                        cursus facilisis. Nulla dignissim lorem non urna euismod viverra sed id nunc. Pellentesque
                        sollicitudin justo vel massa interdum volutpat. Praesent at neque condimentum, dignissim tellus
                        ut, cursus ligula. Integer nec bibendum justo, lacinia vehicula sem. Aenean nec mauris lacinia,
                        maximus tortor vel, venenatis ligula. Quisque suscipit interdum nisl, at lobortis ligula
                        pellentesque sed. Sed enim sapien, porttitor ac odio ut, placerat volutpat purus. Vestibulum
                        vitae augue a nunc commodo gravida. Sed quis porttitor dolor, id eleifend libero. Praesent
                        viverra vehicula porta. In in est in sem posuere rhoncus. Sed a turpis vitae turpis facilisis
                        imperdiet.

                        Cras convallis nisl ligula, at feugiat felis bibendum in. Sed ipsum arcu, placerat at suscipit
                        et, hendrerit ut arcu. Vivamus vestibulum, leo in pellentesque tempor, odio enim tempus lectus,
                        quis volutpat mi justo vitae felis. Phasellus eget facilisis magna, nec tincidunt tellus. In
                        elementum mi vel nunc eleifend, at venenatis eros sollicitudin. Cras sed feugiat eros. Morbi a
                        enim pulvinar, dignissim justo at, tempor risus. Sed risus nunc, dapibus et magna quis,
                        dignissim tempus justo. Sed quis nisi varius, pharetra augue a, ultricies massa. Sed quis
                        aliquam lorem. Nam laoreet posuere velit eget porttitor. Pellentesque orci nunc, pretium id
                        tempor a, pharetra at tellus. Vestibulum luctus dolor a enim pharetra porta. Vivamus eleifend
                        est a purus hendrerit, quis aliquam ipsum elementum.
                    </p>
                </div>

                <!-- Đăng kí đề tài -->
                <br>
                <div class="title-notfi" style="display: none;">
                    <h3>ĐĂNG KÍ ĐỒ ÁN ĐỢT <span id="id-">1</span></h3>
                </div>
                <br>
                <table class="table" id="table-signup" style="display: none;">
                    <thead>
                        <tr>
                            <th scope="col">Mã Đề Tài</th>
                            <th scope="col">Tên Đề Tài</th>
                            <th scope="col">Nhóm Sinh Viên</th>
                            <th scope="col">Trạng Thái</th>
                            <th scope="col">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Đề tài 1</td>
                            <td>
                                <!--
                                <span>Sinh viên 1</span>
                                <a href="#"><i class="fas fa-minus-circle"></i></a>
                                -->
                                <p id="result-return"></p>
                                <a href="#"><i class="fas fa-plus-circle" data-toggle="modal" data-target="#addModal"></i></a>
                            </td>
                            <td>2/3</td>
                            <td>
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                <span>/</span>
                                <a href="#"><i class="fas fa-redo-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Đăng Kí</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="index.php" method="post">
                            <p class="input-group-addon">Nhập Mã Số Sinh Viên</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="search_text" id="search_text" placeholder="mã số sinh viên" class="form-control" />
                                </div>
                            </div>
                            <div id="add-list"></div>
                            <button type="button" onclick="memory()" class="btn btn-primary" style="float: right;">Thêm</button>
                            <div id="result"></div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" onclick="store()" class="btn btn-primary">Thêm Mã Số Sinh Viên</button>
                    </div>
                </div>
            </div>
        </div>
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

        $('#search_text').keyup(function() {
            search = $(this).val();
            if(search != '') {
                load_data(search);
                $(this).val() = "";
            }else {
                load_data('');
                $('#result');
            }
        }); 
    });

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