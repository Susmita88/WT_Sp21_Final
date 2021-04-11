<html>
	<body>
		<p>  <b> Form submitted  </b> <br> <i> Thank You For Your Response<br> -Tuition Station</i>   </p> 
		     <?php
		        echo "Title:".$_POST["title"]."<br>";
			    echo "Name: ". $_POST["name"]."<br>";
				echo "Institution: ".$_POST["institute"]."<br>";
			    echo "Email: ". $_POST["email"]."<br>";
				echo "Medium: ".$_POST["medium"]."<br>";
				echo "Selected Class: ".$_POST["class"]."<br>";
				echo "Phone: ".$_POST["number"]."<br>";
				echo "Location: ".$_POST["street"]."<br>";
				echo "Day Per Week: ".$_POST["day"]."<br>";
				echo "Salary Range: ".$_POST["salary"]."<br>";
				echo "Tutor Gender: ".$_POST["gender"]."<br>";
				echo "Extra Information: ".$_POST["Extrainfo"]."<br>";
			
		?>
		<h2 style="margin-top:30px;margin-left:35px;margin-right:85%;white-space:nowrap;color:pink;background-color:RGB(80, 159, 0)"><b><a href="Home.php">Go to Home Page</a></b></h3>
		
	</body>
</html>