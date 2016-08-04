function error(MSJ){
	 document.getElementById("bloque_mensajes").innerHTML='<div id="msj_internal_error" class="error_msj">'+MSJ+'<div>';
	nMiliSegundos=9000;
	window.setTimeout("limpiar_msj(1)", nMiliSegundos);
}

function exito(MSJ){
	 document.getElementById("bloque_mensajes").innerHTML='<div id="msj_internal_exito" class="exito">'+MSJ+'<div>';
	nMiliSegundos=9000;
	window.setTimeout("limpiar_msj(2)", nMiliSegundos);
}


function exito2(MSJ){
	 document.getElementById("bloque_mensajes2").innerHTML='<div id="msj_internal_exito" class="exito">'+MSJ+'<div>';
	nMiliSegundos=9000;
	window.setTimeout("limpiar_msj(2)", nMiliSegundos);
}

function info(MSJ){
	 document.getElementById("bloque_mensajes").innerHTML='<div id="msj_internal_exito" class="info">'+MSJ+'<div>';
	nMiliSegundos=9000;
	window.setTimeout("limpiar_msj(2)", nMiliSegundos);
}

function alerta(MSJ){
	 document.getElementById("bloque_mensajes").innerHTML='<div id="msj_internal_exito" class="alerta">'+MSJ+'<div>';
	nMiliSegundos=9000;
	window.setTimeout("limpiar_msj(2)", nMiliSegundos);
}