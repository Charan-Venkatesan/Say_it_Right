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
					<li><a href = "<?php echo base_url();?>index.php/Home/loginBizPage">Home</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/conferenceManagePage">Conferences</a></li>
					<li><a class = "flash" href = "<?php echo base_url();?>index.php/Home/eventBizPage">Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myConferenceManagePage">My Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myEventBizPage">My Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/settingsBizPage">Settings</a></li>
				</ul>
			</div><!--this closes nav div-->
		</div><!--this closes header-->
		<div class = "conftable">
			<h4 class ="buy">List of Events </h4>
			<div class = "buy-shadow">
				 <h4 class ="buy"> List of Events </h4>
			</div><!-- this closes buy-shadow-->
			<table align ="center">
				<tr>
					<th> Events </th>
					<th> Description </th>
					<th> Date </th>
					<th> Location </th>
					<th> Confirmation </th>
				</tr>
				<form method = "POST">
				<?php 
                    foreach($events as $ev){
                        echo "<tr><td>".$ev->EventName."</td><td>".$ev->Description."</td><td>".$ev->Date."</td><td>".$ev->Location."</td><td><button type = 'submit' name = 'submit'>Confirm</button></td><tr>";
                        }
                    echo "</table></center>";
                ?>
				</form>
			
			</table>
		</div><!-- this closes conftable-->
		<footer>
			<hr/>
			<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>