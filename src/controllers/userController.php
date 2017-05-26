<?php
namespace App\controllers;
use App\model\Users; //esta en el mismo namespace pero en otra carpeta por eso se agrega

 class UserController extends BaseController
 {
 	
 	public function show($request,$response)
 	{
 	   $path = $this->router->pathFor('mt');//para mostrar la ruta que hace la peticion
 	   //le pasa el la ruta con compact porque si o si necesita ser array
       return $this->view->render($response,'index',compact('path'));
 	}

 	public function getUsers($request,$response)
 	{
       $Users = new Users($this->container);
       $all = $Users->select('*');
       var_dump($all);
 	}
 } 

 ?>