<?php
require('includes/config.php');
 session_start();
 
	$cat=$_GET['cat_nm'];
	
	$q = "select * from subcat where parent_id = ".$_GET['cat'];
	$res = mysqli_query($conn,$q) or die("Can't Execute Query..");
	
	$row1 = mysqli_fetch_assoc($res);
	
	if($_GET['catnm']==$row1['subcat_nm'])
	{
		header("location:booklist.php?subcatid=".$row1['subcat_id']."&subcatnm=".$row1["subcat_nm"]);
		
	}
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
			<div class="col-sm-3">
				<?php	
					include("includes/categories.php");
				?>
			</div>
			<div class="col-sm-7"> 
				<h1><?php echo $_GET['catnm'];?></h1>
					<?php
						Do
						{
							echo '<li><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1["subcat_nm"].'">'.$row1['subcat_nm'].'</a></li>';
						}while($row1 = mysqli_fetch_assoc($res))
					?>
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
