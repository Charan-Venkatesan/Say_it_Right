<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
</head>
<body>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/resources/CSS/sayitright.css">
	<script src = "<?php echo base_url();?>/resources/JS/sayitrightscript.js"></script>
	<script src = "https://code.jquery.com/jquery-3.4.0.min.js"></script>
	<div id = "wrapper">
		<div class ="banner">
			<div id ="nav">
				<ul>
					<li><img class = "Logo" src = "<?php echo base_url(); ?>/resources/imgsay/imgsay/Logo.png" alt = "Logo"></img></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/index">Home</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/aboutPage">About us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/">Blog</a></li>
					<li><a class = "flash" href = "buyFromUsPage">Buy From Us</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/contactPage">Contact</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/signUpPage">Sign Up</a></li>
					<li><a href = "http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/loginPage">Login</a></li>
				</ul>
			</div><!--this closes nav div-->
			<div class = "aboutheading">
				<p>Home &#8594 Buy From Us</p>
				<p class = "aboutbig">BUY FROM US</p>
			</div><!--this closes aboutheading-->
		</div><!--this closes banner-->
		<div class = "products">
			<h4 class ="buy"> Buy From Us </h4>
			<div class = "buy-shadow">
				 <h4 class ="buy"> Buy From Us </h4>
			</div><!-- this closes buy-shadow-->
			<table align = "center">
				<tr>
					<td>
						<img class = "franela" src ="<?php echo base_url(); ?>/resources/imgsay/imgsay/franela1.jpg" alt ="franela1">
						<h4> $24.99 </h4>
						<p> Some quick example text to build on <br> the card title and make up the bulk of <br> the card's content.</p>
						<button class ="cart-button" id = "c1" onclick = "openCartUnits(this.id)"> ADD TO CART </button>
					</td>
					<td>
						<img class ="taza1" src ="<?php echo base_url(); ?>/resources/imgsay/imgsay/taza1.png" alt ="taza1">
						<h4> $24.99 </h4>
						<p> Some quick example text to build on <br> the card title and make up the bulk of <br> the card's content.</p>
						<button class ="cart-button" id = "c2" onclick = "openCartUnits(this.id)"> ADD TO CART </button>
					</td>
					<td>
						<img class ="franela" src ="<?php echo base_url(); ?>/resources/imgsay/imgsay/franela2.jpg" alt = "franela2">
						<h4> $24.99 </h4>
						<p> Some quick example text to build on <br> the card title and make up the bulk of <br> the card's content.</p>
						<button class ="cart-button" id = "c3" onclick = "openCartUnits(this.id);"> ADD TO CART </button>
					</td>
				</tr>
				<tr>
					<td>
						<img class = "taza2" src ="<?php echo base_url(); ?>/resources/imgsay/imgsay/taza2.png" alt = "taza2">
						<h4> $24.99 </h4>
						<p> Some quick example text to build on <br> the card title and make up the bulk of <br> the card's content.</p>
						<button class ="cart-button" id = "c4" onclick = "openCartUnits(this.id);"> ADD TO CART </button>
					</td>
					<td>
						<img class ="franela" src ="<?php echo base_url(); ?>/resources/imgsay/imgsay/franela3.jpg" alt = "franela3">
						<h4> $24.99 </h4>
						<p> Some quick example text to build on <br> the card title and make up the bulk of <br> the card's content.</p>
						<button class ="cart-button" id = "c5" onclick = "openCartUnits(this.id);"> ADD TO CART </button>
					</td>
					<td>
						<img class = "taza3" src ="<?php echo base_url(); ?>/resources/imgsay/imgsay/taza3.png" alt = "taza3">
						<h4> $24.99 </h4>
						<p> Some quick example text to build on <br> the card title and make up the bulk of <br> the card's content.</p>
						<button class ="cart-button" id = "c6" onclick = "openCartUnits(this.id);"> ADD TO CART </button>
					</td>
				</tr>
			</table>
		</div><!--this closes product-->
		<div id = "my-cart-unit" class ="add-cart-unit">
			<div class = "cart-units">
				<div class = "cart-unit-header">
					<span class ="close" onclick = "closeCart()">&times;</span>
					<h1>Add to Cart</h1>
				</div><!--this closes cart-unit-header-->
				<div class ="cart-unit-body">
					<img id = "item" alt = "selected item" src = "image.jpg">
					<div class = "cart-unit-texts">
						<p id = "para"> Product quantity </p>
						<?php echo validation_errors();?>
						<form method = "POST">
						    <input id ="units" type = "text" name = "unit">
						<p id = "note"> Note: Some quick example text <br> to build on the card title and <br> make up the bulk of the card's <br>content!</p>
					</div><!--this closes catr-unit-texts-->
				</div><!--this closes cart-unit-body-->
				<div class = "cart-unit-footer">
					<div class = "buttons">
						<button id = "add-units" > Add to cart</button>
						<button id = "close-units" onclick = "closeCart()"> close </button>
						</form>
						<script>
						    if(<?php echo validation_errors()?>)
						    $('#add-units').click(function(event){
                        event.preventDefault();
                        });
						</script>
					</div><!--this closes buttons-->
				</div><!--this closes cart-unit-footer-->
			</div><!--this closes cart-units-->
		</div><!--this closes my-cart-unit-->
		<div class = "newsletter">
			<div class = "texts">
				<h4><span class = "viewcart">View Shopping Cart</span><br><br><span class = "spam">You can see the products that you added to your cart </span></h4>
			</div><!--this closes texts-->
			<div class = "inputs">
				<button class = "submitButton" onclick = "location.href = 'http://charanvenkatesan.uta.cloud/Assignment_5/Project5/index.php/Home/buyFromUsCart'"> Submit</button>
			</div><!--this closes inputs-->
		</div><!--this closes newlsetter-->
		<footer>
				<hr/>
				<p> Copyright &copy 2019 All rights reserved | This website is made with &#9825 by <span>  DiazApps </span></p>
		</footer><!--this closes the footer-->
	</div><!--this closes wrapper-->
</body>
</html>