<?php
$accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
		or die (mysql_error());
		
		
		mysql_select_db("baseballforlife", $accounts);

		
	$user_name = "baseballforlife";
	$password = "Mattingly2327";
	$database = "baseballforlife";
	$server = "baseballforlife.db.9357957.hostedresource.com";

	$db_handle = mysql_connect($server, $user_name, $password)or die (mysql_error());
	$db_found = mysql_select_db($database, $db_handle);
?>