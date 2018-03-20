<h3>QUẢN LÝ DANH SÁCH CÁC QUỐC GIA</h3>
<div class="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type=”text/javascript” src=”http://code.jquery.com/jquery-2.0.3.min.js”></script>
	 <script type="text/javascript">
    $(function(){
        /*Check & uncheck all*/
        $(document).on('change', '.checkall', function(){
            var $_this = $(this);
            $('.check').prop('checked', $_this.prop('checked'));
        });
        /*Check list item*/
        $(document).on('change', '.check', function(){
            var $_this = $(this);
            var $_checkedall = true;
            $('.check').each(function(){
                if(!$(this).is(':checked')){
                    $_checkedall = false;
                }
                $('.checkall').prop('checked', $_checkedall);
            });
        });
    });
    </script>
    <style type="text/css">
        .button{
            /*width: 20%;*/
        }
    </style>
	<?php 
		$count = 0;
		$valuedelete = [];
	?>
		<!-- Nếu để action(chỉ nhằm mục đích xóa nhiều khi check, về nhà cần xem lại cái check nhé,k nên viết ở action k có nếu k có check cái nào thì nó lỗi đấy)   -->
        <div>
            <form action="list" method="POST" style="margin: 50px 0;">
                  <input  type="text" name="dataSearch" style="border-radius: 3px;padding-left: 10px;background: #2f323b;width: 30%;" placeholder="Nhập từ khóa và nhấn Enter" value="<?= $dataS;?>">
                  <button type="submit" class="btn btn-success">Tìm kiếm</button>
                 
            </form>
        </div>
       
        <div>
            <button class="button"><?php echo $this->Html->link(
                                      'Thêm mới',
                                      ['controller' => 'Quocgias', 'action' => 'add']
                                  )?></button>
        </div>
		<form action="delete" method="POST">
            <div>
                
            	<table class="table table-bordered">
            		<thead>
            			<tr>
            				<th><label><input id="selectall" class="checkall" type="checkbox" value=""></label></th>
            				<th>STT</th>
            				<th>Mã Quốc Gia</th>
            				<th>Tên Quốc Gia</th>
            				<th>Sửa</th>
            				<th>Xóa</th>
            			</tr>
            		</thead>
            		<tbody>
            			<?php
                    if($data==NULL){
                     echo "<h2>Dada Empty</h2>";
                    } else {
                    	$i = 1;
                    	foreach ($data as $key => $value) {
                    		?>
                    		<tr>
                    			<td><input class="check case" type="checkbox" name="delid[]" value="<?php echo $value['MaQuocGia'];?>"></td>
                    			<td><?php echo $i++?></td>
                    			<td><?php echo $value['MaQuocGia'];?></td>
                    			<td><?php echo $value['TenQuocGia'];?></td>
                    			<td><button class="button"><?php echo $this->Html->link(
		                              'Sửa',
		                              ['controller' => 'Quocgias', 'action' => 'edit' ,$value['MaQuocGia']]
		                          )?></button></td>
                    			<td><button class="button"><?php echo $this->Html->link(
		                              'Xóa',
		                              ['controller' => 'Quocgias', 'action' => 'delete' ,$value['MaQuocGia']],
                                      ['confirm' => 'Bạn có thực sự muốn xóa quốc gia này?']
		                          )?></button></td>
                    		</tr>
                    		<?php
                    	}
                    }
                    ?>
            		</tbody>
            	</table>
                <button type="submit" class=""><?php echo $this->Html->link(
                                      'Xóa nhiều',
                                      ['controller' => 'Quocgias', 'action' => 'delete' ,null],
                                      ['confirm' => 'Bạn có thực sự muốn xóa các quốc gia này?']
                                      
                                  )?></button>
                  </div>
		</form>

	</div>