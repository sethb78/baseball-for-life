<!DOCTYPE html>




<html>
<?php include 'head.php';?>

<body>
	<div class="baseball">
		
		<?php include 'header.php'; ?>
	

	<!--Power Rankings-->	


<?php
$accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
or die (mysql_error());

mysql_select_db("baseballforlife", $accounts);



$result = mysql_query("SELECT DISTINCT Week FROM PowerRankings ORDER by Week");
echo '<div class="pr">';
echo '<div class="power-header">POWER RANKINGS</div>';

echo '<ul>Week:';
while ($row=mysql_fetch_array($result))
{
echo '<li><a href="http://www.baseball-for-life.net/PowerRankings.php?WeekPicked='.$row['Week'].'">'.$row['Week'].'</a></li><li class="divider-vertical"></li>';
			
}
echo '</ul>';

$v1 = $_GET['WeekPicked'];

$result = mysql_query("SELECT  * FROM PowerRankings WHERE Week=$v1 Order by Rank");
$date=mysql_fetch_array($result);

echo '<table>';
echo '<tr><th class="week" colspan="4">Week '.$v1.':&nbsp &nbsp'.$date['Date'].'</th></tr>';
echo '<tr><th>Rank</th><th>Team/Record</th><th>Prev Rank</th><th>Comments</th></tr>';
echo '<tbody class="tablebody">';		



$result = mysql_query("SELECT  * FROM PowerRankings WHERE Week=$v1 Order by Rank");
while($row = mysql_fetch_array($result))


{

   echo'<tr>';
  echo '<td class="rank">'. $row['Rank'] . '</td>';
 
switch ($row['Team'])
{
case "Seth B. Altshuler":
   echo '<td class= "team seth" iframe style=�zoom: 75%� align=�center� height=�480? width=�640? 
><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=7&seasonId=2012"title="Gone Fishing">';
  break;
case "Eric Waldstein":
   echo '<td class= "team eric"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=2&seasonId=2012"title="Much to My Chagrin">';
  break;
  case "Chris Mantione":
   echo '<td class= "team chris"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=3&seasonId=2012"title="Joey Bats">';
  break;
  case "Dave Waldstein":
   echo '<td class= "team dave"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=12&seasonId=2012"title="Team images/red_bar_baremption">';
  break;
  case "Matt Stockwell":
   echo '<td class= "team matt"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=5&seasonId=2012" title="Hamels Epidemic">';
  break;
  case "Dave Majofsky":
   echo '<td class= "team ralphie"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=8&seasonId=2012"title="ESPN Sucks">';
  break;
  case "Mark Colantoni":
   echo '<td class= "team mark"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=10&seasonId=2012"title="Colonel Moustakis">';
  break;
  case "Rob Gleason":
   echo '<td class= "team rob"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=1&seasonId=2012"title="I Like Matt Kemp">';
  break;
  case "Jeff Stern":
   echo '<td class= "team jeff"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=9&seasonId=2012"title="JerseyTiptoes">';
  break;
  case "Jay Kondas":
   echo '<td class= "team jay"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=11&seasonId=2012"title="Escargot, MyCar Go,160,Swiftly">';
  break;
  case "Arjun Rajeev":
   echo '<td class= "team arjun"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=6&seasonId=2012"title="Average Joe\'s">';
  break;
  case "Kevin O'Brien":
   echo '<td class= "team kevin"><a href="http://games.espn.go.com/flb/clubhouse?leagueId=42147&teamId=4&seasonId=2012"title="Irish Jews">';
  default:
  break;
}



  echo $row['Team'].'</a><br>'. $row['Record'].'</td>';
  echo '<td class="change">'.$row['LastWeek'].'<br><br><br><br>'.$row['Move'].'</td>';
  echo '<td class="comments">'. $row['Comments'].'<br><br> <span class="studdud">Stud of the Week:  &nbsp;</span>' .$row['Stud'].'<br><span class="studdud">Dud of the Week: &nbsp; </span>'. $row['Dud'].'</td>';
  echo '</tr>';
  }
echo '</tbody></table>';

mysql_close($accounts);


















?> 		
				

<!--Footer-->	
	   <?php include 'footer.php'; ?>
		
	
	<!-- hitwebcounter Code START -->
	<a href="http://www.hitwebcounter.com/" target="_blank">
		<img src="http://hitwebcounter.com/counter/counter.php?page=4440732&style=0009&nbdigits=3&type=page&initCount=0" title="free web counter" Alt="free web counter"   border="0" >
	</a>
	<br>
	<!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com/internetcountercontact.php" title="Web Counter" 
		target="_blank" style="font-family: Arial, Geneva , Helvetica, sans-serif;text-decoration: none ; color: #6C5D67; font-size: 12px;">
		<strong>Web Counter</strong>
	</a>
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