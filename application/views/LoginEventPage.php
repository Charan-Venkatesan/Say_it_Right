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
					<li><img class = "Logo" src = "<?php echo base_url();?>/resources/imgsay/imgsay/Logo.png" alt = "Logo"</img></li>
					<li><a class ="flash" href = "<?php echo base_url();?>index.php/Home/loginEventPage">Home</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/conferenceEventPage">Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/eventManagePage">Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myConferenceEventPage">My Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myEventManagePage">My Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/settingsEventPage">Settings</a></li>
				</ul>
			</div><!--this closes nav div-->
		</div><!--this closes header-->
		<div>
		    <div class ="settings">
			<form method = "POST" align = "center" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
				<fieldset>
					<p> Welcome to your Event Account</p>	
					<hr>
					<div class = "lists">
						<input type = "text" placeholder="Enter Event Title" size ="60" name = "title" value = "<?php echo set_value('title');?>">
						<font color = "red" size = "1.5px">*<?php echo form_error('title');?></font>
						<input type = "text" placeholder="Enter Event Description" size = "60" name = "desc"  value = "<?php echo set_value('desc');?>">
						<font color = "red" size = "1.5px">*<?php echo form_error('desc');?></font>
						<input type = "text" placeholder="Enter Event Date(YYYY-MM-DD)" size = "60" name = "date" value = "<?php echo set_value('date');?>">
						<font color = "red" size = "1.5px">*<?php echo form_error('date');?></font>
						<input type = "text" placeholder="Enter Event Location" size = "60" name = "loc" value = "<?php echo set_value('loc');?>">
						<font color = "red" size = "1.5px">*<?php echo form_error('loc');?></font><br>
						<button type = "submit" name = "add"> ADD EVENT</button>
						<button type = "submit" name = "delete"> DELETE EVENT</button>
						<button type = "submit" name = "update"> UPDATE EVENT</button>
					</div><!--this closes lists-->
				</fieldset>
			</form>
		</div>
		<footer>
			<hr/>
			<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>