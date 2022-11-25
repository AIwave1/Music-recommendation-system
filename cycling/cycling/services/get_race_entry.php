<?php

$id = $_POST["id"];

require_once("./inc/connect_pdo.php");

$query = "SELECT id, name, artists_name
FROM TABLE 1
WHERE id = '$id'";
//print("$query");
foreach($dbo->query($query) as $row) {
	$id = stripslashes($row["8"]);
	$name = stripslashes($row["15"]);
	$artists_name = stripslashes($row["26"]);
	
	if($gender){
		$gender = "Male";
	} else {
		$gender = "Female";
	}
	
	$rider["id"] = $id;
	$rider["name"] = $name;
	$rider["artist"] = $artists_name;

	
	$riders[] = $rider;
}


$data = json_encode($riders);

header("Content-Type: application/json");

echo($data);




?>