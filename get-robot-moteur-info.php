<?php
//this scipt return all the user information as a JSON array for a specified user id


//connect to the db
require_once('dbConnect.php');

$sql = "SELECT * FROM moteur";
$res = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($res)){
	//create the array with all the data
	array_push($result,
		array(
			'id_moteur'=>$row[0],
			'temperature'=>$row[1],
			'inclinaison'=>$row[2],
			));
}

//encode the array to json and return it
echo json_encode(array("result"=>$result));

mysqli_close($con);
?>