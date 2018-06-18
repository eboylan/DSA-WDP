<?php
/**
* @filename: battalion.class.php
* @Author: Emmet Boylan (emmet.boylan@webelevate.ie)
* @project: WE6.0_WPD_A1
* @file description: A class file defining a "battalion" object, an array of which make up the Combat Commands generated
* by the application. It includes a constructor using 8 parameters, a set of accessor and mutator functions for each variable
* and 2 return functions. One returning a basic String used during testing and development, and another reuturn a String formatted
* for use by the resultPage class in constructing a HTML table.
*/
class Battalion {
	/*
	* 8 class properties explicitly declared private.
	* Each define a statistic for use in a strategy game.
	* @propeties : type, size, armour, shortAttack, mediumAttack,longAttack,
	* 			targetMoveModifier, speed.
	*/
	private $type;
	private $size;
	private $armour;
	private $shortAttack;
	private $mediumAttack;
	private $longAttack;
	private $targetMoveModifier;
	private $speed;

	/**
	* A contructor method, taking 8 parameters, one for each class propety. Visibilty is public.
	* @params: type, size, armour, shortAttack, mediumAttack,longAttack,
	* 			targetMoveModifier, speed
	* @returns: None. Method is a constructor.
	*/
	public function __construct($type, $size, $armour, $shortAttack, 
		$mediumAttack, $longAttack, $targetMoveModifier, $speed) {
			$this->type = $type;
			$this->size = $size;
			$this->armour = $armour;
			$this->shortAttack = $shortAttack;
			$this->mediumAttack = $mediumAttack;
			$this->longAttack = $longAttack;
			$this->targetMoveModifier = $targetMoveModifier;
			$this->speed = $speed;
	}

	/**
	* ACCESSOR & MUTATOR METHODS
	* These methods are not currently used by project, but are included in case of future need.
	*/

	/**
	* Accessor Method for "type" property
	* @params: none
	* @returns: type
	*/
	public function getType()
	{
		return $this->type;
	}
	
	/**
	* Muatator Method for "type" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setType($value)
	{
		$this->type = $value;
	}

	/**
	* Accessor Method for "size" property
	* @params: none
	* @returns: size
	*/
	public function getSize()
	{
		return $this->size;
	}
	
	/**
	* Muatator Method for "sixe" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setSize($value)
	{
		$this->size = $value;
	}

	/**
	* Accessor Method for "armour" property
	* @params: none
	* @returns: armour
	*/
	public function getArmour()
	{
		return $this->armour;
	}
	
	/**
	* Muatator Method for "armour" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setArmour($value)
	{
		$this->armour = $value;
	}

	/**
	* Accessor Method for shortAttack property
	* @params: none
	* @returns: shortAttack
	*/
	public function getShortAttack()
	{
		return $this->shortAttack;
	}
	
	/**
	* Muatator Method for "shortAttack" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setShortAttack($value)
	{
		$this->shortAttack = $value;
	}

	/**
	* Accessor Method for "mediumAttack" property
	* @params: none
	* @returns: mediumAttack
	*/
	public function getMediumAttack()
	{
		return $this->mediumAttack;
	}
	
	/**
	* Muatator Method for "mediumAttack" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setMediumAttack($value)
	{
		$this->mediumAttack = $value;
	}

	/**
	* Accessor Method for "longAttack" property
	* @params: none
	* @returns: longAttack
	*/
	public function getLongAttack()
	{
		return $this->longAttack;
	}
	
	/**
	* Muatator Method for "longAttack" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setLongAttack($value)
	{
		$this->longAttack = $value;
	}

	/**
	* Accessor Method for "targetMoveModifier" property
	* @params: none
	* @returns: targetMoveModifier
	*/
	public function getTargetMoveModifier()
	{
		return $this->targetMoveModifier;
	}
	
	/**
	* Muatator Method for "targetMoveModifier" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setTargetMoveModifier($value)
	{
		$this->targetMoveModifier = $value;
	}

	/**
	* Accessor Method for "speed" property
	* @params: none
	* @returns: speed
	*/
	public function getSpeed()
	{
		return $this->speed;
	}
	
	/**
	* Muatator Method for "speed" property. Changes property to the value passed to the method.
	* @params: value
	* @returns: none
	*/
	public function setSpeed($value)
	{
		$this->speed = $value;
	}

	/**
	* Method used to return a String representation of the Battalion Object
	* @params: none
	* @returns: String
	*/
	public function getBattalionAsString()
	{
		return "" . $this->type . ": " 
		. $this->size . ": " 
		.  $this->armour . ": " 
		.  $this->shortAttack . ": " 
		.  $this->mediumAttack . ": " 
		.  $this->longAttack . ": " 
		.  $this->targetMoveModifier . ": " 
		.  $this->speed; 
	}

	/**
	* Method used to return a String representation of the Battalion Object, formatted for use in 
	* generating a HTML table
	* @params: none
	* @returns: String
	*/
	public function getBattalionAsTableEntry()
	{
		return "<tr> <td>" . $this->type . "</td><td>" 
		. $this->size . "</td><td>" 
		.  $this->armour . "</td><td>"
		.  $this->shortAttack . "</td><td>"
		.  $this->mediumAttack . "</td><td>"
		.  $this->longAttack . "</td><td>"
		.  $this->targetMoveModifier . "</td><td>" 
		.  $this->speed . "</td></tr>"  . PHP_EOL;
	}
}
?>