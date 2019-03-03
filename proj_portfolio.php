<?php
	$db = mysqli_connect("localhost", "root", "", "avi_db");
	 
	if(isset($_POST['upload']))
	{	
		$image = $_FILES['image']['name'];
		$location=$_POST['proj_location'];
		
		$target = "images/".$image;
		move_uploaded_file($_FILES['image']['tmp_name'],$target);
		$sql="insert into proj_portfolio values ('','$image','$location')";
		
		$run=mysqli_query($db,$sql);
		if($run)
		{
			echo 'Data inserted';	
		}else{
			echo 'Data not inserted';
		}
		
		}
	
	$results=mysqli_query($db, "select * from proj_portfolio");
	?>

<html>
<head>
<title>Projects</title>
<style>
#form-div{
	width:20%;
	padding:20px;
	height:auto;
	border:1px solid #333;
}
#content{
	width:30%;
	height:auto;
	margin: 20px auto;
	padding:10px 3px 5px 3px;

}
table {
	border:1px solid #333;
	border-collapse:collapse;
}
tr, th, td{
	border:1px solid #333;
	padding:5px;	
}
img{
	width:100px;
	height:100px;	
}
</style>
</head>
<body>

<div id="form-div">
 <form method="post" action="proj_portfolio.php" enctype="multipart/form-data">
	<input type="file" name="image"><br><br>
	<input type="text" name="proj_location" placeholder="Project Name.."><br><br>
	<input type="submit" name="upload" value="submit"><br>
</form>
</div>

<div id="content">
	<table>
		<tr>
			<th>Proj_Picture</th>
			<th>Location</th>
			</tr>
	<?php
		while($row = mysqli_fetch_array($results)) 
		{
			echo "<tr>
				<td><img src='images/".$row['proj_image']."'></td>
				<td>".$row['proj_location']."</td>
				</tr>";
	}
	?>
	</table>
</div>

</body>
</html>
