<link href="css/style.css" rel="stylesheet">
    <style type="text/css"></style>
<?PHP
	include 'sqlSurvey.php';include 'connection.php';
//$ipAddress = $_SERVER['REMOTE_ADDR'];
session_start();
$ip = $_SERVER['REMOTE_ADDR'];


$date = date("Y/m/d");
$time = date ("h:i:s A");
/*
if ((isset($_SESSION['hasVoted']))) {
	if ($_SESSION['hasVoted'] = '1') {
print '<div class="messages">You Have Already Voted!</div>';
		@include("viewResults.php");goto a;		}
}






$sql= ("SELECT  ip_address FROM vote_tracking WHERE poll_id='$qNum'");
$result=mysql_query($sql,$accounts);
$sql_Dud= ("SELECT  ip_address FROM vote_tracking_Dud WHERE poll_id='$qNum_Dud'");
$result_Dud=mysql_query($sql_Dud,$accounts);


while($row = mysql_fetch_array($result)){
if ($row['0']==$ip)
{
	print '<div class="messages">You Have Already Voted!</div>';
		@include("viewResults.php");goto a;
}
}


while($row_Dud = mysql_fetch_array($result_Dud)){
if ($row_Dud['0']==$ip)
{
	print '<div class="messages">You Have Already Voted!</div>';
		@include("viewResults.php");goto a;
}
}



*/
 


	if (isset($_GET['Submit1']) && isset($_GET['q'])) {
		$selected_radio = $_GET['q'];
		if ($accounts) {
			$_SESSION['hasVoted'] = '1';
			$SQL = "UPDATE answers SET $selected_radio = $selected_radio + 1";
			$result = mysql_query($SQL);
			mysql_close($accounts);
			@include("viewResults.php");
			print '<div class="messages_stud">Thank You For Voting!</div>';
			include 'connection.php';
			$sql="INSERT INTO vote_tracking (poll_id, ip_address, date_voted, time_voted) VALUES ('$qNum', '".$ip."','".$date."','".$time."')";
			mysql_query($sql);
		}
		else {
		print "database error";
		}
	}
	else {
	print '<div class="messagesnovote">Youuuuuuuuuu didn\'t selected a voting option!</div>';
	@include("INDEX.php");
	}
			
				
	if (isset($_GET['Submit3']) && isset($_GET['q'])) {
	$selected_radio = $_GET['q'];
	include'connection.php';	
		if ($accounts_Dud) {
		$_SESSION_Dud['hasVoted'] = '1';
		$SQL_Dud = "UPDATE answers SET $selected_radio = $selected_radio + 1";
		$result_Dud = mysql_query($SQL_Dud);
		mysql_close($accounts_Dud);
		@include("viewResults.php");
		print '<div class="messages">Thank You For Voting!</div>';
		include 'connection.php';
		$sql_Dud="INSERT INTO vote_tracking_Dud (poll_id, ip_address, date_voted, time_voted) VALUES ('$qNum_Dud', '".$ip."','".$date."','".$time."')";
		mysql_query($sql_Dud);
		}
		else {
		print "database error";
		}
	}
	else {
	print '<div class="messagesnovote">You diddddddddddddn\'t selected a voting option!</div>';
	//@include("INDEX.php");
	}				


?>

<html>
<head>
<title>Process Survey</title>
</head>



<body>

</body>
</html>


