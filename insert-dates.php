<?php
$conn = new mysqli("localhost", "root", "", "baza");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$uname=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$error = "Username already exist";

 $test="select * from dates where user='".$uname."limit 1";
    
    $result=mysql_query($test);
    
    if(mysql_num_rows($result)==1){
	
	$_SESSION["error"] = $error;
	 header("Location: register.php");
	exit();
}
else{
$sql = "INSERT INTO dates (user,email,pass)
VALUES ('$uname','$email','$password')";


if ($conn->query($sql) === TRUE) {
    echo "Adaugat cu succes";
	   header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>