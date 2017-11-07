<?php
//this scipt return all the user information as a JSON array for a specified user id

//get the POST id
$id_session=$_POST['id_session'];

//connect to the db
require_once('dbConnect.php');

$sql = "SELECT * FROM session WHERE id_session ='$id_session'";
$res = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($res)){
	//create the array with all the data
	array_push($result,
		array(
			'nbr_parties_gagnees_joueur'=>$row[1],
			'nbr_parties_totales'=>$row[2],
			'c_pourcentage_victoire'=>$row[3],
			));
}

//encode the array to json and return it
echo json_encode(array("result"=>$result));

mysqli_close($con);
?>