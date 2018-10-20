<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<table width="795" height="800" align="center" bgcolor="EB3E4A">

	<tr align="center">

		<td colspan="16" style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline; color:#FFFFF8;" ><h2>All Cateogories</h2></td>

	</tr>

	<tr align="center" >
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Cateogory ID</th>
		<th style="font-family: 'Product Sans'; font-size: 18px;text-decoration: underline; color:#FFFFF8;">Cateogory Title</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Edit</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from categories";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		$i++; 
	
	?>
	<tr align="center">

		<td style="color:#FFFFF8;"><?php echo $i;?></td>

		<td style="color:#FFFFF8;"><?php echo $cat_title;?></td>

		<td ><a href="index.php?edit_cat=<?php echo $cat_id; ?>" style="text-decoration: none; color:#FFFFF8;">Edit</a></td>

		<td ><a href="delete_cat.php?delete_cat=<?php echo $cat_id; ?>" style=" text-decoration: none; color:#FFFFF8;"> Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php }?>