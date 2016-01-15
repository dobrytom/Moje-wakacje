<?php
include("sql.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$query = mysql_query("insert into tours values('','".$_POST['name']."',now(),'".$_POST['author']."','".$_POST['content']."')");
echo '
<script type="text/javascript">
<!--
alert("Dziękujemy za dodanie podróży!");
//-->
function init(){
				setTimeout(document.location="index.html", 1000);
			}
		window.onload=init;
</script> ';
}
?>