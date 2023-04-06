<?php
$conn = new mysqli("localhost", "root", "", "baza");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$uname=$_POST['username'];
$password=$_POST['password'];
$grupa=$_POST['grupa'];
$error = "Username already exist";

if($uname="select * from bazadate where nume='".$uname."'"){
	
	$_SESSION["error"] = $error;
	 header("Location: register.php");
	exit();
}
else{
$sql = "INSERT INTO bazadate (nume,grupa,parola)
VALUES ('$uname','$grupa','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Adaugat cu succes";
	   header("Location: login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
