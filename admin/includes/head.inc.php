<?php require('includes/config.php'); ?>
<title>WormieZZ</title>
<meta charset = "utf-8" />
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
*{
	margin:0px;
	padding:0px;
}
body{
	position: relative;
	padding-bottom: 6rem;
	min-height: 100%;
}
.affix {
    top: 0;
    width: 100%;
}
.navbar {
	z-index:10000;
	margin-bottom:0px;
	border-radius: 0;
}
footer{
	position: absolute;
	bottom: 0;
	width:100%;
	padding: 1rem;
	background-color: #000000;
	text-align: center;
}
.wrapper{
	min-hieght:100%;
}
</style>
<style>
  .affix {
      top: 0;
      width: 100%;
      -webkit-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
  }
  .affix-top {
      position: static;
      top: -35px;
  }
  .affix + .container-fluid {
      padding-top: 70px;
  }
</style>
<script>
 $(function() { 

        var path = window.location.pathname;
        path = path.replace(/\/$/, "");
        path = decodeURIComponent(path);

        $("#nav li a").each(function () {
            var href = $(this).attr('href');
            if(path.substring((path.lastIndexOf('/')+1),path.lenght) === href) {    
                $(this).closest('li').addClass('active');
            } else {
                $(this).closest('li').removeClass();
            }
        });         
 });
 </script>