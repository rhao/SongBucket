<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/reg-confirm.css" rel="stylesheet">


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
		    	<a class="navbar-brand" href="home.html">SoundBucket</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav navbar-right">
			        <li><a href="../html/index.html">Home</a></li>
			        <li><a href="../html/search.html">Search</a></li>
			        <li><a href="contact.html">Friends</a></li>
			        <li><a href="blog.html">My Bucket</a></li>
		    	</ul>     
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<div id="confirm">
		<h3>Account Created!</h3>
	  	<?php
	  		$uID = $_POST['nameEntry'];
	  		$uEmail = $_POST['emailEntry'];
	  		$uPass = $_POST['pass1'];

	  		echo "Name: " . $uID;
	  		echo "<br/>Email: " . $uEmail;

	  		echo "<br/>Password: ";
	  		for($i = 0; $i < strlen($uPass); $i++) {
	  			echo "*";
	  		}

	  		
	/*
	  		$link = mysql_connect('localhost', 'root', 'root', '') or die("Could not connect to server: " . mysql_error());
	  		mysql_select_db('sound-bucket', $link) or die("Could not find database: " . mysql_error());

	  		$table = mysql_query("INSERT INTO 'sound-bucket' (ID, name, email) VALUES ('")


			$dbLink = mysql_connect('localhost', 'root', 'root') or die("Could not find database: " . mysql_error());
				
				if(!$dbLink) {
					die("Could not find database: " . mysql_error());
				}

				mysql_select_db('dvdtitles', $dbLink) or die("Could not find database: " . mysql_error()); 


				$table = mysql_query("SELECT * FROM dvdtitles", $dbLink) or die("Problem reading table: " . mysql_error());
				
				while ($array = mysql_fetch_array($table)) { 
					echo "<p class='dbText'>" . $array["ID"] . " "; 
					echo "&emsp;" . $array["title"] . " "; 
					echo "&emsp;$" . $array["price"] . "</p>"; 
				}
				*/

	  	?>

	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>