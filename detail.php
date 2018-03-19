<?php session_start();
	require('includes/config.php');
	$id=$_GET['id'];
	$q="select * from book where b_id=$id";
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
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
			<div class="col-sm-2">
				<?php	
					include("includes/login.php");
				?>
			</div>
			<div class="col-sm-7 text-left"> 
			<h1><?php echo $row['b_nm'];?></h1>
			<?php
				echo '<table border="0" width="100%">
				<tr>
				<td><hr color="purple"></td>
				</tr>
				<tr align="center" bgcolor="#EEE9F3">
				<td>Item Details</td>
				</tr>
				<tr>
				<td><hr color="purple"></td>
				</tr>
				</table>
				<table border="0"  width="100%" bgcolor="#ffffff">
				<tr> 
				<td width="15%" rowspan="3">
				<img src="'.$row['b_img'].'" width="100">
				</td>
				</tr>
				<tr> 
				<td width="50%" height="100%">
				<table border="0"  width="100%" height="100%">
				<tr valign="top">
				<td align="right" width="10%">NAME</td>
				<td width="6%">: </td>
				<td align="left">'.$row['b_nm'].'</td>
				</tr>
				<tr>
				<td align="right">ISBN</td>
				<td>: </td>
				<td align="left">'.$row['b_isbn'].'</td>
				</tr>
				<tr>
				<td align="right">Publisher </td>
				<td>: </td>
				<td align="left">'.$row['b_publisher'].'</td>
				</tr>																					
				<tr>
				<td align="right">Edition</td>
				<td>: </td>
				<td align="left">'.$row['b_edition'].'</td>
				</tr>
				<tr>
				<td align="right">PAGES</td>
				<td>: </td>
				<td align="left">'.$row['b_page'].'</td>
				</tr>
				<tr>
				<td align="right">PRICE</td>
				<td>: </td>
				<td align="left">'.$row['b_price'].'</td>
				</tr>
				<tr>
				<td align="right">Books Left</td>
				<td>: </td>
				<td align="left">'.$row['no_book'].'</td>
				</tr>	
				</table>
				</td>
				</tr>
				</table>
				<tr valign="bottom" >
				<a href="'.$row['b_img'].'" rel="lightbox"><img src="images/zoom.gif" ></a>
				</tr>
				<table border="0" width="100%">
				<tr>
				<td><hr color="purple"></td>
				</tr>
				<tr align="center" bgcolor="#EEE9F3">
				<td>DESCRIPTION</td>
				</tr>
				<tr>
				<td><hr color="purple"></td>
				</tr>
				</table>
				'.$row['b_desc'].'
				<tr><td colspan=2><hr color="purple"></td></tr>
				<table border="0" width="100%">
				<tr align="center" bgcolor="#EEE9F3">';
				if(isset($_SESSION['status']))
				{
					echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&cat='.$_GET['cat'].'&rate='.$row['b_price'].'">
					<img src="images/addcart.jpg">
					</a></td>';
				}
				else
				{
					echo '<td><img src="images/addcart.jpg"><br><a href="register.php"> <h4>Please Login..</h4></a></td>';
				}
				echo '</tr>
				</table>';
				?>
			</div>
			<div class="col-sm-3 text-left">
				<?php
					include("includes/categories.php");
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
