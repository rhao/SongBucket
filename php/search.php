<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script src="../js/script.js"></script>
	<script src="../js/bootstrap.min.js"></script>

    <title>Bootstrap 101 Template</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/search.css" rel="stylesheet">

    <style>

		.btn-custom {
		  background-color: hsl(194, 100%, 42%) !important;
		  background-repeat: repeat-x;
		  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#1ecaff", endColorstr="#00a4d6");
		  background-image: -khtml-gradient(linear, left top, left bottom, from(#1ecaff), to(#00a4d6));
		  background-image: -moz-linear-gradient(top, #1ecaff, #00a4d6);
		  background-image: -ms-linear-gradient(top, #1ecaff, #00a4d6);
		  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1ecaff), color-stop(100%, #00a4d6));
		  background-image: -webkit-linear-gradient(top, #1ecaff, #00a4d6);
		  background-image: -o-linear-gradient(top, #1ecaff, #00a4d6);
		  background-image: linear-gradient(#1ecaff, #00a4d6);
		  border-color: #00a4d6 #00a4d6 hsl(194, 100%, 38.5%);
		  color: #fff !important;
		  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.23);
		  -webkit-font-smoothing: antialiased;
		}
    </style>

  </head>
  <body>
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		    	</button>
		    	<a class="navbar-brand" href="../php/index.php">SongBucket</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav navbar-right">
			        <li><a href="../php/index.php">Home</a></li>
			        <li class="active"><a href="../php/search.php">Search Music</a></li>
			        <li><a href="../php/friends.php">Find Friends</a></li>
			        <li><a href="../php/myfriends.php">My Friends</a></li>
			        <li><a href="../html/bucket.html">My Bucket</a></li>
			        <li><a href="../php/logout.php">Log Out</a></li>
		    	</ul>     
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="row-fluid" id="search-bar">

		<div class="col-md-2" id="tan-box2">
		</div>

		<div class="col-md-8" id="tan-box2">
			<div id= "form-div">
				<hr style="height:1px; background-color:black">
				<h2>Search for Music by Title, Author, or Genre</h2>

				<div class="row-fluid">
					<div class="col-md-3">
					</div>

		 			<div class="col-md-4">
		 				<input name="Search" id="search-field" class="form-control" type="text">
		 			</div>

		 			<div class="col-md-2">
		 				<button id="search-button" class="btn btn-default btn-custom">Search</button>
		 			</div>

		 			<div class="col-md-3">
		 			</div>
				</div>
			 <br/><hr style="height:1px; background-color:black">

			 <div id="results">
			 	<ul>
		        </ul>
			 </div>
		</div>

		<div class="col-md-2" id="tan-box2">
			<div id="sharing">
			 	<ul>
		        </ul>
			</div>
	    </div>

	</div>

  </body>
</html>