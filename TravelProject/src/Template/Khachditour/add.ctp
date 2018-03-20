<?php use Cake\ORM\TableRegistry;

$dattourTable = TableRegistry::get('Dattour');
$dattour = $dattourTable->find('all')->select(['MaDatTour'])->toArray();
// print_r($dattour);die;
?>
<h2>THÊM ĐIỂM DU LỊCH</h2>
<form id="myForm" action="add" method="post">
	<p>Tên khách hàng</p>
	<p><input class="form-control" type="text" name="TenKhach"></p>
	<p>Mã đặt tour</p>
	<p>
				<select name="MaDatTour" class="form-control">
					<?php 
						foreach ($dattour as $key => $value) {?>
							<option value="<?php echo $value['MaDatTour'] ?>"><?php echo $value['MaDatTour'] ?></option>
						<?php	
						} 
					?>
				</select>
			</p>
	<p>Ngày sinh</p>
	<p><input type="text" class="form-control datepicker" name="NgaySinhKhach" value=""></p>
	<p>Địa chỉ</p>
	<p><input class="form-control" type="text" name="DiaChiKhach"></p>
	<p>Giới tính</p>
	<p><select class="form-control" name="GioiTinhKhach">
			<option value="0">Nam</option>
			<option value="1">Nữ</option>
			<option value="2">Khác</option>
		</select>
	</p>
	<p>Loại khách</p>
	<p><select class="form-control" name="LoaiKhach">
			<option value="0">Người lớn</option>
			<option value="1">Trẻ em</option>
		</select>
	</p>
	<p>Phòng Đơn</p>
	<p><select class="form-control" name="PhongDon">
			<option value="0">Không</option>
			<option value="1">Có</option>
		</select>
	</p>
	<p>Thành tiền</p>
	<p><input class="form-control" type="text" name="ThanhTien"></p>
	<button class="button"><?php echo $this->Html->link(
		                              'Quay lại',
		                              ['controller' => 'Khachditour', 'action' => 'list']
		                          )?></button>
  	<button class="button" type="submit" id="text">Lưu lại</button>
	
</form>
<script>
	$(function () {
  $('.datepicker').datepicker({ format: "yyyy-mm-dd" }).on('changeDate', function (ev) {
    $(this).datepicker('hide');
  });
});

</script>