<!DOCTYPE html>


<?PHP

	include 'sqlSurvey.php';


	$qID = '';
	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';
	$answerD = 'unchecked';
	$qID_Dud = '';
	$question_Dud = 'Question not set';
	$answerA_Dud = 'unchecked';
	$answerB_Dud = 'unchecked';
	$answerC_Dud = 'unchecked';
	$answerD_Dud = 'unchecked';

		
		include 'connection.php';
	if ($db_found) {

		$result = mysql_query($SQL);
		$result_Dud = mysql_query($SQL_Dud);
		
		$db_field = mysql_fetch_assoc($result);
		$db_field_Dud = mysql_fetch_assoc($result_Dud);

			$qID = $db_field['QID'];
			$question = $db_field['Question'];
			$A = $db_field['qA'];
			$B = $db_field['qB'];
			$C = $db_field['qC'];
			$D = $db_field['qD'];
			$qID_Dud = $db_field_Dud['QID'];
			$question_Dud = $db_field_Dud['Question'];
			$A_Dud = $db_field_Dud['qA'];
			$B_Dud = $db_field_Dud['qB'];
			$C_Dud = $db_field_Dud['qC'];
			$D_Dud = $db_field_Dud['qD'];
			mysql_close($db_handle);

	}
	else {
		print "Error getting Survey";
		mysql_close($db_handle);
	}
	?>



<html>
<head>



</head>
<body>
	
	
	

<?PHP
$question_Dud = '';
$answerA_Dud = '';
$answerB_Dud = '';
$answerC_Dud = '';
$answerD_Dud = '';
$question_Dud = '';
$answerA_Dud = '';
$answerB_Dud = '';
$answerC_Dud = '';
$answerD_Dud = '';


$imgTagA = '';
$imgWidthA = '0';
$imgTagA_Dud = '';
$imgWidthA_Dud = '0';

$imgTagB = '';
$imgWidthB = '0';
$imgTagB_Dud = '';
$imgWidthB_Dud = '0';

$imgTagC = '';
$imgWidthC = '0';
$imgTagC_Dud = '';
$imgWidthC_Dud = '0';

$imgTagD = '';
$imgWidthD = '0';
$imgTagD_Dud = '';
$imgWidthD_Dud = '0';

$imgHeight = '10';
$totalP = '';
$percentA = '0';
$percentB = '0';
$percentC = '0';
$percentD = '0';
$imgHeight_Dud = '10';
$totalP_Dud = '';
$percentA_Dud = '0';
$percentB_Dud = '0';
$percentC_Dud = '0';
$percentD_Dud = '0';

$qA = '';
$qB = '';
$qC = '';
$qD = '';
$qA_Dud = '';
$qB_Dud = '';
$qC_Dud = '';
$qD_Dud = '';



		//$qNum =$qID;
		//$qNum =$qID_Dud;
		
include 'connection.php';

		$db_handle = mysql_connect($server, $user_name, $password);
		$db_found = mysql_select_db($database, $db_handle);

		if ($db_found) {

			$SQL = "SELECT * FROM tblQuestions, answers WHERE tblQuestions.QID = answers.QID AND answers.QID = '$qNum'";
			$result = mysql_query($SQL);
			$db_field = mysql_fetch_assoc($result);
			$SQL_Dud = "SELECT * FROM tblQuestions_Dud, answers_Dud WHERE tblQuestions_Dud.QID = answers_Dud.QID AND answers_Dud.QID = '$qNum_Dud'";
			$result_Dud = mysql_query($SQL_Dud);
			$db_field_Dud = mysql_fetch_assoc($result_Dud);
			
			
//$qNum =$qID;
//$qNum_Dud =$qID_Dud;

			$question = $db_field['Question'];
			$answerA = $db_field['A'];
			$answerB = $db_field['B'];
			$answerC = $db_field['C'];
			$answerD = $db_field['D'];
			$question_Dud = $db_field_Dud['Question'];
			$answerA_Dud = $db_field_Dud['A'];
			$answerB_Dud = $db_field_Dud['B'];
			$answerC_Dud = $db_field_Dud['C'];
			$answerD_Dud = $db_field_Dud['D'];
			
			
			$qA = $db_field['qA'];
			$qB = $db_field['qB'];
			$qC = $db_field['qC'];
			$qD = $db_field['qD'];
			$qA_Dud = $db_field_Dud['qA'];
			$qB_Dud = $db_field_Dud['qB'];
			$qC_Dud = $db_field_Dud['qC'];
			$qD_Dud = $db_field_Dud['qD'];
			
			$imgWidthA = $answerA;
			$imgWidthB = $answerB;
			$imgWidthC = $answerC;
			$imgWidthD = $answerD;
			$imgWidthA_Dud = $answerA_Dud;
			$imgWidthB_Dud = $answerB_Dud;
			$imgWidthC_Dud = $answerC_Dud;
			$imgWidthD_Dud = $answerD_Dud;
			
$totalP = $answerA + $answerB + $answerC+ $answerD;
$totalP_Dud = $answerA_Dud + $answerB_Dud + $answerC_Dud+ $answerD_Dud;

$percentA = @(($answerA * 100) / $totalP);
$percentA = floor($percentA);
$percentA_Dud = @(($answerA_Dud * 100) / $totalP_Dud);
$percentA_Dud = floor($percentA_Dud);

$percentB = @(($answerB * 100) / $totalP);
$percentB = floor($percentB);
$percentB_Dud = @(($answerB_Dud * 100) / $totalP_Dud);
$percentB_Dud = floor($percentB_Dud);

$percentC = @(($answerC * 100) / $totalP);
$percentC = floor($percentC);
$percentC_Dud = @(($answerC_Dud * 100) / $totalP_Dud);
$percentC_Dud = floor($percentC_Dud);

$percentD = @(($answerD * 100) / $totalP);
$percentD = floor($percentD);
$percentD_Dud = @(($answerD_Dud * 100) / $totalP_Dud);
$percentD_Dud = floor($percentD_Dud);


$imgWidthA = $percentA * 2;
$imgWidthB = $percentB * 2;
$imgWidthC = $percentC * 2;
$imgWidthD = $percentD * 2;
$imgWidthA_Dud = $percentA_Dud * 2;
$imgWidthB_Dud = $percentB_Dud * 2;
$imgWidthC_Dud = $percentC_Dud * 2;
$imgWidthD_Dud = $percentD_Dud * 2;


			$imgTagA = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthA. ">";
			$imgTagB = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthB . ">";
			$imgTagC = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthC . ">";
			$imgTagD = "<IMG SRC = 'red.jpg' Height = " . $imgHeight . " WIDTH = " . $imgWidthD . ">";
			$imgTagA_Dud = "<IMG SRC = 'red.jpg' Height = " . $imgHeight_Dud . " WIDTH = " . $imgWidthA_Dud. ">";
			$imgTagB_Dud = "<IMG SRC = 'red.jpg' Height = " . $imgHeight_Dud . " WIDTH = " . $imgWidthB_Dud . ">";
			$imgTagC_Dud = "<IMG SRC = 'red.jpg' Height = " . $imgHeight_Dud . " WIDTH = " . $imgWidthC_Dud . ">";
			$imgTagD_Dud = "<IMG SRC = 'red.jpg' Height = " . $imgHeight_Dud . " WIDTH = " . $imgWidthD_Dud . ">";

			mysql_close($db_handle);


		}
		else {
			print "database error";
		}



?>
