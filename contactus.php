<?php
    echo "<link rel='stylesheet' type='text/css' href='./css/contactus.css' />";
    echo "<script type='text/javascript' src='./js/contactus.js'></script>";
    
    
    include('./Includes/header.php');
  
?>
<link rel="stylesheet" href="./css/header.css">
<div class="container">
  <div style="text-align:center">
    <h2>CONTACT US</h2>
    <p class="p2">For all inquiries please send us a messege using the form below.</p>
  </div>
  <div class="row">
    <div class="column">
      <div id="error_messege"></div>
      <form id="myform" action="./Controls/contactus_user_process.php" method="POST" onsubmit="return validation()">
        <label for="name">Name</label></br>
        <input type="text" id="name" name="name" placeholder="Your Name.."></br>
        <label for="email">Email</label></br>
        <input type="email" id="email" name="email" placeholder="Your email.."></br>
        <label for="phone">Phone Number</label></br>
	      <input type="text" id="phone" name="phone" placeholder="Your Phone Number.."></br>
        <label for="messege">Messege</label></br>
        <textarea id="messege" name="messege" placeholder="Write your messege.." style="height:170px"></textarea></br>
        <input type="submit" value="submit">
      </form>
    </div>
    <div class="column">
    <div class="social">
        <h3>Social Media</h3>
        <span class="icon fb">
            <img src="./Assets/facebook.svg" style="width: 40px;height: 40px;">
        </span>
        <span class="icon insta">
            <img src="./Assets/instagram.svg" style="width: 40px;height: 40px;">
        </span>
        <span class="icon pint">
            <img src="./Assets/pinterest.svg" style="width: 40px;height: 40px;">
        </span>
        <div class="icon">
            <img src="./Assets/location.svg" style="width: 40px;height: 40px;">
            No,lane,city.
        </div>
        <p class="p1">Email Us: Partify@gmail.com</p> 
        <p class="p1">Call Us: 0123456789</p>
        </div>
    </div>
	
    </div>
  </div>
</div>