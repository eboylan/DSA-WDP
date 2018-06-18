<?php 
/**
* @filename: resultPage.class.php
* @Author: Emmet Boylan (emmet.boylan@webelevate.ie)
* @project: WE6.0_WPD_A1
* @file description:
*/
//include required files
include_once 'header.class.php';
include_once 'footer.class.php';
include_once 'dataManager.class.php';
class resultPage{
	//define dataManager a private property
	private $dataManager;

	/*
	* Constructor method. Creates head and foot objects for boiler plate code, as webForm class does
	* defines a datamanager used to access and manipulate required data.
	* call a render method to fill body with a table filled with values based on results of calls
	* to dataManager object. The required parameters are passed to class by response.php
	* @params: unit_name, faction, unit_weight
	* returns: none
	*/
	function __construct($unit_name, $faction, $unit_weight) {
		//define new head and foot objects
		$head = new Header();
		$foot = new Footer();
		//use global dataManager property, not a local shadow property of same name
		global $dataManager;
		//define new dataManager
		$dataManager = new DataManager();
		//call render method from head instance
		$head->render();
		//call render method from this class
		$this->render($unit_name, $faction, $unit_weight);
		//call render from foot instance
		$foot->render();
	}

	/*
	* Method to render HTML code, based on values input to the web form
	* @params: unit_name, faction, unit_weight
	* @returns: none
	*/
	function render($unit_name, $faction, $unit_weight) {
		//a heading using the created units name
		echo "<h1>" . $unit_name . "</h1>" . PHP_EOL; 

		/*html code to define a table and table headers. 
		* this code is taken directly from the table example on the w3schools website
		* link: https://www.w3schools.com/html/html_tables.asp
		* with the simple addition of echo's.
		*/
		echo"<table>";
		echo"<tr>";
		echo"<th>";
		echo"Battalion Type";
		echo"</th>";
		echo"<th>";
		echo"Size";
		echo"</th>";
		echo"<th>";
		echo"Armour";
		echo"</th>";
		echo"<th>";
		echo"Short Attack";
		echo"</th>";
		echo"<th>";
		echo"Medium Attack";
		echo"</th>";
		echo"<th>";
		echo"Long Attack";
		echo"</th>";
		echo"<th>";
		echo"TMM";
		echo"</th>";
		echo"<th>";
		echo"Speed";
		echo"</th>";
		echo"</tr>";

		//use the global dataManager property
		global $dataManager;
		//define a battalionArray by calling getBattalionArray from dataManager instance and passing faction and unit_weight as parameters
		$battalionArray = $dataManager->getBattalionArray($faction, $unit_weight);

		//echo the formatted string detailing the unit stats, by calling the getBattalionStats method of the dataManager instance and passing 
		//faction and the battalionArray defined above as parameters
		echo $dataManager->getBattalionStats($faction, $battalionArray);
		// close off the table
		echo"</table>";
		//provide a link back to the index page to allow creation of another combat command unit.
		echo"<a href='index.php'>Create New Unit</a>";
	}
}
?>
