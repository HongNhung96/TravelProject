<h2>QUẢN LÝ THÔNG TIN KHÁCH ĐI TOUR</h2>


<div>
	<button><?php echo $this->Html->link(
		                              'Thêm mới',
		                              ['controller' => 'Khachditour', 'action' => 'add'])?></button>
</div>
<div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th><label><input id="selectall" class="checkall" type="checkbox" value=""></label></th>
				<th>STT</th>
				<TH>Mã khách</TH>
				<th>Tên khách</th>
				<th>Mã đặt tour</th>
				<th>Ngày sinh</th>
				<th>Địa chỉ</th>
				<th>Giới tính</th>
				<th>Loại</th>
				<th>Phòng đơn</th>
				<th>Thành tiền</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>

		</thead>
		<tbody>
			<?php 
			if ($data == null) {
				echo "<h2>Không có dữ liệu</h2>";
			} else {
				$i = 1;
				// MaKhach','TenKhach','Dattour.MaDatTour','NgaySinhKhach','DiaChiKhach','GioiTinhKhach','LoaiKhach','PhongDon','ThanhTien
				foreach ($data as $key => $value) {
				 ?>
                      <tr>
                      	<td><input class="check case" type="checkbox" name="delid[]" value=""></td>
                      	<td><?php echo $i++;?></td>
                      	<td><?php echo $value['MaKhach'];?></td>
                      	<td><?php echo $value['TenKhach'];?></td>
                      	<td><?php echo $value['Dattour']['MaDatTour'];?></td>
                      	<td><?php echo $value['NgaySinhKhach'];?></td>
                      	<td><?php echo $value['DiaChiKhach'];?></td>
                      	<?php 
                      		if ($value['GioiTinhKhach'] == 0 || $value['GioiTinhKhach']==="Nam") {
                      	?>
								<td>Nam</td>
						<?php
                      		} else if($value['GioiTinhKhach'] == 1 || $value['GioiTinhKhach']==="Nữ"){
                      	?>
                      			<td>Nữ</td>
                      	<?php		
                      		} else {
                      	?>
                      			<td>Khác</td>
                      	<?php
                      		}
                      	?>
                      	<?php 
                      		if ($value['LoaiKhach'] == 0) {
                      	?>
								<td>Người lớn</td>
						<?php
                      		} else if($value['LoaiKhach'] == 1){
                      	?>
                      			<td>Trẻ em</td>
                      	<?php		
                      		} 
                      	?>
                      	<?php 
                      		if ($value['PhongDon'] == 0) {
                      	?>
								<td>Không</td>
						<?php
                      		} else if($value['PhongDon'] == 1){
                      	?>
                      			<td>Có</td>
                      	<?php		
                      		} 
                      	?>
                      	<td><?php echo (number_format($value['ThanhTien'],0,"","."));?></td>
                      	<td><button><?php echo $this->Html->link(
		                              'Sửa',
		                              ['controller' => 'Khachditour', 'action' => 'edit' ,$value['MaKhach']]
		                          )?></button></td>
						<td><button><?php echo $this->Html->link(
		                              'Xóa',
		                              ['controller' => 'Khachditour', 'action' => 'delete' ,$value['MaKhach']],
                                      ['confirm' => 'Bạn có thực sự muốn xóa khách hàng này?']
		                          )?></button></td>
                      </tr>
                <?php 
            	}
            }
			?>
		</tbody>
	</table>
</div>