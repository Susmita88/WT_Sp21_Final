<?php
	$uname="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		$server="localhost";
		$user="root";
		$password="";
		$db="mydatabase";
		$conn = mysqli_connect($server,$user,$password,$db);
		$query= "insert into users values(NULL,'$uname','$pass','user')";
		if(mysqli_query($conn,$query)){
			echo "User inserted";
		}
		else{
			echo "Can not insert user";
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
						<td colspan="2" align="right"><input type="submit"  value="Register" name="login"> <a href="login.php"> Login </a>
					</tr>
				</table>
			</form>
		
	</body>
</html>