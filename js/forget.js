$(document).ready(function(){
	$('#submit').on('click',function (){
		$.ajax( {
			url: 'control/forget.php',
			type: 'POST',
			data: {
				account: $('#account').val(),
				school: $('#school').val(),
				email: $('#email').val(),
				phone: $('#phone').val()
			},
			error: function(xhr) {
				alert('Ajax request 發生錯誤');
			},
			success: function(response) {
				$('#newpassword').html(response);
				$('#newpassword').fadeIn();
			}
		} );
	})
});

