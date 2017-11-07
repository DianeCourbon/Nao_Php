<?php
//this scipt return all the user information as a JSON array for a specified user id


//connect to the db
require_once('dbConnect.php');

$sql = "SELECT * FROM toutes_sessions WHERE id_robot ='$id_robot'";
$res = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($res)){
	//create the array with all the data
	array_push($result,
		array(
			'nbr_parties_gagnees_joueurs'=>$row[1],
			'nbr_parties_totales'=>$row[2],
			'c_pourcentage_victoires'=>$row[3],
			));
}

//encode the array to json and return it
echo json_encode(array("result"=>$result));

mysqli_close($con);
?>