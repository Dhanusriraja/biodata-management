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
			background-image: url("img/bg1.jpg");
	        background-size: cover;
	         
	        
		}
		h2{
	font-family: verdana;
	font-size: 25px;
	padding-left: 14px;
	color: white;
}
.form-control{
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
.maain{
	display: flex;
	height: 40vh;
}
.chiild{
background-color: white;
	margin: auto;
	border: 2px solid #03112a;
	height: 800px;
	width: 695px;
	display: flex;
	flex-direction: column;
	align-items: left;
	justify-content: top;
	backdrop-filter: blur(30px);
	border-radius: 5px;
	padding-left: 10px;

}
table{
			 width: 650px;
		border-collapse: collapse;
    	border-spacing: 2px;
    	margin:10px;
		}
		table,tr,td{
   	border: 1px solid black;
   	 	vertical-align: middle;
   	 	padding: 5px;
   	 }

   td{
   	
   	height: 10px;
   	width: 90px;
   	color: black;
   	font-weight: 800;
   	text-align: left;
   	font-size: 10px;
   }
   tr{
   	height: 10px;

    	font-family: verdana;
    	font-weight: bold;
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
.child{
   margin: auto;

	height: 100px;
	width: 100px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	border-style: double;
	border-radius: 5px;
background-color: white;



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
</style>
</head>
<body>
	<header>
		<h2>CS dept</h3>
		<nav class="nav">
			<a href="main.php" class="i"><b>GO BACK</b><span></span></a>
		<a href="index.html" class="i"><b>HOME</b><span></span></a>
		
		<a href="logout.php" class="i"> &nbsp&nbsp<b>LOGOUT</b><span></span></a>
		
		</nav>
	</header>

	
<div>
	<form name="searchbar" method="POST">
	<input class="form-control" type="text" name="search" placeholder="search student..." required>
	<button type="submit" name="submit" class="btnn"><i class="fa fa-search" aria-hidden="true"></i></button><button class="btn" onclick="window.print()">print</button> </form><button class="btn" onclick="window.location.href='model1.php';">CLEAR</button></div>
	

<!--main code should come here-->

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

?>
<section id="my-section">

		<div class="maain">
	<div class="chiild" >
		<img src="img/log2.jpg">

<div class="child">
	<img  src="./img/<?php echo $row['pic']; ?>" height="100px" width="100px">
<!--<img src="img/1.jpg" height="100px" width="100px">-->
</div>
<?php

echo '<table><tr><td><h3>course:  '.$row['course'].'</h3></td>
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
		                              echo '<tr><td colspan="2" ><h3>address:  '.$row['adress'].'</td></tr>';









		echo '</table>';



	}
}




/*main if close*/}
?>


<!---educational details-->
<?php
if(isset($_POST['submit']))
{
	$q=mysqli_query($ds,"SELECT * FROM `education` where register_no='$_POST[search]';");

if(mysqli_num_rows($q)==0)
{
	echo"educational details is not updated of this user";
}
else
{
	echo'<center>EDUCATIONAL DETAILS</center>';
	echo '<table><tr><td>education</td><td>register_no</td><td>board of study</td><td>percentage</td><td>class</td><td>month of pass</td></tr>';
	while ($row=mysqli_fetch_assoc($q)) 
							{
								echo '<tr><td>SSLC</td>';
							echo '<td>'.$row['sslc_reg_no'].'</td>'.'<td>'.$row['sslc_board'].'</td>';
								echo '<td>'.$row['sslc_percentage'].'</td>'.'<td>'.$row['sslc_class'].'</td>'.'<td>'.$row['sslc_pass'].'</td></tr>';
								echo '<tr><td>HSC</td>';
							echo '<td>'.$row['hsc_reg_no'].'</td>'.'<td>'.$row['hsc_board'].'</td>';
							echo '<td>'.$row['hsc_percentage'].'</td>'.'<td>'.$row['hsc_class'].'</td>'.'<td>'.$row['hsc_pass'].'</td></tr>';


	echo'</table><br>';

}


}

}
?>
	</div>
</div>
		
	




</section>

</body>
</html>