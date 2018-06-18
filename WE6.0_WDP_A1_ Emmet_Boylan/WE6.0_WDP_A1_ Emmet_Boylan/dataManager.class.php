<?php
/**
* @filename: 
* @Author: Emmet Boylan (emmet.boylan@webelevate.ie)
* @project: WE6.0_WPD_A1
* @file description: A class file that stores arrays of Battalion objects and the methods to 
* manipulate and return data based on these objects. All manipulations on the data are contained here
* the resultPage class merely provides parameters and accepts Strings in return.
*/
include "battalion.class.php";
class DataManager {
	/*
	* 6 properties explicitly made Private. They each contain an array of Battalion objects, allowing
	* representation of the differences in game units between game factions.
	* @properties: capellanBattalionArray, draconisBattalionArray, federatedBattalionArray,
	* 		freeWorldBattalionArray, lyranBattalionArray, peripheryBattalionArray.
	* The final propety is a default for all minor in game factions that rely on salvaged or second hand gear, rather
	* than mass produced units made to order.
	*/
	private $capellanBattalionArray;
	private $draconisBattalionArray;
	private $federatedBattalionArray;
	private $freeWorldBattalionArray;
	private $lyranBattalionArray;
	private $peripheryBattalionArray;
	
	/*
	* Constructor Method. The global keyword is used to declare use of the global property rather than
	* an identically named "shadow" property of limited scope. Each array is then declared and a class function
	* called to fill the respective array with Battalion objects.
	* Reminder: $this is used in self reference to the class. PHP is not JAVA! Remember differences in scope and referencing!
	*/
	function __construct(){
		// We wish to use the global capellanBattalionArray, not declare a new one of the same name.
		global $capellanBattalionArray;
		//declare the array
		$this->$capellanBattalionArray = array();
		//fill the array
		$this->defineCapellanBattalions();

		//repeat previous steppes for all array properties
		global $draconisBattalionArray;
		$this->$draconisBattalionArray = array();
		$this->defineDraconisBattalions();

		global $federatedBattalionArray;
		$this->$federatedBattalionArray = array();
		$this->defineFederatedBattalions();

		global $lyranBattalionArray;
		$this->$lyranBattalionArray = array();
		$this->defineLyranBattalions();

		global $freeWorldBattalionArray;
		$this->$freeWorldBattalionArray = array();
		$this->defineFreeWorldBattalions();

		global $peripheryBattalionArray;
		$this->$peripheryBattalionArray = array();
		$this->definePeripheryBattalions();
	}

	/*
	* Method used to fill the capellanBattalionArray
	* @params: none
	* @returns: none
	*/
	function defineCapellanBattalions() {
		//using the global capellanBattalionArray
		global $capellanBattalionArray;
		//for each desired entry, create a new Battalion object and push ot the end of the array. Element index 
		// begins at 0 by default.
		$this->$capellanBattalionArray[] = new Battalion("Light Mech Battalion", 1, 24, 6, 6, 0, 4, 6);
		$this->$capellanBattalionArray[] = new Battalion("Medium Mech Battalion", 2, 34, 7, 7, 5, 4, 5);
		$this->$capellanBattalionArray[] = new Battalion("Heavy Mech Battalion", 3, 42, 9, 10, 8, 2, 4);
		$this->$capellanBattalionArray[] = new Battalion("Assault Mech Battalion", 3, 46, 10, 11, 10, 2, 4);
		$this->$capellanBattalionArray[] = new Battalion("Light Armour Battalion", 1, 18, 9, 9, 0, 3, 8);
		$this->$capellanBattalionArray[] = new Battalion("Medium Armour Battalion", 2, 21, 9, 9, 3, 3, 7);
		$this->$capellanBattalionArray[] = new Battalion("Heavy Armour Battalion", 3, 30, 12, 12, 3, 2, 6);
		$this->$capellanBattalionArray[] = new Battalion("Assault Armour Battalion", 3, 31, 13, 13, 4, 2, 5);
		$this->$capellanBattalionArray[] = new Battalion("Artillery Battery", 2, 30, 3, 0, 0, 1, 3);
		$this->$capellanBattalionArray[] = new Battalion("Infantry Regiment", 1, 18, 6, 3, 0, 3, 6);
	}	

