<?php

$accounts= mysql_connect("baseballforlife.db.9357957.hostedresource.com","baseballforlife", "Mattingly2327") 
or die (mysql_error());

mysql_select_db("baseballforlife", $accounts);

$sql = "CREATE TABLE History
(

Year int,
1st varchar(25),
2nd varchar(25),
3rd varchar(25),
Regular_Season_Champ varchar(25)
)
";


mysql_query($sql, $accounts);

?>