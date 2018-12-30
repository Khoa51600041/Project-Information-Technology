		<?php
			$result = mysqli_query($con, "SELECT * from de_tai");
			while ($data = mysqli_fetch_array($result)){
				
		?>
		<div class="modal fade" id="addModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
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
                        <form action="adddangky.php" method="post">
                            <p class="input-group-addon">Nhập Mã Số Sinh Viên</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="search_text" id="search_text" placeholder="mã số sinh viên" class="form-control search_text" />
                                </div>
                            </div>
                            <div id="add-list"></div>
                            <button type="button" onclick="memory()" id="<?php echo $data['id']; ?>" class="btn btn-primary them" style="float: right;">Thêm</button>
                            <div id="result"></div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="button" onclick="store()" class="btn btn-primary">Thêm Mã Số Sinh Viên</button>
						<input type="hidden" name='hidden_maDT' id='maDT<?php echo $data['id']; ?>' value='<?php echo $data['maDT']; ?>' />

                    </div>
                </div>
            </div>
        </div>
		<?php
			}
		?>
		