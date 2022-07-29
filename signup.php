<?php
//This is where information will need to be updated to connect to mysql on CODD
$host="127.0.0.2";
$port=3307;
$socket="";
$user="root";
$password="";
$dbname="pedalshub";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
//This is where it ends for connecting to CODD

// get the post records
$txtUsername = $_POST['username'];
$txtPassword = $_POST['password'];
$txtCardholderName = $_POST['cardholderName'];
$txtCardNumber = $_POST['cardNumber'];
$txtCardExpiry = $_POST['cardExpiry'];
$txtCardCVV = $_POST['cardCVV'];

// database insert SQL code
$sql1 = "INSERT INTO `logininfo` (`id`, `username`, `password`) VALUES ('0', '$txtUsername', '$txtPassword')";
$sql2 = "INSERT INTO `creditcard` (`cardholderName`, `cardNumber`, `expDate`, `cvv`) VALUES ('$txtCardholderName', '$txtCardNumber', '$txtCardExpiry', '$txtCardCVV')";
// insert in database 
$rs = mysqli_query($con, $sql1);


if($rs)
{
	echo "Account Inserted";
}
echo "<br>";

$rs2 = mysqli_query($con, $sql2);
if($rs2)
{
	echo "Credit Card Inserted";
}
//MUST EDIT TO SEND TO THE PROPER PLACE! THIS WOULD BE CODD DETAILS!!!!
header("Location: /login.html")
?>