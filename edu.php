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
			background-image: url("img/n4.jpg");
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

		.control{
			height: 30px;
	width: 250px;
	margin: 16px;
	background: transparent;

	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: white;
	font-size: 17px;
	font-family: sans-serif;

		}
		input::placeholder{
	color: white;
	font-family: cursive;
	opacity: .5;
	font-size: 15px;
	
}
.form-control{
			height: 15px;
	width: 250px;
	margin: 10px;
	background: transparent;


	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: white;
	font-size: 20px;
	font-family: sans-serif;

		}
/*____________table__________*/

   table,tr,td{
   	border: 2px solid black;
   	 	vertical-align: middle;
   	 	padding: 10px;
   	 }

   td{
   	background-color: transparent;
   	height: 10px;
   	color: white;
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
    	border-collapse: separate;
    	border-spacing: 2px;
    	margin:20px;
    		backdrop-filter: blur(10px);
    }
    .tab{
    	background-color: #01102f;
}
.btn-sub{
	height: 35px;
	width: 300px;
	margin-left: 14px;
	outline: none;
	color: black;
	background-color: skyblue;
	border-radius: 18px;
	transition: all .5s;
	backdrop-filter: blur(10px);
	font-weight: 900;
	font-size: 17px;
	font-family: verdana;
}
.btn-sub:hover{
	background-color: #041026;
	cursor: pointer;
	color: white;
}




/*________________side navigation___________________*/
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
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
		
	</style>
	
</head>
<body>
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
	<!--___________________side navigation______________________-->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="main.php">Main Page</a>
  <a href="biodata.php">Bio-Data</a>
  <a href="model1.php">view bio-data form</a>
  <a href="sem1.php">semester marksheet</a>
  

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
<form name="login" action="" method="post"><center>
	<input class="form-control" type="text" name="usrname" placeholder="full name" required="">
	<input class="form-control" type="text" name="register_no" placeholder="register number" required="">

<table border="2" align="center">
	<tr class="tab">
		<td>sino</td>
		<td>education</td>
		<td>reg no</td>
		<td>board/university/institution studied</td>
		<td>percentage of marks</td>
		<td>class</td>
		<td>month&year of pass</td>
	</tr>
	<tr>
		<td class="tab">1</td>
		<td class="tab">sslc</td>
		<td><input class="control" type="text" name="sslc_reg_no" placeholder=" SSLC register no" required=""></td>
		<td><input class="control" type="text" name="sslc_board" placeholder=" SSLC board/institution/university " required=""></td>
		<td><input class="control" type="text" name="sslc_percentage" placeholder="SSLC percentage" required=""></td>
		<td><input class="control" type="text" name="sslc_class" placeholder="SSLC class" required=""></td>
		<td><input class="control" type="text" name="sslc_pass" placeholder="SSLC month of pass and year" required=""></td>
	</tr>
	<tr>
		<td class="tab">2</td>
		<td class="tab">hsc</td>
		<td><input class="control" type="text" name="hsc_reg_no" placeholder=" HSC register no" required=""></td>
		<td><input class="control" type="text" name="hsc_board" placeholder=" HSC board/institution/university " required=""></td>
		<td><input class="control" type="text" name="hsc_percentage" placeholder=" HSC percentage" required=""></td>
		<td><input class="control" type="text" name="hsc_class" placeholder="HSC class" required=""></td>
		<td><input class="control" type="text" name="hsc_pass" placeholder="HSC month of pass and year" required=""></td>
	</tr>
	<tr>
		<td class="tab">3</td>
		<td class="tab">ug</td>
		<td><input class="control" type="text" name="ug_reg_no" placeholder="ug register number" ></td>
		<td><input class="control" type="text" name="ug_board" placeholder=" ug board/institution/university "></td>
		<td><input class="control" type="text" name="ug_percentage" placeholder=" UG percentage"></td>
		<td><input class="control" type="text" name="ug_class" placeholder="ug class"></td>
		<td><input class="control" type="text" name="ug_pass" placeholder="ug month of pass and year"></td>
	</tr>
	<tr>
		<td class="tab">4</td>
		<td class="tab">pg</td>
		<td><input class="control" type="text" name="pg_reg_no" placeholder="pg register number"></td>
		<td><input class="control" type="text" name="pg_board" placeholder=" pg board/institution/university " ></td>
		<td><input class="control" type="text" name="pg_percentage" placeholder=" HSC percentage"></td>
		<td><input class="control" type="text" name="pg_class" placeholder="pg class" ></td>
		<td><input class="control" type="text" name="pg_pass" placeholder="pg month of pass and year"></td>
	</tr>
	
</table><br>


					<input class="btn-sub" type="submit" name="submit" value="submit">
</center>


<?php

if(isset($_POST['submit']))
{
    $count=0;
    $sql="SELECT register_no FROM education";
    $res=mysqli_query($ds,$sql);

    while($row=mysqli_fetch_assoc($res))
    {
    	if($row['register_no']==$_POST['register_no'])
    	{
    		$count=$count+1;
    	}
    }
    if($count==0)
    {
        
        mysqli_query($ds,"INSERT INTO `education` VALUES('$_POST[usrname]', '$_POST[register_no]', '$_POST[sslc_reg_no]', '$_POST[sslc_board]', '$_POST[sslc_percentage]', '$_POST[sslc_class]', '$_POST[sslc_pass]', '$_POST[hsc_reg_no]', '$_POST[hsc_board]', '$_POST[hsc_percentage]', '$_POST[hsc_class]', '$_POST[hsc_pass]', '$_POST[ug_reg_no]', '$_POST[ug_board]', '$_POST[ug_percentage]', '$_POST[ug_class]', '$_POST[ug_pass]', '$_POST[pg_reg_no]', '$_POST[pg_board]', '$_POST[pg_percentage]', '$_POST[pg_class]', '$_POST[pg_pass]');");

?>
<script type="text/javascript">
	alert("updation sucessfull..!");
</script>
<?php

}
else
{
?>
	<script type="text/javascript">
	alert("already updated");
</script>
<?php
}
  
  }


	?>


</body>
</html>