	/*
	* Method used to fill the draconisBattalionArray
	* @params: none
	* @returns: none
	*/
	function defineDraconisBattalions() {
		//using the global draconisBattalionArray
		global $draconisBattalionArray;
		//for each desired entry, create a new Battalion object and push ot the end of the array. Element index 
		// begins at 0 by default.
		$this->$draconisBattalionArray[] = new Battalion("Light Mech Battalion", 1, 27, 9, 6, 0, 4, 6);
		$this->$draconisBattalionArray[] = new Battalion("Medium Mech Battalion", 2, 36, 9, 9, 3, 4, 5);
		$this->$draconisBattalionArray[] = new Battalion("Heavy Mech Battalion", 3, 42, 9, 9, 9, 2, 4);
		$this->$draconisBattalionArray[] = new Battalion("Assault Mech Battalion", 4, 50, 11, 13, 11, 2, 4);
		$this->$draconisBattalionArray[] = new Battalion("Light Armour Battalion", 1, 18, 6, 9, 0, 3, 8);
		$this->$draconisBattalionArray[] = new Battalion("Medium Armour Battalion", 2, 21, 6, 9, 3, 3, 7);
		$this->$draconisBattalionArray[] = new Battalion("Heavy Armour Battalion", 3, 27, 9, 12, 6, 2, 6);
		$this->$draconisBattalionArray[] = new Battalion("Assault Armour Battalion", 3, 31, 11, 13, 7, 2, 5);
		$this->$draconisBattalionArray[] = new Battalion("Artillery Battery", 2, 30, 3, 0, 0, 1, 3);
		$this->$draconisBattalionArray[] = new Battalion("Infantry Regiment", 1, 18, 6, 3, 0, 3, 6);
	}

	/*
	* Method used to fill the federatedBattalionArray
	* @params: none
	* @returns: none
	*/
	function defineFederatedBattalions() {
		//using the global federatedBattalionArray
		global $federatedBattalionArray;
		//for each desired entry, create a new Battalion object and push ot the end of the array. Element index 
		// begins at 0 by default.
		$this->$federatedBattalionArray[] = new Battalion("Light Mech Battalion", 1, 26, 9, 9, 1, 4, 6);
		$this->$federatedBattalionArray[] = new Battalion("Medium Mech Battalion", 2, 30, 9, 9, 3, 4, 5);
		$this->$federatedBattalionArray[] = new Battalion("Heavy Mech Battalion", 3, 38, 12, 12, 8, 2, 4);
		$this->$federatedBattalionArray[] = new Battalion("Assault Mech Battalion", 3, 40, 13, 13, 10, 2, 4);
		$this->$federatedBattalionArray[] = new Battalion("Light Armour Battalion", 1, 21, 6, 9, 3, 3, 7);
		$this->$federatedBattalionArray[] = new Battalion("Medium Armour Battalion", 2, 24, 9, 9, 3, 3, 7);
		$this->$federatedBattalionArray[] = new Battalion("Heavy Armour Battalion", 3, 30, 9, 12, 3, 2, 6);
		$this->$federatedBattalionArray[] = new Battalion("Assault Armour Battalion", 3, 32, 11, 13, 4, 2, 5);
		$this->$federatedBattalionArray[] = new Battalion("Artillery Battery", 2, 30, 3, 0, 0, 1, 3);
		$this->$federatedBattalionArray[] = new Battalion("Infantry Regiment", 1, 18, 6, 3, 0, 3, 6);
	}	

