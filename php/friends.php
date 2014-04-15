<!DOCTYPE html>
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

    <title>SongBucket - Find Friends</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/search.css" rel="stylesheet">

    <style>
    	#search-field {
    		text-align: center;
    		margin-left: 30%;
    		margin-right: 30%;
    		width: 40%;
    	}
    	#my-id {
    		text-align: center;
    		margin-left: 30%;
    		margin-right: 30%;
    		width: 40%;
    	}
    	#butt {
    		margin-top: 10px;
    	}
    	.search-text {
    		font-size: 14px;
    		width: 150px;
    	}
    	form {
    		display:inline;
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
		    	<a class="navbar-brand" href="../html/index.html">SongBucket</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav navbar-right">
			        <li><a href="../html/index.html">Home</a></li>
			        <li><a href="../php/search.php">Search Music</a></li>
			        <li class="active"><a href="../php/friends.php">Find Friends</a></li>
			        <li><a href="../php/friends.php">My Friends</a></li>
			        <li><a href="blog.html">My Bucket</a></li>
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
				<h2>Search for Friends by Name or Email</h2>

				<div class="row-fluid">
					<div class="col-md-2">
					</div>
					
					<div class="col-md-8">
						<form id="form-log-in" name="form-log-in" action="friends.php" method="post">
							<span class="search-text">Friend email or name:</span>
			            	<input name="Search" id="search-field" class="form-control" type="text"> 
			            	<span class="search-text">Confirm your email:</span>
			            	<input name="Mine" id="my-id" class="form-control" type="text"> 
			                <input type="submit" id="butt" class="btn btn-default" onclick="<?php searchFriends(); ?>" value="Search"/>
			            </form>
			        </div>
			   
		 			<div class="col-md-2">
		 			</div>
				</div>

			 <hr style="height:1px; background-color:black; margin-top:210px">

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