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
$sql = "SELECT * FROM LOGININFO WHERE username = '$txtUsername'";
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($rs);
$row_password = $row["password"];

$sql3 = "SELECT * FROM LOGININFO WHERE password = password('$txtPassword')";
$rs3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_assoc($rs3);
$row3_password = $row3["password"];

//compare username entered to the query result
if ($txtUsername == $row["username"]) {
    echo ("username found");
    echo ($row["username"]);
    if ($row3_password == $row_password) {
        if ($row["accountType"] == "seller") {
            header("Location: sellindex.php");
            exit();
        } else if ($row["accountType"] == "buyer") {
            header("Location: buy.php");
            exit();
        }
    }
    echo ("entered password :" . $row3_password);
    echo ("oldpassword(rowpassword:) :" . $row_password);
} else {
    header("Location: loginindex.php");
    exit();
}
