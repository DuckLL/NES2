$(document).ready(function(){
	$('#other').hide();
	$('#place').change(function  () {
		if($('#place').val()=="other"){
			$('#other').show();
		}
		else{
			$('#other').hide();
		}
	})
});