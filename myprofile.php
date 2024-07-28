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
			background-image: url("img/n6.jpg");
	        background-size: cover;
	        background-repeat: no-repeat;
	        background-attachment: fixed;




	         
	        
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
	color: white;

}
nav a span {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: -1;
	border-bottom: 4px solid white;
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
.bt{
		background: -webkit-linear-gradient(top, #05b1fd, #0a0248);

	border: 2px solid black;
	border-radius: 12px;
	
	width: 150px;
			height: 30px;
}
			
			
.btt{
	text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 12pt;
			color: yellow;
			

}
.chi{
	width: 500px;
	margin: 0 auto;
	height: 550px;
	color: black;

}
.img{
	border-radius: 50%;
	height: 100px;
	width: 100px;
}
.table{
	border: 2px solid black;
	align-items: left;
	width: 500px;
	height: 120px;
}
tr,td{
	border: 2px solid black;

}


		
	</style>
	
</head>
<body>
	<header>
		<h3>CS dept</h3>
		<nav class="nav">
		<a href="main.php" class="i"><b>GO BACK</b><span></span></a>
		<a href="index.html" class="i"><b>HOME</b><span></span></a>
		<a href="logout.php" class="i"><b>LOGOUT</b><span></span></a>
		
		</nav>
	</header>
<div class="container">
	<form method="POST">
		<br><br>
		<button class="bt" style="float: left;" name="submit1"><a href="editprofile.php" class="btt">Edit Profile</a></button>
		</form><br><br>
		<div class="chi">
			<?php
			$q=mysqli_query($ds,"select * from `account` where register_no='$_SESSION[login_user]';");

			?>
			<h2 style="text-align: center;">My profile</h2>
			<?php
			$row=mysqli_fetch_assoc($q);
			
			echo "<div style='text-align: center'><img class='img' src='img/".$_SESSION['pic']."'>
			</div>";
			?>
			<div style="text-align: center;"><b>
				<h4><?php echo "welcome ".$_SESSION['name']; ?></b>
				</h4></div>
				<?php
				echo "<b>";

				echo '<table class="table">';
				echo '<tr>';
				echo '<td>';
				echo '<b>REGISTER NO: </b>';
				echo '</td>';

				echo '<td>';
                 echo $row['register_no'];
				echo '</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>';
				echo '<b>USERNAME:  </b>';
				echo '</td>';
				echo '<td>';
				echo $row['username'];
				echo '</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>';
				echo '<b>PASSWORD: </b>';
				echo '</td>';
				echo '<td>';
				echo $row['password'];
				echo '</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>';
				echo '<b>COURSE: </b>';
				echo '</td>';
				echo '<td>';
				echo $row['course'];
				echo '</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>';
				echo '<b>SHIFT: </b>';
				echo '</td>';
				echo '<td>';
				echo $row['shift'];
				echo '</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<td>';
				echo '<b>BATCH: </b>';
				echo '</td>';
				echo '<td>';
				echo $row['batch'];
				echo '</td>';
				echo '</tr>';

				echo '</table>';
				echo "</b>";

				?>
		</div>
		
	
	
</div>
</body>
</html>