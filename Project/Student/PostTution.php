  <html>
	<head></head>
	<body style="background-color:powderblue;">
	
	<?php
	
	$hasError=false;
	$name="";
	$err_name="";
	
	$uname="";
	$err_uname="";
	
	$password="";
	$err_password="";
	
	$confirmPassword="";
	$err_confirmPassword="";
	
	$email="";
	$err_email="";
	
	$phone="";
	$err_phone="";
	
	$address[]=array();
	$street="";
	$city="";
	$state="";
	$err_address="";
	
	$gender="";
	$err_gender="";
	
	$userType="";
	$err_userType="";
	
	$err_policy="";
	
	$link="";
	
	
	
	
?>
		<?php
		    $hasError=false;
		    $title="";
			$err_title="";
			
			$name="";
			$err_name="";
			
	        $email="";
			$err_email="";
			
			$institute="";
			$err_institute="";
			
			$medium="";
			$err_medium="";
			
			$class="";
			$err_class="";
			
			$day="";
			$err_day="";
			
			$salary="";
			$err_salary="";
			
			$number="";
			$err_phone="";
			
			$gender="";
			$err_gender="";
			
			
			$street="";
			$err_location="";
			
			$Extrainfo="";
			$err_Extrainfo="";
			
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["title"])){
					$err_title="*Title Required @exmple:need a tutor...";
					$hasError = true;
				}
				else{
					$title=$_POST["title"];
				}
			
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError = true;
				}
				else if(strlen($_POST["name"])<6){
					$err_name="*name should be at least 6 characters";
					$hasError = true;
				}
				else{
					if(ctype_alnum($_POST["name"])){
					
						$name=htmlspecialchars($_POST["name"]);
				    }
					else{
						
					$err_name="*Name only contain characters(space,symbols not allowed)";
					$hasError = true;
					}
				}
				if (!isset($_POST["gender"])){
					$err_gender="*Gender Not Selected";
					$hasError = true;
				}
				else{
					if (isset($_POST["gender"]) && ($_POST["gender"]=="Male")){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($_POST["gender"]) && ($_POST["gender"]=="Female")){
							$gender=$_POST["gender"];
						}
					}
				}
				
				
				if (!isset($_POST["medium"])){
					$err_medium="*Medium Not Selected";
					$hasError = true;
				}
				else{
					if (isset($_POST["medium"]) && ($_POST["medium"]=="Bangla")){
						$medium=$_POST["medium"];
					}
					else{
						if (isset($_POST["medium"]) && ($_POST["medium"]=="English")){
							$medium=$_POST["medium"];
						}
					}
				}
			
				if(empty($_POST["email"])){
					$err_email="*Email Required";
					$hasError = true;
				}
				else if(strpos($_POST["email"],"@")!=null){
					$s= strpos($_POST["email"],"@");
					if(strpos($_POST["email"],".",$s+1)!=null){
						$email=$_POST["email"];
					}
					else{
						$err_email="*Email missing (.) after @";
						$hasError = true;
					}
				}
				else{
					$err_email="*Email missing @";
					$hasError = true;
					
				}
				if(empty($_POST["institute"])){
					$err_institute="*Write your institution name"; 
					$hasError = true;
				}
				else{
					$institute=$_POST["institute"];
				}
				
				if(empty($_POST["class"])){                                   
					$err_class="*Please select a class";
					$hasError = true;
				}
				
				else{
					$class=$_POST["class"];
				}
				
				if(empty($_POST["day"])){                                   
					$err_day="*Please select a day";
					$hasError = true;
				}
				
				else{
					$day=$_POST["day"];
				}
				
				if(empty($_POST["salary"])){                                   
					$err_salary="*Please select salary";
					$hasError = true;
				}
				
				else{
					$salary=$_POST["salary"];
				}
				
				
			
				
				if(empty($_POST["number"])){
					$err_phone="*Phone Number Required";
					$hasError = true;
				}
				else{
					if(ctype_digit($_POST["number"])){
						$number=$_POST["number"];
				    }
					else{
						$err_phone="*Number must be numeric";
						$hasError = true;
					}
				}
				if(empty($_POST["street"])){
					$err_location="*Please provide your location";
					$hasError = true;
				}
				else{
					$street=$_POST["street"];
					}
			
				
				if(empty($_POST["Extrainfo"])){
					$err_Extrainfo="*This  Box is Empty";
					$hasError = true;
				}
				
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
			}
			
			
		?>
		<h2 style="margin-top:30px;margin-left:35px;margin-right:93%;color:pink;background-color:RGB(80, 159, 0)"><b><a href="Home.php">Home</a></b></h3>
		<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Make Tution Advertisement</h1></legend>
			<form action="<?php echo $link;?>" method="post">
				<table style="margin-left:5px">
				    <tr>
						<td align="right"><span> Title </span></td>
						<td>:<input size="29" type="text" value="<?php echo $title;?>" name="title">
						<span style="color:red"><?php echo $err_title;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span> Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					 <tr>
						<td align="right"><span> Name of the Institution</span></td>
						<td>:<input size="29" type="text" value="<?php echo $institute;?>" name="institute">
						<span style="color:red"><?php echo $err_institute;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" value="<?php echo $email;?>" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Select  medium </span></td>
						<td>:<input type="radio" value="Bangla" name="medium">Bangla <input type="radio" value="English" name="medium">English
						<span style="color:red"><?php echo $err_medium;?></span></td>
					</tr>
					
					<tr><td align="right"><span>Select Class </span></td>
					<td>:
						<select name="class">
						
							<option>  Select Class  </option>
							<option>  Kg  </option>
							<option> Nursery</option>
							<option>playpen </option>
							<option>class 1 </option>
							<option>class 2</option>
							<option> class 3 </option>
						     <option>class 4</option>
							<option>class 5</option>
							<option> class 6</option>
							<option>class 7 </option>
							<option>class 8</option>
							<option> class 9 </option>
							<option>class 10</option>
							<option> class 11 </option>
						     <option>class 12 </option>
							<option>Secondary</option>
							<option> Higher Secondary </option>
							<option>Admission test </option>
							<option>others</option>
						
						</select> 
					</td>
					</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input size="29" type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" ><span> Select  Location  </span></td>
						<td>:<input size="29" type="text" placeholder="Select location" value="<?php echo $street;?>" name="street">
						<span style="color:red"><?php echo $err_location;?></span></td></td>
					</tr>
					
					 
					<tr>
					<td align="right">Day per week </td>
					<td>:<select name="day">
					
						<option>Day</option>
						<?php
							for($i=1;$i<=7;$i++){
								echo "<option>$i</option>";	
							}
						?>
					</select>
					</td>
					</tr>
					
					<tr>
					<td align="right">Salary range  </td>
						<td>:<select name="salary">
						
								<option>Salary</option>
								
								<?php
									$salary = array("1000tk/month","2000tk/month","3000tk/month","4000tk/month","5000tk/month","6000tk/month","7000tk/month","8000tk/month","9000tk/month","10,000tk/month");
									foreach($salary as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
						<span style="color:red"><?php echo $err_salary;?></span></td>
					</tr>
					
					<tr>
						<td align="right"><span>Tutor Gender</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">: <input type="radio" value="Male" name="gender">Male <span class="my-font1"><input type="radio" value="Female" name="gender">Female</span></span>
						<span style="color:red"><?php echo $err_gender;?></span></td>
					</tr>
					
					<tr>
						<td align="right"><span>Extra Information :</span></td>
						<td><textarea value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea>
						<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
						
					
				</table>
				
				<div class="buttons" align="center" colspan="2">
			        <p><br></p>
			        <button onclick="window.location.href='PostTutionSubmit.php';">Post Tution</button>
					<tr>
					</tr>
				 
				
			</form>
		</fieldset>	
	</body>
</html>