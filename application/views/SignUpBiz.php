<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
</head>
<body>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/resources/CSS/sayitright.css">
	<script src = "JS/sayitrightscript.js"></script>
	<!--<?php include 'PHP/signupbizvalidation.php' ?>-->
	<div id = "wrapper">
		<div class ="banner">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url(); ?>/resources/imgsay/imgsay/Logo.png" alt ="Logo"></img></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/index">Home</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/aboutPage">About us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/">Blog</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/buyFromUsPage">Buy From Us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/contactPage">Contact</a></li>
					<li><a class = "flash" href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpPage">Sign Up</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginPage">Login</a></li>
				</ul>
			</div><!--this closes nav div-->
			<div class = "aboutheading">
				<p>Home &#8594 SIGN UP</p>
				<p class = "aboutbig">SIGN UP</p>
			</div><!--this closes aboutheading-->
		</div><!--this closes banner-->
		<div class = "signup">
			<form method = "POST" onsubmit = "return validateSignupBiz();" align = "center" name = "signbizform" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
				<fieldset>
					<p class = "signp"> Select the type of user </p>
					<button onclick = "location.href='http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpInd';return false;"> INDIVIDUAL </button>
					<div class = "space"></div>
					<button onclick = "location.href='http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpEvent';return false;"> EVENT </button>
					<div class = "space"></div>
					<button onclick = "location.href='http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpBiz';return false;"> BUSINESS </button>	
					<hr>
					<p class = "welcome"> Welcome to business records </p>
					<font color = "red" size =1.5px><?php echo form_error('biz');?></font><br>
					<label class = "radio"> type of business </label><font color = "red" size = 1.5px>*</font>
					<input class = "radio" name = "biz" type = "radio" value ="University"> <p class = "radio"> University</p>
					<input class = "radio" name = "biz" type = "radio" value = "Company" ><p class ="radio"> Company </p><br>
					<font color = "red" size =1.5px><?php echo form_error('lname');?></font><br>
					<input type = "text" placeholder="Enter last name" size ="100" name = "lname" value = "<?php echo set_value('lname')?>"><font color = "red" size = 1.5px>*</font><br>
					<font color = "red" size =1.5px><?php echo form_error('email');?></font><br>
					<input type = "text" placeholder="Enter email" size = "100" name = "email" value = "<?php echo set_value('email')?>"><font color = "red" size = 1.5px>*</font><br>
					<font color = "red" size =1.5px><?php echo form_error('pwd');?></font><br>
					<input type = "password" placeholder="Enter password" size = "100" name = "pwd" value = "<?php echo set_value('pwd')?>"><font color = "red" size = 1.5px>*</font><br>
					<button class = "send-button" type = "submit" name = "submitbut">SEND</button>
				</fieldset>
			</form>
		</div><!--this closes signup-->
		<footer>
				<hr/>
				<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>