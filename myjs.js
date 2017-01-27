function oda_guncelle(g_id,g_value){
	var gonder="s_id="+g_id+"&s_value="+g_value;

	 $.ajax({
	 	url:'oda_guncelle.php',
	 	type:'POST',
	 	data:gonder,
	 	success:function(cevap){
	 		$('#msgBox').css("display","block");
	 		$('#msgBox').text(cevap).delay(1000).hide(500);
	 	}
	 })
}
function kisi_sil(g_id){
	var git="gon_id="+g_id;

	$.ajax({
		url:'kisi_sil.php',
		type:'POST',
		data:git,
		success:function(request){
			$('#msgBox').css("display","block");
	 		$('#msgBox').text(request).delay(1000).hide(500);
	 		delay(1000);
	 		window.location.href = 'kisi_listele.php';		}
	})
}
