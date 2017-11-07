<?php
// Lea srv
// $username = "Dz8JMIkUzYMA";
// $password = "KU~teRc%+;R3bCcN7K^f";
// $hostname = "localhost"; 
//$mainDB = "cardioplus";

// Antoine srv
$username = "marchandbdd";
$password = "Zobyzoba1";
$hostname = "marchandbdd.mysql.db";
$mainDB = "marchandbdd"; 



// Connection to mysql Server
$con = mysqli_connect($hostname, $username, $password, $mainDB)
or die("Unable to connect to MySQL");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Set autocommit to off
mysqli_autocommit($con,FALSE);



?>