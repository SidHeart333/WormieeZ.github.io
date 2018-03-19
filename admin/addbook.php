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
		<h1 style="color:darkgreen">ADD BOOK</h1>
		<br><br>
		<form action='process_addbook.php' method='POST' enctype="multipart/form-data">
			<br><b>Book Name:</b><br>
			<input type='text' class = "form-control" name='name'>
			<br>
			<b>Category:</b><br>
			<select  class = "form-control" name="cat">
				<?php
					$query="select * from category ";
					$res=mysqli_query($conn,$query);
					while($row=mysqli_fetch_assoc($res))
					{
						echo "<option disabled>".$row['cat_nm'];
						$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
						$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
						while($row2 = mysqli_fetch_assoc($res2))
						{	
							echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
						}
					}
					mysqli_close($conn);
				?>
			</select>
			<br>
			<b>Description:</b><br>
			<textarea cols="40" rows="6" class = "form-control" name='description' ></textarea>
			<br>
			<b>Publisher:</b><br>
			<input type='text' class = "form-control" name='publisher'>
			<br>
			<b>Edition:</b><br>
			<input type='text' class = "form-control" name='edition'>
			<br>
			<b>ISBN:</b><br>
			<input type='text' class = "form-control" name='isbn'>
			<br>
			<b>No. Of Books:</b><br>
			<input type='text' class = "form-control" name='nobook'>
			<br>
			<b>PAGES:</b><br>
			<input type='text' class = "form-control" name='pages'>
			<br>
			<b>PRICE:</b><br>
			<input type='text' class = "form-control" name='price'>
			<br>
			<b>Image:</b><br>
			<input type='file' name='img'>
			<br>
			<b>E-Book:</b><br>
			<input type='file' name='ebook'>
			<br>
			<input  type='submit' class = "btn btn-default" value='   OK   '  >
		</form>
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
