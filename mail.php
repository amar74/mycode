<?php
 
    $to = "quassariangax@gmail.com"; 
    $from = $_REQUEST['number']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "PanditRaja Jarvis just fetched an online query for you."; 
 
    $fields = array(); 
    $fields{"name"} = "Name"; 
    $fields{"no"} = "Contact number"; 
    
    
    
 
    $body = "Hello Sir, I am Webgax Jarvis this side (your personal virtual assistant). I have just fetched an online query for you, please contact this person. Here are the customer details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
  if (isset($_POST["submit"])) {

    $send = mail($to, $subject, $body, $headers);
  }
?>