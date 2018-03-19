<?php 
session_start();
require('includes/config.php');
	$q="select * from contact";
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
		<h1 style="color:darkgreen">Customer's Q&A
		</h1>
		<br>
		<br>
		<div class = "container">
		<table width='80%' class = "table table-striped">
			<tr>
				<td width='10%' style="color:darkgreen"><b><u>SR.NO</u></b>
				<td style="color:darkgreen" WIDTH='20%'><b><u>NAME</u></b>
				<td style="color:darkgreen" WIDTH='20%'><b><u>EMAIL</u></b>
				<td style="color:darkgreen" WIDTH='50%'><b><u>QUERY</u></b>
				<td style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b>
			</tr>
			<?php
				$count=1;
				while($row=mysqli_fetch_assoc($res))
				{
					echo '<tr>
					<td>'.$count.'
					<td>'.$row['con_nm'].'
					<td>'.$row['con_email'].'
					<td>'.$row['con_query'].'
					<td><a href="process_del_contact.php?sid='.$row['con_id'].'"><img src="images/drop.png" ></a>
					</tr>';
					$count++;
				}
			?>
		</table>
		<br><br>
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
