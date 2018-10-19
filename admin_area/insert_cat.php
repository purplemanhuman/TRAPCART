<form action="" method="POST" style="padding: 80px;">
	<b style="font-family: 'Product Sans'; font-size: 20px; color: #FFFFF8;">INSERT NEW CATEGORY:</b>
	<input type="text" name="new_cat" required="" style="font-family: 'Product Sans';font-size: 18px" />
	<input type="submit" name="add_cat" value="Add Category" style="font-family: 'Product Sans';font-size: 20px">
</form>

<?php 

	include("includes/db.php"); 

	if(isset($_POST['add_cat'])){
	
		$new_cat = $_POST['new_cat'];
	
		$insert_cat = "insert into categories (cat_title) values ('$new_cat')";

		$run_cat = mysqli_query($con, $insert_cat); 
	
			if($run_cat){
	
				echo "<script>alert('New Category has been inserted!')</script>";
				echo "<script>window.open('index.php?view_cats','_self')</script>";
			}
	}

?>