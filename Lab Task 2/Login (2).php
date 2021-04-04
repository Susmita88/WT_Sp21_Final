<?php
    $server="localhost";
	$user="root";
	$password="";
	$db="wt_sp21_l";
	$conn=mysqli_connect($server,$user,$password,$db);
	
	if($conn){
		echo "Connected Successfully";
	}
	else{
		echo mysqli_connect_error();
    }
		  
	$query="insert into admin values('Shushmita','Shushmita','12345')";
		if( mysqli_query($conn,$query)){
			echo "Value inserted successfully";
		}
		else{
		    echo "Problem";
		}
				 
  ?>