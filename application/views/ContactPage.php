<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
	<script src = "JS/sayitrightscript.js"></script>
</head>
<body>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>/resources/CSS/sayitright.css">
	<div id = "wrapper">
		<div class ="banner">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url();?>/resources/imgsay/imgsay/Logo.png" alt = "Logo"></img></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/index">Home</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/aboutPage">About us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud"/>Blog</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/buyFromUsPage">Buy From Us</a></li>
					<li><a class = "flash" href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/contactPage">Contact</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpPage">Sign Up</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginPage">Login</a></li>
				</ul>
			</div><!--this closes nav div-->
			<div class = "aboutheading">
				<p>Home &#8594 CONTACT</p>
				<p class = "aboutbig">CONTACT US</p>
			</div><!--this closes aboutheading-->
		</div><!--this closes banner-->
		<div class = "details">
		    <form name = "contactform" method = "POST" onsubmit = "return validateContactForm()" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" >
			<table align = "center" id = "contact-table">
				<tr>
					<td>
						<input type = "text" size = "70" placeholder="Enter your name" name = "fname" value = "<?php echo set_value('fname');?>"><br>
						<font color = "red" size = "1.5px">*<?php echo form_error('fname');?></font>
					</td>
					<td rowspan="3">
						<textarea placeholder="Enter Message" rows = "11" cols = "70" name = "msg"><?php echo set_value('msg');?></textarea><br>
						<font color = "red" size = "1.5px">*<?php echo form_error('msg');?></font>
					</td>
				</tr>
				<tr>
					<td>
						<input type = "text" size ="70" placeholder="Enter Last Name" name = "lname" value = "<?php echo set_value('lname');?>"><br>
						<font color = "red" size = "1.5px">*<?php echo form_error('lname');?></font>
					</td>
				</tr>
				<tr>
					<td>
						<input type = "tel"  size = "70" placeholder="Telephone" name = "tel" value = "<?php echo set_value('tel');?>" ><br>
						<font color = "red" size = "1.5px">*<?php echo form_error('tel');?></font><br>
						<font size = 1.5px color = "red"><?php echo "* Mandatory fields";?></font>
					</td>
				</tr>
			</table>
			<button class ="send" type = "submit" name = "submit"> SEND MESSAGE </button>
		</div><!--this closes details-->
		
		<footer>
			<hr/>
			<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>