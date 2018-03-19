<?php
require('includes/config.php');
 session_start();
	$search=$_GET['s'];
	$query="select *from book where b_nm like '%$search%'";
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
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
				<h1><?php echo @$_GET['cat'];?></h1>
				<table class = "table" width="80%">
					<?php
						$count=0;
						while($row=mysqli_fetch_assoc($res))
						{
							if($count==0)
							{
								echo '<tr>';
							}
							echo '<td valign="top" width="20%" align="center">
							<a href="detail.php?id='.$row['b_id'].'">
							<img src="'.$row['b_img'].'" width="80" height="100">
							<br>'.$row['b_nm'].'</a>
							</td>';
							$count++;							
							if($count==4)
							{
								echo '</tr>';
								$count=0;
							}
						}
					?>
				</table>
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
