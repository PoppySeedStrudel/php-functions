
<?php
// script to query data from an xml-file like from a database using a where clause

// check if xml file exists and if yes: open it.

if (file_exists('main.xml')) {
   $xml = simplexml_load_file('main.xml');
} else {
   exit('No data available');
}

// set a demo-variable for the query
$item_id = "0001";
	
$i = 0;

	foreach ($xml as $row):
	
		if ($item_id == "0001"){
			echo $xml->category[$i]->name;
			echo "<br>";	
			$i++;
		}
	
	endforeach;
	


?>