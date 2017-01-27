<?php include('header.php'); 
$id=$_GET['id'];
  ?>

<div class="icerik">
<h3 class="head" align="center">Kişi Ödeme Tablosu</h3>
<table>
	<tr>
		<td>
			<form method="POST" action="odeme.php?id=<?php echo $id; ?>" class="form1">
				<table>
					<tr>
						<td>Taksit Ayı</td>
						<td> : <?php ay_getir(); ?></td>
					</tr>
					<tr>
						<td>Tutar</td>
						<td> : <input type="text" name="tutar"/></td>
					</tr>
					<tr>
						<td valign="bottom">Ödeme Notu</td>
						<td> : <textarea rows="3" cols="28" name="odeme_notu"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" name="v" class="btnGonder" value="Tahsilat Yap"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['v'])){
					$ay_getir=$_POST['ay_getir'];
					$tutar=$_POST['tutar'];
					$odeme_notu=$_POST['odeme_notu'];
					$suan=date('Y-m-d');
					$mysql=mysql_query("INSERT INTO odeme(o_k_id,taksit_ayi,odeme_tarihi,tutar,odeme_notu) VALUES('$id','$ay_getir','$suan','$tutar','$odeme_notu')");
					if($mysql){
						echo "<br><div class='ok_msg' style='color:white;'><i class='fa fa-check'></i> Tahsilat Gerçekleştirildi..</div>";
						$_POST['v']="";
					}
				}
			?>
		</td>
		<td>
			<table class="odeme_tablosu">
				<tr>
					<td id="1"><b>Ocak</b><br><?php odeme_tablosu(1,$id); ?></td>
					<td id="2"><b>Şubat</b><br><?php odeme_tablosu(2,$id); ?></td>
					<td id="3"><b>Mart</b><br><?php odeme_tablosu(3,$id); ?></td>
					<td id="4"><b>Nisan</b><br><?php odeme_tablosu(4,$id); ?></td>
					<td id="5"><b>Mayıs</b><br><?php odeme_tablosu(5,$id); ?></td>
					<td id="6"><b>Haziran</b><br><?php odeme_tablosu(6,$id); ?></td>
				</tr>
				<tr>
					<td id="7"><b>Temmuz</b><br><?php odeme_tablosu(7,$id); ?></td>
					<td id="8"><b>Ağustos</b><br><?php odeme_tablosu(8,$id); ?></td>
					<td id="9"><b>Eylül</b><br><?php odeme_tablosu(9,$id); ?></td>
					<td id="10"><b>Ekim</b><br><?php odeme_tablosu(10,$id); ?></td>
					<td id="11"><b>Kasım</b><br><?php odeme_tablosu(11,$id); ?></td>
					<td id="12"><b>Aralık</b><br><?php odeme_tablosu(12,$id); ?></td>
				</tr>
			</table>	
		</td>
	</tr>
</table>
</div>
<?php include('footer.php'); ?>