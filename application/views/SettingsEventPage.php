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
					<li><a href = "<?php echo base_url();?>index.php/Home/loginEventPage">Home</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/conferenceEventPage">Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/eventManagePage">Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myConferenceEventPage">My Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myEventManagePage">My Events</a></li>
					<li><a class = "flash" href = "settingsEventPage">Settings</a></li>
				</ul>
			</div><!--this closes nav div-->
		</div><!--this closes header-->
		<div class ="settings">
			<form method = "POST" align = "center" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" enctype="multipart/form-data">
			    <?php foreach($user as $u){?>
				<fieldset>
					<p> Welcome to your profile</p>	
					<hr>
					<img class = "profpic" src = "<?php echo base_url();?>/resources/Uploads/<?=$u->ProfilePic?>" alt = "default profilepic">
					<div class = "lists">
					    <!--<font size=1.5px color = "red"><?php echo form_error('name').form_error('lname');?></font>-->
						<input type = "text" placeholder="Enter your name" size ="24" name = "name" value = "<?php echo $u->Firstname;?>">
						<input type = "text" placeholder="Enter last name" size ="24" name = "lname" value = "<?php echo $u->Lastname;?>">
						<!--<font size = 1.5px color = "red"><?php echo form_error('email');?></font>-->
						<input type = "text" placeholder="Enter email" size = "60" name = "email" value = "<?php echo $u->Email;?>">
						<br><br><br><br>
						<button class = "chg-img-button"> CHANGE IMAGE </button>
						<!--<font size = 1.5px color = "red"><?php echo form_error('pwd');?></font>-->
						<input type = "text" placeholder="Enter password" size = "60" name = "pwd" value = "<?php echo $u->Password;?>">
						<input type = "file"  name = "upload" id = "filebutevent">
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