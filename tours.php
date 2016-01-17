<?php
include("sql.php");
$query = mysql_query("select * from tours order by id desc limit 0,5");
while($rekord = mysql_fetch_array($query))
{
$naz = '<tr><td><center><a href="read.php?id='.$rekord[0].'">'.$rekord[1].'</a></center></td><td><center>'.$rekord[3].'</center></td><td><center>'.$rekord[2].'</center><td></tr>';
echo($naz);
}
?>