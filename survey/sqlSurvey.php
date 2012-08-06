<?PHP

	//===================================================
	//	SET THE QUESTION NUMBER HERE
	//===================================================
	$qNum = 'q3';

	//===================================================
	//	GET A QUESTION FROM THE tblQuestions TABLE
	//===================================================

	$SQL = "SELECT * FROM tblQuestions WHERE tblQuestions.QID = '$qNum'";

?>