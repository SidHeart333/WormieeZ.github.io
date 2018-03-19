<?php session_start();?>
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
			<div class="col-sm-7 text-center"> 
			<br><br><br>
			<h1>About Us</h1>
				<div class="text-left" style="height:auto">
				We are online distributer of Books of all categories. Check Of All
				We are providing Book which other online Book Store rarely sell.
				Once U go through Our whole range of books u will get to  know
				We are an Online Book Store. Be The Part Of WORMIEZZ And Support our effort
				Book Of All Kind||For Book Worms||And For Others Who Love Categories like Fiction,Novel
				We have course Books Too
				Computer Science(Engeneering), B.COM, Commerce and many other.  
				</div>
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
<footer id="footer">
	<?php
		include("includes/footer.inc.php");
	?>
</footer>
<center>
</body>
</html>
