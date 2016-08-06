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


function cargar(url1, id1, value1){
	$.ajax({
    // la URL para la petici�n
    url : url1+'/'+value1,

    // la informaci�n a enviar
    // (tambi�n es posible utilizar una cadena de datos)
    data : { id : 123 },

    // especifica si ser� una petici�n POST o GET
    type : 'POST',

    // c�digo a ejecutar si la petici�n es satisfactoria;
    // la respuesta es pasada como argumento a la funci�n
    success : function(datos) {
        document.getElementById(id1).innerHTML = datos;
    }
    });
}



function XHConn() {
    var miAleatorio = parseInt(Math.random() * 99999999);
    var xmlhttp, bComplete = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            try {
                xmlhttp = new XMLHttpRequest();
            } catch (e) {
                xmlhttp = false;
            }
        }
    }
    if (!xmlhttp) return null;
    this.connect = function(sURL, sMethod, sVars, fnDone) {
        if (!xmlhttp) return false;
        bComplete = false;
        sMethod = sMethod.toUpperCase();
        try {
            if (sMethod == "GET") {
                xmlhttp.open(sMethod, sURL + "?" + sVars + "&rand=" + miAleatorio, true);
                sVars = "";

            } else {
                xmlhttp.open(sMethod, sURL + "?rand=" + miAleatorio, true);
                xmlhttp.setRequestHeader("Method", "POST " + sURL + "?rand=" + miAleatorio + " HTTP/1.1");
                xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            } //FIN ELSE

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && !bComplete) {
                    bComplete = true;
                    fnDone(xmlhttp);
                }
            };
            xmlhttp.send(sVars);
        } //FIN TRY
        catch (z) {
            return false;
        }
        return true;
    };
    return this;
}

function cargar_contenido(pagina, target, value) {
    var myConn = new XHConn();
    if (!myConn) fun_msj("XMLHTTP no esta disponible. Int�ntalo con un navegador m�s nuevo.");
    var peticion = function(oXML) {
        document.getElementById(target).innerHTML = oXML.responseText;
    };
    myConn.connect(pagina, "GET", "", peticion+'/'+value);
}
