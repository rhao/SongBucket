<?php
	session_start();
	$phpid = $_SESSION["userid"];

	$link = mysql_connect('localhost', 'root', 'root', '') or die("Could not connect to server: " . mysql_error());
	mysql_select_db('sound_bucket', $link) or die("Could not find database: " . mysql_error());

	$f_table = mysql_query("SELECT * FROM friendsInfo", $link) or die("Error reading user table: " . mysql_error());

			
	while ($array = mysql_fetch_array($f_table)) { 
		if($array["friend_id1"] == $phpid) {
			$toRemoveID = $array["friend_id2"];

			//delete both sets of friend connections
			mysql_query("DELETE FROM friendsInfo WHERE (friend_id1='$phpid') AND (friend_id2='$toRemoveID')", $Link) or die("Error deleting from table: " . mysql_error());
			mysql_query("DELETE FROM friendsInfo WHERE (friend_id1='$toRemoveID') AND friend_id2='phpid')", $Link) or die("Error deleting from table: " . mysql_error());
				
			break;
		}
	}



	// $f_table = mysql_query("SELECT * FROM friendsInfo", $link) or die("Error reading user table: " . mysql_error());
	// $index = 0;

			
	// while ($array = mysql_fetch_array($f_table)) { 
	// 	if($index < $in) {
	// 		if($array["friend_id1"] == $phpid) {
	// 			$index++;
	// 		}
	// 	}
	// 	else {
	// 		//get friend id
	// 		$toRemoveID = $array["friend_id2"];

	// 		//delete both sets of friend connections
	// 		$f_table = mysql_query("DELETE FROM friendsInfo WHERE friend_id1='$phpid' AND friend_id2='$toRemoveID'", $Link) or die("Error deleting from table: " . mysql_error());
	// 		$f_table = mysql_query("DELETE FROM friendsInfo WHERE friend_id1='$toRemoveID' AND friend_id2='phpid'", $Link) or die("Error deleting from table: " . mysql_error());
			
	// 	}
	// }
?>