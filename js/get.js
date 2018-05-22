$(document).ready(function(){
	$(".boton").click(function(){
		$(".div").text($.get("peticion_ajax.php"));
	});
});
