<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<table width="795" height="800" align="center" bgcolor="EB3E4A">

	<tr align="center">

		<td colspan="16" style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline; color:#FFFFF8;" ><h2>All Customers</h2></td>

	</tr>

	<tr align="center" >
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">S.N</th>
		<th style="font-family: 'Product Sans'; font-size: 18px;text-decoration: underline; color:#FFFFF8;">Name</th>
		<th style="font-family: 'Product Sans'; font-size: 18px;text-decoration: underline;color:#FFFFF8;">Email</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Image</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_c = "select * from customers";
	
	$run_c = mysqli_query($con, $get_c); 
	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$c_id = $row_c['customer_id'];
		$c_name = $row_c['customer_name'];
		$c_email = $row_c['customer_email'];
		$c_image = $row_c['customer_image'];
		$i++;
	
	?>
	<tr align="center">

		<td style="color:#FFFFF8;"><?php echo $i;?></td>

		<td style="color:#FFFFF8;"><?php echo $c_name;?></td>

		<td ><img src="../customer/customer_images/<?php echo $c_image;?>" width="50" height="50"/></td>

		<td style="color:#FFFFF8;"><?php echo $c_email;?></td>

		<td ><a href="delete_c.php?delete_c=<?php echo $c_id; ?>" style=" text-decoration: none; color:#FFFFF8;"> Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php }?>