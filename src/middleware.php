<?php 

$a = function ($request,$response,$next)
{
	$response->getBody()->write('ANTES');
	$response = $next($request,$response);//verifica si hay otro midlew,sino ejecuta la vista 
	$response->getBody()->write('DESPUES');//luego graba 'despues'
	return $response;
};

//$app->add($a);//ASIGNACION DE FORMA GLOBAL

$b = function ($request,$response,$next)
{
	$response->getBody()->write('PRIMERO');
	$response = $next($request,$response);
	$response->getBody()->write('ULTIMO');
	return $response;
};


 ?>