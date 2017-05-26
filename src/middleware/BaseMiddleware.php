<?php 
namespace App\middleWare; 

class BaseMiddleWare
{
	protected $container;

	public function __construct($cont)
	{
		$this->container = $cont;
	}
 
	public function __get($propiedad)
	{
		if($this->container->{$propiedad})
		{
			return $this->container->{$propiedad};
		}
	}
}


 ?>