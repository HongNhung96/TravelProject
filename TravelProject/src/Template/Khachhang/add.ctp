<?php use Cake\ORM\TableRegistry;

$quocgiaTable = TableRegistry::get('Quocgia');
$result = $quocgiaTable->find('all')->select(['MaQuocGia' , 'TenQuocGia'])->toArray();
// print_r($result);die;
?>
<style type="text/css">
	select{
		color: white;
		background: #848c94;
	}
</style>
<h3>THÊM ĐIỂM DU LỊCH</h3>
<form id="myForm" action="add" method="post">
	<p>Tên khách hàng</p>
	<p><input class="form-control" type="text" name="TenKH"></p>
	<p><span>Quyền</span>
		<select name="selquyen" class="form-control">
			<option value="0">Người dùng</option>
			<option value="1">Quản lý</option>
		</select>
	</p>
	<p>Giới tính</p>
	<p><select class="form-control" name="selgioitinh">
			<option value="Nam">Nam</option>
			<option value="Nữ">Nữ</option>
			<option value="Khác">Khác</option>
		</select>
	</p>
	<p>Ngày Sinh</p>
	<p><input type="text" class="form-control datepicker" name="NgaySinh" value=""></p>
	<p>
		Địa chỉ
	</p>
	<p><input class="form-control" type="text" name="DiaChi"></p>
	<p>Email</p>
	<p><input class="form-control" type="text" name="Email"></p>
	<p>Điện thoại</p>
	<p><input class="form-control" type="text" name="DienThoai"></p>
	<p id="text">Tên quốc gia</p>
			<p>
				<select name="selquocgia" class="form-control">
					<option value=""></option>
					<?php 
						foreach ($result as $key => $value) {?>
							<option value="<?php echo $value['MaQuocGia'] ?>"><?php echo $value['TenQuocGia'] ?></option>
						<?php	
						} 
					?>
				</select>
			</p>

	<p>Số chứng minh thư</p>
	<p><input class="form-control" type="text" name="SoCMT"></p>
	<button class="button"><?php echo $this->Html->link(
		                              'Quay lại',
		                              ['controller' => 'Khachhang', 'action' => 'list']
		                          )?></button>
  	<button class="button" type="submit" id="text">Lưu lại</button>
</form>
<script type="text/javascript">
	$("#myForm").validate({
	      rules: {
	        "TenKH" : {
	          required :true
	        },
	        "Email" : {
	        	required : true,
	        	email  : true
	        },
	        "SoCMT" : {
	        	required : true

	        }
	      },
	      messages: {
	        TenKH:{
	          required: "Vui lòng nhập tên khách hàng."
	        },
	        Email: {
	        	required: "Vui lòng nhập email.",
	        	email : "Vui lòng nhập đúng định dạng email."
	        },
	        SoCMT: {
	        	required : "Vui lòng nhập số chứng minh thư."
	        }
	      }
	    });

</script>
<script>
	$(function () {
  $('.datepicker').datepicker({ format: "yyyy-mm-dd" }).on('changeDate', function (ev) {
    $(this).datepicker('hide');
  });
});

</script>