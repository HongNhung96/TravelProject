<div style="margin: 25px">
	<h3>Thêm mới quốc gia</h3>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
	<form id="myForm" action="add" method="POST">
		<p>
			<input class="form-control" type="text" name="TenQuocGia" placeholder="Tên Quốc Gia">
		</p>
		<button class="form-control btn btn-success" type="submit">Lưu lại
		</button>
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
