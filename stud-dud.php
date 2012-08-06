<?php

$accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
or die (mysql_error());

mysql_select_db("baseballforlife", $accounts);


$sql=("INSERT INTO Stud(Week, Name, Image,Line,Comments) 
	VALUES('15','Jose Bautista','http://a.espncdn.com/combiner/i?img=/i/headshots/mlb/players/full/5890.png&w=350&h=254','(7R/4HRs/8RBIs/1.328 OPS) ','I again apologize for the sloppy write up from last week, and my missing the week before. I will try to finish strong with these write-ups. Late congrats to Jose Bautista (who has since gotten hurt). We will see who can bring home the trophy this week. See below for Week #15 Hot List Rankings');
	
");
	
	mysql_query($sql, $accounts);
$sql2=("INSERT INTO Dud(Week, Name, Image,Line) 
	VALUES('15','Eric Hosmer','http://a.espncdn.com/combiner/i?img=/i/headshots/mlb/players/full/30993.png&w=350&h=254','(1RBI/.182 OPS)   ');
	
");
mysql_query($sql2, $accounts);//(variable, connection)

?>