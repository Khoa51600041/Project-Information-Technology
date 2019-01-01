<!DOCTYPE html>


<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<div style="margin: 10%">
	<form action="taosp.php" method="POST">
		<input type="text" class="form-control" placeholder="Tên sản phẩm" name="tensp" required="" />
		<input type="text" class="form-control" placeholder="Hình ảnh" name="hinhanh" required="" />
		<input type="text" class="form-control" placeholder="Giá sản phẩm" name="giasp" required="" />
		<input type="text" class="form-control" placeholder="Mô tả sản phẩm" name="mota" required="" />
		<input type="submit" class="form-control" class="btn btn-primary" name="submit" value="Add" />
			

	</form>
	</div>

</body>

</html>