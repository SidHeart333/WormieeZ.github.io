<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php'); 	
	if(isset($submit))
	{
	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
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
	<div class="container text-left">    
		<h1>Shipping Details</h1>
		<form method="post" class="form-horizontal"> 
		<div class="form-group">
			<label for="name" class="col-sm-2">Name</label>
			<div class="col-sm-10">
				<input name="name" class="form-control" required=""  type="text"> 
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2">Address</label>
			<div class="col-sm-10">
				<textarea name="address" class="form-control" required="" cols="55" row="10" type="email"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="username" class="col-sm-2">Postal Code</label>
			<div class="col-sm-10">
				<input name="pc" class="form-control" required="" type="text">
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="col-sm-2">City</label>
			<div class="col-sm-10">
				<input type="text" name="city" required="" class="form-control"> 
			</div>
		</div>
		<div class="form-group">
			<label for="state" class="col-sm-2">State</label>
			<div class="col-sm-10">
				<input type="text" name="state" class="form-control" required="">
			</div>
		</div>
		<div class="form-group">		
			<label for="phone" class="col-sm-2">Mobile phone</label>
			<div class="col-sm-10">
				<input name="phone" class="form-control" required="" type="text"><br>
			</div>
		</div>
			<input name="submit" id="submit" class="btn btn-default" value="Confirm & Proceed" type="submit"> 	 
		</form> 
	</div> 
</div>	
<center>
<footer>
	<?php
		include("includes/footer.inc.php");
	?>
</footer>
<center>
</body>
</html>