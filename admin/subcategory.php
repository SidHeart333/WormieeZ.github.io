<?php session_start();?>
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
		<h1 style="color:darkgreen">ADD SUB-CATEGORY </h1>
		<br><br>
		<form action='process_addsubcategory.php' method='POST'>
			<u style="color:darkgreen">PARENT CATEGORY </u>
			<br>
			<select  class = 'form-control' name="parent">
				<?php
					require('includes/config.php');
					$query="select * from category ";
					$res=mysqli_query($conn,$query);
					while($row=mysqli_fetch_assoc($res))
						{
							echo "<option value='".$row['cat_id']."'>".$row['cat_nm'];
						}
					mysqli_close($conn);
				?>
			</select>
			<br>
			<u style="color:darkgreen">SUB-CATEGORY:</u>
			<br><br>
			<input type='text' class = "form-control" name= 'subcat' size='25'><br>
			<input type='submit' class = "btn btn-default" value='  ADD  '>
			<br><br>	
		</form>
		<hr>
		<form action='process_delsubcategory.php' method='POST'>
			<b style="color:darkgreen">DELETE SUB CATEGORY </b>						
			<br>
			<select class = 'form-control' name="subcatnm">
			<?php
				require('includes/config.php');
				$query="select * from category ";
				$res=mysqli_query($conn,$query);
				while($row=mysqli_fetch_assoc($res))
				{
					echo "<option>".$row['cat_nm'];
					$qq = "select * from subcat where parent_id=".$row['cat_id'];
					$ress = mysqli_query($conn,$qq) or die("wrong delete subcat query..");
					while($roww = mysqli_fetch_assoc($ress))
					{
						echo "<option value='".$roww['subcat_id']."'> ---> ".$roww['subcat_nm'];
					}
				}
				mysqli_close($conn);
			?>
			</select><br>
			<input type='submit' class = "btn btn-default" value=' DELETE '>
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
