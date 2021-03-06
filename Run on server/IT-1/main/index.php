<?php
require 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="refresh" content="300;url=/login/logout.php" />
    <title>TRANG CHỦ</title>

    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Custrom boostrap script  ... -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Scripts -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.tabledit.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Click show/hide function -->
    <script src="clickFunction.js"></script>
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
                        <a href="/login/logout.php"> <!-- Nếu chạy trên server thì xoá đoạn trước /login-->
                            <span id="icon-off">
                                <i class="fas fa-power-off"></i>
                            </span>
                        </a> 
                    </div>
                </div>
            </div>
            <hr id="hr-top-content">
        </div>

        <!-- Side Menu-->
        <div class="sidenav">
            <a href="#" id="showHomepage"><i class="fas fa-home"></i> TRANG CHỦ</a>
            <a href="#" id="showSignInProject"><i class="fas fa-sign-in-alt"></i> ĐĂNG KÍ ĐỀ TÀI</a>
            <a href="#" id="showResultTable"><i class="fas fa-chalkboard-teacher"></i> KẾT QUẢ ĐĂNG KÍ</a>
            <?php
            if(isset($_SESSION['gv'])){
                echo '<a href="#" id="showTeacherTable"><i class="fas fa-poll"></i> GIẢNG VIÊN</a>';
            }else {
                echo '';
            }
            ?>
        </div>


        <div class="container">
            <div class="main-content">
                <!-- Trang Chủ-->
                <div class="home-page">
                    <h1>Thông báo</h1>
                    <p>Nội dung thông báo
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
                                
                                <?php
                                if(isset($_SESSION['sv'])){
									echo '<a href="#"><i class="fas fa-plus-circle" data-toggle="modal" data-target="#addModal"></i></a>';
                                }else {
                                    echo '';
                                }
                                ?>
                            </td>
                            <td>2/3</td>
                            <td>
                                <?php
                                    if(isset($_SESSION['gv'])){
                                        echo $icon_gv_register_1;;
                                    }else if(isset($_SESSION['sv'])){
                                        echo $icon_sv_register_1;
                                    }else {
                                        echo '';
                                    }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Kết Quả Đăng Kí Đề Tài-->
                <br>
                <div class="tab3-title" style="display: none;">
                    <h3>KẾT QUẢ ĐĂNG KÍ ĐỒ ÁN ĐỢT <span id="id-">1</span></h3>
                </div>
                <br>
                <table class="table" id="tab3-table" style="display: none;">
                    <thead>
                        <tr>
                            <th scope="col">Mã Đề Tài</th>
                            <th scope="col">Tên Đề Tài</th>
                            <th scope="col">Nhóm Sinh Viên</th>
                            <th scope="col">Trạng Thái</th>
                            <?php
                            if(isset($_SESSION['gv'])){
                                echo '<th scope="col">Duyệt / Không Duyệt</th>';
                            }else if(isset($_SESSION['sv'])){
                                echo '<th scope="col">Xác Nhận / Không Xác Nhận</th>';
                            }
                            ?>
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
                            </td>
                            <td>Chờ duyệt</td>
                            <?php
                            if(isset($_SESSION['gv'])){
                                echo '<td>';
                                    echo $icon_gv_result_register_2;
                                echo '</td>';
                            }else {
                                echo $icon_sv_result_register_2;
                            }
                            
                            ?>
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
<script src="ajax.js"></script>