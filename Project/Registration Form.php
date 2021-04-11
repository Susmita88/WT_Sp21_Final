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
	
	
	if($_SERVER['REQUEST_METHOD']== "POST"){
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["uname"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		else if(strlen($_POST["uname"])<5){
			$err_uname="*Username should be at least 5 characters";
			$hasError = true;
		}
		else{
			if(ctype_alnum($_POST["uname"])){
			
				$uname=htmlspecialchars($_POST["uname"]);
			}
			else{
				
				$err_uname="*Username only contain characters(space,symbol not allowed)";
				$hasError = true;
			
			}
		}
		if(empty($_POST["pass"])){
			$err_password="*Password Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"])<8){
			$err_password="*Password should be at least 8 characters";
			$hasError = true;
		}
		
		else{
			$password=$_POST["pass"];
		}
		if(empty($_POST["cpass"])){
			$err_confirmPassword="*Confirm Password Required";
			$hasError = true;
		}
		else if(($_POST["cpass"])!=$_POST["pass"]){
			$err_confirmPassword="*Password Not Matched";
			$hasError = true;
		}
		else{
			$confirmPassword=$_POST["cpass"];
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
		if(empty($_POST["number"])){
			$err_phone="*Phone Number Required";
			$hasError = true;
		}
		else{
			if(ctype_digit($_POST["number"])){
				$phone=$_POST["number"];
			}
			else{
				$err_phone="*Number must be numeric";
				$hasError = true;
			}
		}
		if(empty($_POST["street"])||empty($_POST["city"])||empty($_POST["state"])){
			$err_address="*Address Required";
			$hasError = true;
		}
		else{
			$street=$_POST["street"];
			$city=$_POST["city"];
			$state=$_POST["state"];
			
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
		
		if (!isset($_POST["userType"])){
            $err_userType="*User Type Not Selected";
			$hasError = true;
			
        }
		else{
			if (isset($_POST["userType"]) && ($_POST["userType"]=="Student/Guardian")){
				$userType=$_POST["userType"];
				
			}
			else{
				if (isset($_POST["userType"]) && ($_POST["userType"]=="Tutor")){
					$userType=$_POST["userType"];
				}
			}
		}
		
		if(isset($_POST["policy"])){
			//echo $checked . '<br>';	
		}
		else {
			$err_policy="*Must follow all terms & condition";
			$hasError = true;
		}
		
		if(!$hasError){
			$link="Profile.php";
		}
		
		
	}
	
?>


<html>
	<head>
	    <title>Tution Station</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body style="background:rgb(151, 117, 250);">
	    
		
		<div class="menu-bar">
		
			<a href="tution_station.php"><img src="logo.png" class="logo"></a>
		
			<ul>
			
				<li class="active"><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
				
				<li><a href="#"><i class="fa fa-clone"></i>Find A Tutor</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">Search for Tutors</a></li>
								<li><a href="#">Request A Tutor</a></li>
								<li><a href="#">Online Tutoring</a></li>
						 </ul>	
					 </div>	
				</li>					 
				<li><a href="#"><i class="fa fa-clone"></i>How It Works</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">For Student</a></li>
								<li><a href="#">For Higher Ed</a></li>
								<li><a href="#">What Customer Say</a></li>
						 </ul>	
					 </div>
				</li>
				<li><a href="#"><i class="fa fa-user"></i>About Us</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#"></i>Contact Us</a></li>
						 </ul>	
					 </div>	
				</li>
				
			</ul>
			
		</div>
		<div>
			
			<div class="center1">
				<fieldset style="border:solid 10px;color:rgb(177, 151, 252);background-color:rgb(208, 191, 255);padding:20px" >
				<legend> <h1 style="color:rgb(166, 30, 77);font-weight:250px;font-size:50px;padding-bottom:20%;">Registration</h1></legend>
					<form action="<?php echo $link;?>" method="post">
						<table align="center">
							
							<tr>
								<td><span class="my-font1">Name</span></td>
								<td style="padding:8px 0px 10px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" value="<?php echo $name;?>" placeholder="name" name="name">
								<span style="color:red"><?php echo $err_name;?></span></td>			
							</tr>
							</tr>
					<tr>
						<td ><span class="my-font1">User Name</span></td>
						<td style="padding:8px 0px 10px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" name="uname">
						<span class="err-msg"><?php echo $err_uname;?></span></td>
						
					</tr>
					<tr>
						<td><span class="my-font1">Password</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="password" value="<?php echo $password;?>" placeholder="password" name="pass">
						<span class="err-msg"><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td><span class="my-font1">Confirm Password </span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="password" value="<?php echo $confirmPassword;?>" placeholder="confirm password" name="cpass">
						<span class="err-msg"><?php echo $err_confirmPassword;?></span></td>
					</tr>
					<tr>
						<td class="my-font1"><span>Email </span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" value="<?php echo $email;?>" name="email">
						<span class="err-msg"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td class="my-font1"><span>Phone </span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span> +88 <input class="my-font num-text-field" type="text" placeholder="Number" value="<?php echo $phone;?>" name="number">
						<span class="err-msg"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td class="my-font1" style="vertical-align: top" rowspan="2"><span>Address</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><input class="my-font my-text-field" type="text" placeholder="Street Address" value="<?php echo $street;?>" name="street">
						</td>
					
				    </tr>
					<tr>
						<td style="padding:8px 0px 15px 0px"><input style="margin-left:4.9px" size="12" class="my-font" type="text" placeholder="City" value="<?php echo $city;?>" name="city"> - <input style="margin-left:2.3px" size="12" class="my-font" type="text" placeholder="State" value="<?php echo $state;?>" name="state">
						<span style="color:red"><?php echo $err_address;?></span></td>
				    </tr>
					
					<tr>
						<td class="my-font1">Birth Date</td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">:</span><select class="my-font1" name="day">
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select class="my-font1" name="month">
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select class="my-font1" name="year">
								<option>Year</option>
								
								<?php
									for($y=2021;$y>=1900;$y--){
										echo "<option>$y</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="my-font1"><span>Gender</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">: <input type="radio" value="Male" name="gender">Male <span class="my-font1"><input type="radio" value="Female" name="gender">Female</span></span>
						<span style="color:red"><?php echo $err_gender;?></span></td>
					</tr>
							
							
							<tr>
								<td class="radio-style" ><input type="radio" value="Tutor" name="userType"><div class="radio-back"><img src="tutor.png" class="logo2"><span class="radio-text">as a<br>Tutor</span></div></td>
								<td class="radio-style" ><input type="radio" value="Student/Guardian" name="userType"><div class="radio-back"><img src="StudentGuardian.png" class="logo2"><span class="radio-text">as a<br> Student/Guardian</span></div>
								
								<span style="color:red"><?php echo $err_userType;?></span></td>
						    </tr>
							
							<tr>
								<td style="padding:24px 0px 15px 29px" colspan="2" align="left"><input type="checkbox" value="" name="policy"><span class="my-font1" >Agree with all the terms & condition</span>
								<span style="color:red"><?php echo $err_policy;?></span></</td>
							</tr>
							<div class="buttons">
			                <p><br></p>
			                <button onclick="window.location.href='Profile.php';">Submit</button>
							
						</table>
					</form>
				</fieldset>	
		</div>
		
	</body>
</html>