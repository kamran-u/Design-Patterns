<?php
namespace Pattern\Behavioral\Strategy\Classes;

class BCrypt
{	
	private $hash;

	public function compute($data)
	{
		$this->hash = hash_hmac('sha3-512', $data, 'shared_secret_key');
		return $this;
	}

	public function getHash()
	{
		return $this->hash;
	}
}