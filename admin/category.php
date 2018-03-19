<?php session_start();
require('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
	<div class = "container">
		<h1 style="color:darkgreen">Edit Categories</h1>
		<br><br>
		<form action='process_addcategory.php' method='POST'>
			<b style="color:darkgreen">ADD CATEGORY</b>
			<br>
			<input type='text' class = "form-control" name= 'cat' size='25'><br>
			<input type='submit' class= "btn btn-default" value='  ADD  '>
			<br><br>
		</form>
		<hr>
		<form action='process_delcategory.php' method='POST'>
			<b style="color:darkgreen">DELETE CATEGORY </b>						
			<br>
			<select class = "form-control" name="del">
				<?php
					$query="select * from category ";
					$res=mysqli_query($conn,$query);
					while($row=mysqli_fetch_assoc($res))
					{
						echo "<option>".$row['cat_nm'];
					}
				?>
			</select><br>
			<input type='submit' class = "btn btn-default" value='  DELETE  '>
		</form>
		<hr>
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
