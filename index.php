<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");
?>
<html>
	<head>
		<title> TRAPCART </title>

	<link rel="stylesheet" href="styles/style.css" media="all"/>
	</head>
<body>
	<!--Main Container Starts Here-->
	<div class="main_wrapper">
		<!--Header Starts here-->
		<div class="header_wrapper">
			<a href="index.php"></a>
			<img id="logo" src= "images/logo.png"/>
		</div>
		<!--Header Ends here-->


		<!--Navigation Bar Starts-->
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="# ">Contact Us</a></li>
			</ul>
			<div id="form">
				<!--formhere-->
			</div>
		</div>
		<!--Navigation Bar Ends-->


		<!--Content wrapper starts-->
		<div class="content_wrapper">

			<div id="sidebar">
				<div id="sidebar_title">Categories</div>

				<div id="cats">
					<ul id="cats">
						<?php getCats(); ?>
					</ul>	
				</div>

				<div id="sidebar_title">Brands</div>
				<div id="cats">
					<ul id="cats">
						<?php getBrands();?>
					</ul>
				</div>

			</div>
		

			<div id="content_area">

				<?php cart();?>

				<div id="shopping_cart">

					<span style="float:left; font-size:14px; padding: 5px;line-height: 39px;">
						Welcome to <b style="color:#EA8859">TRAPCART</b>, your favourite Shopping Portal | Total Items : <?php total_items() ;?> | Total Price : <?php total_price();?><a href="cart.php" style="font-size:15px; padding: 5px;line-height: 40px; color:#EA8859;">GO TO CART! |</a>

						<?php
							if(!isset($_SESSION['customer_email'])){

								echo "<a href = 'checkout.php' style = 'color :#EA8859; font-size:15px;''>LOGIN</a>";
							}

							else {
								echo "<a href='logout.php' style = 'color :#EA8859; font-size:16px;'>LOGOUT</a>";
							}
						?>
					</span>
				</div>
				<?php $ip = getIp();?>

				<div id="products_box">
					<?php getPro();?>
					<?php getCatPro();?>
					<?php getBrandPro();?>
				</div>
			</div>

		</div>
		<!--Content wrapper ends-->


		<div id="footer">
			<h2 style="text-align:center; padding-top:40px;">&copy; 2018 by Vivek Pattanaik</h2>
		</div>

	</div>
	<!--Main Container Ends Here-->
</body>
</html>