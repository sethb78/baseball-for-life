<?PHP
$question = '';
$answerA = '';
$answerB = '';
$answerC = '';
$answerD = '';

$imgTagA = '';
$imgWidthA = '0';

$imgTagB = '';
$imgWidthB = '0';

$imgTagC = '';
$imgWidthC = '0';

$imgTagD = '';
$imgWidthD = '0';

$imgHeight = '10';
$totalP = '';
$percentA = '0';
$percentB = '0';
$percentC = '0';
$percentD = '0';

$qA = '';
$qB = '';
$qC = '';
$qD = '';

if (isset($_GET['Submit2'])) {

		$qNum = $_GET['h1'];

		$user_name = "baseballforlife";
	$password = "Mattingly2327";
	$database = "baseballforlife";
	$server = "baseballforlife.db.9357957.hostedresource.com";


		$db_handle = mysql_connect($server, $user_name, $password);
		$db_found = mysql_select_db($database, $db_handle);

		if ($db_found) {

			$SQL = "SELECT * FROM tblQuestions, answers WHERE tblQuestions.QID = answers.QID AND answers.QID = '$qNum'";
			$result = mysql_query($SQL);
			$db_field = mysql_fetch_assoc($result);

			$question = $db_field['Question'];
			$answerA = $db_field['A'];
			$answerB = $db_field['B'];
			$answerC = $db_field['C'];
			$answerD = $db_field['D'];

			$qA = $db_field['qA'];
			$qB = $db_field['qB'];
			$qC = $db_field['qC'];
			$qD = $db_field['qD'];

			$imgWidthA = $answerA;
			$imgWidthB = $answerB;
			$imgWidthC = $answerC;
			$imgWidthD = $answerD;

$totalP = $answerA + $answerB + $answerC+ $answerD;

$percentA = (($answerA * 100) / $totalP);
$percentA = floor($percentA);

$percentB = (($answerB * 100) / $totalP);
$percentB = floor($percentB);

$percentC = (($answerC * 100) / $totalP);
$percentC = floor($percentC);

$percentD = (($answerD * 100) / $totalP);
$percentD = floor($percentD);

$imgWidthA = $percentA * 2;
$imgWidthB = $percentB * 2;
$imgWidthC = $percentC * 2;
$imgWidthD = $percentD * 2;


			$imgTagA = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthA. ">";
			$imgTagB = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthB . ">";
			$imgTagC = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthC . ">";
			$imgTagD = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthD . ">";

			mysql_close($db_handle);


		}
		else {
			print "database error";
		}


}
else {
	print "no results to display";
}
?>

<html>
<head>
<title>Process Survey</title>
</head>



<body>

<?PHP
print $question . "<BR>";
print $imgTagA . " " . $percentA . "% " . $qA . " ($answerA votes)<BR>";
print $imgTagB . " " . $percentB . "% " . $qB . "($answerB votes)<BR>";
print $imgTagC . " " . $percentC . "% " . $qC . "($answerC votes)<BR>";
print $imgTagD . " " . $percentD . "% " . $qD . "($answerD votes)<BR>";

?>
</body>
</html>