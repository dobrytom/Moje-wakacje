﻿<html>
<head>
<title>Moje Wakacje - Opisz swoje wakacje</title>
</head>
<body background="tlo2.jpg" bgproperties="fixed" link="white" alink="yellow" vlink="white" text="#0066CC"><!-- http://commons.wikimedia.org/wiki/File:Water_texture_1390894_Nevit.jpg -->
<bgsound src="wind.mp3" loop="infinite"><!-- muzyka jest dostępna jedynie w internet explorer http://www.jamendo.com/pl/list/a4693/4d-reality -->
<center><img src="banner1.jpeg" width="50%" height="25%"></center>
<center>
<table border="1" width="50%" height="5%" background="tlotabeli.jpg">
<tr>
<td><center><a href="index.php">Strona Główna</a></center></td>
<td><center><a href="archive.php">Podróże</a></center></td>
<td><center><a href="add.html">Dodaj Podróż</a></center></td>
<td><center><a href="index.php">Kontakt</a></center></td>
</tr>
</table>
</center>
<center>
<table height="70%" width="50%" background="tlotabeli2.jpg">
<tr height="5%">
</tr>
<tr>
<td>
<center>
<?php
include("sql.php");
$query = mysql_query("select * from tours where id='".(int)$_GET['id']."'");
$rekord = mysql_fetch_array($query);
echo '<h1>'.$rekord[1].'</h1>Autor: '.$rekord[3].'<br/>Data: '.$rekord[2].'<p>'.$rekord[4].'</p>';
?>
</center>
</td>
</tr>
</table>
</center>
<!--bgcolor="#6699FF"--><!--bgcolor="#6699FF"-->
</body>
</html>