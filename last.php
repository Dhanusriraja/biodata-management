<?php
include "connect.php";

?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDEX PAGE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
.dis{
	width: 100%;
	height: 550px;
}

i{
	font-size: 25px;
	color: red;
}
.btn{
	background: -webkit-linear-gradient(top, yellow, orange);

	border: 2px solid black;
	border-radius: 50px;
	
	width: 250px;
			height: 50px;
			text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 18pt;
			color: black;
			

}
.bt{
	background: -webkit-linear-gradient(top, skyblue, blue);

	border: 2px solid black;
	border-radius: 50px;
	
	width: 100px;
			height: 30px;
			
			font-weight: 700;
			font-size: 15pt;
			color: black;
			

}
	div{
		background-color: red;
		height: 1000px;
		width: 100%;
		
		background-image: url("img/n1.jpg");
	        background-size: cover;
	        background-repeat: no-repeat;
	        background-attachment: fixed;
	      

	
	}	
nav a{
	position: relative;
	font-size: 1.1em;
	color: black;
	text-decoration: none;
	padding: 6px 20px;
	transition: .5s;
	font-family: verdana;
	font-size: 17px;


}
nav a:hover {
	color: #b50909;

}
nav a span {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: -1;
	border-bottom: 4px solid #b50909;
	border-radius: 15px;
	transform: scale(0) translateY(50px);

}
nav a:hover span{
	transform: scale(1) translateY(0);
	opacity: 1;
}
	.btn1{

	background: -webkit-linear-gradient(top, #05b1fd, #0a0248);

	border: 2px solid black;
	border-radius: 12px;
	
	width: 200px;
			height: 40px;
			text-shadow: 1px 2px black;
			font-weight: 700;
			font-size: 18pt;
			color: yellow;
			

}
.form-control{
			height: 40px;
	width: 300px;
	margin: 16px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 2px solid black;
	color: black;
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
	color: black;
	font-size: 20px;
	font-family: sans-serif;

		}
		label{
			color: black;
			font-size: 25px;
	font-family: sans-serif;

	
		}

	.login
	{
		align-items: center;
	}
	select{
	width: 70%;
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
	input::placeholder{
	color: black;
	
}

.chiild{
	margin: auto;
	border: 2px solid #03112a;
	height: 630px;
	width: 500px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	backdrop-filter: blur(70px);
	border-radius: 5px;
}	
.summatha{
	height: 250px;
	width: 100%;
}
.msg
{
	width: 100%;
	height: 700px;
}

	</style>
</head>
<body style="background-color: orange;">
	<header >
		<h3>CS dept</h3>
		<nav class="nav">
		<a href="index.html" class="i"><b>HOME</b><span></span></a>
		<a href="adminlogin.php" class="i"><b>ADMIN LOGIN</b><span></span></a>
		<a href="stafflogin.php" class="i"><b>STAFFLOGIN</b><span></span></a>
		<a href="studentlogin.php" class="i"><b>STUDENT LOGIN</b><span></span></a>
		<a href="last.php" class="i"><b>OTHER DETAILS</b><span></span></a>
		</nav>
	</header>
	<!--<img src="img/fr.gif">-->
	<section class="front">
		<img src="img/d5.gif" class="dis"><br><br><center>
		<button class="btn">scroll down</button><br><br>
		<i class="fa fa-angle-double-down" aria-hidden="true" ></i></i></center>

	</section>
	<section>
		<body class="mild">
			<br>
			<div>
<!--________summa tha edam pathala________-->
				<div class="summatha">
					
				</div>
<!--________summa tha edam pathala________-->


				<center>
					<div id="msg" class="msg" style="display: none;">
						<div class="chiild">
							<form method="POST">
								<h1 style="color: black; font-size: 20px; font-family: cursive;">ALUMNI DETAILS</h1><br>
								<input class="form-control" type="text" name="name" placeholder="full name" required=""><br>
								<input class="form-control" type="text" name="register_no" placeholder="register no" required=""><br>
								<label>batch:</label><input type="month" name="batch" class="year" placeholder="batch">
								<select  name="course">
                   <option value="UG">UG</option>
                   <option value="PG">PG</option>
                   <option value="PHD">PHD</option>
          </select><br><br>
           <select  name="shift">
                   <option value="shift I">shift I</option>
                   <option value="shift II">shift II </option>
                  
          </select><br><br>
           <select  name="work_study">
                   <option value="working">working</option>
                   <option value="studying">studying </option>
                   <option value="others">others </option>
                  
          </select><br><br>
          <input type="text" name="comp_clg" placeholder="company/college name" class="form-control" required=""><br><br>
          <input type="submit" name="submit1" value="submit" class="bt">

							</form>
							
						</div>

					</div>
				<button class="btn1" onclick="hideshow()" id="hideshow" >alumni details
				</button></center>

			</div>


			<script type="text/javascript">
	var div = document.getElementById('msg');
	var display = 1;
	function hideshow()
	{
		if(display == 1)
		{
			div.style.display = 'block';
				display = 0;
		}
		else
		{
			div.style.display = 'none';
			display = 1;
		}
	}
</script>
<?php
if(isset($_POST['submit1']))
{
	mysqli_query($ds,"INSERT INTO `alumni` VALUES('$_POST[name]','$_POST[register_no]','$_POST[batch]','$_POST[course]','$_POST[shift]','$_POST[work_study]','$_POST[comp_clg]');");

	
}

	?>

		</body>
	</section>
	
</body>

</html>