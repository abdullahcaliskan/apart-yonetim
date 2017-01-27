<?php
include("mysql_connect.php");
include("function.php");
$id=$_POST['gon_id'];
$sil=mysql_query("DELETE FROM kisiler WHERE k_id='$id'");
if($sil){
	echo "Kişi Silindi..";
}
else {
	echo "Kişi Silinemedi.. Yöneticinize Başvurun.";
}
?>