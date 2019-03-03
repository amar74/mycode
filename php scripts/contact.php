<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($message))
	{
		$conn=mysqli_connect("localhost","root","","avi_db");
		if(!$conn){
			echo'error connecting database';
			exit();
		}
		
		$query="insert into contact_details values('','$name','$email','$message')";
		
		$run=mysqli_query($conn,$query);
		if(!$run)
		{
			die('Error in data insertion'.mysqli_error());
		}
		else{
			header("location: http://localhost/Propmatterz/Contactus.html");
		}
		
	}
}
?>