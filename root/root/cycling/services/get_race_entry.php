<?php

$id = $_POST["id"];

require_once("./inc/connect_pdo.php");

$query = "SELECT race_entries_id, name_first, name_last, email, dob, gender_id
FROM race_entries
WHERE race_entries_id = '$id'";
//print("$query");
foreach($dbo->query($query) as $row) {
	$race_entries_id = stripslashes($row["0"]);
	$name_first = stripslashes($row["1"]);
	$name_last = stripslashes($row["2"]);
	$email = stripslashes($row["3"]);
	$dob = stripslashes($row["4"]);
	$gender = stripslashes($row["5"]);
	
	if($gender){
		$gender = "Male";
	} else {
		$gender = "Female";
	}
	
	$rider["race_entries_id"] = $race_entries_id;
	$rider["name_first"] = $name_first;
	$rider["name_last"] = $name_last;
	$rider["email"] = $email;
	$rider["dob"] = $dob;
	$rider["gender"] = $gender;

	
	$riders[] = $rider;
}


$data = json_encode($riders);

header("Content-Type: application/json");

echo($data);




?>