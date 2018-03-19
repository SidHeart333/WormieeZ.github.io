<h2>Categories</h2>				
<ul>
	<?php
		require('config.php');
		$query="select * from category ";
		$ress=mysqli_query($conn,$query) or die("Can't Execute Query...");
		while($row=mysqli_fetch_assoc($ress))
			{
				echo 
				'<li class="col-sm-12 btn btn-default">
				<a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a>
				</li>';
			}	
		mysqli_close($conn);			
	?>
</ul>
