<?php
namespace App\controllers; //App esta asociada ala carpeta src que es donde estaran las clases

class BaseController
{
	protected $container;

	public function __construct($cont)
	{
		$this->container = $cont;
	}
    /*cuando invoquemos por eje a $this->router buscara en container a ver si existe la propiedad
    router,si existe la devolvera,es una abreviacion
    METODO MAGICO
    */
	public function __get($propiedad)
	{
		if($this->container->{$propiedad})
		{
			return $this->container->{$propiedad};
		}
	}
}


 ?>