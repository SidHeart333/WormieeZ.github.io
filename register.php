<?php session_start(); ?>
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
	<div class="container-fluid">    
		<div class="row content">
			<div class="col-sm-3">
				<?php	
					include("includes/categories.php");
				?>
			</div>
			<div class="col-sm-7"> 
			<h1 class="text-center">Welcome to Registeration.</h1>
				<br><br>
				<?php
					if(isset($_GET['error']))
						{
							echo '<font color="red">'.$_GET['error'].'</font>';
							echo '<br><br>';
						}			
					if(isset($_GET['ok']))
						{
							echo '<font color="blue">You are successfully Registered..</font>';
							echo '<br><br>';
						}			
				?>					
				<table>
				<form action="process_register.php" method="POST">
					<tr>
					<td><b>Full Name :</b>&nbsp;&nbsp;</td>
					<td><input type='text' class="form-control" size="50" maxlength="50" name='fnm'></td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td><b>User Name :</b>&nbsp;&nbsp;</td>
					<td><input type='text' class="form-control" size="50" maxlength="50" name='unm'></td>
					<td>&nbsp;</td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td><b>Password :</b>&nbsp;&nbsp;</td>
					<td><input type='password' class="form-control" name='pwd' size="50" maxlength="50"></td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
					<td><input type='password' class="form-control" name='cpwd' size="50" maxlength="50"></td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td><b>Gender:</b>&nbsp;&nbsp;</td>
					<td><input type="radio" value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
					<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
					<td>&nbsp;</td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
					<td><input type='text' class="form-control" name='mail' size="50" maxlength="50"></td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
					<td><input type='text' class="form-control" name='contact' size="50" maxlength="50"></td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td><b>City:</b>&nbsp;&nbsp;</td>
					<td><input type='text' class="form-control" name='city' size="50" maxlength="50"></td>
					</tr>
					<tr><td>&nbsp;</tr>
					<tr>
					<td colspan="4" align='center'>
					<input  type='submit' class="btn btn-default" name='btn' value='Signup' >
					</td>
					</tr>
				</form>
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
<center>
</body>
</html>
