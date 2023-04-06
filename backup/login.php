<?php
session_start();
?>

<html>
<head>
 <title> Login </title>
 <link rel="stylesheet" href="style.css">
 
</head>
<body style="background-image: url('wallpaper.png');">
 <div class="containerlogin">
 <img src="avatar.png"/>
 <form action="check-user-password.php" method="post"> 
 <div >
 <input type="username" name="username" placeholder="Enter the User Name" required /> 
 </div>
 <div >
 <input type="password" name="password" placeholder="Enter the Password" required />
 </div>
 <div class="a">
 <input type="submit"  value="Login" />
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

 <form method="get" action="register.php">
 <div class="create">
 <input type="submit"  value="Create account" />
 </div>
 </form>

 </div>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>