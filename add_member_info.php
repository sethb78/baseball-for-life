<?php

include'connection.php';
mysql_select_db("baseballforlife", $accounts);




$sql=("INSERT INTO Members(Full_Name,First_Name,Last_Name)

VALUES('Chris Stryshak', 'Chris','Stryshak'),
('Gregg Harris','Gregg','Harris'),
('Dom Smith','Dom','Smith'),
('Brendan Tormey','Brendan','Tormey');

");




mysql_query($sql,$accounts);


?>