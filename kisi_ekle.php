<?php include('header.php'); ?>
<div class="icerik"><h3 class="head" align="center">Kişi Ekle</h3>
<form name="kisi_ekleme" method="POST" action="kisi_ekle.php" class="form1">
<table>
<tr>
	<td>Ad</td>
	<td> : <input type="text" name="ad"/></td>
</tr>
<tr>
	<td>Soyad</td>
	<td> : <input type="text" name="sad"/></td>
</tr>
<tr>
	<td>T.C</td>
	<td> : <input type="text" name="tc"/></td>
</tr>
<tr>
	<td>Telefon</td>
	<td> : <input type="text" name="tel1"/></td>
</tr>
<tr>
	<td>Telefon 2</td>
	<td> : <input type="text" name="tel2"/></td>
</tr>
<tr>
	<td>Doğum Tarihi</td>
	<td> : <input type="text" name="inputField" id="inputField"/></td>
</tr>
<tr>
	<td valign="bottom">Açıklama</td>
	<td> : <textarea rows="3" cols="28" name="not"></textarea></td>
</tr>
<tr>
	<td valign="bottom">Adres</td>
	<td valign="top"> : <textarea rows="3" cols="28" name="adres"></textarea></td>
</tr>
<tr>
	<td colspan="2" align="right"><input type="submit" name="gndrBtn" class="btnGonder" value="Kişiyi Ekle" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['gndrBtn'])){
	$ad=$_POST['ad'];
	$sad=$_POST['sad'];
	$tc=$_POST['tc'];
	$tel1=$_POST['tel1'];
	$tel2=$_POST['tel2'];
	$inputField=$_POST['inputField'];
	$adres=$_POST['adres'];
	$not=$_POST['not'];
	$req=kisi_ekle($ad,$sad,$tc,$tel1,$tel2,$inputField,$adres,$not);
	echo $req;
}
?>
</div>
<?php include('footer.php'); ?>