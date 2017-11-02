
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>Rekam Medis </title>

<meta charset="utf-8"/>

<style type="text/css">

/* General styles */
body { margin-top: 1.5%; padding: 0; font: 80%/1.5 Arial,Helvetica,sans-serif; color: #111; background-color: #F0F0F0; }
h2 { margin: 0px; padding: 10px; font-family: Georgia, "Times New Roman", Times, serif; font-size: 200%; font-weight: normal; color: #FFF; background:url(../images/bgmenu.gif); border-bottom: #BBB 2px solid; }
p#copyright { margin: 20px 10px; font-size: 90%; color: #999; }

/* Form styles */
div.form-container { margin: 10px; padding: 5px; background-color: #FFF; border: #EEE 1px solid; }

p.legend { margin-bottom: 1em; }
p.legend em { color: #C00; font-style: normal; }

div.errors { margin: 0 0 10px 0; padding: 5px 10px; border: #FC6 1px solid; background-color: #FFC; }
div.errors p { margin: 0; }
div.errors p em { color: #C00; font-style: normal; font-weight: bold; }

div.form-container form p { margin: 0; }
div.form-container form p.note { margin-left: 170px; font-size: 90%; color: #333; }
div.form-container form fieldset { margin: 10px 0; padding: 10px; border: #DDD 1px solid; }
div.form-container form legend { font-weight: bold; color: #666; }
div.form-container form fieldset div { padding: 0.25em 0; }
/* div.form-container form input { text-transform: uppercase }
div.form-container form textarea { text-transform: uppercase; } */
div.form-container label, 
div.form-container span.label { margin-right: 10px; padding-right: 10px; width: 150px; display: block; float: left; text-align: right; position: relative; }
div.form-container label.error, 
div.form-container span.error { color: #C00; }
div.form-container label em, 
div.form-container span.label em { position: absolute; right: 0; font-size: 120%; font-style: normal; color: #C00; }
div.form-container input.error { border-color: #C00; background-color: #FEF; }
div.form-container input:focus,
div.form-container input.error:focus, 
div.form-container textarea:focus {	background-color: #FFC; border-color: #FC6; }
div.form-container div.controlset label, 
div.form-container div.controlset input { display: inline; float: none; }
div.form-container div.controlset div { margin-left: 170px; }
div.form-container div.buttonrow { margin-left: 180px; }
fieldset{margin:0px;padding:0px;}

</style>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="../css/example.css" TYPE="text/css" MEDIA="screen">
<link type="text/css" href="../css/jquery.ui.all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.autocomplete.css" type="text/css" />
<link type="text/cs" href="../css/jquery.ui.datepicker.css" rel="stylesheet" />
<script type="text/javascript" src="../scripts/prototype.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="../js/jquery.ui.core.js"></script>

<script type="text/javascript" src="../js/jquery.ui.datepicker.js"></script>

<script language="JavaScript">

$(function() {

	$('#tgl_rekam').datepicker();
});
function exitcek(){
		window.opener.document.bookform.submit();
		window.close();
}

function validcek(){
	
		var shortcut = document.frm_work;		
		if(shortcut.kd_pasien.value==""){
		alert("Kode Pasien Date is required!");
		shortcut.kd_pasien.style.background = '#FEF';
		shortcut.kd_pasien.focus();
		return false;
		
	} else shortcut.kd_pasien.style.background = '#ffffff';
		if(shortcut.tgl_rekam.value==""){
			alert("tanggal belum terisi !");
			shortcut.tgl_rekam.style.background = '#FEF';
			shortcut.tgl_rekam.focus();
			return false;
	} else shortcut.tgl_rekam.style.background = '#ffffff';
		
	if(shortcut.nama.value==""){
			alert("Nama belum terisi!");
			shortcut.nama.style.background = '#FEF';
			shortcut.nama.focus();
			return false;
	} else shortcut.nama.style.background = '#ffffff';
		
	if(shortcut.kd_perawat.value=="" && shortcut.kd_dokter.value=="" && shortcut.kd_beautican.value==""){
			alert("Harus Terisi Salah satu !");
			shortcut.kd_perawat.style.background = '#FEF';
			shortcut.kd_dokter.style.background = '#FEF';
			shortcut.kd_beautican.style.background = '#FEF';
			shortcut.kd_perawat.focus();
			return false;
	} else {
		shortcut.kd_perawat.style.background = '#ffffff';
		shortcut.kd_dokter.style.background = '#ffffff';
		shortcut.kd_beautican.style.background = '#ffffff';
	}
	
	if(shortcut.diagnosis.value==""){
			alert("Diagnosis belum dipilih!");
			shortcut.diagnosis.style.background = '#FEF';
			shortcut.diagnosis.focus();
			return false;
	} else shortcut.diagnosis.style.background = '#ffffff';
	
	if(shortcut.keluhan.value==""){
			alert("Keluhan belum dipilih!");
			shortcut.keluhan.style.background = '#FEF';
			shortcut.keluhan.focus();
			return false;
	} else shortcut.keluhan.style.background = '#ffffff';
	
	if(shortcut.catatan.value==""){
			alert("Catatan belum dipilih!");
			shortcut.catatan.style.background = '#FEF';
			shortcut.catatan.focus();
			return false;
	} else shortcut.catatan.style.background = '#ffffff';
	
	if(shortcut.resep.value==""){
			alert("Resep belum dipilih!");
			shortcut.resep.style.background = '#FEF';
			shortcut.resep.focus();
			return false;
	} else shortcut.resep.style.background = '#ffffff';
	
	if(shortcut.act.value=="add")
	{ 		
		shortcut.next.value=1;
		shortcut.submit();		
	} else {
		if(shortcut.act.value=="edit") {
			shortcut.next.value=1;
			shortcut.submit();
		}
	}
}

</script>

<div id="wrapper">
	<h2 style="background-color:#f39c12;">Rekam Medis</h2>
	<div class="form-container">
		<form action="/views/my_rekam_medis.php" method="post" name="frm_work" id="frm_work">
		<p class="legend"><strong>Note:</strong> Tanda bintang adalah kolom yang harus diisi (<em>*</em>)</p>
		<fieldset>
			<legend>Data Rekam Medis</legend>
			<table align="center" width="100%" cellpadding="3" cellspacing="3" border="0">
				<tr>
					<td width="50%" style="vertical-align:top;">
						<div>
							<label>Tanggal</label>
							<input id="tgl_rekam" type="text" name="tgl_rekam" value="10/20/2017" ></input>
						</div>
						<div>
							<label for="">Nama Pasien<em>*</em></label>
							<input id="nama" name="nama" type="text" value="" size="50" onBlur="autoType(1);" />
						</div>
						<div>
							<label for="">Kode Pasien<em>*</em></label>
							<input id="kd_pasien" name="kd_pasien" type="text" value="" size="20" readonly />
						</div>
						<div>
							<label for="">Pilih Dokter<em>*</em></label>
							<select name="kd_dokter"  class="selectkecil">
<option value=''>--Pilih Dokter--</option>
<option value="DK014" >BEBAS</option>
<option value="DK015" >Dr.IRA HERIWATI,Sp.KK</option>
<option value="DK016" >DR.MAYLITA SARI,SPKK</option>
<option value="DK017" >dr.Diah Nugrahaeni sp.KK</option>
<option value="DK018" >dr. Astindari sp.KK</option>
<option value="DK019" >dr. Nurfithria Ikaputri spKK</option>
<option value="DK020" >dr. Renata Mayangsari, spKK</option>
</select>
						</div>
						<div>
							<label for="">Kode Perawat<em>*</em></label>
							<select name="kd_perawat"  class="selectkecil">
<option value=''>--Pilih Perawat--</option>
<option value="P1019" >WAHYU</option>
<option value="P1045" >dita</option>
<option value="P1049" >ANA</option>
<option value="P1052" >NURUL HIDAYAH</option>
</select>
						</div>
						<div>
							<label for="">Beautican<em>*</em></label>
							<select name="kd_beautican"  class="selectkecil">
<option value=''>--Pilih Beautician--</option>
<option value="P1033" >ANA</option>
<option value="P1041" >nisfi</option>
<option value="P1046" >balqis</option>
<option value="P1047" >WAHYU</option>
<option value="P1048" >dita</option>
</select>
						</div>
						<div>
							<label for="">Diagnosis<em>*</em></label> 
							<textarea cols="50" rows="4" name="diagnosis"></textarea>
						</div>
						<div>
							<label for="">Keluhan<em>*</em></label> 
							<textarea cols="50" rows="4" name="keluhan"></textarea>
						</div>
						<div>
							<label for="">Catatan<em>*</em></label> 
							<textarea cols="50" rows="4" name="catatan"></textarea>
						</div>
						<div>
							<label for="">Resep<em>*</em></label> 
							<textarea cols="50" rows="4" name="resep"></textarea>
						</div>
					</td>
					<td width="50%" style="vertical-align:top;">
						<h3>History Rekam Medis</h3>
						<div id="optDetailMedis" style="height: 300px; overflow-y:scroll;">
						
						</div>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<table align="center">
				<tr> 
					<td>
						<input type="button" value="Simpan" onClick="validcek();"/>
						<input type="hidden" name="no_rekam" value="" />
						<input type="hidden" name="act" value="add" />
						<input type="hidden" name="next" value="" />
						<input type="hidden" name="uid" value="test_59e9b1d30d4f39.08847421" />
					</td>
					<td><input type="button" value="Keluar" onClick="exitcek();"/></td>
				</tr>
			</table>
		</fieldset>
		<script type="text/javascript">
</script>
</body>
</html>
		