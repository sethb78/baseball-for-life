<!DOCTYPE html>

<html>
<head>


<?php include 'head.php';?>
</head>
  <link rel="shortcut icon" href="images/ball.ico">
<body>
	
	<div class="baseball">
		
	
		<?php include 'header.php'; ?>
			
					<div class="history_text">
						<li class="dropdown">
						<div class="btn-group"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Choose Year<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php include 'connection.php';
									$result = mysql_query("SELECT DISTINCT Year FROM History ORDER by Year Desc");
									echo '<li><a href="history.php?YearPicked=All-Time">All-Time</a></li>';
									while($row = mysql_fetch_array($result))
									{
										echo '<li><a href="history.php?YearPicked='.$row['Year'].'">'.$row['Year'].'</a></li>';
									}
							echo '</ul>
						</div>';		
						$year1 = $_GET['YearPicked'];
						echo'</li><br><br>';
						if($year1=="All-Time")
						{
							$result = mysql_query("SELECT  * FROM Members ORDER BY All_Time_Pct Desc");
							echo'	<div class="history_year">All-Time Standings</div><br><br>';
							echo '<table>	<tr class="heading"><th>TEAM</th><th>RECORD</th><th>PCT</th></tr>';
							while($row = mysql_fetch_array($result))
							{
								echo'<tr><td>'.$row['Full_Name'].'</td><td>'.$row['All_Time_Wins'].'-'.$row['All_Time_Losses'].'-'.$row['All_Time_Ties'].'</td><td>'.$row['All_Time_Pct'].'</td></tr>';
							}	
							echo '</tbody></table>';
						}
						else
						{
							$result = mysql_query("SELECT  * FROM History WHERE Year=$year1");
							$year_chosen=mysql_fetch_array($result);
							echo'	<div class="history_year">'.$year_chosen['Year'].'</div><br><br>';
							echo'<div class="place">Champion</div><div class="place">Runner-UP</div><div class="place">3rd Place</div><div class="place">Reg. Season Champ</div>';
							echo '	<div class="place2">'.$year_chosen['1st'].'</div><div class="place2">'.$year_chosen['2nd'].'</div><div class="place2">'.$year_chosen['3rd'].'</div><div class="place2">'.$year_chosen['Regular_Season_Champ'].'</div><br><br>';?>
							<div class="title">Regular Season Standings</div>
							<table>	<tr class="heading"><th>PLACE</th><th>TEAM</th><th>RECORD</th><th>PCT</th><th>GB</th></tr>
							<?php
								$result=mysql_query("SELECT * FROM Team_History WHERE Year=$year1 ORDER BY Pct DESC");$x=1;
								while($row = mysql_fetch_array($result))
								{
									echo'<tr><td>'.$x.'</td><td>'.$row['First_Name'].' '.$row['Last_Name'].'</td><td>'.$row['Record'].'</td><td>'.$row['Pct'].'</td><td>'.$row['GB'].'</td></tr>';
									$x++;
								}	
						echo '</table>';
					}	
						?>
			</div>
<?php	include 'footer.php'; ?>
</div>		
</body>

<?include 'jsdocumentation.php'?>

</html>