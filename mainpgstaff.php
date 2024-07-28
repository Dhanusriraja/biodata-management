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
			background-image: url("img/q.jpg");
	        background-size: cover;
	         
	         
	        
		}

	.i{
	text-decoration: none;
	margin: 15px;
	color: white;
	transition: all .5s;
	font-family: Helvetica;
	font-size: 20px;

}
.i:hover{
	text-decoration: underline;
	text-decoration-thickness: 3px;
}


	h5{
	color: white;
	font-family: verdana;
	font-size: 25px;
	padding-left: 14px;
}

h4{
	color: #fbf302;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;

  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  backdrop-filter: blur(10px);
}


.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
		.img{
	justify-content: center;
	align-items: center;
}
.pro{
	border-radius: 60%;
	
}
.profile{
	border-bottom: 2px solid #0b2b5f;

}	
.msg{
	
	backdrop-filter: blur(30px);
	padding: 50px 0px;
	margin: 20px 60px;
	width: 800px;
		border: 4px solid hotpink;
}
.permsg{
	justify-content: center;
	backdrop-filter: blur(30px);
	padding: 50px 10px;
	margin: 20px 60px;
	width: 800px;
	border: 4px solid hotpink;




}
form{
	padding-left: 200px;
}
.tab{
		background: -webkit-linear-gradient(top, pink,deeppink);
	
	align-items: center;
	border: 4px solid hotpink;
color: black;



	font-size: 24px;


}
.tab tr,td,th
{
	border: 2px solid black;

}
th{
	font-family: verdana;
	font-size: 20px;


}
.wrap
{
	display: flex;
}
/*_____________styling______________*/
label{
			color: white;
			font-size: 22px;
	font-family: verdana;

	
		}
		input::placeholder{
	color: white;
	
}
textarea::placeholder{
	color: white;
	
}
	.form-control{
			height: 20px;
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
.control{
	height: 70px;
		width: 60%;
		background-color: transparent;
		font-size: 20px;
		border: 3px solid grey;

}
.btn{
	background: -webkit-linear-gradient(top, pink,deeppink);
	border: 3px solid black;
	border-radius: 12px;
	width: 120px;
			height: 30px;
	
			font-weight: 700;
			font-size: 12pt;
			color: black;
}
.btn1{
	background: -webkit-linear-gradient(top, pink,hotpink);
	border: 3px solid black;
	border-radius: 12px;
	width: 200px;
			height: 30px;
	
			font-weight: 700;
			font-size: 12pt;
			color: black;
}
h1{
	padding-left: 200px;
}
.bt{
	background: -webkit-linear-gradient(top, white,grey);
	width: 80px;
	height: 30px;
	font-size: 14px;
	border: 2px solid black;
}
/*________________________responsivenesss____________________*/
@media screen and (max-width: 600px)
{
 
h3{
	font-size: 10px;
}	
h5{
	display: none;
}
.i{
font-size: 15px;
font-family: Helvetica;
}
.sidenav a{
	color: ghostwhite;
	font-size: 23px;
	font-family: cursive;
	font-weight: 500;
}
.maranjupoo{
	display: none;
}
body{
background-size: 1000px;

}
textarea::placeholder{
	color: white;
	
}
textarea{
 color: white;
}
}
	</style>
	</head>
<body bgcolor="pink">
	<header>
		<h5>CS dept</h5>
		<?php

	  		  if(isset($_SESSION['login_user']))
	  		  {?>
	  		 
	  		  	<div style="color: #00ecff; font-size: 20px; font-family: cursive; font-weight: 900; text-align: center;">	  		 		<?php

	  		  		echo "USER: ".$_SESSION['login_user'];
	  		  	
	  		  		?>

	  		  	</div>
	  		  	<nav class="nav">
		<a href="index.html" class="i"><b>HOME</b></a>
		<a href="logout.php" class="i"><b>LOGOUT</b></a>
	</nav>

	  		  <?php
	  		}
               
	  		  ?>

	</header>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center>
<img  src="./img/<?php echo $_SESSION['pic']; ?>" class="pro" height="150" width="100" style="border: 4px solid black;">
								<h4><?php echo $_SESSION['name']; ?></h4>
</center>
  <a href="mainpgstaff.php">Main Page</a>
  <a href="editbiodata.php">Bio-Data</a>
  <a href="editeducation.php">Education details</a>
  <a href="alumnidetails.php">Alumni details</a>
  
</div>

<div id="main">
 
<h4>  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;&nbsp;open</span></h4>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<div class="maranjupoo">
<img src="img/sf.gif" height="500px" width="800px" align="right"></div>

</body>

<div id="msg" class="msg" style="display: none;">
<button onclick="window.location.href='mainpgstaff.php';" style="vertical-align: bottom;" class="btn">refresh</button>
<form method="POST"><center>
<?php
$res=mysqli_query($ds,"SELECT * FROM `message` where msgto='$_SESSION[login_user]';");
if(mysqli_num_rows($res)==0)
{
	echo"<h1 >sorry! no messges there</h1>";
}
else
{
echo '<table class="tab"><th>from</th><th>message</th><th>delete</th>';
while($row=mysqli_fetch_assoc($res))
{

echo '<tr>';
echo '<td>'.$row['msgfrom'].'</td>';
echo '<td>'.$row['message'].'</td>';
echo '<td><input type="hidden" name="message" value="'.$row['message'].'">
	<button type="submit" name="delete" value="delete" class="bt">delete</button> ';
echo '</td>';
echo '</tr>';
}
echo '</table>';
}

?>
</center> 
</form>
<?php
if(isset($_POST['delete']))
{
		if(isset($_SESSION['login_user']))
	{
		mysqli_query($ds,"DELETE from `message` where message='$_POST[message]';");
	}
}
?>
 </div>

<button onclick="hideshow()" id="hideshow"  class="btn1"> view message </button>
<div id="permsg" class="permsg" style="display: none;">
<center><h1 style="font-size: 35px; font-family: verdana; vertical-align: top; color: white ; align-items: center;" ><u>send your message</u></h1></center>


<button onclick="window.location.href='mainpgstaff.php';"  align="left" class="btn">refresh</button>
<form name="sendmsg" method="POST">
<div class="wrap">	<label>from:</label>
	<input type="text" name="msgfrom" value="<?php echo $_SESSION['login_user']; ?>" class="form-control"></div><br><div class="wrap">
<label>to:</label>
	<input type="text" name="msgto" class="form-control">
	</div>
	<textarea rows="2" cols="12" name="message" wrap="hard" placeholder="message" class="control"></textarea><br>
	<button type="submit" name="send" value="send" class="btn">send</button>
	</form>
	<?php
if(isset($_POST['send']))
{
	mysqli_query($ds,"INSERT INTO `message` VALUES('$_POST[message]','$_POST[msgfrom]','$_POST[msgto]');");
	echo "message sent";
}
	?>



 </div>
<button onclick="show()" id="show"  class="btn1">  send message </button>




<script type="text/javascript">
	var div = document.getElementById('msg');
	var sh = document.getElementById('show');
	var hs = document.getElementById('hideshow');
		var display = 1;
	function hideshow()
	{
		if(display == 1)
		{
			div.style.display = 'block';
			sh.style.display = 'none';
			display = 0;
		}
		else
		{
			div.style.display = 'none';
			sh.style.display = 'block';
		display = 1;
		}
	}
	var dd = document.getElementById('permsg');
	var display = 1;
	function show()
	{
		if(display == 1)
		{
			dd.style.display = 'block';
			hs.style.display = 'none';
			display = 0;
		}
		else
		{
			dd.style.display = 'none';
			hs.style.display = 'block';
			display = 1;
		}
	}
</script>


</html>