<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','phpauth') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>
<!DOCTYPE html>
<head>
<meta charset="ISO-8859-1">
<title>AINU</title>
<link href="loginluv.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="main_div">

	  	<h4><font size="15" color="#804000"></font></h4>	
	  	
	  	</div>
<div class="contenido">		

<div class="login">
<ul class="backgroundslider">
	<li></li>
	<li></li>
	<li></li>
	</ul>
<form action="" method="POST">

<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/ainu.png" class="brand_logo" alt="Logo" >
					</div>
				</div>
				<br/>
				<br/>
				
				<h1>LOGIN</h1>
				<center><p style="color:black">Please sign in to get access</P></center>
				<br/>
				<br/>
				
<center><input type="username" name="user_name" id="username" placeholder="USER NAME" required></center><br>
<center><input type="password" name="password" id="password" placeholder="PASSWORD" required></center><br>
<center><input type="submit" name="submit" id="submit"></center><br><br></br>
<!-- <a href="regat1.html"><font size="4" color="#F8F8FF">New User Register</a> -->	<br>

<div class="container" style="margin-top:150px;text-align:center;font-style:italic" color="#8000ff">
<p><font size="">ABDUL RAZAK</font></p>
</div>

</form>

</div>

</div>
	
</body>
</html>