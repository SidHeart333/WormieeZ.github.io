<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body style = "background-color:#ffffe0;">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="book1.jpg" alt="Image" style = "width:100%;height:300px;">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Online Order</p>
        </div>      
      </div>

      <div class="item">
        <img src="book2.jpg" alt="Image" style = "width:100%;height:300px;">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Cash On Delivery</p>
        </div>      
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>
	<div class="container-fluid">    
	<center>
		<h1>Welcome Admin .....</h1>
		<br>
		<div>
			<h3>You Can Do The Following Tasks:-</h3>
			<p>Add Categories</p>
			<p>Add Sub Categories To Any Category</p>
			<p>Add New Book And View All Books</p>
			<p>See Customer's Queries</p>
		</div>
	</center>	
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
