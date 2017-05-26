<?php

$app->get('/home/[{name}]',function($Request,$Response,$args)
{
	/*cuando hacemos $this se ejecuta el metodo magico para verificar que exista la dependencia
	"view" dentro del contenedor,dentro de esa dependencia se instancia un objeto de la clase PhpRenderer o blade  que tiene
	el metodo render()*/
      return $this->view->render($Response,'index',$args);//como es blade no se pasa la extens
});

$app->get('/',function($Request,$Response,$args)
{
     $this->logger->addInfo('In home');
     return $Response->write("bienvenido");
});
     
 //asignamos un nombre ala ruta,especifico,solo para esta ruta y asignamos un middleware                                    
 //$app->get('/prueba','UserController:show')->setName('mt')->add($b)
 //->add(new App\middleware\ExampleMiddleware($container));//se ejecuta la funcion de la clase
 //gracias al metodo magico invoke 

$app->get('/prueba','UserController:show')->setName('mt')->add('ExampleMiddleware');
 
$app->get('/userDb','UserController:getUsers')->setName('userDb');

?>