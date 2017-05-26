<?php
//donde slim va a guardar nuestras dependencias
//phpinfo();

$container = $app->getContainer();

$container['logger'] = function($cont)
{

	$settings = $cont->get('settings')['logger'];//trae las config de setting.php 
	$logger = new Monolog\logger($settings['name']);//el objeto monol se llamara como diga el []
	$logger->pushProcessor(new Monolog\Processor\UidProcessor());//para agregar un identificador 
	//unico en cada log que vamos a grabar
	$logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'],
		Monolog\logger::DEBUG));//ruta del archivo donde guardara el log
	return $logger; // retornamos el objeto Logger con nuestras config

};
//llamamos al archivo setting.php y tomamos el valor que contiene el indice 'render'
$container['view'] = function($cont)
{
    $settings = $cont->get('settings')['renderer'];
    return new \Slim\Views\Blade($settings['template_path'],$settings['cache_path']);
    //return new \Slim\Views\PhpRenderer($settings['template_path']);
};

$container['db'] = function($cont)
{
    $settings = $cont->get('settings')['db'];
    $database = new Medoo($settings);
    return $database;
};

$container['UserController'] = function($cont)
{
	return new \App\controllers\UserController($cont);
};

$container['ExampleMiddleware'] = function($cont)
{
	return new \App\middleware\ExampleMiddleWare($cont);
};

?>