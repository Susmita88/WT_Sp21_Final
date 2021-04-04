<?php
	require_once "db_config.php";
	$uname="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		$query = "select * from admins where username='$uname' and password='$pass'";
		$result = get($query);
		if(count($result)>0){
			session_start();
			$_SESSION["loggedin"]=$uname;
			header("Location: dashboard.php");
		}
		else{
			echo "Username or password is invalid";
		}
		
	}

?>


<html>
	<head>
	</head>
	<body>
			<form action="" method="post">
				<table align="center">
				
					<tr>
						<td><span>Username:</span> </td>
						<td><input type="text" name="uname"></td>
					</tr>
					<tr>
						<td><span>Password: </span></td>
						<td><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit"  value="Login" name="login">
					</tr>
				</table>
			</form>
		
	</body>
</html>