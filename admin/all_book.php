<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>
<!DOCTYPE html>
<html>
<head>
	<?php
		include("includes/head.inc.php");
	?>
</head>
<body>
	<div>
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
	<div class = "container">
		<h1>All Books</h1>
		<br><br>
		<span class = "btn btn-default"><a href="addbook.php">Add New Books</a></span>
		<br><br>
		<table class = "table table-striped" width='80%'>
			<tr>
				<td width='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
				<td style="color:darkgreen" width='50%'><b><u>NAME</u></b></TD>
				<td style="color:darkgreen" width='20%'><b><u>PUBLISHER</u></b></TD>
				<td style="color:darkgreen" width='20%'><b><u>ISBN</u></b></TD>
				<td style="color:darkgreen" width='25%'><b><u>PRICE</u></b></TD>
				<td style="color:darkgreen" width='25%'><b><u>IMAGE</u></b></TD>
				<td style="color:darkgreen" width='25%'><b><u>DELETE</u></b></TD>				
			</tr>
			<?php
				$count=1;
				while($row=mysqli_fetch_assoc($res))
				{
					echo '<tr>
					<td>'.$count.'
					<td>'.$row['b_nm'].'
					<td>'.$row['b_publisher'].'
					<td>'.$row['b_isbn'].'
					<td>'.$row['b_price'];
					echo "<td><img src='../$row[b_img]' width='50'/>";
					echo 	'<td><a href="process_del_book.php?sid='.$row['b_id'].'"><img src="images/drop.png" ></a>
					</tr>';
					$count++;
				}
			?>
		</table>
		<br><br>
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
