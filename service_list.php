<?php 

$data = json_decode( file_get_contents("http://universities.hipolabs.com/search?country=Colombia"), true);

for ($i=0; $i < count($data); $i++) { 
	
	echo $i . ". ";
	
	foreach ($data[$i]["web_pages"] as $webpage) {
		echo $webpage . " ";
	}
	
	echo "-   ". $data[$i]["name"] . "<br/>";
}
?>