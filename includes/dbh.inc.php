<?php
// database handler 

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpproject01";
	
$conn = mysqli_connect($serverName, $dBUsername, 
	$dBPassword, $dBName);

// if connection false, then negate it
if (!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

