<?php
include('dbconfig.php');
session_start();
unset($_SESSION["account_success"]);

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

//find username in database according to what user entered
$sql = "SELECT username FROM LOGININFO WHERE username = '$txtUsername'";
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($rs);

//compare username entered to the query result
if ($txtUsername == $row["username"]) {
    echo ("username found");
}
