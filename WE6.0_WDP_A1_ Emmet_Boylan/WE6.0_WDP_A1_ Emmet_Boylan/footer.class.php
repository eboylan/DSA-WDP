<?php
/**
* @filename: footer.class.php
* @Author: Emmet Boylan (emmet.boylan@webelevate.ie)
* @project: WE6.0_WPD_A1
* @file description: A simple 1 method class, used to echo HTML footer code. Storing this code in a class
* 		prevents repetition and makes future modification easier as code only needs to be changed in one place.
*/
	class Footer {
		public function render() {
			echo "</body>" . PHP_EOL;
			echo "</html>" . PHP_EOL;
		}
	}

?>