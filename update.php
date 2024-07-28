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
			background-image: url("img/dh.jpg");
	        background-size: cover;
	         background-repeat: no-repeat;
	        background-attachment: fixed;
	         
	        
		}
		h2{
	font-family: verdana;
	font-size: 25px;
	padding-left: 14px;
	color: white;
}
.form-control{
	width: 250px;
	height: 25px;
	background:  -webkit-linear-gradient(top, #81d9ee, #0ba9c8);
	border: 3px solid black;

}
.form-ccontrol{
	width: 200px;
	height: 25px;
	background:  -webkit-linear-gradient(top, #81d9ee, #0ba9c8);
	border: 3px solid black;

}

		input::placeholder{
	color: whitesmoke;

	
}
.srch{
	padding-right: 1000px;
}
.btnn{
	height: 33px;
	width: 70px;
	margin-left: 14px;
	background-color: whitesmoke;
	border-radius: 10px;
	
	
}

    @media print {
    	body *:not(#my-section):not(#my-section *){
    		visibility: hidden;
    	}
    	#my-section{
    		position: absolute;
    		left: 100px;
    		top: 10;
    	}
    }
    .scroll
    	{
    		width: 100%;
    		height: 750px;
    		overflow: auto;
    		
    		

    	}
div::-webkit-scrollbar
      {
    		display: none;
    	}
    	header{
	display: flex;

	align-items: center;
	justify-content: space-between;
	height: 60px;
}

.io{
	padding-top: 0px;
}

.btn{

height: 35px;
	width: 100px;
	margin-left: 14px;
	outline: none;
	border: 3px solid white;
	color: white;
	background-color: #166e76;
	border-radius: 15px;



}
.btn:hover{
	background-color: skyblue;
	cursor: pointer;
	color: black;
}
nav a{
	position: relative;
	font-size: 1.1em;
	color: white;
	text-decoration: none;
	padding: 6px 20px;
	transition: .5s;


}
nav a:hover {
	color: #62ff00;

}
nav a span {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: -1;
	border-bottom: 3px solid #62ff00;
	border-radius: 15px;
	transform: scale(0) translateY(50px);

}
nav a:hover span{
	transform: scale(1) translateY(0);
	opacity: 1;
}
table{
	border: 4px solid skyblue;
	background-color: #121b1e;
	  backdrop-filter: blur(70px);
	
}
tr,td{
	border: 1px solid black;
	border-collapse: collapse;
	color: white;

}
.formm-control{
			height: 15px;
	width: 200px;
	margin: 16px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 1px solid white;
	color: white;
	font-size: 20px;
	font-family: sans-serif;


		}
		
</style>
</head>
<body>
<header>
<h2>CS dept</h3>
<nav class="nav">
<a href="editbiodata.php" class="i"><b>GO BACK</b><span></span></a>
<a href="index.html" class="i"><b>HOME</b><span></span></a>
<a href="logout.php" class="i"> &nbsp&nbsp<b>LOGOUT</b><span></span></a>
</nav>
	</header>
<div>
	<form name="searchbar" method="POST">
	<input class="formm-control" type="text" name="search" placeholder="search student..." required>
	<button type="submit" name="submit" class="btnn"><i class="fa fa-search" aria-hidden="true"></i></button><button class="btn" onclick="window.location.href='update.php';">CLEAR</button></form></div><br><br>

<center>
	<?php
if(isset($_POST['submit']))
{
	$q=mysqli_query($ds,"SELECT * FROM `biodata` where register_no='$_POST[search]';");

if(mysqli_num_rows($q)==0)
{
	echo"<h2>sorry bio-data is not updated of this user</h2><br>";
}
else
{
		echo'<h2>BIO-DATA FORM</h2><br>';
	while ($row=mysqli_fetch_assoc($q)) 
	{
		$name=$row['name'];
		$course=$row['course'];
		$register_no=$row['register_no'];
		$class=$row['class'];
		$father_name=$row['father_name'];
		$mother_name=$row['mother_name'];
		$sex=$row['sex'];
		$age=$row['age'];
		$DOB=$row['DOB'];
		$DOJ=$row['DOJ'];
		$blood_group=$row['blood_group'];
		$community=$row['community'];
		$caste=$row['caste'];
		$religion=$row['religion'];
		$nationality=$row['nationality'];
		$mob_no=$row['mob_no'];
		$resi_no=$row['resi_no'];
		$email=$row['email'];
		$adress=$row['adress'];
		$aadhar_no=$row['aadhar_no'];

?>
<div class="bio-data">
	<form method="POST" enctype="multipart/form-data">
<table>
	<tr><td> name: </td><td><input class="form-control" type="text" name="name" value="<?php echo $name; ?>"></td>
			<td>course:</td><td><input class="form-control" type="text" name="course" value="<?php echo $course; ?>"></td>
	
	</tr>
	<tr><td> Register no: </td><td><input class="form-control" type="text" name="register_no" value="<?php echo $register_no; ?>"></td>
			<td> class:</td><td><input class="form-control" type="text" name="class" value="<?php echo $class; ?>"></td>
	
	</tr>
	<tr><td> father name:</td><td><input class="form-control" type="text" name="father_name" value="<?php echo $father_name; ?>"></td>
			<td>mother name: </td><td><input class="form-control" type="text" name="mother_name" value="<?php echo $mother_name; ?>"></td>
	
	</tr>
	<tr><td> sex:  </td><td><input class="form-control" type="text" name="sex" value="<?php echo $sex; ?>"></td>
			<td> age: </td><td><input class="form-control" type="text" name="age" value="<?php echo $age; ?>"></td>
	
	</tr>
	<tr><td> DOB:</td><td><input class="form-control" type="text" name="DOB" value="<?php echo $DOB; ?>"></td>
			<td>DOJ: </td><td><input class="form-control" type="text" name="DOJ" value="<?php echo $DOJ; ?>"></td>
</tr>
<tr><td>community:</td><td><input class="form-control" type="text" name="community" value="<?php echo $community; ?>"></td>
<td>caste:</td><td><input class="form-control" type="text" name="caste" value="<?php echo $caste; ?>"></td></tr></tr>
<tr><td>blood group:</td><td><input class="form-control" type="text" name="blood_group" value="<?php echo $blood_group; ?>"></td>
<td>religion:</td><td><input class="form-control" type="text" name="religion" value="<?php echo $religion; ?>"></td>
</tr></tr>
<tr><td>mob_no:</td><td><input class="form-control" type="text" name="mob_no" value="<?php echo $mob_no; ?>"></td>
<td>resi_no:</td><td><input class="form-control" type="text" name="resi_no" value="<?php echo $resi_no; ?>"></td>
</tr>
<tr><td>email:</td><td><input class="form-control" type="text" name="email" value="<?php echo $email; ?>"></td>
<td>aahdar number </td><td><input class="form-control" type="text" name="aadhar_no" value="<?php echo $aadhar_no; ?>"></td>
</tr>
<tr><td colspan="4"><center>adress :<input class="form-control" type="text" name="adress" value="<?php echo $adress; ?>"></center> </td>
</tr>
</table>
<br><br>
<button class="btn" type="submit" name="submit1"><b>SAVE</b></button><br><br>
</form>
</div>
<form method="POST">
<?php
	}
}
?>
<?php
}
?>
<?php
if(isset($_POST['submit']))
{
	$q=mysqli_query($ds,"SELECT * FROM `education` where register_no='$_POST[search]';");

if(mysqli_num_rows($q)==0)
{
	echo"<h2>educational details is not updated of this user</h2>";
}
else
{
	echo'<h2>EDUCATIONAL DETAILS</h2><br>';
?>
<table><tr><td>education</td><td>register_no</td><td>board of study</td><td>percentage</td><td>class</td><td>month of pass</td></tr>
<?php
while ($row=mysqli_fetch_assoc($q)) 
{
$sslc_reg_no=$row['sslc_reg_no'];
$sslc_board= $row['sslc_board'];
$sslc_pass=$row['sslc_pass'];
$sslc_percentage=$row['sslc_percentage'];
$sslc_class=$row['sslc_class'];
$hsc_reg_no=$row['hsc_reg_no'];
$hsc_board=$row['hsc_board'];
$hsc_percentage=$row['hsc_percentage'];
$hsc_class=$row['hsc_class'];
$hsc_pass=$row['hsc_pass'];
$register_no=$row['register_no'];
?>
<tr><td>SSLC</td>
<input type="hidden" name="register_no" value="<?php echo  $register_no; ?>">
<td><input class="form-ccontrol" type="text" name="sslc_reg_no" value="<?php echo  $sslc_reg_no; ?>"> </td>
<td><input class="form-ccontrol" type="text" name="sslc_board" value="<?php echo $sslc_board; ?>"></td>
<td><input class="form-ccontrol" type="text" name="sslc_percentage" value="<?php echo $sslc_percentage; ?>"></td>
<td><input class="form-ccontrol" type="text" name="sslc_class" value="<?php echo $sslc_class; ?>"></td>
<td><input class="form-ccontrol" type="text" name="sslc_pass" value="<?php echo $sslc_pass; ?>"></td></tr>
<tr><td>HSC</td>
<td><input class="form-ccontrol" type="text" name="hsc_reg_no" value="<?php echo $hsc_reg_no; ?>"></td>
<td><input class="form-ccontrol" type="text" name="hsc_board" value="<?php echo $hsc_board; ?>"></td>
<td><input class="form-ccontrol" type="text" name="hsc_percentage" value="<?php echo $hsc_percentage; ?>"></td>
<td><input class="form-ccontrol" type="text" name="hsc_class" value="<?php echo $hsc_class; ?>"></td>
<td><input class="form-ccontrol" type="text" name="hsc_pass" value="<?php echo $hsc_pass; ?>"></td></tr>
</table>	<br><button class="btn" type="submit" name="submit2"><b>SAVE</b></button><br>
<?php
}
}
}
?>
</form>
</center>
<?php
if(isset($_POST['submit1']))
{
$name=$_POST['name'];
$course=$_POST['course'];
$register_no=$_POST['register_no'];
$class=$_POST['class'];
$father_name=$_POST['father_name'];
$mother_name=$_POST['mother_name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$DOB=$_POST['DOB'];
$DOJ=$_POST['DOJ'];
		$blood_group=$_POST['blood_group'];
		$community=$_POST['community'];
		$caste=$_POST['caste'];
		$religion=$_POST['religion'];
		$mob_no=$_POST['mob_no'];
		$resi_no=$_POST['resi_no'];
		$email=$_POST['email'];
		$adress=$_POST['adress'];
		$aadhar_no=$_POST['aadhar_no'];
	


			
			$sql1= "update `biodata` set name='$name', course='$course', register_no='$register_no', class='$class', father_name='$father_name', mother_name='$mother_name', sex='$sex', age='$age', DOB='$DOB', DOJ='$DOJ', blood_group='$blood_group', community='$community', caste='$caste', religion='$religion', mob_no='$mob_no', resi_no='$resi_no', email='$email', adress='$adress', aadhar_no='$aadhar_no' where register_no='$register_no'; ";

			if(mysqli_query($ds,$sql1))
			{
				?>
				<script type="text/javascript">
					alert("saved sucessfully");
				
				</script>
				<?php
			}

	}
	?>

<?php
	if(isset($_POST['submit2']))
	{
		
                        $sslc_reg_no=$_POST['sslc_reg_no'];
								$sslc_board= $_POST['sslc_board'];
								$sslc_pass=$_POST['sslc_pass'];
								$sslc_percentage=$_POST['sslc_percentage'];
								$sslc_class=$_POST['sslc_class'];
								$hsc_reg_no=$_POST['hsc_reg_no'];
								$hsc_board=$_POST['hsc_board'];
								$hsc_percentage=$_POST['hsc_percentage'];
								$hsc_class=$_POST['hsc_class'];
								$hsc_pass=$_POST['hsc_pass'];
									$register_no=$_POST['register_no'];


			
			$sql2= "update `education` set sslc_reg_no='$sslc_reg_no', sslc_board='$sslc_board', sslc_pass='$sslc_pass', sslc_percentage='$sslc_percentage', sslc_class='$sslc_class', hsc_reg_no='$hsc_reg_no', hsc_board='$hsc_board', hsc_percentage='$hsc_percentage', hsc_class='$hsc_class', hsc_pass='$hsc_pass' where register_no='$register_no'; ";

			if(mysqli_query($ds,$sql2))
			{
				?>
				<script type="text/javascript">
					alert("saved sucessfully");
				
				</script>
				<?php
			}

	}
	?>

</body>
</html>		              
		                               
		       
		                            
		             
		             
		               
		                 
		             
		             
		                               
		                                      
		                                
		                            





