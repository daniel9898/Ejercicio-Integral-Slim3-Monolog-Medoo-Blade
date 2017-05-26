<?php 
namespace App\model;
use App\contracts\BaseRepositoryInterface;

abstract class BaseModels 
{
	protected $container;

	function __construct($container)
	{
		$this->container=$container;
	}

	public function __get($propiedad)
	{
		if($this->container->{$propiedad})
		{
			return $this->container->{$propiedad};
		}
	}

	abstract public function getSource();//para que sepa a que tabla se va a conectar

	public function select($columns,$where = [])
	{
		return $this->container->db->select($this->getSource(),$columns,$where);
	}

	public function insert($data = [])
	{
		return $this->db->insert($this->getSource(),$data);
	}

	public function update($data = [], $where=[])
	{
		if(empty($where))
			return 0;
		return $this->db->update($this->getSource(),$data,$where);
	}

	public function delete($where)
	{
		if(empty($where))
			return 0;
		return $this->db->delete($this->getSource(),$where);
	}
}



 ?>