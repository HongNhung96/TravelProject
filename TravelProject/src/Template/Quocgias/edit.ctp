<div style="margin: 25px">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  	
  	<form id="myForm" action="/Quocgias/edit/<?php echo $result['0']['MaQuocGia'];?>" method="POST" >
  		<p>
  			<p>Mã quốc gia</p>
			<input class="form-control" type="text" name="" value="<?php echo $result['0']['MaQuocGia']?>" disabled>
  		</p>
		<p> 
			<p>Tên quốc gia</p>
			<input class="form-control" type="text" name="TenQuocGia" value="<?php echo $result['0']['TenQuocGia'];?>">
		</p>
		<button type="submit" name="update" class="btn btn-success form-control">Cập nhật</button>
	</form>
	<script type="text/javascript">
		
	    $("#myForm").validate({
	      rules: {
	        "TenQuocGia" : {
	          required :true
	        }
	      },
	      messages: {
	        TenQuocGia:{
	          required: "Vui lòng nhập Tên Quốc gia."
	        }
	      }
	    });
	</script>

</div>

