<?php
require('includes/config.php');
 session_start();
	$cat=$_GET['subcatid'];
	$totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	$page_per_page=6;
	$page_total_rec=$totalrow['total'];
	$page_total_page=ceil($page_total_rec/$page_per_page);
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
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
			<div class="col-sm-2">
				<?php	
					include("includes/login.php");
				?>
			</div>
			<div class="col-sm-7"> 
			<h1><?php echo $_GET['subcatnm'];?></h1>
				<table class="col-sm-7 table table-bordered">
					<br><br><br><br><br>
						<?php
							$k=($page_current_page-1)*$page_per_page;				
							$query="select *from book where b_subcat='$cat' LIMIT ".$k .",".$page_per_page;
							$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
							$count=0;
							while($row=mysqli_fetch_assoc($res))
							{
								if($count==0)
									{
										echo '<tr>';
									}	
								echo '<td valign="top" width="20%" align="center">
								<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'">
								<img src="'.$row['b_img'].'" width="80" height="100">
								<br>'.$row['b_nm'].'</a>
								</td>';
								$count++;							
								if($count==2)
								{
									echo '</tr>';
									$count=0;
								}
							}
						?>
				</table>
				<br><br><br>
				<center>
					<?php
						if($page_total_page>$page_current_page)
						{
							echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Next</a>';
						}
						for($i=1;$i<=$page_total_page;$i++)
						{
							echo '&nbsp;&nbsp;<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
						}
						if($page_current_page>1)
						{	
							echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Previous</a>';
						}
					?>
				</center>
			</div>
			<div class="col-sm-3">
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
