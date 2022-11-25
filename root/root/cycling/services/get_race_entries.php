<?php


require_once("./inc/connect_pdo.php");

$query = "SELECT name, artists_name, genres
FROM race_entries
ORDER BY name_last, name_first";
//print("$query");
foreach($dbo->query($query) as $row) {
	$race_entries_id = stripslashes($row["0"]);
	$name_first = stripslashes($row["1"]);
	$name_last = stripslashes($row["2"]);
	
	
	$rider["race_entries_id"] = $race_entries_id;
	$rider["name_first"] = $name_first;
	$rider["name_last"] = $name_last;

	
	$riders[] = $rider;
}


$data = json_encode($riders);

header("Content-Type: application/json");

echo($data);




?>