<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="50">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="font-size:30px;" href="index.php">Wormiezz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id = "nav">
        <li id = "home"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li id = "aboutus"><a href="aboutus.php">About Us</a></li>
        <li id = "contact"><a href="contact.php">Contact</a></li>
      </ul>
	<form class="navbar-form navbar-left" method="GET" action="search_result.php">
      <div class="input-group">
        <input type="text" class="form-control" name = "s" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
			<i class="glyphicon glyphicon-search"></i>
		  </button>
        </div>
      </div>
    </form>
      <ul class="nav navbar-nav navbar-right" id = "nav">
	  	<?php 
			if(isset($_SESSION['status']))
				{
					echo '<p class="navbar-text">Welcome '.$_SESSION["unm"].'</p>';
					echo '<li id = "logout"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>';
				}
			else
				{
					echo '<li id = "register"><a href="register.php"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>';
				}
		?>
        <li id = "viewcart"><a href="viewcart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>