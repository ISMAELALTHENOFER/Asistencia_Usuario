var tabla;

//funcion que se ejecuta al inicio
function init() {
	$("#formulario").on("submit", function (e) {
		regis_asis(e);
	})
}

function regis_asis(e) {
	e.preventDefault();//no se activara la accion predeterminada 
	$("#btnGuardar").prop("disabled", true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/asistencia.php?op=registrar_asistencia",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,
	});
	limpiar();
}

//funcion limpiar el campo despues de 3 seg 
function limpiar() {
	$("#cod_persona").val("");
	setTimeout('document.location.reload()',3000);

}
init();