<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/resources/CSS/sayitright.css">
	<div id = "wrapper">
		<div class ="header">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url(); ?>/resources/imgsay/imgsay/Logo.png" alt ="Logo"</img></li>
					<li><a href = "<?php echo base_url(); ?>index.php/Home/index">Home</a></li>
					<li><a href = "<?php echo base_url(); ?>index.php/Home/aboutPage">About us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/">Blog</a></li>
					<li><a class = "flash" href = "BuyFromUsPage.php">Buy From Us</a></li>
					<li><a href = "<?php echo base_url(); ?>index.php/Home/contactPage">Contact</a></li>
					<li><a href = "<?php echo base_url(); ?>index.php/Home/signUpPage">Sign Up</a></li>
					<li><a href = "<?php echo base_url(); ?>index.php/Home/loginPage">Login</a></li>
				</ul>
			</div><!--this closes nav div-->
		</div><!--this closes header-->
		<div class = "buyconf">
			<h4 class ="buy">Buy from Us </h4>
			<div class = "buy-shadow">
				 <h4 class ="buy"> Buy from Us </h4>
			</div><!-- this closes buy-shadow-->
		</div><!--this closes buyconf-->
		<div class = "confcart">
			<div class = "forms">
				<form method = "POST" action = "">
					<fieldset>
						<div class = "conf-inputs">
							<h4> Contact Information </h4>
							<input type = "text" placeholder="Enter Email" size = "60" name = "email" value = "<?php echo set_value('email');?>"><font color = "red">*<font size = 1.5px color= "red"><?php echo form_error('email');?></font>
							<h4> Shipping Address </h4>
							<input type = "text" placeholder="Enter First Name" size ="25" name = "fname" value = "<?php echo set_value('fname');?>" ><font size = 1.5px color = "red">*</font>
							<input type = "text" placeholder="Enter Last name" size ="26" name = "lname" value = "<?php echo set_value('lname');?>"><font size = 1.5px color = "red">*<?php echo form_error('fname').form_error('lname');?></font><br>
							<input type = "text" placeholder="Enter Address" size = "60" name = "add" value = "<?php echo set_value('add');?>"><font size = 1.5px color = "red">*<?php echo form_error('add');?></font><br>
							<input type = "text" placeholder="Enter Apartment, Suite, etc." size = "60" name = "apt" value = "<?php echo set_value('apt');?>" ><font size = 1.5px color = "red">*<?php echo form_error('apt');?></font><br>
							<input type = "text" placeholder="Enter City" size = "60" name = "city" value = "<?php echo set_value('city');?>"><font size = 1.5px color = "red">*<?php echo form_error('city');?></font><br>
							<select class = "select-conf">
								<option value ="English"> English </option>
								<option value = "Spanish">Spanish</option>
							</select>
							<input class = "postal" type = "text" placeholder = "Enter Postal Code" size = "30" name = "zip" value = "<?php echo set_value('zip');?>"><font size = 1.5px color = "red">*<?php echo form_error('zip')?></font><br>
							<font color = "red" size = "1.5px">* Mandatory fields</font>
						</div><!--this closes conf-inputs-->
						<div class = "confprods">
							<table>
								<thead>
									<tr>
										<th> ID </th>
										<th> Name </th>
										<th> Units </th>
										<th> Price </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> <img class = "taza-conf" src ="<?php echo base_url(); ?>resources/imgsay/imgsay/taza2.png" alt = "taza2"> </td>
										<td> Cup </td>
										<td> 2 </td>
										<td> $51.99 </td>
									</tr>
									<tr>
										<td> <img src = "<?php echo base_url(); ?>resources/imgsay/imgsay/franela1.jpg" alt ="franela1"> </td>
										<td> flannel </td>
										<td> 1 </td>
										<td> $28.89 </td>
									</tr>
									<tr class = "foot">
										<td> <span>Total </span></td>
										<td></td>
										<td> USD </td>
										<td> $109.77 </td> 
									</tr>
								</tbody>
							</table>
						</div><!-- this closes confprods-->
						<button type = "submit" name = "submit"> SEND MESSAGE </button>
					</fieldset>
				</form>
			</div><!--this closes forms-->
		</div><!--this closes confcart-->
		<footer>
			<hr/>
			<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
	<?php //include 'PHP/buyfromuscart.php'; ?>
</body>
</html>