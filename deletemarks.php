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
		select{
	width: 20%;
	height: 30px;
	font-size: 20px;
	font-family: verdana;
	background-color: #1a8abe;
	border-radius: 5px;
	border: 3px solid black;
	box-shadow: 4px 4px blue;
	font-weight: 750;


}
option{
	width: 50%;
	height: 30px;
	font-size: 20px;
	font-family: verdana;
 
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
	color: solid black;

	
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
	color: black;
	font-size: 25px;
	font-weight: 200;
	font-family: sans-serif;


		}
</style>
</head>
<body>
	<header>
		<h2>CS dept</h3>
		<nav class="nav">
			<a href="editeducation.php" class="i"><b>GO BACK</b><span></span></a>
		<a href="index.html" class="i"><b>HOME</b><span></span></a>
		<a href="logout.php" class="i"> &nbsp&nbsp<b>LOGOUT</b><span></span></a>
		</nav>
	</header><br><br><br><center>	<form name="searchbar" method="POST">
		<input type="text" name="sem" class="form-control"><br><br>

	<table class="sr">
		
				<tr class="sr"><td class="sr"><input class="form-control" type="text" name="search" placeholder="type reg_no to delete..." required></td>
				<td class="sr"><button type="submit" name="submit" class="btnn"><i class="fa fa-search" aria-hidden="true"></i></button></td></tr>
		
			</table>
			

		</form></center>

<?php
if(isset($_POST['submit']))
{
	
$sem=$_POST['sem'];
if(mysqli_query($ds,"DELETE from $sem where register_no='$_POST[search]';"))
{
		?>
<h2>deleted sucessfully</h2>
<?php

	}
	
	}
?>


</body>
</html>		              
