<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "practice_beginner_with_ahmed";


$r_email = $_POST['email'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$pwd = $_POST['password'];


//creating database connection

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) //should return 1
{
	die("Failed to Connect".mysqli_connect_error());
}else{
	echo "connection is successfull"."</br>";
}



$sql = "INSERT INTO  user_information (email, firstname, lastname, password) 
VALUES ('$r_email', '$fn', '$ln', $pwd)";


/*
$sql = "INSERT INTO `users`(`sno`, `name`, `age`, `salary`) VALUES ('2','ahmed shabbir','23','250000')";

*/


if (mysqli_query($conn, $sql)) {
	echo "Data is inserted successfully into a database";
}else{
	echo "error";
}


mysqli_close($conn);


?>