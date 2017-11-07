<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nao"; 

$symbole_joueur=$_POST['symbole_joueur'];
$joueur_tour_1=$_POST['joueur_tour_1'];
$gagnant_joueur=$_POST['gagnant_joueur'];
$id_robot=$_POST['id_robot'];
$id_session=$_POST['id_session'];


	// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO partie_actuelle ( symbole_joueur, joueur_tour_1, gagnant_joueur, id_robot, id_session) VALUES ( '$symbole_joueur', '$joueur_tour_1', '$gagnant_joueur', '$id_robot', '$id_session')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>