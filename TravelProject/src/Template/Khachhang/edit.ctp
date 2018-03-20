<?php use Cake\ORM\TableRegistry;

$quocgiaTable = TableRegistry::get('Quocgia');
$khach1 = $quocgiaTable->find('all')->select(['MaQuocGia' , 'TenQuocGia'])->toArray();
$quyen = array(
    'FRONTEND' => array(
        'title' => 'Khóa học lập trình Frontend Online',
        'fee' => 1200000
    ),
    'PHP-MYSQL' => array(
        'title' => 'Khóa học  lập trình web PHP-MYSQL',
        'fee' => 1680000
    )
);

// print_r($khach);die;
?>
<style type="text/css">
	select{
		color: white;
		background: #848c94;
	}
</style>
<script>
	$(function () {
  $('.datepicker').datepicker({ format: "yyyy-mm-dd" }).on('changeDate', function (ev) {
    $(this).datepicker('hide');
  });
});

</script>
<h3>SỬA THÔNG TIN KHÁCH HÀNG</h3>

<form id="myForm" action="/Khachhang/edit/<?php echo $khach['0']['MaKH'];?>" method="post">
	<p>Tên khách hàng</p>
	<p><input class="form-control" type="text" name="TenKH" value="<?= $khach['0']['TenKH']?>"></p>
	<p><span>Quyền</span>
		<select name="selquyen" class="form-control">
			<?php 
			// $i
			// if ($khach['0']['Quyen'] == 0) {
				?>
					<!-- <option value="0" selected="selected">Người dùng</option> -->
				<?php
			// }
			 ?>
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
	<p>Ngày Sinh (yyyy-mm-dd)</p>
	<p><input type="text" class="form-control datepicker" name="NgaySinh" value="<?php echo $khach['0']['NgaySinh']?>"></p>
	<p>
		Địa chỉ
	</p>
	<p><input class="form-control" type="text" name="DiaChi" value="<?= $khach['0']['DiaChi']?>"></p>
	<p>Email</p>
	<p><input class="form-control" type="text" name="Email" value="<?= $khach['0']['Email']?>"></p>
	<p>Điện thoại</p>
	<p><input class="form-control" type="text" name="DienThoai" value="<?= $khach['0']['DienThoai']?>"></p>
	<p id="text">Tên quốc gia</p>
			<p>
				<select name="selquocgia" class="form-control">
					<option value=""></option>
					<?php 
						foreach ($khach1 as $key => $value) {
							if ($value['MaQuocGia'] == $khach['0']['MaQuocGia']) {
								?>
									<option value="<?php echo $value['MaQuocGia'] ?>" selected="selected"><?php echo $value['TenQuocGia'] ?></option>
								<?php
							}
							?>
							<option value="<?php echo $value['MaQuocGia'] ?>"><?php echo $value['TenQuocGia'] ?></option>
						<?php	
						} 
					?>
				</select>
			</p>

	<p>Số chứng minh thư</p>
	<p><input class="form-control" type="text" name="SoCMT" value="<?= $khach['0']['SoCMT']?>"></p>
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