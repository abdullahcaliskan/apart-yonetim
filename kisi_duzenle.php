<?php include('header.php');  
$id=$_GET['id'];
?>
<div class="icerik">
<h3 class="head" align="center">Kişi Düzenle</h3>
<?php
$srg=mysql_query("SELECT * FROM kisiler WHERE k_id='$id'");
	while ($list=mysql_fetch_assoc($srg)) {
		echo "<form name='' method='POST' action='kisi_duzenle.php?id=".$id."'>";
		echo "<table class='form1' style=''>
<tr>
	<td>Ad</td>
	<td> : <input type='text' name='ad' value='".$list['k_ad']."'/></td>
</tr>
<tr>
	<td>Soyad</td>
	<td> : <input type='text' name='sad' value='".$list['k_soyad']."'/></td>
</tr>
<tr>
	<td>T.C</td>
	<td> : <input type='text' name='tc' value='".$list['k_tc']."'/></td>
</tr>
<tr>
	<td>Telefon</td>
	<td> : <input type='text' name='tel1' value='".$list['k_tel1']."'/></td>
</tr>
<tr>
	<td>Telefon 2</td>
	<td> : <input type='text' name='tel2' value='".$list['k_tel2']."'/></td>
</tr>
<tr>
	<td>Doğum Tarihi</td>
	<td> : <input type='text' name='inputField' id='inputField' value='".$list['k_dogum']."'/></td>
</tr>
<tr>
	<td valign='bottom'>Açıklama</td>
	<td> : <textarea rows='3' cols='28' name='not'>".$list['k_not']."</textarea></td>
</tr>
<tr>
	<td valign='bottom'>Adres</td>
	<td valign='top'> : <textarea rows='3' cols='28' name='adres'>".$list['k_adres']."</textarea></td>
</tr>
<tr>
	<td colspan='2' align='right'><input type='submit' name='gndrBtn' class='btnGonder' value='Kaydet' /></td>
</tr>
</table>";
echo "</form>";
}
if(isset($_POST['gndrBtn'])){
	$ad=$_POST['ad'];
	$sad=$_POST['sad'];
	$tc=$_POST['tc'];
	$tel1=$_POST['tel1'];
	$tel2=$_POST['tel2'];
	$inputField=$_POST['inputField'];
	$adres=$_POST['adres'];
	$not=$_POST['not'];
	$guncelle=mysql_query("UPDATE kisiler SET k_ad='$ad',k_soyad='$sad',k_tc='$tc',k_tel1='$tel1',k_tel2='$tel2',k_dogum='$inputField',k_adres='$adres',k_not='$not' WHERE k_id='$id'");
	if($guncelle){
		
		echo "<br><div class='ok_msg' style='color:white;'><i class='fa fa-check'></i> Değişiklikler kaydedildi..</div>";
	}
	else
	{
		echo "Hata! Yöneticinize Başvurun.";
	}
}
?>
</div>
<?php include('footer.php'); ?>