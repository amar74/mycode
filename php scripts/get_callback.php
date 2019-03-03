<?php
if(isset($_POST['phone']))
{   	
	$phone=$_POST['phone'];
	if(!empty($phone))
	{

	$conn=mysqli_connect('localhost','root','','avi_db');
	if(!$conn)
	{
		echo'error connecting database';
		exit();
	}
	
	$query1="insert into get_callback values('$phone')";
	
	$run=mysqli_query($conn,$query1);
	if($run)
	{
		header("location:  http://localhost/Propmatterz/Contactus.html");
	}
	else{
		echo 'Query is not executed';
	
	}
}
}
?>