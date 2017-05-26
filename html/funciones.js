
function enviarDatos()
{
	  var usuario = $("#usuario").val();
	  var mail = $("#mail").val();

	 datos={
		"usuario":usuario,
		"mail":mail
	 };

	 $.post("http://localhost:8080/api-rest/login",datos,procesarRespuesta);

	 function procesarRespuesta(respuesta) {
		console.log(respuesta);
	
     }  
}

function prueba()
{
	var root = 'https://jsonplaceholder.typicode.com';

	$.ajax({
	  url: root + '/posts/1',
	  method: 'GET'
	}).then(function(data) {
	  console.log(data);
	});
}
