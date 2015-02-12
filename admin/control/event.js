$(document).ready(function(){
	$('#after').change(function  () {
		if($('#after').prop("checked")){
			$('.done').hide();
		}
		else{
			$('.done').show();
		}
	})
	$('#before').change(function  () {
		if($('#before').prop("checked")){
			$('.undone').hide();
		}
		else{
			$('.undone').show();
		}
	})
	$('#pass').change(function  () {
		if($('#pass').prop("checked")){
			$('.unpass').hide();
		}
		else{
			$('.unpass').show();
		}
	})
	$('#unpass').change(function  () {
		if($('#unpass').prop("checked")){
			$('.pass').hide();
		}
		else{
			$('.pass').show();
		}
	})
});