<?PHP

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		//===================================================
		//	GET THE QUESTION AND ANSWERS FROM THE FORM
		//===================================================
	$question = $_POST['question'];
	$answerA = $_POST['AnswerA'];
	$answerB = $_POST['AnswerB'];
	$answerC = $_POST['AnswerC'];
	$answerD = $_POST['AnswerD'];


	$question  = htmlspecialchars($question);
	$answerA = htmlspecialchars($answerA);
	$answerB = htmlspecialchars($answerB);
	$answerC = htmlspecialchars($answerC);
	$answerD = htmlspecialchars($answerD);

	$question_Dud = $_POST['question_Dud'];
	$answerA_Dud = $_POST['AnswerA_Dud'];
	$answerB_Dud = $_POST['AnswerB_Dud'];
	$answerC_Dud = $_POST['AnswerC_Dud'];
	$answerD_Dud = $_POST['AnswerD_Dud'];


	$question_Dud  = htmlspecialchars($question_Dud);
	$answerA_Dud = htmlspecialchars($answerA_Dud);
	$answerB_Dud = htmlspecialchars($answerB_Dud);
	$answerC_Dud = htmlspecialchars($answerC_Dud);
	$answerD_Dud = htmlspecialchars($answerD_Dud);

		//============================================
		//	OPEN A CONNECTION THE DATABASE
		//============================================
include 'connection.php';
	if ($db_found) {

		//============================================
		//	GET THE LAST QUESTION NUMBER
		//============================================

		$SQL = "Select * FROM tblQuestions";

		$result = mysql_query($SQL);
		$numRows = mysql_num_rows($result);

		$boolLastRow = mysql_data_seek($result, ($numRows - 1));

		$row = mysql_fetch_row($result);

		$qID = $row[0];

		$next_Q_Number = ltrim($qID, 'q');
		$next_Q_Number++;
		$question_Number = 'q' . $next_Q_Number;
		//*******************************************************************
			$SQL_Dud = "Select * FROM tblQuestions_Dud";

		$result_Dud = mysql_query($SQL_Dud);
		$numRows_Dud = mysql_num_rows($result_Dud);

		$boolLastRow_Dud = mysql_data_seek($result_Dud, ($numRows_Dud - 1));

		$row_Dud = mysql_fetch_row($result_Dud);

		$qID_Dud = $row_Dud[0];

		$next_Q_Number_Dud = ltrim($qID_Dud, 'q');
		$next_Q_Number_Dud++;
		$question_Number_Dud = 'q' . $next_Q_Number_Dud;



		//=========================================================
		//	INSERT THE QUESTION INTO THE tblQuestions TABLE
		//=========================================================

		$SQL = "INSERT INTO tblQuestions (QID, Question, qA, qB, qC,qD) VALUES ('$question_Number', '$question', '$answerA', '$answerB', '$answerC', '$answerD')";

		$result = mysql_query($SQL);
//******************************************************************************************************************
		$SQL_Dud = "INSERT INTO tblQuestions_Dud (QID, Question, qA, qB, qC,qD) VALUES ('$question_Number_Dud', '$question_Dud', '$answerA_Dud', '$answerB_Dud', '$answerC_Dud', '$answerD_Dud')";

		$result_Dud = mysql_query($SQL_Dud);

		//=============================================================
		//	SET A ROW IN THE answers TABLE, WITH THE SAME QID FIELD
		//=============================================================

		$SQL_Dud = "INSERT INTO answers (QID, A, B, C,D) VALUES ('$question_Number', 0, 0, 0,0)";
		$result = mysql_query($SQL);
//***********************************************************************************************************
		$SQL_Dud = "INSERT INTO answers_Dud (QID, A, B, C,D) VALUES ('$question_Number_Dud', 0, 0, 0,0)";
		$result_Dud = mysql_query($SQL_Dud);

		mysql_close($db_handle);

		print "The question has been added to the database";

	}
	else {
		print "Database NOT Found ";
		mysql_close($db_handle);
	}



}


?>


<html>
<head>
<title>Survey Admin Page</title>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="setQuestion.php">

STUD: <INPUT TYPE = 'TEXT' Name ='question'  value="Who Was The Stud Of The Week?" maxlength="50">
<p>
Stud 1: <INPUT TYPE = 'TEXT' Name ='AnswerA'  value="a3" maxlength="250">
Stud 2: <INPUT TYPE = 'TEXT' Name ='AnswerB'  value="b3" maxlength="250">
Stud 3: <INPUT TYPE = 'TEXT' Name ='AnswerC'  value="c3" maxlength="250">
Stud 4: <INPUT TYPE = 'TEXT' Name ='AnswerD'  value="d3" maxlength="250">
<br><br>

Dud: <INPUT TYPE = 'TEXT' Name ='question_Dud'  value="Who Was The Dud Of The Week?" maxlength="50">
<p>
Dud 1: <INPUT TYPE = 'TEXT' Name ='AnswerA_Dud'  value="a3" maxlength="250">
Dud 2: <INPUT TYPE = 'TEXT' Name ='AnswerB_Dud'  value="b3" maxlength="250">
Dud 3: <INPUT TYPE = 'TEXT' Name ='AnswerC_Dud'  value="c3" maxlength="250">
Dud 4: <INPUT TYPE = 'TEXT' Name ='AnswerD_Dud'  value="d3" maxlength="250">

<P align = center>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Set this Question">
</P>

</FORM>

<P>
<?PHP print $errorMessage;?>




</body>
</html>









