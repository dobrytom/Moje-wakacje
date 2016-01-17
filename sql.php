<?php
require('config.php');
mysql_connect($host, $user, $password) or die('Błąd połaczenia z Bazą Danych');
mysql_select_db($database) or die('błąd połaczenia z bazą');
mysql_query("SET NAMES 'utf8'");
?>