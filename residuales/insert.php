<?php


$conn = new mysqli("localhost", "root", "", "baza");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$uname=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];



$result = mysql_query("SELECT user FROM dates WHERE user ='".$uname."' LIMIT 1");
if(mysql_num_rows($result) == 0) 
{
     
	 
$sql = "INSERT INTO dates (user,email,pass)VALUES ('$uname','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Adaugat cu succes";
	   header("Location: login.php");
}

 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
	 
else {
    
	
	echo "numele exista deja";
	 header("Location: register.php");
	exit();
	
}

$conn->close();
?>
