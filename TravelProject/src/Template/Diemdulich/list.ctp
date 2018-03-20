<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<article id="main-content">
	<div>
	<button><?php echo $this->Html->link(
		                              'Thêm mới',
		                              ['controller' => 'Diemdulich', 'action' => 'add'])?></button>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th><label><input id="selectall" class="checkall" type="checkbox" value=""></label></th>
				<th>Mã Điểm DL</th>
				<th>Tên Điểm DL</th>
				<th>Ảnh</th>
				<th>Thông tin</th>
				<th>Quốc gia</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		if ($data==null) {
			echo "<h2>KHÔNG CÓ DỮ LIỆU</h2>";
		}else {
			$i = 1;
			foreach ($data as $key => $value) {
				?>
				<tr>
					<td><input class="check case" type="checkbox" name="delid[]" value=""></td>
					<td><?php echo $value['MaDiemDL'];?></td>
					<td><?php echo $value['TenDiemDL'];?></td>
					<td style="width: 50px"><img style="width: 100px;height: 100px" src="<?php echo $value['Anh'];?>"></td>
					<td><?php echo $value['ThongTin'];?></td>
					<td><?php echo $value['Quocgia']['TenQuocGia'];?></td>
					<td><button><?php echo $this->Html->link(
		                              'Sửa',
		                              ['controller' => 'Diemdulich', 'action' => 'edit' ,$value['MaDiemDL']]
		                          )?></button></td>
					<td><button><?php echo $this->Html->link(
		                              'Xóa',
		                              ['controller' => 'Diemdulich', 'action' => 'delete' ,$value['MaDiemDL']],
                                      ['confirm' => 'Bạn có thực sự muốn xóa điểm du lịch này?']
		                          )?></button></td>
				</tr>
<?php
			}
		}
	
?>
		</tbody>
	</table>
</div>

<table>
	
</table>
</article>
