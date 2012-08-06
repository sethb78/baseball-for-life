<?php

include'connection.php';
mysql_select_db("baseballforlife", $accounts);




$sql=("INSERT INTO History(Year,1st,2nd,3rd,Regular_Season_Champ) 
VALUES('2003','Chris Stryshak','Brian Davis','Rob Gleason','Chris Stryshak');
");




$sql2 = ("INSERT INTO Team_History(Year,First_Name,Last_Name,Record,Pct,GB,Playoffs,Regular_Season_Finish,Playoff_Finish) 
VALUES	('2003','Chris','Stryshak','171-118-19','.586','-','yes','1st','1st'),
		('2003','Brian','Davis','161-125-22','.558','8.5','yes','2nd','2nd'),
('2003','Eric','Waldstein','160-126-22','.555','9.5','yes','3rd','6th'),
('2003','Dave','Waldstein','149-133-26','.526','18.5','yes','4th','5th'),
('2003','Rob','Gleason','140-142-26','.497','27.5','yes','5th','3rd'),
('2003','Seth B.','Altshuler','143-145-20','.497','27.5','yes','6th','4th'),
('2003','Chris','Mantione','131-156-21','.459','39','no','7th','10th'),
('2003','Arjun','Rajeev','125-157-26','.448','42.5','no','8th','7th'),
('2003','Matt','Stockwell','126-161-21','.443','44','no','9th','9th'),
('2003','Mark','Colantoni','124-167-17','.430','48','no','10th','8th');


");



mysql_query($sql,$accounts);
mysql_query($sql2,$accounts);


?>