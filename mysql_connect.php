<?php
$host="localhost";
$un="kullanıcı_adı";
$pw="parola";
$db="database";
mysql_connect($host,$un,$pw);
mysql_select_db($db);
mysql_query("SET NAMES UTF-8");
?>
