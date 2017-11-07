<?php
//this scipt return all the user information as a JSON array for a specified user id

//get the POST id
$id_robot=$_POST['id_robot'];

//connect to the db
require_once('dbConnect.php');

$sql = "SELECT * FROM robot WHERE id_robot ='$id_robot'";
$res = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($res)){
	//create the array with all the data
	array_push($result,
		array(
			'niv_batterie'=>$row[1],
			));
}

//encode the array to json and return it
echo json_encode(array("result"=>$result));

mysqli_close($con);
?>