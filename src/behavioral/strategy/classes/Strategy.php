<?php
namespace Pattern\Behavioral\Strategy\Classes;

class Strategy
{
	public static $initialise = null;
	private static $data;
	private static $algo;

	private function __construct()
	{

	}

	public static function initialize($data, $algo)
	{
		if(!static::$initialise) 
		{
			static::$initialise = new static;
							
		}

		static::$data = $data;
		static::$algo = $algo;
		return static::$initialise;
	}

	public function generateHash()
	{
		$algoObj = static::$algo->compute(static::$data);
		return $algoObj;
	}
}