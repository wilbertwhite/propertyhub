<?php
include('dbconfig.php');
session_start();
unset($_SESSION["account_success"]);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

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
