<?php

include'connection.php';
mysql_select_db("baseballforlife", $accounts);




$sql=("INSERT INTO Members(Full_Name,First_Name,Last_Name,Card,Bio,Comment_1,Comment_2,Comment_3,Comment_4,Comment_5,Comment_6,Comment_7,Comment_8,Comment_9,Comment_10,2003_Wins,2003_Losses,2003_Ties,2004_Wins,2004_Losses,2004_Ties,2005_Wins,2005_Losses,2005_Ties,2006_Wins,2006_Losses,2006_Ties,2007_Wins,2007_Losses,2007_Ties,2008_Wins,2008_Losses,2008_Ties,2009_Wins,2009_Losses,2009_Ties,2010_Wins,2010_Losses,2010_Ties,2011_Wins,2011_Losses,2011_Ties,2012_Wins,2012_Losses,2012_Ties)

VALUES(
'Mark Colantoni',
'Mark',
'Colantoni',
'images/markcard.jpg',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'',
'124',
'167',
'17',
'119',
'164',
'25',
'125',
'160',
'23',
'105',
'144',
'15',
'131',
'108',
'25',
'106',
'139',
'19',
'112',
'124',
'28',
'128',
'118',
'18',
'74',
'114',
'22',
'',
'',
'');

");




mysql_query($sql,$accounts);


?>