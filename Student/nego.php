<table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
		<tr>
			<td bgcolor="#AFDED3">
			&emsp; &emsp;
				<a href="Profile.php">Profile</a>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<a href="Home.php">Home</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;
				
				<a href="ChangePassword.php">Change Password</a> 
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				
			</td>
			<td height="20px" bgcolor="grey"align="right">
				<img width="35px" height="38px" src="pictures/logOut.png">
				<a href="../tution_station.php"><font color="white">Log Out</font></a>	
			</td>
		</tr>

    </table>
<table border="1px" align="center">
			<a href="tutors.php"> Back</a>
		<tr>
			<td>Negotiation</td>
	</tr>
		<td align="center">
			</br>
			
			Name : <input type="text" name="pn" value="<?php echo "Raju"; ?>" disabled>  </br> </br>
			
			Email : <input onkeyup="quantity()" type="text" name="qnty" value="<?php echo "raju@gmail.com"; ?>"disabled> </br> </br>
			Offering: <input type="text" name="pr" value="<?php echo "5000"; ?>">
			
			<div class="buttons">
			<p><br></p>
			<button onclick="window.location.href='Request.php';">Request</button>
		
		
			<span id="msg"></span>
			</br>
		</td>
	<tr>
</table>