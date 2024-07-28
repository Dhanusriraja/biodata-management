<?php
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDEX PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			background-image: url("img/n2.jpg");
	        background-size: cover;
	        background-repeat: no-repeat;
	        background-attachment: fixed;




	         
	        
		}
		.btn{
	background: -webkit-linear-gradient(top, #05b1fd, #0a0248);

	border: 2px solid black;
	border-radius: 12px;
	
	width: 100px;
			height: 30px;
			text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 12pt;
			color: yellow;
			

}
.bt{

	background: -webkit-linear-gradient(top, #05b1fd, #0a0248);

	border: 2px solid black;
	border-radius: 12px;
	padding-left: 10px;
	width: 250px;
			height: 30px;
			text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 12pt;
			color: yellow;

			

}


		
nav a{
	position: relative;
	font-size: 1.1em;
	color: black;
	text-decoration: none;
	padding: 6px 20px;
	transition: .5s;
	font-family: verdana;
	font-size: 17px;


}
nav a:hover {
	color: skyblue;


}
nav a span {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: -1;
	border-bottom: 4px solid skyblue;
	border-radius: 15px;
	transform: scale(0) translateY(50px);

}
nav a:hover span{
	transform: scale(1) translateY(0);
	opacity: 1;
}
h3{
	color: black;
}
.form-control{
	width: 250px;
	height: 25px;
	background:  -webkit-linear-gradient(top, #81d9ee, #0ba9c8);
	border: 3px solid black;

}

label
{
	color: black;


}
img{
			height: 80px;
			width: 80px;
			border-radius: 50%;
			object-fit: cover;


			background: black;
			border: 4px solid white;
		}
		.wrap
		{
			display: flex;
			
		}
table{
	border: 4px solid black;
}
tr,td{
	border: 1px solid black;
	border-collapse: collapse;
}
</style>
	
</head>
<body>
	<header>
		<h3>CS dept</h3>
		<nav class="nav">
		<a href="myprofile.php" class="i"><b>GO BACK</b><span></span></a>
		<a href="index.html" class="i"><b>HOME</b><span></span></a>
		<a href="logout.php" class="i"><b>LOGOUT</b><span></span></a>
		
		</nav>
	</header><center>	<h2 style="text-align: center; color: black;">Edit Information</h2>
		<?php
		$sql= "select * from `account` where register_no='$_SESSION[login_user]'";
		$result= mysqli_query($ds,$sql) or die(mysql_error());
		while ($row = mysqli_fetch_assoc($result))
		 {
			$register_no=$row['register_no'];
			$username=$row['username'];
			$password=$row['password'];
			$course=$row['course'];
			$shift=$row['shift'];
			$batch=$row['batch'];
			$image=$row['image'];
		}
		?>
	<div class="profile-info" style="text-align: center;">
		
		<h4 style="color: black;"><?php echo "welcome  ".$_SESSION['name']; ?></h4>
		
	</div><div>
	<form method="POST" enctype="multipart/form-data">
		<!--<img src="img.jpg"><br><br>--><?php echo "<div style='text-align: center'><img src='img/".$_SESSION['pic']."'>
			</div>";?>
		<input type="file" name="file" class="bt"><input type="submit" name="submit2" class="btn" value="upload"></div><br>

		<table><tr><td><label><b>Registser number</b></label></td>
		<td><input class="form-control" type="text" name="register_no" value="<?php echo $register_no; ?>"></td></tr>
		<tr><td><label><b>Username</b></label></td>
		<td><input class="form-control" type="text" name="username" value="<?php echo $username; ?>"></td></tr>
		<tr><td><label><b>Password</b></label></td>
        <td><input class="form-control" type="text" name="password" value="<?php echo $password; ?>"></td></tr>	
        <tr><td><label><b>course</b></label></td>
        	<td><input class="form-control" type="text" name="course" value="<?php echo $course; ?>"></td></tr>
	    <tr> <td><label><b>shift</b></label></td> 
	    	<td><input class="form-control" type="text" name="shift" value="<?php echo $shift; ?>"></td></tr>
		<tr> <td><label><b>batch</b></label></td> 
			<td><input class="form-control" type="text" name="batch" value="<?php echo $batch; ?>"></td></tr>
				
		</table>	<br>

<div style="padding-left: 20px;">
		<button class="btn" type="submit" name="submit">save</button>
		</div>
		<script type="text/javascript">
	const image = document.querySelector("img"),
	input = document.querySelector("input");
	 input.addEventListener("change",() => {
	 	image.src = URL.createObjectURL(input.files[0]);

	 });
</script>
	</form></center>
	<?php
	if(isset($_POST['submit']))
	{
		


		$register_no=$_POST['register_no'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$sql1= "update `account` set image='$pic',register_no='$register_no', username='$username', password='$password' where register_no='$_SESSION[login_user]'; ";
			if(mysqli_query($ds,$sql1))
			{
				?>
				<script type="text/javascript">
					alert("saved sucessfully");
					window.location="myprofile.php";
				</script>
				<?php
			}

	}
	?>
	<?php
if(isset($_POST['submit2']))
{
	move_uploaded_file($_FILES['file']['tmp_name'],"img/".$_FILES['file']['name']);
$pic=$_FILES['file']['name'];
$sql2= "update `account` set image='$pic' where register_no='$_SESSION[login_user]'; ";
			if(mysqli_query($ds,$sql2))
			{
				?>
				<script type="text/javascript">
					alert("saved sucessfully");
					window.location="myprofile.php";
				</script>
				<?php
			}



}
	?>

	</body>
</html>