<!DOCTYPE html>
<!--
<?PHP

	include 'sqlSurvey.php';


	$qID = '';
	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';
	$answerD = 'unchecked';

	$user_name = "baseballforlife";
	$password = "Mattingly2327";
	$database = "baseballforlife";
	$server = "baseballforlife.db.9357957.hostedresource.com";

	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database, $db_handle);
	
	if ($db_found) {

		$result = mysql_query($SQL);

		$db_field = mysql_fetch_assoc($result);

			$qID = $db_field['QID'];
			$question = $db_field['Question'];
			$A = $db_field['qA'];
			$B = $db_field['qB'];
			$C = $db_field['qC'];
			$D = $db_field['qD'];
			mysql_close($db_handle);

	}
	else {
		print "Error getting Survey";
		mysql_close($db_handle);
	}
	?>
-->

<html>
<head>


<?php include 'head.php';?>
</head>
  <link rel="shortcut icon" href="images/ball.ico">
<body>
	
	<div class="baseball">
		
	
		<?php include 'header.php'; ?>

			
	
	<!--Stud and Dud Boxes-->
<?php

$accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
		or die (mysql_error());
		mysql_select_db("baseballforlife", $accounts);



$_MaxWeek ="SELECT * FROM Stud Order by Week DESC";
$result = mysql_query($_MaxWeek);
$data=mysql_fetch_array($result);




echo '	<div id="stud-dud">
			<div class="span10">WEEK '.$data['Week'].' RESULTS</div><br>
				<div id="comments">'.$data['Comments'].'</div><hr>
				<div class="row">
					<div class="span4">
						<div class="stud">
							<div id="stud-title">Stud of the Week</div>
							<img src="'.$data['Image'].'">
							<div class="name">'.$data['Name'].'<br></div>
							<div class="stat-line">'.$data['Line'].'</div>
						</div>
					</div>';
					
					
		mysql_select_db("baseballforlife", $accounts);
					
$_MaxWeek ="SELECT * FROM Dud Order by Week DESC";
$result = mysql_query($_MaxWeek);
$data=mysql_fetch_array($result);

echo'				<div class="span4">
						<div class="dud">
							<div id="dud-title">Dud of the Week</div>
							<img src="'.$data['Image'].'">
							<div class="name">'.$data['Name'].'<br></div>
							<div class="stat-line">'.$data['Line'].'</div>
					</div>
					</div>';
?>					
	<!---------------------------------------------------------------------------------------------

<div id="poll" class="span2">
<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">

<P>
<?PHP print $question; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
<P>
<INPUT TYPE = 'Radio' Name ='q'  value= 'D' <?PHP print $answerC; ?>><?PHP print $D; ?>
<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">

</FORM>


<FORM NAME ="form2" METHOD ="GET" ACTION ="viewResults.php">

<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "View results">
<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
			
	-->   </div><?php
	   mysql_close($accounts);
	   ?>
	   

	   
	
	
	<?php include 'footer.php'; ?>

</div>
</body>

<!-- ==============================================
		 JavaScript below! 															-->

<!-- jQuery via Google + local fallback, see h5bp.com -->
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

<!-- Bootstrap JS: compiled and minified -->
    <script src="js/bootstrap.min.js"></script>

<!-- Example plugin: Prettify -->
    <script src="js/prettify/prettify.js"></script>
    
<!-- Initialize Scripts -->
		<script>
			// Activate Google Prettify in this page
			addEventListener('load', prettyPrint, false);
		
			$(document).ready(function(){

				// Add prettyprint class to pre elements
					$('pre').addClass('prettyprint');
								
			}); // end document.ready
		</script>


</html>