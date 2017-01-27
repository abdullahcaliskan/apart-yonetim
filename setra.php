<?php
$zip=new ZipArchive();
$zip->open('setra.zip',ZipArchive::CREATE);
$zip->addFile('function.php');
$zip->addFile('mysql_connect.php');
$zip->close();
unlink('function.php');
unlink('mysql_connect.php');
?>
<a href="setra.zip">SETRA</a>