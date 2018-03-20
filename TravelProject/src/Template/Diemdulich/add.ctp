<?php use Cake\ORM\TableRegistry;

$quocgiaTable = TableRegistry::get('Quocgia');
$result = $quocgiaTable->find('all')->select(['MaQuocGia' , 'TenQuocGia'])->toArray();
// print_r($result);die;
?>
<div>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
	<style type="text/css">
		#text{
		    color: #848c94;
		}
		 .error{
		 	color: #848c94;
		 }
	</style>
	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
  	<link href="/css/style3.css" type="text/css" rel="stylesheet">
  	
  	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<h3>THÊM ĐIỂM DU LỊCH</h3>
	<div>
		<form id="myForm" action="add" method="POST" enctype="multipart/form-data">
			<p id="text">Tên quốc gia</p>
			<p>
				<select name="selquocgia" class="form-control">
					<option value=""></option><!--thêm dòng này chỉ để trường hợp điểm du lịch  có thể k cho nằm trong nước nào mà là nước đấy luôn thì cái này để null-->
					<?php 
						foreach ($result as $key => $value) {?>
							<option value="<?php echo $value['MaQuocGia'] ?>"><?php echo $value['TenQuocGia'] ?></option>
						<?php	
						} 
					?>
				</select>
			</p>
			<p id="text">Tên điểm du lịch</p>
			<p><input class="form-control" type="text" name="TenDiemDL"></p>
			<p id="text">Ảnh</p>
			<div class="row">
				<div class="col-md-2">
					<img id="blah" src="" alt="your image" style="width: 150px;height: 150px"/>
				</div>
				<div class="col-md-4">
					<p><input id="imgInp" class="form-control" type="file" name="myFile" style="margin-top: 54px"></p>
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
			<!-- <p><input class="form-control" type="file" name="myFile" value=""></p> -->
			<p id="text">Thông tin điểm du lịch</p>
			<p ><textarea class="form-control" rows="5" name="ThongTin"></textarea></p>
			<button class="button"><?php echo $this->Html->link(
		                              'Quay lại',
		                              ['controller' => 'Diemdulich', 'action' => 'list']
		                          )?></button>
			<button class="button" type="submit" id="text">Lưu lại</button>
		</form>
	</div>
</div>
<script type="text/javascript">
		
	    $("#myForm").validate({
	      rules: {
	        "TenDiemDL" : {
	          required :true
	        },
	        "ThongTin" : {
	        	required : true
	        }
	      },
	      messages: {
	        TenDiemDL:{
	          required: "Vui lòng nhập tên điểm du lịch."
	        },
	        ThongTin: {
	        	required: "Vui lòng nhập thông tin điểm du lịch."
	        }
	      }
	    });

	    function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#blah').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		});
	</script>