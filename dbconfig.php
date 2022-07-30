<?php
//This is where information will need to be updated to connect to mysql on CODD
$host="localhost";
$user="eruiz11";
$password="eruiz11";
$dbname="eruiz11";

$con = new mysqli($host, $user, $password, $dbname);

if ($con->connect_error){
	die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully!";
?>