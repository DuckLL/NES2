$(document).ready(function(){
	$('#user').change(function  () {
		//check account
	})
	$('#password2').change(function  () {
		if($('#password').val()!=$('#password2').val()){
			alert("密碼確認錯誤");
			$('#password2').val("");
		}
	})
});

