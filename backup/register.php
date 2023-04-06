<?php
session_start();
?>

<html>
<head>
 <title> Register </title>
 <link rel="stylesheet"  href="style.css" >
 
</head>

 <body style="background-image: url('wallpaper.png');">
 <div class="containerregister">
 <img src="avatar.png"/>
 <form action="insert-dates.php" method="post"> 
 <div >
 <input  type="username" name="username" placeholder="Enter the User Name" required /> 
 </div>
 <div>
 <input type="username" name="grupa" placeholder="Introduceti grupa" required />
 </div>
 <div>
 
 <input type="password" name="password"  placeholder="Enter the Password" required />
 </div>
 
    <div class="a">
    <input type="submit"  value="Register" />
	</div>
	
	<div class="text">
 <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?> 
				</div>
 </form>

 </div>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>