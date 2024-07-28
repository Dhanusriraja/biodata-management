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
			background-image: url("img/n4.jpg");
	        background-size: cover;
	        background-repeat: no-repeat;
	        background-attachment: fixed;
	         
	         
	        
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
select{
	width: 50%;
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
.control{
	height: 70px;
		width: 60%;
		background-color: transparent;
		font-size: 20px;
		border: 3px solid black;

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

/*-----------form---------------*/
.maain{
	display: flex;
	height: 40vh;
}
.chiild{
	margin: auto;
	border: 2px solid #03112a;
	height: 500px;
	width: 500px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	backdrop-filter: blur(30px);
	border-radius: 5px;
}
.scroll
    	{
    		width: 100%;
    		height: 500px;
    		overflow: auto;
    		backdrop-filter: blur(10px);
    		

    	}
div::-webkit-scrollbar
      {
    		display: none;
    	}


		.form-control{
			height: 40px;
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
		.year{height: 40px;
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
		label{
			color: white;
			font-size: 25px;
	font-family: sans-serif;

	
		}

	.login
	{
		align-items: center;
	}
	input::placeholder{
	color: white;
	
}
textarea::placeholder{
	color: white;
	
	
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
.btn{

height: 35px;
	width: 100px;
	margin-left: 14px;
	outline: none;
	color: white;
	background-color: #041026;
	border-radius: 5px;
	float: right;


}
.custom-file-input{
			color: transparent;
		}
		.custom-file-input::-webkit-file-upload-button{
			visibility: hidden;
		}
		.custom-file-input::before{
	content: 'upload aadharcard pdf';
			color: #ffeb3b;
			display: inline-block;
			background: -webkit-linear-gradient(top,  #05b1fd, #0a0248);
			border: 2px solid black;
			border-radius: 12px;
			padding: 5px 8px;
			outline: none;
			white-space: nowrap;
			-webkit-user-select: none;
			cursor: pointer;
			text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 12pt;
		}
		.custom-file-input:hover::before{
			border-color: black;
		}
		.custom-file-input:active{
			outline: 0;
		}
		.custom-file-input:active::before{
			background: -webkit-linear-gradient(top,  #05b1fd, #0a0248);
		}
		/*file styling 2___________-*/
		.custom-file-input1{
			color: transparent;
		}
		.custom-file-input1::-webkit-file-upload-button{
			visibility: hidden;
		}
		.custom-file-input1::before{
	content: 'upload image';
			color: #ffeb3b;
			display: inline-block;
			background: -webkit-linear-gradient(top,  #05b1fd, #0a0248);
			border: 2px solid black;
			border-radius: 12px;
			padding: 5px 8px;
			outline: none;
			white-space: nowrap;
			-webkit-user-select: none;
			cursor: pointer;
			text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 12pt;
		}
		.custom-file-input1:hover::before{
			border-color: black;
		}
		.custom-file-input1:active{
			outline: 0;
		}
		.custom-file-input1:active::before{
			background: -webkit-linear-gradient(top,  #05b1fd, #0a0248);
		}
		</style>
</head>
<body>
	<header>
		<h5>CS dept</h5>
		<?php

	  		  if(isset($_SESSION['login_user']))
	  		  {?>
	  		 
	  		  	<div style="color: #00ecff; font-size: 25px; font-family: cursive; font-weight: 900; text-align: center;">	  		 		<?php

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
<!-- _______________navbar ends_____________-->

	</header>
	
	
<form name="login" action="" method="post" >
	<div class="maain">
	<div class="chiild">
		
	<!--__________form______________-->
	<div class="scroll">
		
	<h1 style="text-align: center; font-size: 28px; font-family: Verdana; color: #0ad78b;">BIO DATA FORM</h1><br><center>
			
			<form name="Registration" action="" method="post" enctype="multipart/form-data"><br>
				<br>
				<div class="login">
					<center>
					<input type="file" name="pic" class="custom-file-input1" required=""><br><br></center>
					 <select  name="shift">
                   <option value="shift I">shift I</option>
                   <option value="shift II">shift II </option>
                  
          </select><br><br>
					<label>batch:</label><input type="month" name="batch" class="year" placeholder="batch">
					<select  name="course">
                   <option value="UG">UG</option>
                   <option value="PG">PG</option>
                   <option value="PHD">PHD</option>
          </select><br><br>
         
					<input class="form-control" type="text" name="name" placeholder="full name" required=""><br><br>
					<input class="form-control" type="text" name="register_no" placeholder="register no" required=""><br><br>
					<input class="form-control" type="text" name="father_name" placeholder="father's name" required=""><br><br>
					<input class="form-control" type="text" name="mother_name" placeholder="mother's name" required=""><br><br>
					<select  name="sex">
                   <option value="male">MALE</option>
                   <option value="female">FEMALE</option>
                   <option value="trans-gender">TRANS-GENDER</option>
          </select><br><br>

					<input class="form-control" type="text" name="class" placeholder="class" required=""><br><br>
					<input class="form-control" type="text" name="DOB" placeholder="D.O.B" required=""><br><br><br>
					<input class="form-control" type="text" name="age" placeholder="age" required=""><br><br><br>
					<input class="form-control" type="text" name="DOJ" placeholder="D.O.J" required=""><br><br><br>
					<input class="form-control" type="text" name="blood_group" placeholder="blood group" required=""><br><br>
					<input class="form-control" type="text" name="community" placeholder="community" required=""><br><br>
					<input class="form-control" type="text" name="caste" placeholder="caste" required=""><br><br>
					<input class="form-control" type="text" name="nationality" placeholder="nationality" required=""><br><br>
					<input class="form-control" type="text" name="religion" placeholder="religion" required=""><br><br>
					<input class="form-control" type="text" name="mob_no" placeholder="mobile number" required=""><br><br>
					<input class="form-control" type="text" name="aadhar_no" placeholder="aadhar number" required=""><br><br>
					<input class="form-control" type="text" name="resi_no" placeholder="resi no" required=""><br><br>
					<input class="form-control" type="text" name="email" placeholder="Email ID" required=""><br><br>
					<!--<input class="control" type="text" name="adress" placeholder="adress" required=""><br><br>-->
					<textarea class="control" rows="2" cols="12" name="adress" wrap="hard" placeholder="adress"></textarea><br><br>
<!--_____upload file____-->
<input type="file" name="aadharpdf" class="custom-file-input"><br><br>


					<input class="btn-sub" type="submit" name="submit" value="submit"><br><br>
				<button class="btn" onclick="window.location.href='edu.php';">next&nbsp<i class="fa fa-arrow-right" aria-hidden="true"></i></button><br>

<!--______________form ends here___________-->

	</div>
	</div>

	</div>	


</form>

</center>

	

<?php

if(isset($_POST['submit']))
{
    $count=0;
    $sql="SELECT register_no FROM biodata";
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


        mysqli_query($ds,"INSERT INTO `biodata` VALUES('$_POST[batch]','$_POST[shift]','$_POST[course]', '$_POST[name]', '$_POST[register_no]', '$_POST[father_name]', '$_POST[mother_name]', '$_POST[sex]', '$_POST[class]', '$_POST[DOB]', '$_POST[age]', '$_POST[DOJ]', '$_POST[blood_group]', '$_POST[community]', '$_POST[caste]', '$_POST[nationality]', '$_POST[religion]', '$_POST[mob_no]','$_POST[aadhar_no]', '$_POST[resi_no]', '$_POST[email]', '$_POST[adress]','$_POST[pic]','$_POST[aadharpdf]');");

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