
	<div class="span10">WEEK <?php echo $data2;?> Voting</div><br>
<div class="row">
	<div class="span5">
		<div id="poll_stud">hello
		<?PHP
			//include 'sqlSurvey.php';include 'connection.php';
			//$ipAddress = $_SERVER['REMOTE_ADDR'];
			$ip = $_SERVER['REMOTE_ADDR'];
			$sql= ("SELECT  ip_address FROM vote_tracking WHERE poll_id='$qNum'");
			$result=mysql_query($sql,$accounts);
			//$sql_Dud= ("SELECT  ip_address FROM vote_tracking_Dud WHERE poll_id='$qNum_Dud'");
			//$result_Dud=mysql_query($sql_Dud,$accounts);
			
		
	/*	$db_field = mysql_fetch_assoc($result);
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
			$D_Dud = $db_field_Dud['qD'];*/
		

	
			
			while($row = mysql_fetch_array($result)){
				if ($row['0']==$ip)
					{ 
					include 'viewResultsCalculations.php';
					print $qNum.'<div class="message">STUD POLL RESULTS</div>';
					print '<div class="total_votes">('.$totalP.' Total Vote(s))</div><br>';
					print $imgTagA . " " . $percentA . "%<br>" . $qA . "<br> ($answerA votes)<br>";
					print $imgTagB . " " . $percentB . "%<br>" . $qB . "<br> ($answerB votes)<br>";
					print $imgTagC . " " . $percentC . "%<br>" . $qC . "<br> ($answerC votes)<br>";
					print $imgTagD . " " . $percentD . "%<br>" . $qD . "<br> ($answerD votes)<br>";
				}}echo 'hello';goto B;
			
		?>	
			<FORM NAME ="form1" METHOD ="GET" ACTION ="process.php">
						<P>
						<div id="poll_question"><?PHP print $question; ?></div>
						<P><P>
						<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?>
						<P>
						<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?>
						<P>
						<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?>
						<P>
						<INPUT TYPE = 'Radio' Name ='q'  value= 'D' <?PHP print $answerC; ?>><?PHP print $D; ?>
						<P><br>
						<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
					</FORM>
					<FORM NAME ="form2" METHOD ="GET" ACTION ="viewResults.php">
						<INPUT TYPE = "Submit" Name = "Submit2"  VALUE = "View results">
						<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID; ?>>
			</FORM>		
			<?php B:?>
		</div>
	</div>
	<div class="span5">
		<div class="poll_stud">
				<?php while($row_Dud = mysql_fetch_array($result_Dud)){
				if ($row_Dud['0']==$ip)
					{ 
					include 'viewResultsCalculations.php';
					print '<div class="message">POLL RESULTS</div>';
					print '<div class="total_votes">('.$totalP.' Total Vote(s))</div><br>';
					print $imgTagA_Dud . " " . $percentA_Dud . "%<br>" . $qA_Dud . "<br> ($answerA_Dud votes)<br>";
					print $imgTagB_Dud . " " . $percentB_Dud . "%<br>" . $qB_Dud . "<br> ($answerB_Dud votes)<br>";
					print $imgTagC_Dud . " " . $percentC_Dud . "%<br>" . $qC_Dud . "<br> ($answerC_Dud votes)<br>";
					print $imgTagD_Dud . " " . $percentD_Dud . "%<br>" . $qD_Dud . "<br> ($answerD_Dud votes)<br>";
				}}goto C;
			
			?>
		<FORM NAME ="form3" METHOD ="GET" ACTION ="process.php">
			<P>
			<div id="poll_question"><?PHP print $question_Dud; ?></div>
			<P><P>
			<INPUT TYPE = 'Radio' Name ='q_Dud'  value= 'A' <?PHP print $answerA_Dud; ?>><?PHP print $A_Dud; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q_Dud'  value= 'B' <?PHP print $answerB_Dud; ?>><?PHP print $B_Dud; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q_Dud'  value= 'C' <?PHP print $answerC_Dud; ?>><?PHP print $C_Dud; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q_Dud'  value= 'D' <?PHP print $answerC_Dud; ?>><?PHP print $D_Dud; ?>
			<P><br>
			<INPUT TYPE = "Submit" Name = "Submit3"  VALUE = "Click here to vote">
		</FORM>
		<FORM NAME ="form4" METHOD ="GET" ACTION ="viewResults.php">
			<INPUT TYPE = "Submit" Name = "Submit4"  VALUE = "View results">
			<INPUT TYPE = "Hidden" Name = "h1"  VALUE = <?PHP print $qID_Dud; ?>>
		</FORM>
	

		<?php C: ?>
		</div>
	</div>