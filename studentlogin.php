<?php

include "connect.php";
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			 background-image: url("img/f.jpg");
	 background-size: cover;
	  background-position: center;
	 
	
		}
		 #register_no,#password{
			height: 40px;
	width: 300px;
	margin: 16px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: white;
	font-size: 20px;
	font-family: sans-serif;
		}

		input[type="text"],input[type="password"]{
	display: block;
}

		
		h1{
	font-family: verdana;
	font-size: 35px;
	color: #fbfafa;

}
@media screen and (max-width: 600px)
{
 nav a{
	
	font-size: 6px;

position: relative;
padding: 0px 0px;


}
header{
	display: flex;
flex-wrap: nowrap;
	flex-direction: column;
	font-size: 10px;
}
h3{
	font-size: 10px;


}	

 #register_no,#password{
			height: 30px;
	width: 50%;
	margin: 20px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: white;
	font-size: 10px;
	font-family: sans-serif;
		}
		.child{
	

	border: 2px solid #042e4d;
	height: 400px;
	width: 400px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	backdrop-filter: blur(20px);
	border-radius: 14px;
}
}	
	</style>
	

</head>

<body>

	<header>
		<h3>CS dept</h3>
		<nav class="nav">
		<a href="index.html" class="a"><b>HOME</b></a>
		<a href="adminlogin.php" class="a"><b>ADMIN LOGIN</b></a>
		<a href="stafflogin.php" class="a"><b>STAFFLOGIN</b></a>
		<a href="studentlogin.php" class="a"><b>STUDENT LOGIN</b></a>
		</nav>
	</header>
<form name="login" action="" method="post">
	<div class="main">
	<div class="child">
		<h1>Login</h1>
		<input  type="text" name="register_no" id="register_no" placeholder="register no">
		<input  type="password" name="password" id="password" placeholder="password"><br>
		<input   type="submit" class="btn" name="submit" value="login"><br>
		<div class="register">dont have an account? 
			<a href="registration.php" class="register-list">register</a>

		</div>

	</div>
	</div>	


</form>
<?php

if(isset($_POST['submit']))
{
	$count=0;
	$res=mysqli_query($ds,"SELECT * FROM `account` WHERE register_no='$_POST[register_no]' && password='$_POST[password]';");
	$row=mysqli_fetch_assoc($res);
	$count=mysqli_num_rows($res);

	if($count==0)
	{
		?>
		<script type="text/javascript">
			alert("the register number and password does not match");
		</script>


		<?php
	}
	else
	{

		$_SESSION['login_user'] = $_POST['register_no'];
		$_SESSION['pic']=$row['image'];
		$_SESSION['name']=$row['username'];
		$_SESSION['course']=$row['course'];
		

		?>

		<script type="text/javascript">
			window.location="main.php"
		</script>
		<?php
	}


}


?>

</body>

</html>