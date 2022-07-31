<?php
include ('dbconfig.php');

// get the post records
$txtTitle = $_POST['title'];
$txtPrice = $_POST['price'];
$txtDescription = $_POST['description'];
$filePath = "https://codd.cs.gsu.edu/~eruiz11/Project3/dbimages/" . $_FILES["img"]["name"];

if ($_FILES["img"]["error"] > 0)
  {
     echo "Error: NO CHOSEN FILE <br />";
     echo"INSERT TO DATABASE FAILED";
   }
   else
   {
     move_uploaded_file($_FILES["img"]["tmp_name"], __DIR__ . "/dbimages/" . $_FILES["img"]["name"]);
     echo"SAVED<br>";

	// database insert SQL code
	$sql = "INSERT INTO SELLBIKEINFO(id, title, price, description, image) VALUES ('0', '$txtTitle', '$txtPrice', '$txtDescription', '$filePath')";

	// insert in database 

	if(mysqli_query($con, $sql))
	{
	echo "Stored in: " . "dbimages/" . $_FILES["img"]["name"];
	}
	else
	{
	echo 'File name not stored in database';
	}
}
header('Location: https://codd.cs.gsu.edu/~eruiz11/Project3/buy.php');
?>
