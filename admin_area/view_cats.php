
<table width="795" height="800" align="center" bgcolor="EB3E4A">

	<tr align="center">

		<td colspan="16" style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline; color:#FFFFF8;" ><h2>All Cateogories</h2></td>

	</tr>

	<tr align="center" >
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">S.N</th>
		<th style="font-family: 'Product Sans'; font-size: 18px;text-decoration: underline; color:#FFFFF8;">Title</th>
		<th style="font-family: 'Product Sans'; font-size: 18px;text-decoration: underline;color:#FFFFF8;">Image</th>
		<th style="font-family: 'Product Sans'; font-size: 18px;text-decoration: underline;color:#FFFFF8;">Price</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Edit</th>
		<th style="font-family: 'Product Sans'; font-size: 18px; text-decoration: underline;color:#FFFFF8;">Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
		$i++; 
	
	?>
	<tr align="center">

		<td style="color:#FFFFF8;"><?php echo $i;?></td>

		<td style="color:#FFFFF8;"><?php echo $pro_title;?></td>

		<td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60"/></td>

		<td style="color:#FFFFF8;"><?php echo 'Rs.'.$pro_price;?></td>

		<td ><a href="index.php?edit_pro=<?php echo $pro_id; ?>" style="text-decoration: none; color:#FFFFF8;">Edit</a></td>

		<td ><a href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>" style=" text-decoration: none; color:#FFFFF8;"> Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

