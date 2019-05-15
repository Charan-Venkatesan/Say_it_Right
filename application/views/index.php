<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
</head>
<body>
   <!--  <?php //include 'PHP/home.php';?> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/resources/CSS/sayitright.css">
	<!--<script src = "JS/sayitrightscript.js"></script>-->
	<div id = "wrapper">
		<div class ="backimg">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url();?>/resources/imgsay/imgsay/Logo.png" alt = "Logo"></img></li>
					<li><a class = "flash" href = "index.php">Home</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/aboutPage">About us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/">Blog</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/buyFromUsPage">Buy From Us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/contactPage">Contact</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpPage">Sign Up</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginPage">Login</a></li>
				</ul>
			</div><!--this closes nav div-->
			<div id = "middle">
				<img class = "mobile" src = "<?php echo base_url();?>/resources/imgsay/imgsay/favicon.png" alt = "mobile"></img>
				<p> 
					<span class ="big"> For good <br> communication <br>
						<span class = "say"> Say it Right</span> is <br> a tool that <br> you should use 
					</span> <br><br>
					<br> You can see our video tutorial of use with just pressing this <br>button<br><br><br>
					<div class = "but">
						<button class = "play"><img src = "<?php echo base_url();?>/resources/imgsay/imgsay/play.png" alt = "play icon"></button>
						<b>WATCH THE VIDEO</b>
					</div><!--this closes but-->
				</p>
			</div><!--this closes middle div-->
		</div><!--this closes backimg div-->
		<div class = "newsletter">
			<div class = "texts">
				<p><span class = "subs">Subscribe our Newsletter</span><br><br><span class = "spam">we won't send any kind of spam </span></p>
			</div><!--this closes texts-->
			<div class = "inputs">
			    <form method = "POST" name = "subsform" onsubmit = "return validate();" action = "<?php //echo htmlspecialchars($SERVER["PHP_SELF"]);?>" >
			        <input class = "email" size = "80" type = "text" placeholder="Enter email address" name = "email">
				    <button class = "subscribeButton" type = "submit" name = "submit"> Subscribe</button><br>
				    <font color = "red"><?php echo validation_errors();?></font>
			    </form>
			</div><!--this closes inputs-->
		</div><!--this closes newlsetter-->
		<footer>
				<hr/>
				<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes the wrapper div-->
</body>
</html>