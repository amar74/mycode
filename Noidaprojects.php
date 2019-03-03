<?php
	$db = mysqli_connect('localhost','root','','avi_db');
	$sql="select * from projects where city='noida'";
	$results=mysqli_query($db,$sql);
?>
<!DOCTYPE html>

<html>
<head>
<title>PropMatterz</title>
<!-- Write Your Name -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/Delhiproject.css" rel="stylesheet" type="text/css" media="all">
</head>
<style>
.head-space{
	margin-top:-10px;
	margin-bottom:-10px;
}
.loan-button{
	border:1px solid #fff;
	border-radius:3px;
	background:transparent;
	text-decoration:none;
	color:#fff;
	padding:10px;
}
.loan-button:hover{
	background:#ffffff;
	color:#333;
}
</style>
<body id="top">
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/work2.png'); height:410px;"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html" style="color:#ea9f15; font-weight:600;">PROPMATTERZ</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
		<li style="">
			<a href="Loan form.html"><button type="button" class="loan-button" id="myBtn">Get a Home Loan</button></a></li>
			<li style="margin-right:5px; font-size:18px;"><a href="index.html"><i class="fa fa-home" style="color:#C5A059;"></i></a></li>
          <li class="" style="font-weight:600;">
			<span class="active"><a href="index.html" >Home</a></span>
			</li>
          <li><span class=""><a class="" style="font-weight:600;" href="services.html">Services</a></span>
          </li>
		<li style="font-weight:600;"><span class=""><a href="portfolio.php">Portfolio</a></span></li>
          <li style="font-weight:600;"><span class=""><a href="Contactus.php">Contact Us</a></span></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <div id="pageintro" class="hoc clear"> 
  </div>

  <div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="btmspace-80 center">
      <h3 class="nospace hed">Projects in Noida</h3>
	  <p class="nospace" style="font-size:17px;">Find your home in 12+ cities in India</p>
    </div>

	<!---- ----->

<?php
	while($row = mysqli_fetch_array($results)) 
	{
?>
	<div class="row" style="margin-top:50px; padding:20px 0px; background:#f3f3f3;">
	<div class="col-md-4">
		<?php echo"<span><img src='images/".$row['p_image']."' style='width:100%; height:350px; margin:auto;' ";?></span>
		</div>
		<div class="col-md-8">
			<div class="" style="width:100%; height:350px; margin:auto;">
				<span style="width:250px;  float:left; margin:0; padding:0px; font-size:17px; color:#000; border-right:1px solid #CCC;"><?php echo"<span>".$row['proj_name']."</span>"; ?><br><?php echo"<span>".$row['proj_location']."</span>"; ?></span>
				<span style="float:left ; margin-left:30px; padding:0px; font-size:17px; color:#000;"><?php echo"<span>".$row['proj_developername']."</span>"; ?></span>
				<div style="width:100%; height:auto; position:relative; top:40px;">
				<table class="table" style=" text-align:center;">
					<tbody >
					<tr >
					<td><?php echo"<span>".$row['BHK']."</span>"; ?></td><td><?php echo"<span>".$row['area']."</span>"; ?></td><td><?php echo"<span>".$row['price']."</span>"; ?></td>
					</tr>
					</tbody>
				</table>	
				</div>
			<div style="width:100%; height:auto;  position:relative; top:40px; padding:10px; 0px 5px 0px">
					<p style="font-size:18px; ">About Project</p>
					<p style=""><?php echo"<span>".$row['proj_desc']."</span>"; ?></p>
					<button class="btn" id="butn" >Get Callback</button>
			</div>
			
		</div>
	</div>
	</div>
	<?php 
		}
	?>
	<!---- ----->
	</main>
</div>


<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/con2.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h3 class="heading" style="text-transform:Capitalize;"><a href="index.html" style="color:orange;">PropMatterz</a></h3>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <ul class="nospace meta">
        <li class="btmspace-15"><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@propmatterz.com</li>
      </ul>
    </div>
    <div class="one_third">
      <form method="post" action="#">
        <fieldset>
          <legend style="color:grey;">Get call back:</legend>
          <div class="clear">
            <input type="text" value="" placeholder="Type Contact Number Here&hellip;">
            <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>
          </div>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="index.html">PROPMATTERZ</a></p>
    <p class="fl_right">Designed & Developed by <a target="_blank" href="www.webgax.com" title="Quassarian Innovations">WEBGAX - QUASSARIAN INNOVATION PVT. LTD.</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<!-- JAVASCRIPT-->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
	
</body>
</html>
