<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
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
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="category.php">Categories</a></li>
        <li><a href="subcategory.php">Sub Categories</a></li>
		<li><a href="all_book.php">Books</a></li>
		<li><a href="contact.php">Costumer Q&A</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id = "nav">
	  	<?php 
			if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>';
				}
			else
				{
					echo '<li><a href="../register.php"><span class="glyphicon glyphicon-pencil"></span> Register</a></li>';
				}
		?>
      </ul>
    </div>
  </div>
</nav>