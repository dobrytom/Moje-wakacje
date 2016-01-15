<?php
include("sql.php");
$query = mysql_query("select * from tours order by id desc limit 0,5");
while($rekord = mysql_fetch_array($query))
{
$naz = '<li><a href="read.php?id='.$rekord[0].'">'.$rekord[1].'</a> Autor: '.$rekord[3].' - '.$rekord[2].'</li>';
echo('<ul>'.$naz.'</ul>');
echo("<hr>");
}
echo '<ul>'.$naz.'</ul>';
?>