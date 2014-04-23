<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register SoundBucket</title>

    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/register.css" rel="stylesheet">
    <style>
    	#tan-box {
	    	background-color: #F5EDE3;
			border-radius:25px;
			text-align: center;
			margin-top: 100px;
			padding-bottom: 30px;
			padding-top: 20px;
			padding-left: 30px;
			padding-right: 30px;
			box-shadow: 2px 2px 1px #575757;
			opacity:0.75;
		}
	</style>
  </head>
  <body>

	<div class="row-fluid" id="tan-bar">
	 	<div class="col-md-12" id="brand"><h1>SongBucket</h1></div>
	</div>
	
	<div class="row-fluid" id="orange-bar">
	  <div class="col-md-12"></div>
	</div>


	<div class="row-fluid">
		<div class="col-md-3">
		</div>

		<div class="col-md-6" id="tan-box">
			<h3>Thank you for visiting SongBucket!</h3><h4>Logout successful!</h4>
		</div>

		<div class="col-md-3">
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.m.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>






  </body>
</html>