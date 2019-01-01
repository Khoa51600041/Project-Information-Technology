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
	<?php
		$con = mysqli_connect("localhost","root","","quanlydoan");
		mysqli_set_charset($con, 'UTF8');
		$result = mysqli_query($con, "SELECT * FROM de_tai ORDER BY id ASC");
		if (mysqli_num_rows($result) > 0){
			
			while ($data = mysqli_fetch_array($result)){
				

	?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $data['id']; ?></th>
                            <td><?php echo $data['tenDT']; ?></td>
                            <td>
                                <!--
                                <span>Sinh viên 1</span>
                                <a href="#"><i class="fas fa-minus-circle"></i></a>
                                -->
                                <p id="result_return<?php echo $data['id']; ?>"></p>
                                <a href="#"><i class="fas fa-plus-circle" data-toggle="modal" data-target="#addModal<?php echo $data['id']; ?>"></i></a>
                            </td>
                            <td>2/<?php echo $data['slSV']; ?></td>
                            <td>
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                <span>/</span>
                                <a href="#"><i class="fas fa-redo-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
	<?php
			}
		}
	?>
                </table>