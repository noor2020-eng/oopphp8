<?php
class Person{

	private $name;
	private $eyeColor;
	private $age;

	public static $drinkingAge=21;

	public function __construct($name,$eyeColor,$age){
		$this->name=$name;
		$this->eyeColor=$eyeColor;
		$this->age=$age;
	}

	public function setName($name){
		$this->name=$name;
	
	}
	public static function setDA($newDrinkingAge){
		self::$drinkingAge=$newDrinkingAge;
	
	}
	public static function getDA(){
		return self::$drinkingAge;
	
	}


	public function getName(){
		return $this->name;
	
	}


}
