<!DOCTYPE html>
<html>

<head>


<?php include 'head.php';?>
</head>
  <link rel="shortcut icon" href="images/ball.ico">
<div class="baseball">
		
	
		<?php include 'header.php'; 
		
/*		
include 'connection.php';					
$result = mysql_query("SELECT  DISTINCT CONCAT(First_Name, Last_Name) FROM Team_History ORDER BY Last_Name ASC");
while($row = mysql_fetch_array($result)){

$result2=mysql_query("SELECT * From Teams WHERE CONCAT(First_Name,Last_Name)='$row[0]'ORDER BY Year ASC");
while ($row2=mysql_fetch_array($result2)){
echo $row2['First_Name'].' '.$row2['Last_Name'].'<img src="'.$row2['Card'].'"> <br>';
}
}*/

include 'connection.php';
$result=mysql_query("Select DISTINCT Full_Name From Team_History ORDER BY Full_Name");
while ($row=mysql_fetch_array($result)){$Wins=0;$Losses=0;$Ties=0;

$result2=mysql_query("SELECT * From Team_History WHERE Full_Name='$row[0]'ORDER BY Year ASC");
while ($row2=mysql_fetch_array($result2)){
//echo $row2['First_Name'].' '.$row2['Last_Name'].' <br>';
$Wins= $Wins+$row2['Wins'];
$Losses= $Losses+$row2['Losses'];
$Ties=$Ties+$row2['Ties'];

echo $row2['Year'].' &nbsp&nbsp&nbsp&nbsp&nbsp'.$row2['First_Name'].'&nbsp&nbsp&nbsp&nbsp&nbsp '.$row2['Last_Name'].'&nbsp&nbsp&nbsp&nbsp&nbsp Wins: '.$row2['Wins'].'&nbsp&nbsp&nbsp&nbsp&nbsp Losses: '.$row2['Losses'].'&nbsp&nbsp&nbsp&nbsp&nbsp Ties: '.$row2['Ties'].' '.$row2['Pct'].'&nbsp&nbsp&nbsp&nbsp&nbsp'.$row2['GB'].'&nbsp&nbsp&nbsp&nbsp&nbsp '.$row2['Playoffs'].' &nbsp&nbsp&nbsp&nbsp&nbsp'.$row2['Regular_Season_Finish'].'  &nbsp&nbsp&nbsp&nbsp&nbsp  '.$row2['Playoff_Finish'].'<br>';
}

$Pct=((($Ties*.5)+$Wins)/($Wins+$Losses+$Ties));
echo 'TOTAL:'.$Wins.' &nbsp&nbsp&nbsp&nbsp&nbsp Losses:'.$Losses.' &nbsp&nbsp&nbsp&nbsp&nbsp Ties'.$Ties.' &nbsp&nbsp&nbsp&nbsp&nbsp Percentage:'.$Pct.'<br>';
}

?>

</div>		
</body>

<?include 'jsdocumentation.php'?>

</html>