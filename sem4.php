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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">
		body{
			background-image: url("img/n3.jpg");
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
			height: 20px;
	width: 150px;
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
	opacity: .6;
	font-size: 15px;
	
}
.form-control{
			height: 15px;
	width: 100px;
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
    	border-collapse: collapse;
    	border-spacing: 2px;
    	margin:20px;
    		backdrop-filter: blur(10px);
    }
    .tab{
    	background-color: #003f58;
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
		.btn{

height: 35px;
	width: 100px;
	margin-left: 14px;
	outline: none;
	color: white;
	background-color: #041026;
	border-radius: 15px;



}
.btn:hover{
	background-color: skyblue;
	cursor: pointer;
	color: black;
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
<center><h5> SEM 4 MARKLIST</h5></center>
<form name="login" action="" method="post"><center>
	
	<input class="control" type="text" name="register_no" placeholder="register number" required="">
<label>batch:</label><input type="month" name="batch" class="year" placeholder="batch">


<table border="2" align="center">

	<tr>
		<td class="tab">s.no</td>
		<td class="tab">sub code</td>
		<td class="tab">internal</td>
		<td class="tab">external</td>
		<td class="tab">total</td>
		<td class="tab">month of pass</td>
	</tr>
	<tr>
		<td class="tab">1</td>
		<td><input class="form-control" type="text" name="sub_code" placeholder="sub_code" required=""></td>
		<td><input class="form-control" type="text" name="inter" placeholder="internal" required=""></td>
		<td><input class="form-control" type="text" name="exter" placeholder="external" required=""></td>
		<td><input class="form-control" type="text" name="tot" placeholder="total" required=""></td>
		<td><input class="form-control" type="text" name="mon_pass" placeholder="month of pass" required=""></td>
	</tr>
	<tr>
		<td class="tab">2</td>
		<td><input class="form-control" type="text" name="sub_code1" placeholder="sub_code" required=""></td>
		<td><input class="form-control" type="text" name="inter1" placeholder="internal" required=""></td>
		<td><input class="form-control" type="text" name="exter1" placeholder="external" required=""></td>
		<td><input class="form-control" type="text" name="tot1" placeholder="total" required=""></td>
		<td><input class="form-control" type="text" name="mon_pass1" placeholder="month of pass" required=""></td>
	</tr>
<tr>
		<td class="tab">3</td>
		<td><input class="form-control" type="text" name="sub_code2" placeholder="sub_code" required=""></td>
		<td><input class="form-control" type="text" name="inter2" placeholder="internal" required=""></td>
		<td><input class="form-control" type="text" name="exter2" placeholder="external" required=""></td>
		<td><input class="form-control" type="text" name="tot2" placeholder="total" required=""></td>
		<td><input class="form-control" type="text" name="mon_pass2" placeholder="month of pass" required=""></td>
	</tr>
	<tr>
		<td class="tab">4</td>
		<td><input class="form-control" type="text" name="sub_code3" placeholder="sub_code" required=""></td>
		<td><input class="form-control" type="text" name="inter3" placeholder="internal" required=""></td>
		<td><input class="form-control" type="text" name="exter3" placeholder="external" required=""></td>
		<td><input class="form-control" type="text" name="tot3" placeholder="total" required=""></td>
		<td><input class="form-control" type="text" name="mon_pass3" placeholder="month of pass" required=""></td>
	</tr>
	<tr>
		<td class="tab">5</td>
		<td><input class="form-control" type="text" name="sub_code4" placeholder="sub_code" required=""></td>
		<td><input class="form-control" type="text" name="inter4" placeholder="internal" required=""></td>
		<td><input class="form-control" type="text" name="exter4" placeholder="external" required=""></td>
		<td><input class="form-control" type="text" name="tot4" placeholder="total" required=""></td>
		<td><input class="form-control" type="text" name="mon_pass4" placeholder="month of pass" required=""></td>
	</tr>
	<tr>
		<td class="tab">6</td>
		<td><input class="form-control" type="text" name="sub_code5" placeholder="sub_code" required=""></td>
		<td><input class="form-control" type="text" name="inter5" placeholder="internal" required=""></td>
		<td><input class="form-control" type="text" name="exter5" placeholder="external" required=""></td>
		<td><input class="form-control" type="text" name="tot5" placeholder="total" required=""></td>
		<td><input class="form-control" type="text" name="mon_pass5" placeholder="month of pass" required=""></td>
	</tr>
	<tr>
		<td class="tab">7</td>
		<td><input class="form-control" type="text" name="sub_code6" placeholder="sub_code" ></td>
		<td><input class="form-control" type="text" name="inter6" placeholder="internal"></td>
		<td><input class="form-control" type="text" name="exter6" placeholder="external"></td>
		<td><input class="form-control" type="text" name="tot6" placeholder="total" ></td>
		<td><input class="form-control" type="text" name="mon_pass6" placeholder="month of pass" ></td>
	</tr>
	<tr>
		<td class="tab">8</td>
		<td><input class="form-control" type="text" name="sub_code7" placeholder="sub_code" ></td>
		<td><input class="form-control" type="text" name="inter7" placeholder="internal"></td>
		<td><input class="form-control" type="text" name="exter7" placeholder="external"></td>
		<td><input class="form-control" type="text" name="tot7" placeholder="total" ></td>
		<td><input class="form-control" type="text" name="mon_pass7" placeholder="month of pass" ></td>
	</tr>

	
</table><br>


					<input class="btn-sub" type="submit" name="submit" value="submit">
				</form>

				
		

<?php
if ($_SESSION['course']=='UG') {
	?>

		<button class="btn" onclick="window.location.href='sem5.php';">next&nbsp<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
		<?Php
}

?>
</center>

<?php

if(isset($_POST['submit']))
{
    $count=0;
    $sql="SELECT register_no FROM sem4";
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

	$reg=$_POST['register_no'];
	$bat=$_POST['batch'];

	$sub=$_POST['sub_code'];
$int=$_POST['inter'];
$ext=$_POST['exter'];
$tot=$_POST['tot'];
$pass=$_POST['mon_pass'];

$sub1=$_POST['sub_code1'];
$int1=$_POST['inter1'];
$ext1=$_POST['exter1'];
$tot1=$_POST['tot1'];
$pass1=$_POST['mon_pass1'];

$sub2=$_POST['sub_code2'];
$int2=$_POST['inter2'];
$ext2=$_POST['exter2'];
$tot2=$_POST['tot2'];
$pass2=$_POST['mon_pass2'];

$sub3=$_POST['sub_code3'];
$int3=$_POST['inter3'];
$ext3=$_POST['exter3'];
$tot3=$_POST['tot3'];
$pass3=$_POST['mon_pass3'];

$sub4=$_POST['sub_code4'];
$int4=$_POST['inter4'];
$ext4=$_POST['exter4'];
$tot4=$_POST['tot4'];
$pass4=$_POST['mon_pass4'];
$sub5=$_POST['sub_code5'];
$int5=$_POST['inter5'];
$ext5=$_POST['exter5'];
$tot5=$_POST['tot5'];
$pass5=$_POST['mon_pass5'];
$sub6=$_POST['sub_code6'];
$int6=$_POST['inter6'];
$ext6=$_POST['exter6'];
$tot6=$_POST['tot6'];
$pass6=$_POST['mon_pass6'];
$sub7=$_POST['sub_code7'];
$int7=$_POST['inter7'];
$ext7=$_POST['exter7'];
$tot7=$_POST['tot7'];
$pass7=$_POST['mon_pass7'];




 mysqli_query($ds,"INSERT INTO `sem4` VALUES ('$reg','$bat','$sub','$int','$ext','$tot','$pass'),('$reg','$bat','$sub1','$int1','$ext1','$tot1','$pass1'),('$reg','$bat','$sub2','$int2','$ext2','$tot2','$pass2'),('$reg','$bat','$sub3','$int3','$ext3','$tot3','$pass3'),('$reg','$bat','$sub4','$int4','$ext4','$tot4','$pass4'),('$reg','$bat','$sub5','$int5','$ext5','$tot5','$pass5'),('$reg','$bat','$sub6','$int6','$ext6','$tot6','$pass6'),('$reg','$bat','$sub7','$int7','$ext7','$tot7','$pass7');");
  
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