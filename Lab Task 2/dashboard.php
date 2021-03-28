<?php
	session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	require_once "db_config.php";
	
	//$query = "select * from admins";
	//$result = get($query);
	
?>

<html>
	<head>
	</head>
	<body>
	<a href="All Students.php"> All Students </a>
	<p></p>
	<a href="Add Students.php"> Add Students </a>
	<p></p>
	<a href="All Departments.php"> All Departments </a>
	<p></p>
	<a href="Add Departments.php"> Add Departments </a>
	<p></p>
	
	</body>
</html>	


