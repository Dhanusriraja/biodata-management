<?php
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>staff main page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style type="text/css">
		body{
			background-image: url("img/n1.jpg");
	        background-size: cover;
	         
	         
	        
		}
nav a{
	position: relative;
	font-size: 1.1em;
	color: black;
	text-decoration: none;
	padding: 6px 20px;
	transition: .5s;
	font-family: verdana;


}
nav a:hover {
	color: #brown;

}
nav a span {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: -1;
	border-bottom: 3px solid brown;
	border-radius: 15px;
	transform: scale(0) translateY(50px);

}
nav a:hover span{
	transform: scale(1) translateY(0);
	opacity: 1;
}

			header{
	display: flex;

	align-items: center;
	justify-content: space-between;
	height: 60px;
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
         width: 50%;
    	border-collapse: collapse;
    	border-spacing: 2px;
    	margin:10px;
    		backdrop-filter: blur(10px);
    }
     tr:hover {
    	background-color: skyblue;
    }
    .but{
    	height: 35px;
	width: 200px;
	margin-left: 14px;
	outline: none;
	color: green;
	background-color: palegreen;
	border-radius: 10px;
	transition: all .5s;
	backdrop-filter: blur(10px);
	font-weight: 900;
	font-size: 17px;
	font-family: verdana;
    }
    .but:hover{
	background-color: navajowhite;
	cursor: pointer;
	color: black;
}
/*__________form controls___________*/
		.form-control{
			height: 15px;
	width: 120px;
	margin: 16px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: black;
	font-size: 20px;
	font-family: sans-serif;

		}

	.login
	{
		align-items: center;
	}
	input::placeholder{
	color: black;
	
}
.srch{
	padding-left: 1000px;

}
.btnn{
	height: 33px;
	width: 70px;
	margin-left: 14px;
	background-color: palegreen;
	border-radius: 10px;
	
	
}
table .sr{
	
	margin: none;
	outline: none;
	border: none;


}
tr .sr{

	border: none;
	margin: none;
	outline: none;
	height: 20px;
}
.sr tr:hover {
    	background-color: greenyellow;
    }
     /*______________________side navigation________________*/
    

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
  color: black;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover {
  color: blueviolet;
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
	h2{
	font-family: verdana;
	font-size: 25px;
	padding-left: 14px;
	color: black;
}
select{
	width: 20%;
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
.year{height: 18px;
	width: 150px;
	margin: 16px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: black;
	font-size: 20px;
	font-family: sans-serif;

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
    
	</style>
	
</head>
<body bgcolor="skyblue">
	
	<header>
		<h2>CS dept</h2>
		<?php

	  		  if(isset($_SESSION['login_user']))
	  		  {?>
	  		 
	  		  	<div style="color: blue; font-size: 20px; font-family: verdana; font-weight: 900; text-align: center;">	  		 		<?php

	  		  		echo "USER: ".$_SESSION['login_user'];
	  		  	
	  		  		?>

	  		  	</div>
	  		  	<nav>
		<a href="index.html" class="i"><b>HOME</b><span></span></a>
		<a href="logout.php" class="i"> &nbsp&nbsp<b>LOGOUT</b><span></span></a>
	</nav>

	  		  <?php
	  		}
               
	  		  ?>

		<!--<nav class="nav">
		<a href="index.html" class="a"><b>HOME</b></a>
		<a href="" class="a"><b>ADMIN LOGIN</b></a>
		<a href="" class="a"><b>STAFFLOGIN</b></a>
		<a href="studentlogin.php" class="a"><b>STUDENT LOGIN</b></a>
		</nav>-->


	</header>
	<!--_______________side nav______________-->


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="staffpage.php">Main page</a>
  <a href="studentlist.php">students list</a>
  <a href="marklist.php">Mark details</a>
  
  
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



	<!--____________search bar for batch_______________-->
	<div class="srch">
		<form name="searchbar" method="POST">
<input type="month" name="batch" class="year">
<input type="text" name="sub_code" placeholder="subject code" required="" class="form-control">
<select  name="sem">
                   <option value="sem1">sem 1</option>
                   <option value="sem2">sem 2 </option>
                   <option value="sem3">sem 3</option>
                   <option value="sem4">sem 4 </option>
                   <option value="sem5">sem 5</option>
                   <option value="sem6">sem 6 </option>
                  
          </select>
           
          
			<input type="submit" name="submit" value="search" class="btn"></form>

	<button  onclick="window.location.href='marklist.php';" class="btn">CLEAR</button>
	
	</div>

	<!--_____________end search______-->
<center>
<?php

if(isset($_REQUEST['submit']))
{
$sem=$_POST['sem'];
$qn=mysqli_query($ds,"SELECT * FROM $sem where batch='$_POST[batch]' && sub_code='$_POST[sub_code]';");
if(mysqli_num_rows($qn)==0)
{
	echo"sorry";
}
else
{
	

	?>
<div class="scroll">
<?php


echo '<table border="2" cellspacing="2" cellpadding="2">';
				echo'<tr>
	            <th><font face="Arial">register_no</font></th>
							<th><font face="Arial">batch</font></th>
							<th><font face="Arial">subject code</font></th>
							<th><font face="Arial">internal mark</font></th>
							<th><font face="Arial">external mark</font></th>
							<th><font face="Arial">total mark</font></th>
							<th><font face="Arial">month of pass</font></th>
							</tr>';
							 while($res=mysqli_fetch_assoc($qn))
	{

								echo'<tr>';
								echo '<td>'.$res['register_no'].'</td>'.'<td>'.$res['batch'].'</td>'.
								         '<td>'.$res['sub_code'].'</td>'.
								         '<td>'.$res['inter'].'</td>'.
								         '<td>'.$res['exter'].'</td>'.
								         '<td>'.$res['tot'].'</td>'.
								         '<td>'.$res['mon_pass'].'</td> </tr>';
									         }
								       
echo '</table>';

?>
</div>
<?php
}


}
?>
</center>
</body>
</html>