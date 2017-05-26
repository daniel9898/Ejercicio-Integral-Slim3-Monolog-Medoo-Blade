<?php
namespace App\middleWare; 

class ExampleMiddleware extends BaseMiddleware
{
	//metodo magico
    public function __invoke($request,$response,$next)//llama a una clase como si fuera una funcion
    {
    	$response->getBody()->write('  -SE LLAMO DESDE LA CLASE.UNO-  ');
    	$response = $next($request,$response);
	    $response->getBody()->write('  -SE LLAMO DESDE LA CLASE.DOS-  ');
	    return $response;
    }

}
 ?>