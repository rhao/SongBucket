<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script src="../js/script.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
		    	<a class="navbar-brand" href="home.html">Stasis Labs</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav navbar-right">
			        <li class="active"><a href="home.html">Home</a></li>
			        <li><a href="members.html">Search</a></li>
			        <li><a href="contact.html">Friends</a></li>
			        <li><a href="blog.html">My Bucket</a></li>
		    	</ul>     
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<br><br><br><br>

	<div id="player" style="font-size: 50px;">

	</div>
	<div id= "form-div">
	<form name="search-form" id="form" method="get">
 		<input name="Search" id="search-field" type="text">
 		<button id="search-button">Search</button>
 		<!--<input name="button" type="submit" value="Submit Information"
 			onclick="javascript:return search();"/>-->
 	</form>
	 	<div>
	 		<p id="results">Results:</p>
	 	</div>
	</div>

  </body>
</html>