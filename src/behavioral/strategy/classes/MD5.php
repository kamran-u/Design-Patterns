<?php
namespace Pattern\Behavioral\Strategy\Classes;

class MD5
{	
	private $hash;

	public function compute($data)
	{
		$this->hash = md5($data);
		return $this;
	}

	public function getHash()
	{
		return $this->hash;
	}
}