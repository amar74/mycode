<?php
	$db = mysqli_connect("localhost", "root", "", "avi_db");
	 
	if(isset($_POST['upload']))
	{	
		$name=$_POST['pname'];
		$location=$_POST['plocation'];
		$city=$_POST['pcity'];
		$date=$_POST['pos_date'];
		$bhk=$_POST['bhk'];
		$area=$_POST['area'];
		$price=$_POST['price'];
		$image = $_FILES['image']['name'];
		$dname=$_POST['dev_name'];
		$desc=$_POST['desc'];
		
		$target = "images/".$image;
		move_uploaded_file($_FILES['image']['tmp_name'],$target);
		$query="insert into projects values ('','$name','$location','$city','$date','$bhk','$area','$price','$image','$dname','$desc')";
		
		mysqli_query($db,$query);
		echo 'Data inserted';	
	}
	
	$results=mysqli_query($db, "select * from projects");
	?>

<html>
<head>
<title>Projects</title>
<style>
#form-div{
	width:25%;
	padding:20px;
	height:auto;
	border:1px solid #333;
}
#content{
	width:60%;
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
 <form method="post" action="projects.php" enctype="multipart/form-data">
	<input type="text" name="pname" placeholder="Enter Project Name.."><br><br>
	<input type="text" name="plocation" placeholder="Enter Project Location.."><br><br>
	<select name="pcity">
		<option value="">Select City</option>
		<option value="new delhi">New Delhi</option>
		<option value="gurgaon">Gurgaon</option>
		<option value="noida">Noida</option>
		<option value="mumbai">Mumbai</option>
	</select><br><br>
	<input type="date" name="pos_date" placeholder="Enter Project Possesion date.."><br><br>
	<input type="text" name="bhk" placeholder="Enter Project BHK.."><br><br>
	<input type="text" name="area" placeholder="Enter Project area.."><br><br>
	<input type="text" name="price" placeholder="Enter Project price.."><br><br>
	<input type="file" name="image"><br><br>
	<input type="text" name="dev_name" placeholder="Enter Developer Name.."><br><br>
	<textarea rows="3" cols="22" name="desc" placeholder="Enter Project description.."></textarea><br><br>
	<input type="submit" name="upload" value="submit"><br>
</form>
</div>

<div id="content">
	<table>
		<tr>
			<th>Proj_Name</th>
			<th>Location</th>
			<th>City</th>
			<th>Poss_date</th>
			<th>Bhk</th>
			<th>Area</th>
			<th>Price</th>
			<th>Proj_Picture</th>
			<th>Developer</th>
			<th>Description</th>
		</tr>
	<?php
		while($row = mysqli_fetch_array($results)) 
		{
			echo "<tr>
				<td>".$row['proj_name']."</td>
				<td>".$row['proj_location']."</td>
				<td>".$row['city']."</td>
				<td>".$row['possession_date']."</td>
				<td>".$row['BHK']."</td>
				<td>".$row['area']."</td>
				<td>".$row['price']."</td>
				<td><img src='images/".$row['p_image']."'></td>
				<td>".$row['proj_developername']."</td>
				<td>".$row['proj_desc']."</td>
				</tr>";
	}
	?>
	</table>
</div>

</body>
</html>
