<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
mail($mail , $_POST['topic'] , $_POST['name'].":".$_POST['content']);
echo '
<script type="text/javascript">
<!--
alert("Formularz został wysłany!");
//-->
function init(){
				setTimeout(document.location="index.html", 1000);
			}
		window.onload=init;
</script> ';
}
?>