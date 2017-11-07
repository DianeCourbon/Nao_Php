<?php
//this scipt return all the user information as a JSON array for a specified user id

//get the POST id
$id_partie=$_POST['id_partie'];

//connect to the db
require_once('dbConnect.php');

$sql = "SELECT * FROM partie_actuelle WHERE id_partie ='$id_partie'";
$res = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($res)){
	//create the array with all the data
	array_push($result,
		array(
			'symbole_joueur'=>$row[1],
			'joueur_tour_1'=>$row[2],
			'gagnant_joueur'=>$row[3],
			));
}

//encode the array to json and return it
echo json_encode(array("result"=>$result));

mysqli_close($con);
?>