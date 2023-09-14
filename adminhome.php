<?php

session_start();


	if(!isset($_SESSION['username']))

	{

		header("location:login.php");

	}

	elseif ($_SESSION['usertype']=='student') 
	{
		
		header("location:login.php");
		
	}




?>











<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>


	<link rel="stylesheet" type="text/css" href="admin.css">

	   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
		
<header class="header">
	
	<a href="">Admin Dashboard</a>

	<div class="logout"> 

		<a href="logout.php" class="btn btn-primary">Logout</a>



	</div>


</header>


<aside>
	
	<ul>

		<li>
			
			<a href="">Admission</a>

		</li>

		<li>
			
			<a href="">Add Student</a>

		</li>

		<li>
			
			<a href="">View Student</a>

		</li>

		<li>

			
			<a href="">Add Courses</a>

		</li>
		
		<li>
			
			<a href="">View Courses</a>

		</li>


	</ul>	

</aside>

<div class="content">
	
	<h1>Sidebar Accordion</h1>
	<p>...................</p>


<input type="text" name="">

</div>

		
</body>
</html>