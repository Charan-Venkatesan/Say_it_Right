<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
</head>
<body>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/resources/CSS/sayitright.css">
	<!--<script src = "JS/sayitrightscript.js"></script>-->
	<div id = "wrapper">
		<div class ="banner">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url(); ?>/resources/imgsay/imgsay/Logo.png" alt = "Logo"></img></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/index">Home</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/aboutPage">About us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/">Blog</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/buyFromUsPage">Buy From Us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/contactPage">Contact</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpPage">Sign Up</a></li>
					<li><a class = "flash" href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginPage">Login</a></li>
				</ul>
			</div><!--this closes nav div-->
			<div class = "aboutheading">
				<p>Home &#8594 Login</p>
				<p class = "aboutbig">LOGIN</p>
			</div><!--this closes aboutheading-->
		</div><!--this closes banner-->
		<div class = "login">
			<form method = "POST" align = center action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" name = "loginform">
				<fieldset>
				    <p>
				        <font color = "red" size =1.5px><?php echo form_error('email');?></font><br>
						<input type = "text" size = "60" placeholder="Enter Email" name = "email">
				    </p>
					<p>
					    <font color = "red" size =1.5px><?php echo form_error('pwd');?></font><br>
						<input type = "password" size = "60" placeholder="Enter Password" name = "pwd">
					</p>
					<button type = "submit" name = "submit" value = "SEND">SEND</button>
				</fieldset>	
		</div>
		<footer>
				<hr/>
				<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>