
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
    	background-color: pink;
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

.pink
{
	background-color: pink;
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
	<!--_______________side nav______________-->


<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="mainpgstaff.php">Main Page</a>
  <a href="editbiodata.php">Bio-Data</a>
    <a href="update.php">update bio-data</a>
  <a href="deletebiorec.php">delete bio-data</a>
  
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
				<tr class="sr"><td class="sr"><input class="form-control" type="text" name="search" placeholder="search student..." required=""></td>
				<td class="sr"><button type="submit" name="submit" class="btnn"><i class="fa fa-search" aria-hidden="true"></i></button></td></tr>
		
			</table>

		</form>
	</div>

	<!--_____________end search______-->

	<button class="but" onclick="window.location.href='editbiodata.php';">CLEAR</button>
	<button class="but" onclick="window.location.href='mainpgstaff.php';">GO BACK</button>
	<h2>student bio-data</h2>
<?php
if(isset($_POST['submit']))
{
	$q=mysqli_query($ds,"SELECT * FROM `biodata` where register_no='$_POST[search]';");

if(mysqli_num_rows($q)==0)
{
	echo"sorry";
}
else
{
	?>
<div class="scroll">
<?php
		

echo '<table border="2" cellspacing="2" cellpadding="2">';
				echo'<tr class="pink">
	            <th><font face="Arial">image</font></th><th><font face="Arial">batch</font></th>					
							<th><font face="Arial">course</font></th>
							<th><font face="Arial">name</font></th>
							<th><font face="Arial">register_no</font></th>
							<th><font face="Arial">father_name</font></th>
							<th><font face="Arial">mother_name</font></th>
							<th><font face="Arial">sex</font></th>
							<th><font face="Arial">class</font></th>
							<th><font face="Arial">DOB</font></th>
							<th><font face="Arial">age</font></th>
							<th><font face="Arial">DOJ</font></th>
							<th><font face="Arial">blood_group</font></th>
							<th><font face="Arial">community</font></th>
							<th><font face="Arial">caste</font></th>
							<th><font face="Arial">nationality</font></th>
							<th><font face="Arial">religion</font></th>
							<th><font face="Arial">mob_no</font></th>
							<th><font face="Arial">resi_no</font></th>
							<th><font face="Arial">email</font></th>
							<th><font face="Arial">adress</font></th>
							<th><font face="Arial">aadharpdf</th>

							</tr>'; 
							while ($row=mysqli_fetch_assoc($q)) 
							{
								echo'<tr>';
								echo'<td>';?><img  src="./img/<?php echo $row['pic']; ?>" height="50">
								<?php
								echo '</td>';
								echo '<td>'.$row['batch'].'</td>'.'<td>'.$row['course'].'</td>'.
								         '<td>'.$row['name'].'</td>'.
								         '<td>'.$row['register_no'].'</td>'.
								         '<td>'.$row['father_name'].'</td>'.
								         '<td>'.$row['mother_name'].'</td>'.
								         '<td>'.$row['sex'].'</td>'.
								         '<td>'.$row['class'].'</td>'.
								         '<td>'.$row['DOB'].'</td>'.
								         '<td>'.$row['age'].'</td>'.
								         '<td>'.$row['DOJ'].'</td>'.
								         '<td>'.$row['blood_group'].'</td>'.
								         '<td>'.$row['community'].'</td>'.
								         '<td>'.$row['caste'].'</td>'.
								         '<td>'.$row['nationality'].'</td>'.
								         '<td>'.$row['religion'].'</td>'.
								         '<td>'.$row['mob_no'].'</td>'.
								         '<td>'.$row['resi_no'].'</td>'.
								         '<td>'.$row['email'].'</td>'.
								         '<td>'.$row['adress'].'</td>';
								         echo '<td>';?><button onclick="location.href='img/<?php echo $row['aadharpdf']; ?>'">view</button><?php
								         echo '</td>';
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

   $res=mysqli_query($ds,"SELECT * FROM `biodata`;");
?>
<div class="scroll">
<?php
   
   echo '<table border="2" cellspacing="2" cellpadding="2">
						<tr class="pink">
						    <th><font face="Arial">image</font></th> <th><font face="Arial">batch</font></th>
							<th><font face="Arial">course</font></th>
							<th><font face="Arial">name</font></th>
							<th><font face="Arial">register_no</font></th>
							<th><font face="Arial">father_name</font></th>
							<th><font face="Arial">mother_name</font></th>
							<th><font face="Arial">sex</font></th>
							<th><font face="Arial">class</font></th>
							<th><font face="Arial">DOB</font></th>
							<th><font face="Arial">age</font></th>
							<th><font face="Arial">DOJ</font></th>
							<th><font face="Arial">blood_group</font></th>
							<th><font face="Arial">community</font></th>
							<th><font face="Arial">caste</font></th>
							<th><font face="Arial">nationality</font></th>
							<th><font face="Arial">religion</font></th>
							<th><font face="Arial">mob_no</font></th>
							<th><font face="Arial">resi_no</font></th>
							<th><font face="Arial">email</font></th>
							<th><font face="Arial">adress</font></th>
							<th><font face="Arial">aadharpdf</th>
							</tr>'; 
							while ($row=mysqli_fetch_assoc($res)) 
							{
								echo'<tr>';
								echo'<td>';?><img  src="./img/<?php echo $row['pic']; ?>" height="50">
								<?php
								echo '</td>';
								echo '<td>'.$row['batch'].'</td>'.'<td>'.$row['course'].'</td>'.
								         '<td>'.$row['name'].'</td>'.
								         '<td>'.$row['register_no'].'</td>'.
								         '<td>'.$row['father_name'].'</td>'.
								         '<td>'.$row['mother_name'].'</td>'.
								         '<td>'.$row['sex'].'</td>'.
								         '<td>'.$row['class'].'</td>'.
								         '<td>'.$row['DOB'].'</td>'.
								         '<td>'.$row['age'].'</td>'.
								         '<td>'.$row['DOJ'].'</td>'.
								         '<td>'.$row['blood_group'].'</td>'.
								         '<td>'.$row['community'].'</td>'.
								         '<td>'.$row['caste'].'</td>'.
								         '<td>'.$row['nationality'].'</td>'.
								         '<td>'.$row['religion'].'</td>'.
								         '<td>'.$row['mob_no'].'</td>'.
								         '<td>'.$row['resi_no'].'</td>'.
								         '<td>'.$row['email'].'</td>'.
								          '<td>'.$row['adress'].'</td>';
								         echo '<td>';?><button onclick="location.href='img/<?php echo $row['aadharpdf']; ?>'">view</button><?php
								         echo '</td>';
								         echo '</tr>';





							}
echo '</table>';
?>
</div>
<?php
}
	


?>

</body>
</html>