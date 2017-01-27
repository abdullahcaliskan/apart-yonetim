<?php
include("mysql_connect.php");

include("function.php");
$id=$_POST['s_id'];
$value=$_POST['s_value'];
$guncelle=mysql_query("UPDATE kisiler SET k_oda='$id' WHERE k_id='$value'");
if($guncelle){
	echo "Oda Değiştirildi.";
}
else
{
	echo "Hata! Yöneticiyi Arayın.";
}
?>