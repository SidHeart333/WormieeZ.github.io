<?php session_start();
require('includes/config.php');
?>
<!DOCTYPE html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<div class = "wrapper">
	<?php
		include("includes/menu.inc.php");
	?>
	<div class="container-fluid text-center">    
		<div class="row content">
			<div class="col-sm-3">
				<?php	
					include("includes/categories.php");
				?>
			</div>
			<div class="col-sm-7 text-left"> 
			<br><br><br>
			<h1>Viewcart</h1>
			<form action="process_cart.php" method="POST">
			<table width="100%" border="0">
			<tr>
			<td> <b>No
			<td> <b>Category
			<td> <b>Product
			<td> <b>Qty
			<td> <b>Rate
			<td> <b>Price
			<td> <b>Delete
			</tr>
			<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
			<?php
				$tot = 0;
				$i = 1;
				if(isset($_SESSION['cart']))
				{
					foreach($_SESSION['cart'] as $id=>$x)
					{	
						echo '
						<tr>
						<td> '.$i.'
						<td> '.$x['cat'].'
						<td> '.$x['nm'].'
						<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
						<td> '.$x['rate'].'
						<td> '.($x['qty']*$x['rate']).'
						<td> <a href="process_cart.php?id='.$id.'">Delete</a>
						</tr>';
						$tot = $tot + ($x['qty']*$x['rate']);
						$i++;
					}
				}
			?>
			<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
			<tr>
			<td colspan="6" align="right">
			<h4>Total:</h4>
			</td>
			<td> <h4><?php echo $tot; ?> </h4></td>
			</tr>
			<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
			<br>
			</table>					
			<br><br>
			<center>
			<input type="submit" class = "btn btn-default" value=" Re-Calculate " > 
			<span class = "btn btn-default"><a href="checkout.php">CONFIRM & PROCEED</a></span>
			</center>
			</form>
			<br><br>
			</div>
			<div class="col-sm-2">
				<?php
					include("includes/login.php");
				?>
			</div>
		</div>
	</div>
</div>	
<center>
<footer>
	<?php
		include("includes/footer.inc.php");
	?>
</footer>
</center>
</body>
</html>