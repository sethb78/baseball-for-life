<link href="css/style.css" rel="stylesheet">
    <style type="text/css"></style>
<?PHP
	include 'sqlSurvey.php';include 'connection.php';
//$ipAddress = $_SERVER['REMOTE_ADDR'];

$ip = $_SERVER['REMOTE_ADDR'];


$date = date("Y/m/d");
$time = date ("h:i:s A");
session_start();
if ((isset($_SESSION['hasVoted_dud']))) {
	if ($_SESSION['hasVoted_dud'] = '1') {
		@include("INDEX.php");
	print '<div class="messages_dud">You Have Already Voted!</div>';
	;goto a;
	}
}



else{






	if (isset($_GET['Submit1']) && isset($_GET['q'])) {
		$selected_radio = $_GET['q'];
		if ($accounts) {
			$_SESSION['hasVoted_dud'] = '1';
			$SQL = "UPDATE answers_Dud SET $selected_radio = $selected_radio + 1";
			$result = mysql_query($SQL);
			mysql_close($accounts);
						
			include 'connection.php';
			$sql="INSERT INTO vote_tracking_Dud (poll_id, ip_address, date_voted, time_voted) VALUES ('$qNum_Dud', '".$ip."','".$date."','".$time."')";
			mysql_query($sql);	
		@include("index.php");

			print '<div class="messages_dud">Thank You For Voting!</div>';		

		}
		else {
		print "database error";
		}
	}
	else {@include("INDEX.php");
	print '<div class="messages_dud">You didn\'t select a voting option!</div>';
	
	}}
	
a:;
?>

<html>
<head>
<title>Process Survey</title>
</head>



<body>

</body>
</html>


