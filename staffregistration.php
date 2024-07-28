<?php
	include "connect.php";

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
			 background-image: url("img/r.jpg");
	      background-size: cover;
	       background-repeat: no-repeat;
	       background-position: center;
	   }
	   h1{
	   	font-family: verdana;
	font-size: 25px;
	padding-left: 14px;
	color: #00103e;
	   }
	   select{
	width: 50%;
	height: 30px;
	font-size: 20px;
	font-family: verdana;
	background-color: #1a8abe;
	border-radius: 5px;
	border: 3px solid black;
	box-shadow: 4px 4px lightblue;
	font-weight: 750;


}
option{
	width: 50%;
	height: 30px;
	font-size: 20px;
	font-family: verdana;
 
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
		.child{
	
	margin: auto;
	border: 2px solid #042e4d;
	height: 450px;
	width: 400px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	backdrop-filter: blur(20px);
	border-radius: 14px;
}
/*___________________profile image____________________*/
img{
			height: 80px;
			width: 80px;
			border-radius: 50%;
			object-fit: cover;
			background: white;
			border: 4px solid white;
		}
		.custom-file-input{
			color: transparent;
		}
		.custom-file-input::-webkit-file-upload-button{
			visibility: hidden;
		}
		.custom-file-input::before{
			content: 'select your profile pic';
			color: #ffeb3b;
			display: inline-block;
			background: -webkit-linear-gradient(top, #82949c, #0c1a25);
			border: 2px solid black;
			border-radius: 12px;
			padding: 5px 8px;
			outline: none;
			white-space: nowrap;
			-webkit-user-select: none;
			cursor: pointer;
			text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 12pt;
		}
		.custom-file-input:hover::before{
			border-color: black;
		}
		.custom-file-input:active{
			outline: 0;
		}
		.custom-file-input:active::before{
			background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
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
h3,h1{
	font-size: 10px;
	color: white;

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
		<form name="Registration" action="" method="post">
				<div class="main">
	<div class="child">
		<h1>REGISTRATION FORM</h1>

		<img src="img.jpg"><br>
		<center>
	<input type="file" name="image" class="custom-file-input" style="padding-left: 55px;"></center><br>
	<select  name="role">
                   <option value="admin">admin</option>
                   <option value="staff">staff</option>
                  
          </select>
				<input class="form-control" type="text" name="username" placeholder="username" id="register_no" required=""><br>
		<input class="form-control" type="password" name="password" placeholder="password" id="password" required="">
		
		<input class="btn" type="submit" name="submit" value="SignUp"><br>



<script type="text/javascript">
	const image = document.querySelector("img"),
	input = document.querySelector("input");
	 input.addEventListener("change",() => {
	 	image.src = URL.createObjectURL(input.files[0]);

	 });
</script>


</div>
</div>
</form>


<?php

if(isset($_POST['submit']))
{
    $count=0;
    $sql="SELECT username FROM staffaccounts";
    $res=mysqli_query($ds,$sql);

    while($row=mysqli_fetch_assoc($res))
    {
    	if($row['username']==$_POST['username'])
    	{
    		$count=$count+1;
    	}
    }
    if($count==0)
    {
        
        mysqli_query($ds,"INSERT INTO `staffaccounts` VALUES('$_POST[image]', '$_POST[password]', '$_POST[role]','$_POST[username]');");

?>
<script type="text/javascript">
	alert("Registration sucessfull..!");
</script>
<?php

}
else
{
?>
	<script type="text/javascript">
	alert("already exists");
</script>
<?php
}
  
  }


	?>

</body>
</html>