<?php
include ('dbconfig.php');
//This is where information will need to be updated to connect to mysql on CODD
$host = "localhost";
$user = "eruiz11";
$password = "eruiz11";
$dbname = "eruiz11";

$con = new mysqli($host, $user, $password, $dbname);

if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully!";

// get the post records
$txtUsername = $_POST['username'];
$txtPassword = $_POST['password'];
$txtCardholderName = $_POST['cardholderName'];
$txtCardNumber = $_POST['cardNumber'];
$txtCardExpiry = $_POST['cardExpiry'];
$txtCardCVV = $_POST['cardCVV'];

// database insert SQL code
$sql1 = "INSERT INTO LOGININFO (id, username, password) VALUES ('0', '$txtUsername', PASSWORD('$txtPassword'))";
$sql2 = "INSERT INTO CREDITCARD (id, cardholderName, cardNumber, expDate, cvv) VALUES ('0','$txtCardholderName', '$txtCardNumber', '$txtCardExpiry', '$txtCardCVV')";
// insert in database 
$rs = mysqli_query($con, $sql1);
$rs = mysqli_query($con, $sql2);

if ($rs) {
	echo "Account Inserted\n";
} else {
	echo "failed";
}
echo "<br>";

$rs2 = mysqli_query($con, $sql2);
if ($rs2) {
	echo "Credit Card Inserted";
}

header("Location: /login.php");
exit();

//$con->close();
