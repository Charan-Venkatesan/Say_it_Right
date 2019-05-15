<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>/resources/CSS/sayitright.css">
	<div id = "wrapper">
		<div class ="header">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url();?>/resources/imgsay/imgsay/Logo.png" alt ="Logo"</img></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/loginIndPage">Home</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/conferencePage">Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/eventPage">Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myConferencePage">My Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myEventPage">My Events</a></li>
					<li><a class = "flash" href = "settingsPage">Settings</a></li>
				</ul>
			</div><!--this closes nav div-->
		</div><!--this closes header-->
		<div class ="settings">
			<form method = "POST" align = "center" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" enctype="multipart/form-data">
			    <?php foreach($user as $u){?>
				<fieldset>
					<p> Welcome to your profile</p>	
					<hr>
					<img class = "profpic" src = "<?php echo base_url();?>/resources/Uploads/<?=$u->ProfilePic?>" alt = " default profilepic">
					<div class = "lists">
					    <!--<font size=1.5px color = "red"><?php echo form_error('name').form_error('lname');?></font>-->
						<input type = "text" placeholder="Enter your name" size ="24" name = "name" value = "<?php echo $u->name;?>">
						<input type = "text" placeholder="Enter last name" size ="24" name = "lname" value = "<?php echo $u->lastname;?>">
						<!--<font size = 1.5px color="red"><p></p><?php echo form_error('place');?></font>-->
						<input type = "text" placeholder="Enter place name" size = "60" name = "place"  value = "<?php echo $u->placework;?>">
						<!--<font size = 1.5px color = "red"><?php echo form_error('school');?></font>-->
						<input type = "text" placeholder="Enter school" size = "60" name = "school" value = "<?php echo $u->school;?>">
						<!--<font size = 1.5px color = "red"><?php echo form_error('email');?></font>-->
						<input type = "text" placeholder="Enter email" size = "60" name = "email" value = "<?php echo $u->email;?>">
						<button class = "chg-img-button"> CHANGE IMAGE </button>
						<input type = "file"  name = "upload" id = "filebut">
						<!--<font size = 1.5px color = "red"><?php echo form_error('pwd');?></font>-->
						<input type = "text" placeholder="Enter password" size = "60" name = "pwd" value = "<?php echo $u->password;?>">
						<!--<button> CHANGE PASSWORD </button>-->
					</div><!--this closes lists-->
					<button class = "save" type = "submit" name = "submitbut">SAVE CHANGES</button>
					<?php } ?>
				</fieldset>
			</form>
	    <font align = "center" color = "red" size = 1.5px><?php echo validation_errors();?></font> 
		</div><!--this closes settings div-->
		<footer>
			<hr/>
			<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>