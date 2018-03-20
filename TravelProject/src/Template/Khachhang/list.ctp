
<div>
	<h2>QUẢN LÝ THÔNG TIN KHÁCH HÀNG</h2>
</div>
<div>
	<button><?php echo $this->Html->link(
		                              'Thêm mới',
		                              ['controller' => 'Khachhang', 'action' => 'add'])?></button>
</div>
<div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th><label><input id="selectall" class="checkall" type="checkbox" value=""></label></th>
				<th>STT</th>
				<th>Mã KH</th>
				<th>Tên Khách Hàng</th>
				<th>Quyền</th>
				<th>Ngày Sinh</th>
				<th>Giới Tính</th>
				<th>Địa Chỉ</th>
				<th>Email</th>
				<th>Điện thoại</th>
				<th>Quốc Gia</th>
				<th>Số CMT</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if($data==NULL){
                     echo "<h2>Data Empty</h2>";
                } else {
                	$i = 1;
                	foreach($data as $key => $value){
                      ?>
                      <tr>
                      	<td><input class="check case" type="checkbox" name="delid[]" value=""></td>
                      	<td><?php echo $i++;?></td>
                      	<td><?php echo $value['MaKH'];?></td>
                      	<td><?php echo $value['TenKH'];?></td>
                      	<?php if($value['Quyen'] == 0) {?>
                      		<td>Người dùng</td>
                      	<?php } else {
                      		?>
                      		<td>Quản lý</td>
                      		<?php
                      	} ?>
                      	
                      	<td><?php echo $value['NgaySinh'];?></td>
                      	<td><?php echo $value['GioiTinh'];?></td>
                      	<td><?php echo $value['DiaChi'];?></td>
                      	<td><?php echo $value['Email'];?></td>
                      	<td><?php echo $value['DienThoai'];?></td>
                      	<td><?php echo $value['Quocgia']['TenQuocGia'];?></td>
                      	<td><?php echo $value['SoCMT'];?></td>
                      	<td><button><?php echo $this->Html->link(
		                              'Sửa',
		                              ['controller' => 'Khachhang', 'action' => 'edit' ,$value['MaKH']]
		                          )?></button></td>
					<td><button><?php echo $this->Html->link(
		                              'Xóa',
		                              ['controller' => 'Khachhang', 'action' => 'delete' ,$value['MaKH']],
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