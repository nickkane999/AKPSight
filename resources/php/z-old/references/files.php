<?php

	function include_files($item1) {
		// Array variables to reference data files, parameter values
		$webpage = include("/resources/php/references/webpage_names.php");
		$data_grab = include("/resources/php/references/datafile_names.php");
		
		// Files holding functions for every website page
		$body_items = "/resources/html/common_items.php";  
		
		// Loops through array to include files with important information
		foreach($webpage as $index => $value) {
			if ($item1 == $webpage[$index]) {
				include($body_items);
				include("/resources/php/get-data/" . $data_grab[$index] . ".php");
			}
		}
		
	}
?>