	/*
	* Method used to fill the freeWorldBattalionArray
	* @params: none
	* @returns: none
	*/
	function defineFreeWorldBattalions() {
		//using the global freeWorldBattalionArray
		global $freeWorldBattalionArray;
		//for each desired entry, create a new Battalion object and push ot the end of the array. Element index 
		// begins at 0 by default.
		$this->$freeWorldBattalionArray[] = new Battalion("Light Mech Battalion", 1, 25, 9, 6, 1, 4, 6);
		$this->$freeWorldBattalionArray[] = new Battalion("Medium Mech Battalion", 2, 27, 9, 6, 3, 4, 6);
		$this->$freeWorldBattalionArray[] = new Battalion("Heavy Mech Battalion", 3, 41, 11, 10, 7, 3, 5);
		$this->$freeWorldBattalionArray[] = new Battalion("Assault Mech Battalion", 3, 43, 12, 11, 8, 3, 5);
		$this->$freeWorldBattalionArray[] = new Battalion("Light Armour Battalion", 1, 21, 6, 6, 0, 3, 9);
		$this->$freeWorldBattalionArray[] = new Battalion("Medium Armour Battalion", 2, 21, 9, 9, 3, 3, 7);
		$this->$freeWorldBattalionArray[] = new Battalion("Heavy Armour Battalion", 3, 27, 12, 12, 6, 2, 5);
		$this->$freeWorldBattalionArray[] = new Battalion("Assault Armour Battalion", 4, 31, 14, 14, 8, 1, 4);
		$this->$freeWorldBattalionArray[] = new Battalion("Artillery Battery", 2, 30, 3, 0, 0, 1, 3);
		$this->$freeWorldBattalionArray[] = new Battalion("Infantry Regiment", 1, 18, 6, 3, 0, 3, 6);
	}

	/*
	* Method used to fill the lyranBattalionArray
	* @params: none
	* @returns: none
	*/
	function defineLyranBattalions() {
		//using the global lyranBattalionArray
		global $lyranBattalionArray;
		//for each desired entry, create a new Battalion object and push ot the end of the array. Element index 
		// begins at 0 by default.
		$this->$lyranBattalionArray[] = new Battalion("Light Mech Battalion", 1, 21, 6, 6, 0, 4, 6);
		$this->$lyranBattalionArray[] = new Battalion("Medium Mech Battalion", 2, 33, 7, 7, 2, 4, 5);
		$this->$lyranBattalionArray[] = new Battalion("Heavy Mech Battalion", 3, 43, 11, 11, 8, 2, 4);
		$this->$lyranBattalionArray[] = new Battalion("Assault Mech Battalion", 4, 51, 15, 15, 12, 1, 4);
		$this->$lyranBattalionArray[] = new Battalion("Light Armour Battalion", 1, 19, 6, 9, 3, 3, 7);
		$this->$lyranBattalionArray[] = new Battalion("Medium Armour Battalion", 2, 24, 7, 9, 4, 3, 7);
		$this->$lyranBattalionArray[] = new Battalion("Heavy Armour Battalion", 3, 32, 9, 12, 6, 2, 5);
		$this->$lyranBattalionArray[] = new Battalion("Assault Armour Battalion", 4, 36, 12, 12, 6, 1, 4);
		$this->$lyranBattalionArray[] = new Battalion("Artillery Battery", 2, 30, 3, 0, 0, 1, 3);
		$this->$lyranBattalionArray[] = new Battalion("Infantry Regiment", 1, 18, 6, 3, 0, 3, 6);
	}	

	/*
	* Method used to fill the peripheryBattalionArray, the default array for all minor in game factions
	* @params: none
	* @returns: none
	*/
	function definePeripheryBattalions() {
		//using the global peripheryBattalionArray
		global $peripheryBattalionArray;
		//for each desired entry, create a new Battalion object and push ot the end of the array. Element index 
		// begins at 0 by default.
		$this->$peripheryBattalionArray[] = new Battalion("Light Mech Battalion", 1, 21, 6, 6, 0, 4, 6);
		$this->$peripheryBattalionArray[] = new Battalion("Medium Mech Battalion", 2, 27, 6, 6, 3, 4, 5);
		$this->$peripheryBattalionArray[] = new Battalion("Heavy Mech Battalion", 3, 36, 9, 9, 9, 2, 4);
		$this->$peripheryBattalionArray[] = new Battalion("Assault Mech Battalion", 3, 40, 10, 10, 10, 2, 4);
		$this->$peripheryBattalionArray[] = new Battalion("Light Armour Battalion", 1, 18, 6, 6, 0, 3, 7);
		$this->$peripheryBattalionArray[] = new Battalion("Medium Armour Battalion", 2, 21, 6, 6, 3, 2, 6);
		$this->$peripheryBattalionArray[] = new Battalion("Heavy Armour Battalion", 3, 25, 8, 8, 5, 1, 5);
		$this->$peripheryBattalionArray[] = new Battalion("Assault Armour Battalion", 3, 29, 11, 11, 6, 1, 4);
		$this->$peripheryBattalionArray[] = new Battalion("Artillery Battery", 2, 30, 3, 0, 0, 1, 3);
		$this->$peripheryBattalionArray[] = new Battalion("Infantry Regiment", 1, 18, 6, 3, 0, 3, 6);
	}

