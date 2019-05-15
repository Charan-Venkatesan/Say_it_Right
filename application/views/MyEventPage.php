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
					<li><a href = "<?php echo base_url();?>index.php/Home/loginIndPage">Home</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/conferencePage">Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/eventPage">Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myConferencePage">My Conferences</a></li>
					<li><a class = "flash" href = "<?php echo base_url();?>index.php/Home/myEventPage">My Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/settingsPage">Settings</a></li>
				</ul>
			</div><!--this closes nav div-->
		</div><!--this closes header-->
		<div class = "conftable">
			<h4 class ="buy">List of My Events </h4>
			<div class = "buy-shadow">
				 <h4 class ="buy"> List of My Events </h4>
			</div><!-- this closes buy-shadow-->
			<table align ="center">
				<tr>
					<th> Events </th>
					<th> Description </th>
					<th> Date </th>
					<th> Location </th>
					<th> Confirmation </th>
				</tr>
				<?php 
                    foreach($myevents as $me){
                        echo "<tr><td>".$me->Event."</td><td>".$me->Description."</td><td>".$me->Date."</td><td>".$me->Location."</td><td>Confirmed</td><tr>";
                    }
                    echo "</table></center>";
                ?>
			</table>
		</div><!-- this closes conftable-->
		<footer>
			<hr/>
			<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>