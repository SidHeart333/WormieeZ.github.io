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
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
	<div class="container-fluid text-center">    
		<div class="row content">
			<div class="col-sm-3">
				<?php	
					include("includes/categories.php");
				?>
			</div>
			<div class="col-sm-7"> 
				<h1>Welcome WormieZZ: The Book Store</h1>
				<div>
					<br><br>		
					<object width="700" height="500">
					<embed src="HotHotSoftware3DMenu.swf" width="700" height="500">
					</embed>
					</object>
					<br><br>
				</div>
			</div>
			<div class="col-sm-2">
				<div>
					<?php	
						include("includes/login.php");
					?>
				</div>
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