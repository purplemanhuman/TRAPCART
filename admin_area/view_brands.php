<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<table width="795" height="800" align="center" bgcolor="EB3E4A">

	<tr align="center">

		<td colspan="16" style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline; color:#FFFFF8;" ><h2>All Brands</h2></td>

	</tr>

	<tr align="center" >
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Brands ID</th>
		<th style="font-family: 'Product Sans'; font-size: 18px;text-decoration: underline; color:#FFFFF8;">Brand Title</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Edit</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_brand = "select * from brands";
	
	$run_brand = mysqli_query($con, $get_brand); 
	
	$i = 0;
	
	while ($row_brand=mysqli_fetch_array($run_brand)){
		
		$brand_id = $row_brand['brand_id'];
		$brand_title = $row_brand['brand_title'];
		$i++; 
	
	?>
	<tr align="center">

		<td style="color:#FFFFF8;"><?php echo $i;?></td>

		<td style="color:#FFFFF8;"><?php echo $brand_title;?></td>

		<td ><a href="index.php?edit_brand=<?php echo $brand_id; ?>" style="text-decoration: none; color:#FFFFF8;">Edit</a></td>

		<td ><a href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>" style=" text-decoration: none; color:#FFFFF8;"> Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php }?>