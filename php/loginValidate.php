<?php
	$accountIn = $_POST['email'];
	$passIn = $_POST['pass'];

	//connect to server and select database
	$link = mysql_connect('localhost', 'root', 'root', '') or die("Could not connect to server: " . mysql_error());
	mysql_select_db('sound_bucket', $link) or die("Could not find database: " . mysql_error());
	
	//get userInfo table
	$u_table = mysql_query("SELECT * FROM userInfo", $link) or die("Error reading user table: " . mysql_error());
	
	$userFound = false;
	$userID;

	//loop through users looking for correct email
	while ($array = mysql_fetch_array($u_table)) { 
		if($array["email"] == $accountIn) {
			$userFound = true;
			$userID = $array["ID"];
			break;
		}
	}

	if(!$userFound) {
		echo"<h3>Invalid email... Redirecting</h3><script>setTimeout(function() { window.location = '../html/front_page.html'; }, 1000);</script>";
	}
	else {
		$s_table = mysql_query("SELECT * FROM secureInfo", $link) or die("Error finding user password: " . mysql_error());
		while ($array = mysql_fetch_array($s_table)) { 
			if($array["ID"] == $userID) {
				if($array["password"] != $passIn) {
					echo"<h3>Incorrect password... Redirecting</h3><script>setTimeout(function() { window.location = '../html/front_page.html'; }, 1000);</script>";
				}
				else {
					echo"<script>window.location = '../html/index.html';</script>";
				}
			}
			
		}
		
	}

?>