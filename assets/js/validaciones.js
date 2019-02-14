$(document).on("ready",inicio);
function inicio(){
//  $("#nombre").hide();
  var validator = $( "#agregaitems" ).validate();
  validator.form();
  alert(validator);
}

function actualizar(){
	$.ajax({
		url:"http://localhost/empresa/empleados/actualizar",
		type:"POST",
		data:$("#agregaitems").serialize(),
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}
