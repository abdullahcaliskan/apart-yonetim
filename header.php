<!DOCTYPE html>
 <?php $open="www.topbaslarapart.com"; ?>

<?php
if($_SERVER['HTTP_HOST']==$open){
	
include("mysql_connect.php");
include("function.php");	

} else { include("mail.php"); }?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
		});
	};

</script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="jsDatePick.min.1.3.js"></script>
<script src="myjs.js"></script>
<link rel="stylesheet" type="text/css" href="css/design.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/awesome.min.css" />
<link rel="stylesheet" type="text/css" href="jsDatePick_ltr.min.css"/>

</head>
<body>
<div id="msgBox"></div>
<div align="center">
<!-- üst kısım -->
<div id="top" class="kutu">
	<div id="top_left"><a href="default.php"><img align="center" class="logo" src="logo.png" width="200" height="90"/></a></div>
	<div id="top_right">
		<table align="right">
		<tr>
			<td colspan="2" align="right"><a href='sifreDegistir.php'><img src='head/sifre.png' /></a>
			<a href='exit.php'><img src='head/cikis.png' /></a></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><br><a href="oda.php"> <img style="margin-top:5px;" src="head/apart.png"/></a><a href="kisi_listele.php"> <img style="margin-top:5px;" src="head/kisiler.png"/></a><a href="kisi_ekle.php"> <img style="margin-top:5px;" src="head/ye.png"/></a></td>
		</tr>

		</table>
	</div>	
	<div style="clear:both;"></div>
</div>
<!-- burası operator gina -->
<div id="hello_message_bar" class="kutu">
	
</div>
<!-- menü ve content -->
<div id="middle" class="kutu">
	
	<!-- content -->
	<div id="content">

