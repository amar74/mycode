<?php
	$db = mysqli_connect("localhost", "root", "", "avi_db");
	$sql="select * from proj_portfolio";
	$results=mysqli_query($db,$sql);
?>
<!DOCTYPE html>

<html>
<head>
<title>PropMatterz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/portfolio.css" rel="stylesheet" type="text/css" media="all">
<style>
	
* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 10px;
}


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

#shado{
	margin:auto;
	box-shadow:2px 3px 9px 4px grey;
}
</style>
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/work7.png'); height:600px;"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html" style="color:#ea9f15; font-weight:600;">PROPMATTERZ</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
			<li style="margin-right:5px;"><a href="Loan form.html"><button type="button" class="loan-button" id="myBtn">Get a Home Loan</button></a></li>
			<li style="margin-right:5px; font-size:18px;"><a href="index.html"><i class="fa fa-home" style="color:#C5A059;"></i></a></li>
          <li class="" style="font-weight:600;">
			<a href="index.html" >Home</a>
		 </li>
          <li><a class="" style="font-weight:600;" href="services.html">Services</a>
			</li>
			<li class="active" style="font-weight:600;"><a href="portfolio.php" >Portfolio</a></li>
          <li style="font-weight:600;"><a href="Contactus.php">Contact Us</a></li>
        </ul>
      </nav>
      </header>
  </div>
  </div>
  
  
<div class="wrapper row3" >
  <main class="hoc container clear"> 
    
    <div class="btmspace-80 center">
      <h3 class="nospace hed">Our Portfolio</h3>
    </div>
	<?php
		$i=0;
		while($row = mysqli_fetch_array($results)) 
		{
			if($i%3==0)
			{
				echo "<div class='row' style='margin-bottom:20px;'>";
			}
			echo"
				<div class='col-md-4 '>
				<div class='thumbnail' id='shado'>
        
				<span><a href='images/".$row['proj_image']."' target='_blank'><img src='images/".$row['proj_image']."' style='width:100%; height:220px;'></a></span>

				<div class='caption' style='background:#333; color:#fff;padding:7px 0px 1px 7px;'>
				<span><p>".$row['proj_location']."</p></span>
				</div>
				
				</div>
				</div>
			";	
			if($i%3==2){
				echo" </div> ";
			}
			$i++;
		}	
			
?>
    
	</main>
</div>

	<div class="wrapper" style="background:gainsboro; padding:60px;">
	<article id="shout" class="hoc container clear" style="padding:60px 0px; text-align:center;"> 
	  <h2 class="heading btmspace-10" style="color:#333;">Clients</h2>
      <p class="nospace"></p>
    </article>
	</div>

	<div class="wrapper row3" >
  <section class="hoc container clear" > 
    <div class="bottom-spac center">
      <h3 class="nospace title2">Why Choose Us</h3>
    </div>
    <div class="group">
		<p style="font-size:18px; text-align:justify; line-height:28px;">
		The PropMatterz Promise is built on a foundation of integrity. We’ve developed the reputation for being a skilled, creative and reliable company. And it’s not because we’re a leading construction firm with locations across the country – it’s because of our people. We believe that our employees are the most valuable asset and should be treated accordingly. That’s why PropMatterz promises that every employee, regardless of age, rank or experience, has a right to:
	    </p>
	  <ul style="width:100%; margin:auto; padding-top:25px; font-size:18px; line-height:34px; list-style:none; color:grey;">
 <p style="font-size:18px; text-align:justify; line-height:28px;">
			<li><i class="fa fa-check-circle" style="font-size:25px; margin-right:5px;"></i> A safe workplace.</li>
			<li><i class="fa fa-check-circle" style="font-size:25px; margin-right:5px;"></i>A positive work environment supported by culture that make employment an enjoyable experience.</li>
			<li><i class="fa fa-check-circle" style="font-size:25px; margin-right:5px;"></i>Total cash compensation and benefits comparable to market.</li>
			<li><i class="fa fa-check-circle" style="font-size:25px; margin-right:5px;"></i>A level of accountability that recognizes performance and then rewards accordingly.</li>
			<li><i class="fa fa-check-circle" style="font-size:25px; margin-right:5px;"></i>A career path supported by the appropriate level of training and development.</li>
		</ul>
	  
    </div>
    
  </section>
</div>

<div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/con2.png'); ">
  <footer id="footer" class="hoc clear"> 
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
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="index.html">PROPMATTERZ</a></p>
    <p class="fl_right">Designed & Developed by <a target="_blank" href="www.webgax.com" title="Quassarian Innovations">WEBGAX - QUASSARIAN INNOVATION PVT. LTD.</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>


<!-- JAVASCRIPTS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>

</body>
</html>

