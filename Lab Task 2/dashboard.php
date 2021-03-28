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
	<a href="allstudents.php"> All Students </a>
	<p></p>
	<a href="addstudent.php"> Add Student </a>
	<p></p>
	<a href=""> Edit Student </a>
	<p></p>
	
	</body>
</html>	


