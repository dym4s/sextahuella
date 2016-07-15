$(document).ready(function(){
	listarAnimales();
});

function listarAnimales() {
	 $.get('../php/getAnimales.php',null,tratarRespListarAnimales,'json');
}

function tratarRespListarAnimales(oArrayRespuesta, sStatus, oXHR) {
	var fila;
	var tabla = $('#animales');
    for (var i = 0; i < oArrayRespuesta.length; i++) {
    	tabla.append(($('<tr>')).attr('id', oArrayRespuesta[i]['clave']));
    	$('#'+oArrayRespuesta[i]['clave']).append('<td><img src="../img/animales/perro1.jpg"></td>');
    	$('#'+oArrayRespuesta[i]['clave']).append(fila);
        $('#'+oArrayRespuesta[i]['clave']).append($('<td>').text(oArrayRespuesta[i]['nombre']));
        $('#'+oArrayRespuesta[i]['clave']).append($('<td>').text(oArrayRespuesta[i]['descripcion']));
    }

   tabla.append(tabla);
}

/*function tratarRespListarAnimalesBien(oArrayRespuesta, sStatus, oXHR) {
	var fila;
    for (var i = 0; i < oArrayRespuesta.length; i++) {
    	$('#animales').append(($('<tr>')).attr('id', oArrayRespuesta[i]['clave']));
        $('#'+oArrayRespuesta[i]['clave']).append($('<td>').text(oArrayRespuesta[i]['nombre']));
        $('#'+oArrayRespuesta[i]['clave']).append($('<td>').text(oArrayRespuesta[i]['descripcion']));
    }

    $('#animales').append(tabla);
}*/