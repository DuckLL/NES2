$(document).ready(function(){
	$('#password2').change(function  () {
		if($('#password').val()!=$('#password2').val()){
			alert("密碼確認錯誤");
			$('#password2').val("");
		}
	})
});