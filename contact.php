<?php session_start();
require('includes/config.php');
?>
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
			<h1>Contact us</h1>
				<form action="process_contact.php" method="POST">
					<br>Name :<br>
						<input type='text' class="form-control" name='nm'>
						<br>					
						E-mail ID:<br>
						<input type='text' class="form-control" name='email'>
						<br>
						Query:<br>
						<textarea cols="40" class="form-control" rows="10" name='query' ></textarea>
						<br>
						<center><input  type='submit' class="btn btn-default" name='btn' value='OK' >
						<br>
						</center>
				</form>
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