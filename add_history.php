<?php

include'connection.php';
mysql_select_db("baseballforlife", $accounts);







$sql2 = ("INSERT INTO Team_History(Year,First_Name,Last_Name,Record,Pct,GB,Playoffs,Regular_Season_Finish,Playoff_Finish) 
VALUES
('2011','Kevin','mysql_real_escape_string(O'Brien)','110-83-17','.564','2','yes','2nd','1st');



");


mysql_query($sql2,$accounts);


?>