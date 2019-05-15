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
					<li><a class ="flash" href = "<?php echo base_url();?>index.php/Home/loginIndPage">Home</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/conferencePage">Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/eventPage">Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myConferencePage">My Conferences</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/myEventPage">My Events</a></li>
					<li><a href = "<?php echo base_url();?>index.php/Home/settingsPage">Settings</a></li>
				</ul>
			</div><!--this closes nav div-->
		</div><!--this closes header-->
		<div class = "cards">
			<div class = "top-grid-container">
					<div class = "stats">
						<div class = "inner-total">
							<i class="fas fa-globe-americas"></i>
							<h4 class = "number"><?php echo ($dashData['Total']);?></h4>
							<p>activities performed</p>
						</div><!-- thie closes inner-total-->
						<p class = "amount"> Total Made </p>
					</div><!--this closes stats-->
					<div class = "stats">
						<div class = "inner-conf">
							<i class="fas fa-users"></i>
							<h4 class = "number"><?php echo $dashData['Conf'];?></h4>
							<p>activities performed</p>
						</div><!-- thie closes inner-conf-->
						<p class = "amount"> Conferences </p>
					</div><!--this closes stats-->
					<div class = "stats">
						<div class = "inner-event">
							<i class="fas fa-star"></i>
							<h4 class = "number"><?php echo ($dashData['Events']);?></h4>
							<p>activities performed</p>
						</div><!-- thie closes inner-event-->
						<p class = "amount"> Events </p>
					</div><!--this closes stats-->
					<div class = "stats">
						<div class = "inner-act">
							<i class="fas fa-trophy"></i>
							<h4 class = "number"><?php echo $dashData['Rem'];?></h4>
							<p>activities to carry out</p>
						</div><!-- thie closes inner-act-->
						<p class = "amount"> Activities </p>
					</div><!--this closes stats-->
			</div><!--this closes top-grid-container-->
			<div class ="grid-container" align = "center">
				<div class = "primary-card">
					<p class = "card-head"> Event to Attend <p>
					<hr>
					<h4> <?php foreach($dashDataEventAtt as $evAtt){echo $evAtt['Event'];?></h4>
					<p> <?php echo $evAtt['Description'];}?></p>
				</div><!--this closes primary card-->
				<div class ="secondary-card">
					<p class = "card-head"> Conference to Attend </p>
					<hr>
					<h4> <?php foreach($dashDataConfAtt as $cAtt){echo $cAtt['Conferences'];?> </h4>
					<p> <?php echo $cAtt['Description'];}?></p>
				</div><!--this closes secondary card-->
				<div class ="success-card">
					<p class = "card-head"> Upcoming Event </p>
					<hr>
					<h4> <?php foreach($dashDataEvent1 as $ev1){echo $ev1['EventName'];?> </h4>
					<p> <?php echo $ev1['Description'];}?></p>
				</div><!--this closes success card-->
				<div class ="danger-card">
					<p class = "card-head"> Upcoming Conference </p>
					<hr>
					<h4> <?php foreach($dashDataConf1 as $c1){echo $c1['ConfName'];?> </h4>
					<p> <?php echo $c1['ConfDesc'];}?></p>
				</div><!--this closes success card-->
				<div class ="warning-card">
					<p class = "card-head"> Upcoming Event </p>
					<hr>
					<h4> <?php foreach($dashDataEvent2 as $ev2){echo $ev2['EventName'];?> </h4>
					<p> <?php echo $ev2['Description'];}?></p>
				</div><!--this closes warning card-->
				<div class ="info-card">
					<p class = "card-head"> Upcoming Conference </p>
					<hr>
					<h4> <?php foreach($dashDataConf2 as $c2){echo $c2['ConfName'];?> </h4>
					<p><?php echo $c2['ConfDesc'];}?></p>
				</div><!--this closes info card-->
				<div class ="light-card">
					<p class = "card-head">Upcoming Event </p>
					<hr>
					<h4><?php foreach($dashDataEvent3 as $ev3){echo $ev3['EventName'];?></h4>
					<p> <?php echo $ev3['Description'];}?></p>
				</div><!--this closes light card-->
				<div class ="dark-card">
					<p class = "card-head"> Upcoming Conference  </p>
					<hr>
					<h4><?php foreach($dashDataConf3 as $c3){echo $c3['ConfName'];?></h4>
					<p><?php echo $c3['ConfDesc'];}?></p>
				</div><!--this closes dark card-->
			</div><!-- this closes grid-container-->
		</div><!--this closes cards-->
		<footer>
			<hr/>
			<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>