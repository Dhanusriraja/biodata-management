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
			background-image: url("img/n9.jpg");
	        background-size: cover;
	         
	         
	        
		}
nav a{
	position: relative;
	font-size: 1.1em;
	color: white;
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
	h2{
	font-family: verdana;
	font-size: 25px;
	padding-left: 14px;
	color: white;
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
	color: white;
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
			
<input type="month" name="searchbatch" class="year"><select  name="shift">
                   <option value="shift I">shift I</option>
                   <option value="shift II">shift II </option>
                  
          </select>
           <select  name="course">
                   <option value="UG">UG</option>
                   <option value="PG">PG</option>
                   <option value="PHD">PHD</option>
          </select>
          
			<input type="submit" name="submit" value="search" class="btn"></form>
			
				
	
	<button  onclick="window.location.href='studentlist.php';" class="btn">CLEAR</button>
			

			
<!--
<input class="form-control" type="month" name="searchbatch" required="">
				<button type="submit" name="submit" class="btnn"><i class="fa fa-search" aria-hidden="true"></i>&nbsp<b>batch</b></button>
		<input class="form-control" type="text" name="search" placeholder="search register no....">
				<button type="submit" name="submit1" class="btnn"><i class="fa fa-search" aria-hidden="true"></i></button>-->
		
	


	</div>

	<!--_____________end search______-->



	<h2>student bio-data</h2>
<?php


if(($_POST))
{ ?>
	
			
<?php
	if(isset($_REQUEST['submit']))
	{


$q=mysqli_query($ds,"SELECT * FROM `biodata` where batch='$_POST[searchbatch]' && course='$_POST[course]' && shift='$_POST[shift]';");

if(mysqli_num_rows($q)==0)
{
	echo"sorry";
}
else
{
	
	?>
<div class="scroll">
	<form method="POST" action="studentlist.php">
<input type="text" name="search" placeholder="regno" class="form-control">
<input type="hidden" name="batch" value="<?php echo $_POST['searchbatch'] ?>">
<input type="hidden" name="course" value="<?php echo $_POST['course'] ?>">
<input type="submit" name="submit1" value="submit" class="btn">

</form>
<?php
		

echo '<table border="2" cellspacing="2" cellpadding="2">';
				echo'<tr>
	            <th><font face="Arial">image</font></th><th><font face="Arial">batch</font></th>					
							<th><font face="Arial">course</font></th>
							<th><font face="Arial">name</font></th>
							<th><font face="Arial">register_no</font></th>
							
							<th><font face="Arial">sex</font></th>
							<th><font face="Arial">class</font></th>
							<th><font face="Arial">DOB</font></th>
							
							<th><font face="Arial">DOJ</font></th>
							
							<th><font face="Arial">community</font></th>
						

							</tr>'; 
							while($row=mysqli_fetch_assoc($q))
							{
							
								echo'<tr>';
								echo'<td>';?><img  src="./img/<?php echo $row['pic']; ?>" height="50">
								<?php
								echo '</td>';
								echo '<td>'.$row['batch'].'</td>'.'<td>'.$row['course'].'</td>'.
								         '<td>'.$row['name'].'</td>'.
								         '<td>'.$row['register_no'].'</td>'.
								        
								         '<td>'.$row['sex'].'</td>'.
								         '<td>'.$row['class'].'</td>'.
								         '<td>'.$row['DOB'].'</td>'.
								         
								         '<td>'.$row['DOJ'].'</td>'.
								        
								         '<td>'.$row['community'].'</td> </tr>';
								       



}
							

						
echo '</table>';
?>
</div>
<?php
}


/* if isset submit*/}

if(isset($_REQUEST['submit1']))
{
$qn=mysqli_query($ds,"SELECT * FROM `biodata` where batch='$_POST[batch]' && course='$_POST[course]' && register_no='$_POST[search]';");
if(mysqli_num_rows($qn)==0)
{
	echo"sorry";
	echo $_POST['batch'];
	echo $_POST['course'];
}
else
{

	?>
<div class="scroll">
	
<?php
		

echo '<table border="2" cellspacing="2" cellpadding="2">';
				echo'<tr>
	            <th><font face="Arial">image</font></th><th><font face="Arial">batch</font></th>					
							<th><font face="Arial">course</font></th>
							<th><font face="Arial">name</font></th>
							<th><font face="Arial">register_no</font></th>
							
							<th><font face="Arial">sex</font></th>
							<th><font face="Arial">class</font></th>
							<th><font face="Arial">DOB</font></th>
							
							<th><font face="Arial">DOJ</font></th>
							
							<th><font face="Arial">community</font></th>
							

							</tr>'; 
								while($res=mysqli_fetch_assoc($qn))
	{
							
								echo'<tr>';
								echo'<td>';?><img  src="./img/<?php echo $res['pic']; ?>" height="50">
								<?php
								echo '</td>';
								echo '<td>'.$res['batch'].'</td>'.'<td>'.$res['course'].'</td>'.
								         '<td>'.$res['name'].'</td>'.
								         '<td>'.$res['register_no'].'</td>'.
								         '<td>'.$res['sex'].'</td>'.
								         '<td>'.$res['class'].'</td>'.
								         '<td>'.$res['DOB'].'</td>'.
								         
								         '<td>'.$res['DOJ'].'</td>'.
								        
								         '<td>'.$res['community'].'</td> </tr>';
								       


								        




							
}
						
echo '</table>';
?>
</div>
<?php
}

}
/* if post*/}

	
?>


	
</body>
</html>