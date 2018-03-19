<span>
	<?php
		require('config.php');
		if(isset($_SESSION['status']))
			{
				echo '<br><br><h2>Hello '.$_SESSION['unm'].':<br><br></h2>';
				echo '<h4>You have Succesfully Logged In</h4>';
			}
		else
			{
				echo '<br><br><form action="process_login.php" method="POST">
				<h2>LogIn</h2>
				<b>Username:</b>
				<br><input type="text" class="form-control" name="usernm"><br>	
				<b>Password:</b>
				<br><input type="password" class="form-control" name="pwd"><br>
				<input type="submit" class="btn btn-default" id="x" value="Login" />
				</form>';
			}						
	?>
</span>