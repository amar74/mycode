	

<!DOCTYPE html>

<html>
<head>
<title>PropMatterz</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/contact.css" rel="stylesheet" type="text/css" media="all">
<style>

.label-div{
		width:; 
		height:auto; 
		margin:left; 
		padding-top:0px;
	}
</style>
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/conss.png'); height:500px;"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear head-space"> 
      <div id="logo" class="fl_left" style="padding-top:10px;">
        <h1><a href="index.html" style="color:#ea9f15; font-weight:600;">PROPMATTERZ</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
		<li id="home-icon" style="">
		<a href="Loan form.html"><button type="button" class="loan-button" id="myBtn">Get a Home Loan</button></a></li>
		<li style="margin-right:5px; font-size:18px;"><a href="index.html"><i class="fa fa-home" style="color:#C5A059;"></i></a></li>
		<li class="" style="font-weight:600;"><a href="index.html" >Home</a></li>
        <li><a class="" style="font-weight:600;" href="services.html">Services</a>
		</li>
		<li style="font-weight:600;"><a href="portfolio.php" >Portfolio</a></li>
        <li class="active" style="font-weight:600;"><a href="Contactus.php">Contact Us</a></li>
        </ul>
      </nav>
      </header>
  </div>
  </div>
  
  <div class="wrapper row3" style="max-height:150px;">
  <main class="hoc container clear"> 
    
    <div class="btmspace-80 center">
      <h3 class="nospace hed">Contact Us</h3>
    </div>
</main>
</div>
<div class="" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <div class="row" style="background:#fff; margin:0 auto; height:auto; padding:10px 30px 30px 30px;">
		<div class="col-md-4" style="margin:auto;">
			<div style="width:100%;">
				<div class="address">
					<ul class="address-list">
						<li class="items">
							<div style="width:15%; height:auto; margin-top:3px; font-size:20px; float:left; display:inline;"><i style="font-size:27px; color:#ed8a09;" class="fa fa-map-marker"></i></div>
							<div style="width:85%; height:auto; float:left; display:inline;">
								<h4 class="items-title">Office Venue</h4>
								<p class="items-subtitle">777 Seventh Avenue, North Tower
									Mumbai 110078</p>
							</div>
						</li>
						<li class="items">
							<div style="width:15%; height:auto; margin-top:3px; font-size:20px; float:left; display:inline;"><i style="font-size:23px; color:#ed8a09;" class="fa fa-phone"></i></div>
							<div style="width:85%; height:auto; float:left; display:inline;">
								<h4 class="items-title">Phone Number</h4>
								<p class="items-subtitle">(+91) 99999-99999
								(+91)88888-88888</p>
							</div>
						</li>
						<li class="items">
							<div style="width:15%; height:auto; margin-top:3px; font-size:20px; float:left; display:inline;"><i style="font-size:23px; color:#ed8a09;" class="fa fa-envelope"></i></div>
							<div style="width:85%; height:auto; float:left; display:inline;">
								<h4 class="items-title">Email Address</h4>
								<p class="items-subtitle">info@propmatterz.com
								contact@propmatterz.com</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="social-menu">
					<ul class="menu-list">
						<li class="menu-items"><a href="#"><i style="font-size:20px; " class="fa fa-facebook"></i></a></li>
						<li class="menu-items"><a href="#"><i style="font-size:20px;" class="fa fa-twitter"></i></a></li>
						<li class="menu-items"><a href="#"><i style="font-size:20px;" class="fa fa-dribbble"></i></a></li>
						<li class="menu-items"><a href="#"><i style="font-size:20px;" class="fa fa-linkedin"></i></a></li>
						<li class="menu-items"><a href="#"><i style="font-size:20px;" class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			</div>
		
		
		<div class="col-md-8" style=" margin:auto;">
			<div class="contact-form">
				<div id="title">
					<span style="font-size:14px;">Get in Touch</span>
					<h3 style="font-size:20px; font-weight:600; ">Send Message</h3>
					<hr style="width:12%; margin-left:0px; margin-top:-10px; background:orange;">
				</div>
				<div id="form-inner">
				
				
	<?php
 
    $to = "quassariangax@gmail.com"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
	$message = $_REQUEST['message']; 
    $headers = "From: $from"; 
    $subject = "Propmatterz just fetched an online query for you."; 
 
    $fields = array(); 
    $fields{"name"} = "Name"; 
    $fields{"email"} = "Email";
	$fields{"message"} = "Message";
    
    
    
 
    $body = "Hello Sir, I am Webgax Jarvis this side (your personal virtual assistant). I have just fetched an online query for you, please contact this person. Here are the customer details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
  if (isset($_POST["submit"])) {

    $send = mail($to, $subject, $body, $headers);
	echo "<h2 style='color:green;'>Thank you! </h2>";
  }
?>

					<form class="form-group" id="frm" method="post" action="#">
						<div class="row">
							<div class="col-sm-12">
								<input type="text" class="form-control field1" name="name" placeholder="Name..">
							</div>
							<div class="col-sm-12">
								<input type="email" class="form-control field1" name="email" placeholder="Email..">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<textarea rows="10" class="form-control messag" name="message" placeholder="Message.."></textarea>
							</div>
						</div>
						<div class="submit-btn">
						<button type="submit" class="btn butn" name="submit" id="submit">Send Message</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
		
  </div>
  </div>
  
  <div style="width:100%; margin:0px auto; height:auto; background:#fff;">
	<div style="width: 100%;  margin-bottom:20px;">
	<iframe width="100%" height="350" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=D2%2F22%20Jivan%20park%20Uttam%20nagar+(Propmatterz)&ie=UTF8&t=&z=14&iwloc=B&output=embed" 
	frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">PROPMATTERZ</a> by <a href="https://www.mapsdirections.info/en/">WEBGAX - QUASSARIAN INNOVATIONS PVT. LTD.</a></iframe>
	</div><br />
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
      <form method="post" action="get_callback.php">
        <fieldset>
          <legend style="color:grey;">Get call back:</legend>
          <div class="clear">
            <input type="text" name="phone" placeholder="Type Contact Number Here&hellip;">
            <button class="fa fa-share" type="submit" title="Submit" name="submit_btn"><em>Submit</em></button>
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

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
  
  
