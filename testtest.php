<!DOCTYPE html>




<html>
<?php include 'head.php';?>

<body>
	
	<div class="baseball">
		
	
		<?php include 'header.php'; ?>

			
	
	<!--Stud and Dud Boxes-->
<?php

$accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
		or die (mysql_error());
		mysql_select_db("baseballforlife", $accounts);



$_MaxWeek ="SELECT * FROM Stud Order by Week ASC";
$result = mysql_query($_MaxWeek);
$data=mysql_fetch_array($result);




echo '	<div id="stud-dud">
	   <div class="span10">WEEK '.$data['Week'].' RESULTS</div><br><div id="comments">'.$data['Comments'].'</div><hr>
			<div class="row">
				<div class="span5">
					<div class="stud">
						<div id="stud-title">Stud of the Week</div>
						<img src="'.$data['Image'].'">
						<div class="name">'.$data['Name'].'<br></div>
						<div class="stat-line">'.$data['Line'].'</div>
					</div>
				</div>'.
	mysql_select_db("baseballforlife", $accounts);
$_MaxWeek ="SELECT * FROM Dud Order by Week ASC";
$result = mysql_query($_MaxWeek);
$data=mysql_fetch_array($result);


echo'				<div class="span5">
					<div class="dud">
						<div id="dud-title">Dud of the Week</div>
						<img src="'.$data['Image'].'">
				<div class="name">'.$data['Name'].'<br></div>
						<div class="stat-line">'.$data['Line'].'</div>
					</div>
				</div>
			</div>
	   </div>'
	   ?>
	   

	   
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