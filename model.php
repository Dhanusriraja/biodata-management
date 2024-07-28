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

		
   
    
 table .sr{
         width: 50%;
    	border-collapse: collapse;
    	border-spacing: 2px;
    	margin:10px;
    		backdrop-filter: blur(10px);
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
/*
table .sr{
	

	
	border: 2px solid black;


}
tr .sr{

	border: 2px solid black;
	margin: none;
	outline: none;
	height: 20px;
}
.sr td:hover {
    	background-color: greenyellow;
    }*/
   
/* maaain and chiild class*/
.maain{
	display: flex;
	height: 40vh;
}
.chiild{
	margin: auto;
	border: 2px solid #03112a;
	height: 500px;
	width: 700px;
	display: flex;
	flex-direction: column;
	align-items: left;
	justify-content: top;
	backdrop-filter: blur(30px);
	border-radius: 5px;
	padding-left: 10px;

}
	h2{
		color: white;
		font-family: sans-serif;
		font-size: 30px;
	}
h3{
	font-family: verdana;
	color: #0deb85;
	font-size: 20px;
}
/*.taab{
	align-items: center;
background: transparent;

	border: 2px solid black;
   } */
  
   /*.scroll
    	{
    		
    		width: 100%;
    		height: 500px;
    		overflow: auto;
    	
    		

    	}
    	div::-webkit-scrollbar
      {
    		display: none;
    	}*/
    table,tr,td{
   	border: 1px solid black;
   	 	vertical-align: middle;
   	 	padding: 10px;
   	 }

   td{
   	
   	height: 10px;
   	width: 60px;
   	color: black;
   	font-weight: 900;
   	text-align: left;
   }
   tr{
   	height: 20px;

    	font-family: verdana;
    	font-weight: bold;
    }
    
 table{
         width: 100%;
    	border-collapse: collapse;
    	border-spacing: 2px;
    	margin:10px;
    		
    }
    	@media print{
    		body * {
    			visibility: hidden;
    		}
    		.print-container, .print-container * {
    			visibility: visible;
    		}
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





	<!--____________search bar_______________-->

	<div class="srch">
			<button class="but" onclick="window.location.href='index.html';">GO BACK</button>

	<button class="but" onclick="window.location.href='editbiodata.php';">CLEAR</button>
	<button class="but" onclick="window.print()">print</button>
		<form name="searchbar" method="POST">
			
	<table class="sr" align="right">
				<tr class="sr"><td class="sr"><input class="form-control" type="text" name="search" placeholder="search student..." required></td>
				<td><button type="submit" name="submit" class="btnn"><i class="fa fa-search" aria-hidden="true"></i></button></td></tr>
		
			</table>

		</form>
	</div>

	
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
	while ($row=mysqli_fetch_assoc($q)) 
	{
		/*display the content with label and echo*/
		?>
<br><br>

		<!--<div class="maain">
	<div class="chiild" >-->
		
	<div class="row print-container">	
<center>

		<h2>student bio-data</h2></center><br><center>
			<center><img  src="./img/<?php echo $row['pic']; ?>" height="100" width="100"></center>
		<?php
		echo '<table class="taab"><tr><td><h3>course:  '.$row['course'].'</h3></td>
		                              <td><h3>&nbsp&nbspname:  '.$row['name'].'</tr>';
		               echo '<tr><td><h3>Register no:  '.$row['register_no'].'</td>
		                              <td><h3>&nbsp&nbspclass:  '.$row['class'].'</tr>';
		               echo '<tr><td><h3>father name:  '.$row['father_name'].'</td>
		                              <td><h3>&nbsp&nbspmother name:  '.$row['mother_name'].'</tr>';
		               echo '<tr><td><h3>sex:  '.$row['sex'].'</td>
		                              <td><h3>&nbsp&nbspage:  '.$row['age'].'</tr>';
		               echo '<tr><td><h3>DOB:  '.$row['DOB'].'</td>
		                              <td><h3>&nbsp&nbspDOJ:  '.$row['DOJ'].'</tr>';
		               echo '<tr><td><h3>blood group:  '.$row['blood_group'].'</td>
		                              <td><h3>&nbsp&nbspcommunity:  '.$row['community'].'</tr>';
		               echo '<tr><td><h3>religion:  '.$row['religion'].'</td>
		                              <td><h3>&nbsp&nbspmob_no:  '.$row['mob_no'].'</tr>';
		                                    echo '<tr><td><h3>resi_no:  '.$row['resi_no'].'</td>
		                              <td><h3>&nbsp&nbspemail:  '.$row['email'].'</tr>';
		                              echo '<tr><td><h3>address:  '.$row['adress'].'</td></tr>';









		echo '</table>';
		 ?>
		<br>
		<br>


		 
		 </div>
		
		 <!--<script>
		 	function pagePrint(myform){
		 		var printdata=document.getElementById("myform");
		 		newwin=window.open("");
		 		newwin.document.write(printdata.outerHTML);

		 		newwin.print();
		 		newwin.close();

		 	}
		 </script>
		</div>--><!--
	</div></div>--></center>

		<?php
	}
	
}
}
?>
</div>
</body>
</html>
