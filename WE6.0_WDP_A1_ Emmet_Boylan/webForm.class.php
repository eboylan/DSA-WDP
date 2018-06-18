<?php
/**
* @filename: webForm.class.php
* @Author: Emmet Boylan (emmet.boylan@webelevate.ie)
* @project: WE6.0_WPD_A1
* @file description: A class that renders html. The header and footer are rendered from the
*       respective header and footer classes. The render method echo's standard html set up for a web form.
*/
	//include referenced class files
	include_once 'header.class.php';
	include_once 'footer.class.php';
	class WebForm   {
		//declare haed and foot variables private explicitly
		private $head;
		private $foot;

		/*
		* Constructor Method. Creates new head and foot objects.
		* calls render methods for head, this and foot objects.
		*/
		function __construct(){
			//define new head object
			$head = new Header();
			//call render method from head instance
			$head->render();
			//call render method from this class
			$this->render();
			//define new foot object
			$foot = new Footer();
			//call render method from foot instance
			$foot->render();
		}

		/*
		* Render method echoes HTML code to create a web form.
		* The web form responds to a click by posting entered parameters to the response.php file
		*/
		function render() {
			echo '<form action="response.php" method="post">';
			echo 'Unit Name: <input type="text" name="unit_name"><br>';
			echo 'Unit Weight: <select name="unit_weight">';
			echo '		<option value="light">Light</option>';
			echo '		<option value="medium">Medium</option>';
			echo '		<option value="heavy">Heavy</option>';
			echo '		<option value="assault">Assault</option>';
			echo '	</select><br>';
			echo 'Faction: <select name="faction">';
			echo '		<option value="CC">Capellan Confederation</option>';
			echo '		<option value="DC">Draconis Combine</option>';
			echo '		<option value="FS">Federated Suns</option>';
			echo '		<option value="FWL">Free Worlds League</option>';
			echo '		<option value="LC">Lyran Commonwealth</option>';
			echo '		<option value="TC">Taurian Concordat</option>';
			echo '		<option value="OA">Outworlds Alliance</option>';
			echo '	</select><br>';
			echo '<input type="submit">';
			echo '</form>';
		}
	}
?>