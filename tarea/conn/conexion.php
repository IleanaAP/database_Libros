<?php
$servername = "localhost";
$dbname = "sibw";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected succesful"
?>