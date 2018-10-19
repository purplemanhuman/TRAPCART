<!DOCTYPE> 

<html>
	<head>
		<title>This is Admin Panel</title> 
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div id="right">
		<h2 style="text-align: left;font-family: 'Product Sans'; color:#FFFFF8; text-decoration: underline; padding: 9px;">Manage Content</h2>
			
			<a href="index.php?insert_product" style="font-family: 'Product Sans'">Insert New Product</a>
			<a href="index.php?view_products" style="font-family: 'Product Sans'">View All Products</a>
			<a href="index.php?insert_cat" style="font-family: 'Product Sans'">Insert New Category</a>
			<a href="index.php?view_cats" style="font-family: 'Product Sans'">View All Categories</a>
			<a href="index.php?insert_brand" style="font-family: 'Product Sans'">Insert New Brand</a>
			<a href="index.php?view_brands" style="font-family: 'Product Sans'">View All Brands</a>
			<a href="index.php?view_customers" style="font-family: 'Product Sans'">View Customers</a>
			<a href="index.php?view_orders" style="font-family: 'Product Sans'">View Orders</a>
			<a href="index.php?view_payments" style="font-family: 'Product Sans'">View Payments</a>
			<a href="logout.php" style="font-family: 'Product Sans'">Admin Logout</a>
		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 
		if(isset($_GET['insert_product'])){
		
		include("insert_product.php"); 
		
		}
		if(isset($_GET['view_products'])){
		
		include("view_products.php"); 
		
		}
		if(isset($_GET['edit_pro'])){
		
		include("edit_pro.php"); 
		
		}
		if(isset($_GET['insert_cat'])){
		
		include("insert_cat.php"); 
		
		}
		
		if(isset($_GET['view_cats'])){
		
		include("view_cats.php"); 
		
		}
		
		if(isset($_GET['edit_cat'])){
		
		include("edit_cat.php"); 
		
		}
		
		if(isset($_GET['insert_brand'])){
		
		include("insert_brand.php"); 
		
		}
		
		if(isset($_GET['view_brands'])){
		
		include("view_brands.php"); 
		
		}
		if(isset($_GET['edit_brand'])){
		
		include("edit_brand.php"); 
		
		}
		if(isset($_GET['view_customers'])){
		
		include("view_customers.php"); 
		
		}
		
		?>
		</div>

	</div>


</body>
</html>

