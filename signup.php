<?php
include('dbconfig.php');
session_start();

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
$txtAccountType = $_POST['accountType'];
$txtCardholderName = $_POST['cardholderName'];
$txtCardNumber = $_POST['cardNumber'];
$txtCardExpiry = $_POST['cardExpiry'];
$txtCardCVV = $_POST['cardCVV'];

// database insert SQL code
$sql1 = "INSERT INTO LOGININFO (id, username, password, accountType) VALUES ('0', '$txtUsername', PASSWORD('$txtPassword'), '$txtAccountType')";
$sql2 = "INSERT INTO CREDITCARD (id, cardholderName, cardNumber, expDate, cvv) VALUES ('0','$txtCardholderName', '$txtCardNumber', '$txtCardExpiry', '$txtCardCVV')";
// insert in database 
$rs = mysqli_query($con, $sql1);

if ($rs) {
	echo "Account Inserted\n";
	if (!isset($_SESSION["account_success"])) {
		$_SESSION["account_success"] = true;
	}
} else {
	echo "account insert failed";
	$_SESSION["account_success"] = false;
}
echo "<br>";

$rs2 = mysqli_query($con, $sql2);
if ($rs2) {
	echo "Credit Card Inserted";
	if (!isset($_SESSION["credit_success"])) {
		$_SESSION["credit_success"] = true;
	}
} else {
	echo "credit card insert failed";
	$_SESSION["credit_success"] = false;
}

header("Location: loginindex.php");
exit();
//$con->close();
