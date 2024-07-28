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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			background-image: url("img/q.jpg");
	        background-size: cover;
	        background-repeat: no-repeat;
	        background-attachment: fixed;

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
	color: white;
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
	color: white;
}
table,tr,td{
   	border: 1px solid black;
   	 	vertical-align: middle;
   	 	padding: 10px;

   	 }

   td{
   	background-color: transparent;
   	height: 10px;
   	color: black;
   	font-weight: 900;
   	text-align: center;
   }
   tr{
   	height: 20px;

    	font-family: verdana;
    	font-weight: bold;
    }
    
 table{
         width: 100%;
    	border-collapse: collapse;
    	border-spacing: 2px;
    	margin:10px;
    		backdrop-filter: blur(10px);
    		background-color: hotpink;
    }
     tr:hover {
    	background-color: pink;
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
.scroll
    	{
    		overflow: auto;
    		white-space: nowrap;
    		width: 100%;
    		height: 450px;
    		overflow: auto;
    		backdrop-filter: blur(10px);
    		

    	}
    	div::-webkit-scrollbar
      {
    		display: none;
    	}
    	.warp{
	padding-left: 1000px;
	display: flex;
}
.form-control{
			height: 20px;
	width: 200px;
	margin: 16px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: white;
	font-size: 20px;
	font-family: sans-serif;

		}

	
	input::placeholder{
	color: white;
	
}

.btnn{
	height: 33px;
	width: 70px;
	margin-left: 14px;
	background-color: palegreen;
	border-radius: 10px;
	
	
}
h5{
	color: white;
	font-family: verdana;
	font-size: 25px;
	padding-left: 14px;
}

</style>
	
</head>
<body>
	<header>
<h5>CS dept</h5>
		<?php

	  		  if(isset($_SESSION['login_user']))
	  		  {?>
	  		 
	  		  	<div style="color: #00ecff; font-size: 20px; font-family: cursive; font-weight: 900; text-align: center;">	
	  		  		 		<?php

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
  <a href="mainpgstaff.php">Main Page</a>
  <a href="editbiodata.php">Bio-Data</a>
  <a href="editeducation.php">Education details</a>
  <a href="alumnidetails.php">Alumni details</a>
  

  
</div>

<div id="main">
 
<h4>  <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav() ">&#9776;&nbsp;open</span></h4>
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
	<!--____________search bar_______________-->
	
		<form name="searchbar" method="POST">
<div class="warp">
				<input class="form-control" type="month" name="batch" required="">
				<button type="submit" name="submit" class="btnn"><i class="fa fa-search" aria-hidden="true"></i></button>
				<button onclick="window.location.href='alumnidetails.php';" style="vertical-align: bottom;" class="bt">refresh</button>
		
</div>
		</form>
	

	<!--_____________end search______-->


	<h2 style="color: white;">ALUMNI DETAILS</h2>
	<center>
<?php
if(isset($_POST['submit']))
{
	$q=mysqli_query($ds,"SELECT * FROM `alumni` where batch='$_POST[batch]';");

if(mysqli_num_rows($q)==0)
{
	echo"sorry no data";
}
else
{
	?>
<div class="scroll">


<?php
		

echo '<table border="2" cellspacing="2" cellpadding="2">';
				echo'<tr>
	            <th><font face="Arial">name</font></th><th><font face="Arial">register_no</font></th>					
							<th><font face="Arial">batch</font></th>
							<th><font face="Arial">course</font></th>
							<th><font face="Arial">shift</font></th>
							
							<th><font face="Arial">work or study</font></th>
							<th><font face="Arial">company or collage name</th>
			

							</tr>'; 
							while ($row=mysqli_fetch_assoc($q)) 
							{
								echo'<tr>';
								
								echo '<td>'.$row['name'].'</td>'.'<td>'.$row['register_no'].'</td>'.
								         '<td>'.$row['batch'].'</td>'.
								         '<td>'.$row['course'].'</td>'.
								         '<td>'.$row['shift'].'</td>'.
								        
								         '<td>'.$row['work_study'].'</td>'.
								         '<td>'.$row['comp_clg'].'</td>';
								        
								       
								         echo '</tr>';




							}

						
echo '</table>';

?>

</div>

<?php
}

}
else
{

   $res=mysqli_query($ds,"SELECT * FROM `alumni`;");
?>
<div class="scroll">
	<div style="display: flex;">
	<form method="POST">
		<input type="text" name="register_no" class="form-control" placeholder="register number">
		<button type="submit" name="delete" value="delete" class="bt">delete</button> </div>
<?php

   
   echo '<table border="2" cellspacing="2" cellpadding="2">
						<tr>
						     <th><font face="Arial">name</font></th><th><font face="Arial">register_no</font></th>					
							<th><font face="Arial">batch</font></th>
							<th><font face="Arial">course</font></th>
							<th><font face="Arial">shift</font></th>
							
							<th><font face="Arial">work or study</font></th>
							<th><font face="Arial">company or collage name</th>

							</tr>'; 
							while ($row=mysqli_fetch_assoc($res)) 
							{
								echo'<tr>';
								echo '<td>'.$row['name'].'</td>'.'<td>'.$row['register_no'].'</td>'.
								         '<td>'.$row['batch'].'</td>'.
								         '<td>'.$row['course'].'</td>'.
								         '<td>'.$row['shift'].'</td>'.
								        
								         '<td>'.$row['work_study'].'</td>'.
								         '<td>'.$row['comp_clg'].'</td>';
								         echo '</tr>';





							}
echo '</table>';
?>
</form>
</div>
<?php
}
	


?>
<?php
if(isset($_POST['delete']))
{
		if(isset($_SESSION['login_user']))
	{
		mysqli_query($ds,"DELETE from `alumni` where register_no='$_POST[register_no]';");
	}
}
?>
</center>


	</body>
	</html>