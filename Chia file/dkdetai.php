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
	<script>
			
		load_dsdangky(<?php echo $data['id']; ?>);    
		
		function load_dsdangky(id) {
		    
		
		$.ajax({
			
			url:"adddangky.php",
			method:"POST",
			dataType: "json",
			success: function(data){
				
				$("#result_return"+id).html(data.mssv);
				
			},
			error: function(){
				
			alert("error add");
			
			}
			
		});
			
	}
	
	
	
	$(document).on('click','.them', function(){
		var id = $(this).attr("id");
		var maDT = $('#maDT'+id).val(); //lưu tên chứa trong hidden input có id = id cua button
		var maSV = $('.search_text').val(); //lưu tên chứa trong hidden input có id = id cua button
		var action = "add";
		

		$.ajax({
			
			url:"action.php",
			method:"POST",
			//dataType: "json",
			data:{maDT:maDT, maSV:maSV,action:action,id:id},
			success: function(data){
				
				load_dsdangky(id);
				alert("success");				
				
			},
			error: function(){
				
			alert("error action");
			
			}
			
		});
		
	});
	
	$(document).on('click','.fa-minus-circle', function(){
		var del_id = $(this).attr("id");
		var action = "delete";
		
		

		$.ajax({
			
			url:"action.php",
			method:"POST",
			//dataType: "json",
			data:{del_id:del_id,action:action},
			success: function(data){
				
				alert("success delete");				
				
			},
			error: function(){
				
			alert("error delete");
			
			}
			
		});
		
		
	});
	
	</script>
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