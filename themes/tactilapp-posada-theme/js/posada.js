$(document).ready(function() {
	console.error("Desactivar en producción");
	$('img').each(function(){
	    $(this).attr('src','http://localhost/posadafuentescarrionas.com/wp-content/themes/tactilapp-posada-theme/' + $(this).attr('src'));
	});
});