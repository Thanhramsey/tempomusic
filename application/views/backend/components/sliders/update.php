<?php echo form_open_multipart('admin/sliders/update/' . $row['id']); ?>
<div class="content-wrapper" style="min-height: 454px;">
	<form action="<?php echo base_url() ?>admin/sliders/update.html" enctype="multipart/form-data" method="post" accept-charset="utf-8">
		<section class="content-header">
			<h1><i class="glyphicon glyphicon-picture"></i> Sửa </h1>
			<div class="breadcrumb">
				<button name="THEM_NEW" type="submit" class="btn btn-primary btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span> Lưu[Thêm]
				</button>
				<a class="btn btn-primary btn-sm" href="admin/sliders" role="button">
					<span class="glyphicon glyphicon-remove"></span> Thoát
				</a>
			</div>
		</section>
		<section class="content">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-body">
							<div class="col-md-9">
								<!--ND-->
								<div class="form-group">
									<label>Tên ảnh<span class="maudo">(*)</span></label>
									<input type="text" name="name" placeholder="Tên ảnh" class="form-control" value="<?php echo $row['name'] ?>">
									<div class="error" id="password_error"><?php echo form_error('name') ?></div>
								</div>
								<div class="form-group">
									<label>Hình ảnh <span class="maudo">(*)</span></label>
									<input type="file" name="img" class="form-control" onchange="loadFile(event)" style="display:none">
									<label for="image" class="btn-upload-img">Chọn file</label>
									<div class="anh" style ="width:300px; height:280px; border:1px dashed black;border-radius:10px; padding: 5px; margin-bottom:10px">
										<!-- Chứa ảnh ở đây -->
										<img style="width:100%; height:100%;border-radius:10px" id="output" src="<?php echo base_url() ?>public/assets/images/<?php echo $row['img'] ?>" />
									</div>
									<div class="error" id="password_error"><?php echo form_error('img') ?></div>
								</div>
								<div class="form-group">
									<label>Chi tiết sản phẩm<span class = "maudo">(*)</span></label>
									<textarea name="detail" id="detail" class="form-control"><?php echo $row['detail'] ?></textarea>
									<script>
										CKEDITOR.replace('detail');
									</script>
								</div>
								<!--/.ND-->
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Trạng thái</label>
									<select name="status" class="form-control">
										<option value="1" <?php if ($row['status'] == 1) {
																echo 'selected';
															} ?>>Hoạt động</option>
										<option value="0" <?php if ($row['status'] == 0) {
																echo 'selected';
															} ?>>Ngừng hoạt động</option>
									</select>
								</div>
							</div>
						</div>
					</div><!-- /.box -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</section><!-- /.content -->
	</form>
</div>

<script src="public/js/jquery-2.2.3.min.js"></script>
<script>
	var loadFile = function(event) {
		var output = document.getElementById('output');
		output.src = URL.createObjectURL(event.target.files[0]);
		output.onload = function() {
			URL.revokeObjectURL(output.src) // free memory
		}
	};

	var loadMulFile = function(event) {
		var output1 = document.getElementById('output1');
		var output2 = document.getElementById('output2');
		var output3 = document.getElementById('output3');

		if(event.target.files[0]){
			output1.style.display = "";
			output1.src = URL.createObjectURL(event.target.files[0]);
			output1.onload = function() {
				URL.revokeObjectURL(output1.src) // free memory
			}
		}else{
			output1.src = "";
			output1.onload = function() {
				URL.revokeObjectURL(output1.src) // free memory
			}
			output1.style.display = "none";
		}

		if(event.target.files[1]){
			output2.style.display = "";
			output2.src = URL.createObjectURL(event.target.files[1]);
			output2.onload = function() {
				URL.revokeObjectURL(output2.src) // free memory
			}
		}else{
			output2.src = "";
			output2.onload = function() {
				URL.revokeObjectURL(output2.src) // free memory
			}
			output2.style.display = "none";
		}

		if(event.target.files[2]){
			output3.style.display = "";
			output3.src = URL.createObjectURL(event.target.files[2]);
			output3.onload = function() {
				URL.revokeObjectURL(output3.src) // free memory
			}
		}else{
			output3.src = "";
			output3.onload = function() {
				URL.revokeObjectURL(output3.src) // free memory
			}
			output3.style.display = "none";
		}
	};
</script>