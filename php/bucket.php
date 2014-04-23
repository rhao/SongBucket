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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://connect.soundcloud.com/sdk.js"></script>
    <script src="../js/script.js"></script>
	<script src="../js/bootstrap.min.js"></script>
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

		.btn-custom {
		  background-color: hsl(360, 100%, 27%) !important;
		  background-repeat: repeat-x;
		  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#d10000", endColorstr="#890000");
		  background-image: -khtml-gradient(linear, left top, left bottom, from(#d10000), to(#890000));
		  background-image: -moz-linear-gradient(top, #d10000, #890000);
		  background-image: -ms-linear-gradient(top, #d10000, #890000);
		  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #d10000), color-stop(100%, #890000));
		  background-image: -webkit-linear-gradient(top, #d10000, #890000);
		  background-image: -o-linear-gradient(top, #d10000, #890000);
		  background-image: linear-gradient(#d10000, #890000);
		  border-color: #890000 #890000 hsl(360, 100%, 23.5%);
		  color: #fff !important;
		  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.23);
		  -webkit-font-smoothing: antialiased;
		}

    </style>

    <script>
		SC.initialize({
		  client_id: '50a37fe38db0602a6c8ed0b281d7ecee'
		});

		function showSongs(i, URL, sname){
			var list = $("#song-col ul");
			var nlist = $("#name-col ul");
			//var url = 'http://soundcloud.com/elliegoulding/burn';
			//alert("working?");
			var item = $("<li>").addClass("item_" + i);
			var n = $("<li style='margin-bottom:400px;font-size:20px'>Sent by: " + sname + "</li>");
			//	$url = 'http://soundcloud.com/elliegoulding/burn';
			list.append(item);
			nlist.append(n);
			
			SC.oEmbed(URL, {
			     	auto_play: false,
			     	color: 'ff0066'
			     },
		        		item.get(0));

		}
	</script>

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
		    	<a class="navbar-brand" href="index.php">SongBucket</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav navbar-right">
			        <li><a href="../php/index.php">Home</a></li>
			        <li><a href="../php/search.php">Search Music</a></li>
			        <li><a href="../php/friends.php">Find Friends</a></li>
			        <li><a href="../php/myfriends.php">My Friends</a></li>
			        <li class="active"><a href="../php/bucket.php">My Bucket</a></li>
			        <li><a href="../php/logout.php">Log Out</a></li>
		    	</ul>     
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<div id="tan-box">

			<div class='row' style="margin-bottom:20px">
				<div class='col-md-4'></div>
				<div class='col-md-4'><h1 id='underline' class='dbText'>Your Song Inbox</h1></div>
				<div class='col-md-4'></div>
			</div>

			<div class='row'>
				<div class='col-md-8' id='song-col'>
					
					<ul style="list-style-type:none">
					</ul>
				</div>
				<div class='col-md-4' id='name-col'>
					
					<ul style="list-style-type:none">
					</ul>
				</div>				
			</div>
		
	</div>

	<?php
		$link = mysql_connect('localhost', 'root', 'root', '') or die("Could not connect to server: " . mysql_error());
		mysql_select_db('sound_bucket', $link) or die("Could not find database: " . mysql_error());

		$table = mysql_query("SELECT * FROM bucketInfo", $link) or die("Error reading user table: " . mysql_error());
		
		$index = 0;
		$str = '';
		while ($array = mysql_fetch_array($table)) {
			if($array['receiverID'] == $phpid) {
				$senderName;
				$u_table = mysql_query("SELECT * FROM userInfo", $link) or die("Error reading user table: " . mysql_error());
				while ($array2 = mysql_fetch_array($u_table)) {
					if($array2["ID"] == $array["senderID"]) {
						$senderName = $array2["name"];
						break;
					}
				}

				$url = $array['songURL'];

		      	echo "<script type='text/javascript'>", "showSongs(" . $index;
		        echo ",";
		        echo $url;
		        echo ",'";
		        echo $senderName;
		        //echo 'http://soundcloud.com/elliegoulding/burn';
		        echo "');";
		      	echo "</script>";

			    $index++;
			}
			
		}
	?>

</html>