	/*
	* Method used to determine the exact composition of each in game combat command
	* Each faction has a default composition of combat commands, defining how many regiments or battalions 
	* of each kind is deployed in a command by that faction.
	* The factions can not always meet the demands, due to infrastrucure damage and supply shortages in universe. A factions "Heavy"
	* Mech regiment might contain "medium" mech units to make up numbers. In game, this randomness allows chance to
	* influence results and the minor differences can give each combat command personality.
	* Parameters are the faction commissioning the unit, and the desired weight class. Note Infantry and artillery do
	* not come in seperate weight classes.
	* The return is an array of the specific battalions that make up the combat command. This is returned to the class
	* that invokes the method. 
	* @params: faction, weight
	* @returns: battalionArray
	*/
	function getBattalionArray($faction, $weight) {
		$mech = 1;  //default composition of 1 BattleMech regiment made up of 3 battalions
		$armour = 3;  //default composition of 3 armour(vehicles) regiments made up of 3 battalions each
		$infantry = 5;   //default composition of 5 infantry regiments. Infantry regiments are not divided into battalions fo game purposes
		$artillery = 1;    //default of 1 artillery battery/battalion
		if($faction == "CC") {
			$artillery = 2;   //the Capellan Confederation Faction use 2 artillery battalions instead of 1
		}
		if($faction == "FWL") {
			$infantry = 8;	//the Free Worlds League faction deploy 8 infantry regiments instead of 5
		}
		if($faction == "LC") {
			$armour = 5;	//the Lyran Commonwealth faction deploy 5 armour(vehicles) regiments instead of 3
			$infantry = 7;	//the Lyran Commonwealth faction use 7 infantry regiments instead of 5
		}
		if($faction == "OA") {
			$armour = 4;	//the Outworlds Alliance minor faction deploy 4 regiments of armour(vehicles) instead of 3
			$infantry = 7;	//the Outworlds Alliance minor faction use 7 regiments of infantry instead of 5
		}
		//define a battalionArray to be filled below. This is a number array used to obtain indices for later use
		$battalionArray = array();

		//here we use a switch statement. The helper methods we call to create battalion arrays for each regiment will
		//depend on the overall weight of the unit desired. "Light" combat commands will contain more "light" battalions
		//than "assault" combat commands will.
		//the switch parameter is the weight parameters.
		switch($weight) {
			case "light" :
				//each combat command is limited to one Mech regiment. Here is where we begin, by calling for a 3 entry
				//array of indices weighted towards light units (index 0 in the faction based battalionArrays)
				$mechArray = $this->getLightMechArray();
				//merge the resulting Mech Array with the empty battalion array
				$battalionArray = array_merge($battalionArray, $mechArray);
				//for each armour regiment, define a vehicle array, call getLightVehicleArray method and merge with the battalionArray so far 
				for ($i = 0; $i < $armour; $i++) {
					$vehicleArray = $this->getLightVehicleArray();
					$battalionArray = array_merge($battalionArray, $vehicleArray);
				}
				//for each infantry regiment, append the number 9 (the index for an infantry regiment in the faction battalionArrays)
				for ($j = 0; $j < $infantry; $j++) {
					$battalionArray[] = 9;
				}
				//for each artillery regiment, append the number 8 (the index for an artillery battery in the faction battalionArray)
				for ($k = 0; $k < $artillery; $k++) {
					$battalionArray[] = 8;
				}
				//return the completed battalionArray
				return $battalionArray;
			// case "medium" repeates the algorithm for case "light", replacing calls to getLightMechArray() with getMediumMechArray()
				//and replacing getLightVehicleArray() with getMediumVehicleArray()
			case "medium" :
				$mechArray = $this->getMediumMechArray();
				$battalionArray = array_merge($battalionArray, $mechArray);
				for ($i = 0; $i < $armour; $i++) {
					$vehicleArray = $this->getMediumVehicleArray();
					$battalionArray = array_merge($battalionArray, $vehicleArray);
				}
				for ($j = 0; $j < $infantry; $j++) {
					$battalionArray[] = 9;
				}
				for ($k = 0; $k < $artillery; $k++) {
					$battalionArray[] = 8;
				}
				return $battalionArray;
			// case "heavy" repeates the algorithm for case "light", replacing calls to getLightMechArray() with getHeavyMechArray()
				//and replacing getLightVehicleArray() with getHeavyVehicleArray()
			case "heavy" :
				$mechArray = $this->getHeavyMechArray();
				$battalionArray = array_merge($battalionArray, $mechArray);
				for ($i = 0; $i < $armour; $i++) {
					$vehicleArray = $this->getHeavyVehicleArray();
					$battalionArray = array_merge($battalionArray, $vehicleArray);
				}
				for ($j = 0; $j < $infantry; $j++) {
					$battalionArray[] = 9;
				}
				for ($k = 0; $k < $artillery; $k++) {
					$battalionArray[] = 8;
				}
				return $battalionArray;
			// case "assault" repeates the algorithm for case "light", replacing calls to getLightMechArray() with getAssaultMechArray()
				//and replacing getLightVehicleArray() with getAssaultVehicleArray()
			case "assault" :
				$mechArray = $this->getAssaultMechArray();
				$battalionArray = array_merge($battalionArray, $mechArray);
				for ($i = 0; $i < $armour; $i++) {
					$vehicleArray = $this->getAssaultVehicleArray();
					$battalionArray = array_merge($battalionArray, $vehicleArray);
				}
				for ($j = 0; $j < $infantry; $j++) {
					$battalionArray[] = 9;
				}
				for ($k = 0; $k < $artillery; $k++) {
					$battalionArray[] = 8;
				}
				return $battalionArray;

		}
		//in case of an error causing the code to miss the switch statement above, return the empty battalionArray
		return $battalionArray;
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating light mech regiment arrays
	* @returns: 3 entry integer array
	*/
	function getLightMechArray() {
		$dice = rand (1, 2);
		switch($dice) {
			case 1 :
				return array(0,0,0);
			case 2 :
				return array(0,0,1);
		}
		return array(0,0,0);
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating medium mech regiment arrays
	* @returns: 3 entry integer array
	*/
	function getMediumMechArray() {
		$dice = rand (1, 6);
		switch($dice) {
			case 1 :
				return array(0,1,1);
			case 2 :
				return array(1,1,1);
			case 3 :
				return array(1,1,1);
			case 4 :
				return array(0,1,2);
			case 5 :
				return array(0,1,2);
			case 6 :
				return array(1,1,2);
		}
		return array(1,1,1);
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating heavy mech regiment arrays
	* @returns: 3 entry integer array
	*/
	function getHeavyMechArray() {
		$dice = rand (1, 6);
		switch($dice) {
			case 1 :
				return array(1,2,2);
			case 2 :
				return array(1,2,3);
			case 3 :
				return array(1,2,3);
			case 4 :
				return array(2,2,2);
			case 5 :
				return array(2,2,2);
			case 6 :
				return array(2,2,3);
		}
		return array(2,2,2);
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating assault mech regiment arrays
	* @returns: 3 entry integer array
	*/
	function getAssaultMechArray() {
		$dice = rand (1, 2);
		switch($dice) {
			case 1 :
				return array(2,3,3);
			case 2 :
				return array(3,3,3);
		}
		return array(3,3,3);
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating light armour/vehicle regiment arrays
	* @returns: 3 entry integer array
	*/
	function getLightVehicleArray() {
		$dice = rand (1, 2);
		switch($dice) {
			case 1 :
				return array(4,4,4);
			case 2 :
				return array(4,4,5);
		}
		return array(4,4,4);
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating medium armour/vehicle regiment arrays
	* @returns: 3 entry integer array
	*/
	function getMediumVehicleArray() {
		$dice = rand (1, 6);
		switch($dice) {
			case 1 :
				return array(4,5,5);
			case 2 :
				return array(5,5,5);
			case 3 :
				return array(5,5,5);
			case 4 :
				return array(4,5,6);
			case 5 :
				return array(4,5,6);
			case 6 :
				return array(5,5,6);
		}
		return array(5,5,5);
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating heavy armour/vehicle regiment arrays
	* @returns: 3 entry integer array
	*/
	function getHeavyVehicleArray() {
		$dice = rand (1, 6);
		switch($dice) {
			case 1 :
				return array(5,6,6);
			case 2 :
				return array(5,6,7);
			case 3 :
				return array(5,6,7);
			case 4 :
				return array(6,6,6);
			case 5 :
				return array(6,6,6);
			case 6 :
				return array(6,6,7);
		}
		return array(6,6,6);
	}

	/*
	* A helper Method to prevent getBattalionArray becoming more complex and cluttered
	* returns a 3 entry array of integers. The integers equal the index of the desired battalion in 
	* the faction battalionArray. Results are weighted towards the default unit weight.
	* This method is for generating assault armour/vehicle regiment arrays
	* @returns: 3 entry integer array
	*/
	function getAssaultVehicleArray() {
		$dice = rand (1, 2);
		switch($dice) {
			case 1 :
				return array(6,7,7);
			case 2 :
				return array(7,7,7);
		}
		return array(7,7,7);
	}

	/*
	* Method used to obtain the battalion stats for a given array of indices, for a given faction.
	* Method iterates through each index in the array. For each index get the battalion listed in that index, from
	* the faction battalionArray that matches the required faction. For this battalion, call the method that returns
	* a String representation of that unit, formatted for use in a table. Note, this just returns the String, the
	* calling class is reponsable for echoing valid html code.
	* @params: faction, indexArray
	* @returns: ans String
	*/
	function getBattalionStats($faction, $indexArray){
		// create an ans String with a default failure message
		$ans = "data missing";
		//switch statement to determine faction and hense, the correct battalionArray array, based on faction parameter
		switch($faction) {
			//in case of Capellan Confederation faction
			case "CC":
				//use the global faction battalionArray
				global $capellanBattalionArray;
				//clear ans String
				$ans = "";
				//for each index array, look up the battalion object at that index, call the method of that object that returns
				//a string representation formatted for html tables.
				//append the returned String to the ans String.
				foreach($indexArray as $element) {
					$tempBatt = $this->$capellanBattalionArray[$element];
					$ans = $ans . $tempBatt->getBattalionAsTableEntry();
				}
				//break out of case
				break;
			//case Draconis Combine: as case Capellean Confederation, but with draconisBattalionArray instead of capelleanBattalionArray
			case "DC":
				global $draconisBattalionArray;
				$ans = "";
				foreach($indexArray as $element) {
					$tempBatt = $this->$draconisBattalionArray[$element];
					$ans = $ans . $tempBatt->getBattalionAsTableEntry();
				}
				break;
			//case Federated Suns: as case Capellean Confederation, but with federatedBattalionArray instead of capelleanBattalionArray
			case "FS":
				global $federatedBattalionArray;
				$ans = "";
				foreach($indexArray as $element) {
					$tempBatt = $this->$federatedBattalionArray[$element];
					$ans = $ans . $tempBatt->getBattalionAsTableEntry();
				}
				break;
			//case Free Worlds League: as case Capellean Confederation, but with freeWorldBattalionArray instead of capelleanBattalionArray
			case "FWL":
				global $freeWorldBattalionArray;
				$ans = "";
				foreach($indexArray as $element) {
					$tempBatt = $this->$freeWorldBattalionArray[$element];
					$ans = $ans . $tempBatt->getBattalionAsTableEntry();
				}
				break;
			//case Lyran Commonwealth: as case Capellean Confederation, but with lyranBattalionArray instead of capelleanBattalionArray
			case "LC":
				global $lyranBattalionArray;
				$ans = "";
				foreach($indexArray as $element) {
					$tempBatt = $this->$lyranBattalionArray[$element];
					$ans = $ans . $tempBatt->getBattalionAsTableEntry();
				}
				break;
			//default case for all minor factions, as case Capellean Confederation, but with peripheryBattalionArray instead of capelleanBattalionArray
			default:
				global $peripheryBattalionArray;
				$ans = "";
				foreach($indexArray as $element) {
					$tempBatt = $this->$peripheryBattalionArray[$element];
					$ans = $ans . $tempBatt->getBattalionAsTableEntry();
				}
				break;
		}
		//return the resultant ans String
		return $ans;
	}
}
?>