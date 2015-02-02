$(document).ready(function(){
	$('#password2').change(function  () {
		if($('#password').val()!=$('#password2').val()){
			alert("密碼確認錯誤");
			$('#password2').val("");
		}
	})
	checkRegAcc = function (){
		if ($('#account').val().length >=1) {
			$.ajax( {
				url: 'control/IDValidate.php',
				type: 'GET',
				data: {
					user_name: $('#account').val()
				},
				error: function(xhr) {
					alert('Ajax request 發生錯誤');
				},
				success: function(response) {
					$('#msg_user_name').html(response);
					$('#msg_user_name').fadeIn();
				}
			} );
		}else{
			$('#msg_user_name').html('');
		}
	};
});

