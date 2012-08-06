<!DOCTYPE html>




<html>
<?php include 'head.php';?>

<body>
	<div class="baseball">
		
		<?php include 'header.php'; ?> 

<div class="keepers">

 <?php	
  echo'<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#pane1" data-toggle="tab">Hitters</a></li>
    <li><a href="#pane2" data-toggle="tab">Pitchers</a></li>
    <li><a href="#pane3" data-toggle="tab">First Base</a></li>
    <li><a href="#pane4" data-toggle="tab">Second Base</a></li>
	<li><a href="#pane5" data-toggle="tab">Shortstop</a></li>
	<li><a href="#pane6" data-toggle="tab">Third Base</a></li>
	<li><a href="#pane7" data-toggle="tab">Catcher</a></li>
	<li><a href="#pane8" data-toggle="tab">Outfield</a></li>
  </ul>';
 

 $accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
or die (mysql_error());

mysql_select_db("baseballforlife", $accounts);


echo '  <div class="tab-content">';

echo  '<div id="pane1" class="tab-pane active">';
$result = mysql_query('SELECT * FROM Keepers WHERE Position !="P"' );
echo '<table>';
echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';


echo '<div id="pane2" class="tab-pane">';
$result= mysql_query ('SELECT * FROM Keepers WHERE Position ="P"');
echo'<table>';
 echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';
   
   echo  '<div id="pane3" class="tab-pane">';
$result = mysql_query('SELECT * FROM Keepers WHERE Position ="1B" Or Position="1B\;OF"' );
echo '<table>';
echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';


echo '<div id="pane4" class="tab-pane">';
$result= mysql_query ('SELECT * FROM Keepers WHERE Position ="2B" or Position="2B\;OF"');
echo'<table>';
 echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';

	   echo  '<div id="pane5" class="tab-pane">';
$result = mysql_query('SELECT * FROM Keepers WHERE Position ="SS" Or Position="SS\;3B"' );
echo '<table>';
echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';
	
   echo  '<div id="pane6" class="tab-pane">';
$result = mysql_query('SELECT * FROM Keepers WHERE Position ="3B" Or Position="SS\;3B" or Position="3B\;OF"' );
echo '<table>';
echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';

   echo  '<div id="pane7" class="tab-pane">';
$result = mysql_query('SELECT * FROM Keepers WHERE Position ="C"' );
echo '<table>';
echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';


   echo  '<div id="pane8" class="tab-pane">';
$result = mysql_query('SELECT * FROM Keepers WHERE Position ="OF" Or Position="1B\;OF" or Position="2B\;OF" or Position="3B\;OF"' );
echo '<table>';
echo '<tr class="bottom-border"><td>Player</td><td>Pos</td><td>1st Yr</td><td>2nd Yr</td><td>3rd Yr</td><td>4th Yr</td><td>Years Kept</td></tr>';
while($row = mysql_fetch_array($result)){
echo '<tr><td class="name">'.$row['First'].'&nbsp'.$row['Last'].'</td><td class="entry">'.$row['Position'].'</td><td class="entry">'.$row['Year1'].'</td><td class="entry">'.$row['Year2'].'</td><td class="entry">'.$row['Year3'].'</td><td class="entry">'.$row['Year4'].'</td><td class="entry">'.$row['YearsKept'].'</td></tr>';
}  
echo '</table>';
echo '</div>';


echo'    </div>
  </div>';
mysql_close($accounts);


?> 
	</div>
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
   <script src="js/bootstrap-tab.js"></script>
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