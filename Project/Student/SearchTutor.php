		<html> 
			<head>
		    <title> Search Tutor </title> 
			</head>
			
		    <body style="background-color:powderblue;">
			
			<h2 style="margin-top:30px;margin-left:35px;margin-right:93%;color:pink;background-color:RGB(80, 159, 0)"><b><a href="Home.php">Home</a></b></h3>
		    <fieldset style="width:800px;border:solid 2px" >
			<legend> <h1> Search For Tutors</h1></legend>
			
			  <form action="" method="">
			   <table>
			   <tr>
					<td><span> Select District  </span></td>
					<td>:
						<select name="SelectDistrict"  >
						
						    <option>Select District </option>
							<option>Dhaka </option>
							<option>NarayanGanj </option>
							<option>Faridpur  </option>
						    <option>Gopalganj </option>
							<option>Gazipur </option>
							<option>Kishoreganj </option>
							<option>Rajbari </option>
							<option>Narsingdi </option>
							<option>Shariatpur</option>
							<option>Tangail </option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span> Select Area  </span></td>
					<td>:
						<select name="Select Area "     name="area">
						    <option>Select Area</option>
							<option>Bashudara Residential</option>
							<option>Tangail</option>
							<option>Savar</option>
							<option>Mirpur</option>
							<option>Gulshan</option>
						  </select> 
					</td>
					
				</tr>
					<td><span> Select Gender</span></td>
				<td>:<input type="radio" value="Male" name="Select Gender">Male<input type="radio" value="Female" name="Select Gender">Female </td>
					
				</tr>
				
				<tr>
					<td><span>Select Medium  </span></td>
					<td>:
						<select name="Select Medium" >
						    <option>Select Medium </option>
							<option>Bangla</option>
							<option>English</option>
							<option>Religious Studies </option>
						    <option>Arts </option>
							<option>Admission Test </option>
							<option>Special Skill Learning  </option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span>Select Class </span></td>
					<td>:<input type="checkbox" value="Playpen" name="class[]">Playpen
					     <input type="checkbox" value="Secondary " name="class[]">Secondary 
						 <input type="checkbox" value="Higher Secondary" name="class[]">Higher secondary
						 <input type="checkbox" value="Admission test" name="class[]">Admission Test</td>
				</tr>
				
				
				<tr>
					<td><span> Leave a comment </span></td>
					<td>:<textarea  name="Leave a comment "></textarea></td>
					
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="submit"></td>
				</tr>

			</table>


		</form>
	</body>
</html>