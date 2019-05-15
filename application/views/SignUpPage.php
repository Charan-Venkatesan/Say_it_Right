<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
</head>
<body>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/resources/CSS/sayitright.css">
	<script src = "JS/sayitrightscript.js"></script>
	<div id = "wrapper">
		<div class ="banner">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url(); ?>/resources/imgsay/imgsay/Logo.png" alt ="Logo"></img></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php">Home</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/aboutPage">About us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/">Blog</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/buyFromUsPage">Buy From Us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/contactPage">Contact</a></li>
					<li><a class = "flash" href = "signUpPage">Sign Up</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginPage">Login</a></li>
				</ul>
			</div><!--this closes nav div-->
			<div class = "aboutheading">
				<p>Home &#8594 SIGN UP</p>
				<p class = "aboutbig">SIGN UP</p>
			</div><!--this closes aboutheading-->
		</div><!--this closes banner-->
		<div class = "signup">
			<form method = "post" align = "center">
				<fieldset>
					<p> Select the type of user </p>
					<button onclick = "location.href='http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpInd'; return false;"> INDIVIDUAL </button>
					<div class = "space"></div>
					<button onclick = "location.href='http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpEvent'; return false"> EVENT </button>
					<div class = "space"></div>
					<button onclick = "location.href='http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpBiz'; return false"> BUSINESS </button>
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