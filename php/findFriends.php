<?php
	session_start();
	$phpid = $_SESSION["userid"];

	$friend = $_POST['Search'];
	$myEmail = $_POST['Mine'];


	//connect to server and select database
	$link = mysql_connect('localhost', 'root', 'root', '') or die("Could not connect to server: " . mysql_error());
	mysql_select_db('sound_bucket', $link) or die("Could not find database: " . mysql_error());
	
	//get userInfo table
	$u_table = mysql_query("SELECT * FROM userInfo", $link) or die("Error reading user table: " . mysql_error());
	
	$friendFound = false;
	$friendID;

	//loop through users looking for correct email
	while ($array = mysql_fetch_array($u_table)) { 
		if($array["email"] == $friend) {
			$friendFound = true;
			$friendID = $array["ID"];
		}	
		if($array["name"] == $friend) {
			$friendFound = true;
			$friendID = $array["ID"];
		}									
	}


	if(!$friendFound) {
		echo "<h3>User you searched for does not exist... Redirecting</h3><script>setTimeout(function() { window.location = '../php/friends.php'; }, 1500);</script>";
	}
	else {
		$table = mysql_query("SELECT * FROM friendsInfo", $link) or die("Error reading table: " . mysql_error());

		// //insert friend1 then friend2
  // 		$table = mysql_query("INSERT INTO friendsInfo(friend_id1, friend_id2) VALUES ('$userID', '$friendID')", $link) or die("Error writing to table: " . mysql_error());
	
		// //insert friend2 then friend1
		// $table = mysql_query("INSERT INTO friendsInfo(friend_id1, friend_id2) VALUES ('$friendID', '$userID')", $link) or die("Error writing to table: " . mysql_error());

		//insert friend1 then friend2
  		$table = mysql_query("INSERT INTO friendsInfo(friend_id1, friend_id2) VALUES ('$phpid', '$friendID')", $link) or die("Error writing to table: " . mysql_error());
	
		//insert friend2 then friend1
		$table = mysql_query("INSERT INTO friendsInfo(friend_id1, friend_id2) VALUES ('$friendID', '$phpid')", $link) or die("Error writing to table: " . mysql_error());


  		echo "<h3>Friend add successful! Redirecting...</h3><script>setTimeout(function() { window.location = '../php/friends.php'; }, 1500);</script>";
	}
	mysqli_close($link); 
	
?>