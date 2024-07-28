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
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
			body{
			background-image: url("img/l.jpg");
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
    	background-color: dimgrey;
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
	width: 200px;
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
    	background-color: gray;
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



    
	</style>
	
</head>
<body bgcolor="skyblue">
	
	<header>
		<h3>CS dept</h3>
		<?php

	  		  if(isset($_SESSION['login_user']))
	  		  {?>
	  		 
	  		  	<div style="color: blue; font-size: 20px; font-family: verdana; font-weight: 900; text-align: center;">	  		 		<?php

	  		  		echo "USER: ".$_SESSION['login_user'];
	  		  	
	  		  		?>

	  		  	</div>
	  		  	<nav class="nav">
		<a href="index.html" class="i"><b>HOME</b></a>
		<a href="logout.php" class="i"> &nbsp&nbsp<b>LOGOUT</b></a>
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
	<!--_________________________side navigation-->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="mainpgstaff.php">Main Page</a>
  <a href="editbiodata.php">educational detail</a>
  <a href="deleteedurec.php">delete record</a>
  
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


	<!--____________search bar_______________-->
	<div class="srch">
		<form name="searchbar" method="POST">
			
	<table class="sr" align="right">
				<tr class="sr"><td class="sr"><input class="form-control" type="text" name="delete" placeholder="delete student..." required></td>
				<td class="sr"><button type="submit" name="submit1" class="but">DELETE&nbsp<i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>
		
			</table>
			

		</form>
	</div>

	<!--_____________end search______-->

<button class="but" onclick="window.location.href='mainpgstaff.php';">GO BACK</button>
	<button class="but" onclick="window.location.href='deleteedurec.php';">Refresh</button>
<h2>student education details</h2>
	<div class="scroll">
<?php
if(isset($_POST['submit']))
{
	$q=mysqli_query($ds,"SELECT * FROM `education` where register_no='$_POST[search]';");

if(mysqli_num_rows($q)==0)
{
	echo"sorry";
}
else
{
echo '<table border="2" cellspacing="2" cellpadding="2">
						<tr>
							<th><font face="Arial">usrname</font></th>
							<th><font face="Arial">register_no</font></th>
							<th><font face="Arial">sslc_reg_no</font></th>
							<th><font face="Arial">sslc_board</font></th>
							<th><font face="Arial">sslc_percentage</font></th>
							<th><font face="Arial">sslc_class</font></th>
							<th><font face="Arial">sslc_pass</font></th>
							<th><font face="Arial">hsc_reg_no</font></th>
							<th><font face="Arial">hsc_board</font></th>
							<th><font face="Arial">hsc_percentage</font></th>
							<th><font face="Arial">hsc_class</font></th>
							<th><font face="Arial">hsc_pass</font></th>
							<th><font face="Arial">ug_reg_no</font></th>
							<th><font face="Arial">ug_board<ug_board/font></th>
							<th><font face="Arial">ug_percentage</font></th>
							<th><font face="Arial">ug_class</font></th>
							<th><font face="Arial">ug_pass</font></th>
							<th><font face="Arial">pg_reg_no</font></th>
							<th><font face="Arial">pg_board</font></th>
							<th><font face="Arial">pg_percentage</font></th>
							<th><font face="Arial">pg_class</font></th>
							<th><font face="Arial">pg_pass</font></th>
							</tr>'; 
							while ($row=mysqli_fetch_assoc($q)) 
							{
								echo '<tr><td>'.$row['usrname'].'</td>'.
								         '<td>'.$row['register_no'].'</td>'.
								         '<td>'.$row['sslc_reg_no'].'</td>'.
								         '<td>'.$row['sslc_board'].'</td>'.
								         '<td>'.$row['sslc_class'].'</td>'.
								         '<td>'.$row['sslc_pass'].'</td>'.
								         '<td>'.$row['hsc_reg_no'].'</td>'.
								         '<td>'.$row['hsc_board'].'</td>'.
								         '<td>'.$row['hsc_percentage'].'</td>'.
								         '<td>'.$row['hsc_class'].'</td>'.
								         '<td>'.$row['hsc_pass'].'</td>'.
								         '<td>'.$row['ug_reg_no'].'</td>'.
								         '<td>'.$row['ug_board'].'</td>'.
								         '<td>'.$row['ug_percentage'].'</td>'.
								         '<td>'.$row['ug_class'].'</td>'.
								         '<td>'.$row['ug_pass'].'</td>'.
								         '<td>'.$row['pg_reg_no'].'</td>'.
								         '<td>'.$row['pg_board'].'</td>'.
								         '<td>'.$row['pg_percentage'].'</td>'.
								         '<td>'.$row['pg_class'].'</td>'.
								         '<td>'.$row['pg_pass'].'</td></tr>';




							}
echo '</table>';
}
?>
</div>
<?php
}
else
{

   $res=mysqli_query($ds,"SELECT * FROM `education`;");
   echo '<table border="2" cellspacing="2" cellpadding="2">
						<tr>
							<th><font face="Arial">usrname</font></th>
							<th><font face="Arial">register_no</font></th>
							<th><font face="Arial">sslc_reg_no</font></th>
							<th><font face="Arial">sslc_board</font></th>
							<th><font face="Arial">sslc_percentage</font></th>
							<th><font face="Arial">sslc_class</font></th>
							<th><font face="Arial">sslc_pass</font></th>
							<th><font face="Arial">hsc_reg_no</font></th>
							<th><font face="Arial">hsc_board</font></th>
							<th><font face="Arial">hsc_percentage</font></th>
							<th><font face="Arial">hsc_class</font></th>
							<th><font face="Arial">hsc_pass</font></th>
							<th><font face="Arial">ug_reg_no</font></th>
							<th><font face="Arial">ug_board<ug_board/font></th>
							<th><font face="Arial">ug_percentage</font></th>
							<th><font face="Arial">ug_class</font></th>
							<th><font face="Arial">ug_pass</font></th>
							<th><font face="Arial">pg_reg_no</font></th>
							<th><font face="Arial">pg_board</font></th>
							<th><font face="Arial">pg_percentage</font></th>
							<th><font face="Arial">pg_class</font></th>
							<th><font face="Arial">pg_pass</font></th>
							</tr>'; 
							while ($row=mysqli_fetch_assoc($res)) 
							{
								echo '<tr><td>'.$row['usrname'].'</td>'.
								         '<td>'.$row['register_no'].'</td>'.
								         '<td>'.$row['sslc_reg_no'].'</td>'.
								         '<td>'.$row['sslc_board'].'</td>'.
								         '<td>'.$row['sslc_class'].'</td>'.
								         '<td>'.$row['sslc_pass'].'</td>'.
								         '<td>'.$row['hsc_reg_no'].'</td>'.
								         '<td>'.$row['hsc_board'].'</td>'.
								         '<td>'.$row['hsc_percentage'].'</td>'.
								         '<td>'.$row['hsc_class'].'</td>'.
								         '<td>'.$row['hsc_pass'].'</td>'.
								         '<td>'.$row['ug_reg_no'].'</td>'.
								         '<td>'.$row['ug_board'].'</td>'.
								         '<td>'.$row['ug_percentage'].'</td>'.
								         '<td>'.$row['ug_class'].'</td>'.
								         '<td>'.$row['ug_pass'].'</td>'.
								         '<td>'.$row['pg_reg_no'].'</td>'.
								         '<td>'.$row['pg_board'].'</td>'.
								         '<td>'.$row['pg_percentage'].'</td>'.
								         '<td>'.$row['pg_class'].'</td>'.
								         '<td>'.$row['pg_pass'].'</td></tr>';




							}
echo '</table>';
}

if(isset($_POST['submit1']))
{
	if(isset($_SESSION['login_user']))
	{
		mysqli_query($ds,"DELETE from `education` where register_no='$_POST[delete]';");
		?>
<script type="text/javascript">
	alert("deleted sucessfully!...");
</script>
<?php

	}
	
	}
?>

</body>
</html>