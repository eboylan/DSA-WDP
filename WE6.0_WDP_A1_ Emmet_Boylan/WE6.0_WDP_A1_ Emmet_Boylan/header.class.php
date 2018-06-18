<?php
/**
* @filename: header.class.php
* @Author: Emmet Boylan (emmet.boylan@webelevate.ie)
* @project: WE6.0_WPD_A1
* @file description: A simple 1 method class, used to echo HTML header code. Storing this code in a class
* 		prevents repetition and makes future modification easier as code only needs to be changed in one place.
*/
	class Header {
		public function render() {
			//boiler plate HTML header code
			echo "<!DOCTYPE html>" . PHP_EOL;
			echo "<html>" . PHP_EOL;
			echo "<head>" . PHP_EOL;

			/* this code is used to style the table created in the resultPage class.
			* this code is taken directly from the table example on the w3schools website
			* link: https://www.w3schools.com/html/html_tables.asp
			* with the simple addition of echo's.
			*/

			echo "<style>" . PHP_EOL;
			echo "table {" . PHP_EOL;
		    echo "    font-family: arial, sans-serif;" . PHP_EOL;
		    echo "    border-collapse: collapse;" . PHP_EOL;
		    echo "    width: 100%;" . PHP_EOL;
			echo "}" . PHP_EOL;

			echo "td, th {" . PHP_EOL;
		    echo "    border: 1px solid #dddddd;" . PHP_EOL;
		    echo "    text-align: left;" . PHP_EOL;
		    echo "    padding: 8px;" . PHP_EOL;
			echo "}" . PHP_EOL;

			echo "tr:nth-child(even) {" . PHP_EOL;
		    echo "    background-color: #dddddd;" . PHP_EOL;
			echo "}" . PHP_EOL;
			echo "</style>" . PHP_EOL;
			//end of w3schools code

			//simple title and heading html code
			echo "<title>Inner Sphere at War Combat Command Builder</title>" . PHP_EOL;
			echo "</head>" . PHP_EOL;
			echo "<body>" . PHP_EOL;
			echo "<h1>Inner Sphere at War Combat Command Builder</h1>" . PHP_EOL;
		}
	}

?>
