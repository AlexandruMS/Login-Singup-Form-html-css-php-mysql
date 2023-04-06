<?php
mysql_connect("localhost","root","");
mysql_select_db("baza");
session_start();



if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $error = "Username or Password are incorrect";
    $sql="select * from bazadate where nume='".$uname."'AND parola='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
    $_SESSION["username"] = $uname;
    header("location: PrincipalPage.html"); //send user to homepage, for example.
	exit();
}else{
    $_SESSION["error"] = $error;
    header("location: login.php"); //send user back to the login page.
	exit();
}
}
?>