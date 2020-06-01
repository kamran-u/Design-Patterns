<?php
namespace Pattern\Behavioral\Strategy\Classes;

class BCrypt
{	
	private $hash;

	public function compute($data)
	{
		$this->hash = password_hash($data, PASSWORD_DEFAULT);
		return $this;
	}

	public function getHash()
	{
		return $this->hash;
	}
}