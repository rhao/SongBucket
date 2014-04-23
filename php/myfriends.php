<!DOCTYPE html>
<html lang="en">
  <head>

  	<?php
		session_start();
		$phpid = $_SESSION["userid"];
	?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">

    <style>
	    #tan-box {
			background-color: #F5EDE3;
			border-radius:25px;
			text-align: center;
			margin-top: 100px;
			margin-left: 10%;
			margin-right: 10%;
			padding-bottom: 30px;
			padding-top: 20px;
			padding-left: 30px;
			padding-right: 30px;
			box-shadow: 2px 2px 1px #575757;
			opacity:0.65;
		}

		#underline {
			text-decoration:underline;
		}

		.dbText {
			font-size: 20px;
			text-align: center;
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
		    	<a class="navbar-brand" href="index.html">SongBucket</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav navbar-right">
			        <li><a href="../html/index.html">Home</a></li>
			        <li><a href="../php/search.php">Search Music</a></li>
			        <li><a href="../php/friends.php">Find Friends</a></li>
			        <li class="active"><a href="../php/myfriends.php">My Friends</a></li>
			        <li><a href="../html/bucket.html">My Bucket</a></li>
		    	</ul>     
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<div id="tan-box">
		
			<!-- <h1 id="underline" class="dbText">Friends:&emsp;&emsp;name,&emsp;&emsp;email</h1> -->
			<h1 id="underline" class="dbText">Friends</h1>
		<?php

			$friendsArray = array();
			$count = 0;

			$link = mysql_connect('localhost', 'root', 'root', '') or die("Could not connect to server: " . mysql_error());
			mysql_select_db('sound_bucket', $link) or die("Could not find database: " . mysql_error());
	
			$f_table = mysql_query("SELECT * FROM friendsInfo", $link) or die("Error reading user table: " . mysql_error());
			$u_table = mysql_query("SELECT * FROM userInfo", $link) or die("Error reading user table: " . mysql_error());

			$b = 0;
			$a = 0;
			while ($array = mysql_fetch_array($f_table)) { 
				if($array["friend_id1"] == $phpid) {
					
					while ($array2 = mysql_fetch_array($u_table)) { 
						
						if($array["friend_id2"] == $array2["ID"]) {
							echo "<p class='dbText'>" . $array2["name"] . ", "; 
							echo "&emsp;" . $array2["email"] . "</p>"; 
							$u_table = mysql_query("SELECT * FROM userInfo", $link) or die("Error reading user table: " . mysql_error());

							break;
						}
						
					}
				}
				
			}

			//get userInfo table
	
			
		?>
		
	</div>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>