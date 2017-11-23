<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Facial Pasien</title>

	<meta charset="utf-8" />

	<style type="text/css">
		/* General styles */

		body {
			margin-top: 1.5%;
			padding: 0;
			font: 80%/1.5 Arial, Helvetica, sans-serif;
			color: #111;
			background-color: #f0f0f0;
		}

		h2 {
			margin: 0px;
			padding: 10px;
			font-family: Georgia, "Times New Roman", Times, serif;
			font-size: 200%;
			font-weight: normal;
			color: #FFF;
			background: url(../images/bgmenu.gif);
			border-bottom: #BBB 2px solid;
		}

		p#copyright {
			margin: 20px 10px;
			font-size: 90%;
			color: #999;
		}
		/* Form styles */

		div.form-container {
			margin: 10px;
			padding: 5px;
			background-color: #FFF;
			border: #EEE 1px solid;
		}

		p.legend {
			margin-bottom: 1em;
		}

		p.legend em {
			color: #C00;
			font-style: normal;
		}

		div.errors {
			margin: 0 0 10px 0;
			padding: 5px 10px;
			border: #FC6 1px solid;
			background-color: #FFC;
		}

		div.errors p {
			margin: 0;
		}

		div.errors p em {
			color: #C00;
			font-style: normal;
			font-weight: bold;
		}

		div.form-container form p {
			margin: 0;
		}

		div.form-container form p.note {
			margin-left: 170px;
			font-size: 90%;
			color: #333;
		}

		div.form-container form fieldset {
			margin: 10px 0;
			padding: 10px;
			border: #DDD 1px solid;
		}

		div.form-container form legend {
			font-weight: bold;
			color: #666;
		}

		div.form-container form fieldset div {
			padding: 0.25em 0;
		}
		/* div.form-container form input { text-transform: uppercase }
div.form-container form textarea { text-transform: uppercase; } */

		div.form-container label,
		div.form-container span.label {
			margin-right: 10px;
			padding-right: 10px;
			width: 150px;
			display: block;
			float: left;
			text-align: right;
			position: relative;
		}

		div.form-container label.error,
		div.form-container span.error {
			color: #C00;
		}

		div.form-container label em,
		div.form-container span.label em {
			position: absolute;
			right: 0;
			font-size: 120%;
			font-style: normal;
			color: #C00;
		}

		div.form-container input.error {
			border-color: #C00;
			background-color: #FEF;
		}

		div.form-container input:focus,
		div.form-container input.error:focus,
		div.form-container textarea:focus {
			background-color: #FFC;
			border-color: #FC6;
		}

		div.form-container div.controlset label,
		div.form-container div.controlset input {
			display: inline;
			float: none;
		}

		div.form-container div.controlset div {
			margin-left: 170px;
		}

		div.form-container div.buttonrow {
			margin-left: 180px;
		}

		fieldset {
			margin: 0px;
			padding: 0px;
		}
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

	$('#tanggal').datepicker();
});

function validcek(){
	var shortcut = document.frm_work;
	if(shortcut.tanggal.value==""){
		alert("Tanggal belum terisi !");
		shortcut.tanggal.style.background = '#FEF';
		shortcut.tanggal.focus();
		return false;
	} else shortcut.tanggal.style.background = '#ffffff';
	
	if(shortcut.nama.value==""){
		alert("Nama belum terisi!");
		shortcut.nama.style.background = '#FEF';
		shortcut.nama.focus();
		return false;
	} else shortcut.nama.style.background = '#ffffff';
	
	if(shortcut.selperawat.value==""){
		alert("Perawat belum dipilih!");
		shortcut.selperawat.style.background = '#FEF';
		shortcut.selperawat.focus();
		return false;
	} else shortcut.selperawat.style.background = '#ffffff';
	
	if(shortcut.selfacial.value==""){
		alert("Jenis Facial belum dipilih!");
		shortcut.selfacial.style.background = '#FEF';
		shortcut.selfacial.focus();
		return false;
	} else shortcut.selfacial.style.background = '#ffffff';
	
	
	shortcut.next.value=1;
	shortcut.submit();
}
function cancelcek(){
	window.close();
}
function reloadFirst(){
	window.opener.document.bookform.submit();
}

	</script>

	<div id="wrapper">
		<h2 style="background-color:#f39c12">Form Foto Pasien</h2>
		<div class="form-container">
			<form action="/views/facial_pasien.php" method="post" name="frm_work" id="frm_work" enctype="multipart/form-data">
				<p class="legend">
					<strong>Note:</strong> Tanda bintang adalah kolom yang harus diisi (
					<em>*</em>)</p>
				<fieldset>
					<legend>Data Pasien</legend>
					<table align="center" width="100%" border="0" cellpadding="3" cellspacing="3">
						<tr>
							<td style="vertical-align:top;">
								<div>
									<input id="no_facial" name="no_facial" type="hidden" value="FAC000001" />
									<label>Tanggal</label>
									<input id="tanggal" type="text" name="tanggal" value="11/02/2017" />
								</div>
								<div>
									<label>Nama Pasien</label>
									<input id="nama" type="text" name="nama_pasien" onBlur="autoType(1);" />
								</div>
								<div>
									<label>Kode Pasien</label>
									<input type="text" name="kd_pasien" readonly/>
								</div>
								<div>
									<label>Kode Barcode</label>
									<input type="text" name="barcode" readonly/>
								</div>
								<div>
									<label>Alamat</label>
									<input type="text" name="alamat" readonly/>
								</div>
								<div>
									<label for="">Perawat
										<em>*</em>
									</label>
									<select name="selperawat" class="selectkecil">
										<option value=''>--Pilih Perawat--</option>
										<option value="P1019">WAHYU</option>
										<option value="P1045">dita</option>
										<option value="P1049">ANA</option>
										<option value="P1052">NURUL HIDAYAH</option>
									</select>
								</div>
								<div>
									<label for="">Jenis Facial
										<em>*</em>
									</label>
									<select name="selfacial" class="selectkecil">
										<option value=''>--Pilih Jenis Facial--</option>
										<option value="1902"> KANANI PAKET PRP PLUS DERMAROLLER DP 3X</option>
										<option value="3207">AUTOROLLER+STEMCELL</option>
										<option value="1201">BODDY PEELING</option>
										<option value="1807">clensing&angkat masker</option>
										<option value="1208">COMPLETE DEFECT REPAIR DP</option>
										<option value="2508">DP KANANI ACNE OILY FACIAL PAKET 4X</option>
										<option value="2703">DP KANANI DERMALIFT 20 BENANG MONO</option>
										<option value="2307">DP KANANI GLOW & REJUVENATION TREATMENT (ANTI AGING)</option>
										<option value="2310">DP KANANI GLOW & WHITENING TREATMENT (UNTUK FLEK)</option>
										<option value="3101">DP KANANI PREMIUM WHITENING & THIGHTENING FACIAL DP 4X</option>
										<option value="2504">DP KANANI REJUVENATION FACIAL PAKET 4X</option>
										<option value="2304">DP KANANI WHITE & SCAR MICROPEEL TREATMENT</option>
										<option value="3004">DP PAKET HAIR TREATMENT 5X</option>
										<option value="2604">DP PAKET HAIR TREATMENT 6x</option>
										<option value="2602">DP PAKET HAIRTREATMENT 12X</option>
										<option value="1609">DP PAKET PENCERAH (peeling white n scar & facial white plus)</option>
										<option value="1808">DP PAKET PENCERAH 3X </option>
										<option value="1610">DP PAKET PENCERAH PLUS (peeling white n scar & facial white plus,inject 2 antioksidan)</option>
										<option value="3206">DP PKT 3X AUTOROLLER+STEMCELL</option>
										<option value="0501">EXCOCHLEASI</option>
										<option value="1203">FACIAL O2 COMPLETE DP</option>
										<option value="2603">HAIR TREATMENT</option>
										<option value="3106">INJEKSI MELASMA L</option>
										<option value="3105">INJEKSI MELASMA M</option>
										<option value="3104">INJEKSI MELASMA S</option>
										<option value="0101">KANANI PRP</option>
										<option value="0709">KANANI ACNE/OILY FACIAL</option>
										<option value="3005">KANANI AGELESS & LIFTING FACIAL </option>
										<option value="3102">KANANI AGELESS & LIFTING FACIAL DP 4X</option>
										<option value="3103">KANANI AGELESS & LIFTING FACIAL DP 8X</option>
										<option value="0508">KANANI ANGKAT JAHITAN</option>
										<option value="2801">KANANI AUTOROLLER PLUS ANTI AGING 1</option>
										<option value="2802">KANANI AUTOROLLER PLUS ANTI AGING 2</option>
										<option value="2803">KANANI AUTOROLLER PLUS ANTI AGING 3</option>
										<option value="1303">KANANI BASIC FACIAL ACNE</option>
										<option value="1308">KANANI BASIC FACIAL OILY</option>
										<option value="1307">KANANI BASIC FACIAL REJUV</option>
										<option value="1309">KANANI BASIC FACIAL WHITENING</option>
										<option value="0202">KANANI BEAUTY DEFECT REPAIR BASIC TREATMENT</option>
										<option value="0203">KANANI BEAUTY DEFECT REPAIR COMPLETE TREATMENT</option>
										<option value="1001">KANANI CHEMICAL PEELING </option>
										<option value="2708">KANANI DERMALIFT 1 BENANG COG</option>
										<option value="2704">KANANI DERMALIFT 10 BENANG MONO</option>
										<option value="2705">KANANI DERMALIFT 30 BENANG MONO</option>
										<option value="2706">KANANI DERMALIFT 40 BENANG MONO</option>
										<option value="2707">KANANI DERMALIFT 50 BENANG MONO</option>
										<option value="1210">KANANI DERMAROLLER 1</option>
										<option value="1401">KANANI DERMAROLLER 2</option>
										<option value="2702">KANANI DERMAROLLER 3</option>
										<option value="1406">KANANI DERMAROLLER PLUS ANTI AGING 1</option>
										<option value="2209">KANANI DERMAROLLER PLUS ANTI AGING 2</option>
										<option value="2701">KANANI DERMAROLLER PLUS ANTI AGING 3</option>
										<option value="1110">KANANI EKSTRAKSI KOMEDO D</option>
										<option value="1607">KANANI EKSTRAKSI KOMEDO L</option>
										<option value="1604">KANANI EKSTRAKSI KOMEDO L dgn FACIAL</option>
										<option value="1606">KANANI EKSTRAKSI KOMEDO M</option>
										<option value="1603">KANANI EKSTRAKSI KOMEDO M dgn FACIAL</option>
										<option value="1605">KANANI EKSTRAKSI KOMEDO S</option>
										<option value="1602">KANANI EKSTRAKSI KOMEDO S dgn FACIAL</option>
										<option value="0403">KANANI ELECTROCAUTER ADVANCE AREA</option>
										<option value="1502">KANANI ELECTROCAUTER KHUSUS ADVANCE AREA</option>
										<option value="1501">KANANI ELECTROCAUTER KHUSUS MODERATE AREA</option>
										<option value="1410">KANANI ELECTROCAUTER KHUSUS SIMPLE AREA</option>
										<option value="0402">KANANI ELECTROCAUTER MODERATE AREA</option>
										<option value="0401">KANANI ELECTROCAUTER SIMPLE AREA</option>
										<option value="0505">KANANI EXCISION ADVANCE</option>
										<option value="0504">KANANI EXCISION MODERATE</option>
										<option value="0503">KANANI EXCISION SIMPLE</option>
										<option value="0710">KANANI FACIAL ACNE MODERATE </option>
										<option value="2002">KANANI FACIAL BASIC PLUS RADIO FREQUENCY</option>
										<option value="1205">KANANI FACIAL GOLD </option>
										<option value="2109">KANANI FACIAL GOLD PLUS RADIO FREQUENCY</option>
										<option value="0701">KANANI FACIAL OXYGEN BASIC</option>
										<option value="2008">KANANI FACIAL OXYGEN BASIC PLUS RADIO FREQUENCY</option>
										<option value="0702">KANANI FACIAL OXYGEN COMPLETE </option>
										<option value="2103">KANANI FACIAL OXYGEN COMPLETE PLUS RADIO FREQUENCY</option>
										<option value="2105">KANANI FACIAL OXYGEN COMPLETE PLUS RADIO FREQUENCY DP 4X</option>
										<option value="2005">KANANI FACIAL REJUVE PLUS RADIO FREQUENCY</option>
										<option value="1109">KANANI FACIAL WHITEPLUS </option>
										<option value="2203">KANANI FACIAL WHITEPLUS RADIO FREQUENCY</option>
										<option value="2205">KANANI FACIAL WHITEPLUS RADIO FREQUENCY DP 4X</option>
										<option value="2306">KANANI GLOW & REJUVENATION TREATMENT (ANTI AGING)</option>
										<option value="2309">KANANI GLOW & WHITENING TREATMENT (UNTUK FLEK)</option>
										<option value="0502">KANANI INCISION - PUNGSI</option>
										<option value="1310">KANANI INJECTION FOR ACNE</option>
										<option value="2507">KANANI INJECTION FOR ACNE L</option>
										<option value="2506">KANANI INJECTION FOR ACNE M</option>
										<option value="0904">KANANI INJECTION FOR ACNE MODERATE</option>
										<option value="2505">KANANI INJECTION FOR ACNE S</option>
										<option value="0604">KANANI INJECTION FOR KELOID M</option>
										<option value="3208">KANANI INJECTION FOR KELOID M DP 4X</option>
										<option value="0603">KANANI INJECTION FOR KELOID S</option>
										<option value="2910">KANANI MULTIVITAMIN INJECTION</option>
										<option value="2906">KANANI PAKET WHITENING INJECTION VIT C + 1 ANTIOKSIDAN DP 4X</option>
										<option value="2907">KANANI PAKET WHITENING INJECTION VIT C + 1 ANTIOKSIDAN DP 8X</option>
										<option value="2804">KANANI PAKET AUTOROLLER PLUS ANTI AGING DP 3X</option>
										<option value="0205">KANANI PAKET BEAUTY DEFECT REPAIR BASIC TREATMENT DP 3X</option>
										<option value="2402">KANANI PAKET BEAUTY DEFECT REPAIR COMPLETE TREATMENT DP 3X</option>
										<option value="2606">KANANI PAKET BEAUTY DEFECT REPAIR COMPLETE TREATMENT DP 4X</option>
										<option value="1209">KANANI PAKET DERMAROLLER DP 3X</option>
										<option value="1405">KANANI PAKET DERMAROLLER PLUS ANTI AGING DP 3X </option>
										<option value="2208">KANANI PAKET FACIAL ACNE MODERATE DP 4X</option>
										<option value="2207">KANANI PAKET FACIAL ACNE MODERATE DP 8X</option>
										<option value="1809">KANANI PAKET FACIAL BASIC DP 4X</option>
										<option value="1706">KANANI PAKET FACIAL BASIC DP 8X</option>
										<option value="2003">KANANI PAKET FACIAL BASIC PLUS RADIO FREQUENCY DP 4X</option>
										<option value="2004">KANANI PAKET FACIAL BASIC PLUS RADIO FREQUENCY DP 8X</option>
										<option value="2809">KANANI PAKET FACIAL GOLD DP 4X</option>
										<option value="2810">KANANI PAKET FACIAL GOLD DP 8X</option>
										<option value="2201">KANANI PAKET FACIAL GOLD PLUS RADIO FREQUENCY DP 4X</option>
										<option value="2202">KANANI PAKET FACIAL GOLD PLUS RADIO FREQUENCY DP 8X</option>
										<option value="1810">KANANI PAKET FACIAL OXYGEN BASIC DP 4X</option>
										<option value="1801">KANANI PAKET FACIAL OXYGEN BASIC DP 8X</option>
										<option value="2101">KANANI PAKET FACIAL OXYGEN BASIC PLUS RADIO FREQUENCY DP 4X</option>
										<option value="2102">KANANI PAKET FACIAL OXYGEN BASIC PLUS RADIO FREQUENCY DP 8X</option>
										<option value="2503">KANANI PAKET FACIAL OXYGEN COMPLETE DP 4X</option>
										<option value="1710">KANANI PAKET FACIAL OXYGEN COMPLETE DP 8X</option>
										<option value="2106">KANANI PAKET FACIAL OXYGEN COMPLETE PLUS RADIO FREQUENCY DP 8X</option>
										<option value="2902">KANANI PAKET FACIAL REJUVE PLUS RADIO FREQUENCY DP 4X</option>
										<option value="2903">KANANI PAKET FACIAL REJUVE PLUS RADIO FREQUENCY DP 8X</option>
										<option value="1207">KANANI PAKET FACIAL WHITEPLUS DP 4X</option>
										<option value="2901">KANANI PAKET FACIAL WHITEPLUS DP 8X</option>
										<option value="2206">KANANI PAKET FACIAL WHITEPLUS RADIO FREQUENCY DP 8X</option>
										<option value="3001">KANANI PAKET MULTIVITAMIN INJECTION DP 4X</option>
										<option value="3002">KANANI PAKET MULTIVITAMIN INJECTION DP 8X</option>
										<option value="1806">KANANI PAKET PRP DP 3x </option>
										<option value="2808">KANANI PAKET PRP PLUS AUTOROLLER DP 3X</option>
										<option value="1908">KANANI PAKET RADIO FREQUENCY DP 4X</option>
										<option value="1909">KANANI PAKET RADIO FREQUENCY DP 8X</option>
										<option value="2608">KANANI PAKET RADIO FREQUENCY UNTUK LEHER DP 4X</option>
										<option value="2904">KANANI PAKET REVITALIZING INJECTION DP 4X</option>
										<option value="2905">KANANI PAKET REVITALIZING INJECTION DP 8X</option>
										<option value="2408">KANANI PAKET VAKSIN HPV DP 3x</option>
										<option value="2403">KANANI PAKET WHITE & GLOW INJECTION DP 4X</option>
										<option value="2502">KANANI PAKET WHITE & GLOW INJECTION DP 8X</option>
										<option value="2305">KANANI PAKET WHITE & SCAR MICROPEEL TREATMENT DP 3X</option>
										<option value="2908">KANANI PAKET WHITENING INJECTION VIT C + 2 ANTIOKSIDAN DP 4X</option>
										<option value="2909">KANANI PAKET WHITENING INJECTION VIT C + 2 ANTIOKSIDAN DP 8X</option>
										<option value="2710">KANANI PEELING PANTAT L</option>
										<option value="2709">KANANI PEELING PANTAT M</option>
										<option value="2509">KANANI PEELING PANTAT S</option>
										<option value="1506">KANANI PEELING SELANGKANGAN </option>
										<option value="1508">KANANI PEELING BETIS / PAHA / TUNGKAI</option>
										<option value="1510">KANANI PEELING LEHER</option>
										<option value="1505">KANANI PEELING PUNGGUNG TANGAN</option>
										<option value="1509">KANANI PEELING TANGAN / PUNGGUNG TANGAN </option>
										<option value="3007">KANANI PREMIUM VIT C FACIAL </option>
										<option value="3010">KANANI PREMIUM VIT C FACIAL DP 8X</option>
										<option value="3009">KANANI PREMIUM VIT C FACIAL DP 4X</option>
										<option value="3006">KANANI PREMIUM WHITENING & THIGHTENING FACIAL</option>
										<option value="3008">KANANI PREMIUM WHITENING & THIGHTENING FACIAL DP 8X</option>
										<option value="2805">KANANI PRP PLUS AUTOROLLER 1</option>
										<option value="2806">KANANI PRP PLUS AUTOROLLER 2</option>
										<option value="2807">KANANI PRP PLUS AUTOROLLER 3</option>
										<option value="1903">KANANI PRP PLUS DERMAROLLER 1</option>
										<option value="1904">KANANI PRP PLUS DERMAROLLER 2</option>
										<option value="1905">KANANI PRP PLUS DERMAROLLER 3</option>
										<option value="1910">KANANI RADIO FREQUENCY </option>
										<option value="2607">KANANI RADIO FREQUENCY UNTUK LEHER</option>
										<option value="2609">KANANI RADIO FREQUENCY UNTUK LEHER & WAJAH</option>
										<option value="0507">KANANI RAWAT LUKA / INJECTION IM</option>
										<option value="0708">KANANI REJUVENATION FACIAL</option>
										<option value="0602">KANANI REVITALIZING INJECTION</option>
										<option value="0404">KANANI TOPICAL TCA</option>
										<option value="1503">KANANI TOTOK WAJAH</option>
										<option value="2404">KANANI WHITE & GLOW WHITENING INJECTION </option>
										<option value="2303">KANANI WHITE & SCAR MICROPEEL TREATMENT </option>
										<option value="1404">KANANI WHITE & SCAR MICROPEEL TREATMENT PAKET 4 X</option>
										<option value="1701">KANANI WHITENING INJECTION VIT C + 1 ANTIOKSIDAN </option>
										<option value="1702">KANANI WHITENING INJECTION VIT C + 2 ANTIOKSIDAN</option>
										<option value="1608">KONSULTASI DOKTER SPKK</option>
										<option value="1703">Masker bibir</option>
										<option value="2610">Masker leher</option>
										<option value="1407">Masker mata</option>
										<option value="1704">masker wajah nf</option>
										<option value="3209">MIKRODERMABRASI</option>
										<option value="1202">PAKET CELL PLASMA 3x DP</option>
										<option value="0304">PAKET CHEMMICAL PEELING DP 5X </option>
										<option value="3203">PAKET INJEKSI MELASMA L DP 4X</option>
										<option value="3204">PAKET INJEKSI MELASMA L DP 6X</option>
										<option value="3205">PAKET INJEKSI MELASMA L DP 8X</option>
										<option value="3110">PAKET INJEKSI MELASMA M DP 4X</option>
										<option value="3201">PAKET INJEKSI MELASMA M DP 6X</option>
										<option value="3202">PAKET INJEKSI MELASMA M DP 8X</option>
										<option value="3107">PAKET INJEKSI MELASMA S DP 4X</option>
										<option value="3108">PAKET INJEKSI MELASMA S DP 6X</option>
										<option value="3109">PAKET INJEKSI MELASMA S DP 8X</option>
										<option value="2308">PAKET KANANI GLOW & REJUVENATION TREATMENT (ANTI AGING) 3X </option>
										<option value="2401">PAKET KANANI GLOW & WHITENING TREATMENT (UNTUK FLEK) 3X</option>
										<option value="1802">PAKET KANANI WHITE PLUS FACIAL 8X</option>
										<option value="2601">PAKET PEELING PANTAT DP 4X</option>
										<option value="1705">serum whitening/pencerah/anti aging</option>
										<option value="0506">SHAVING EXCISION</option>
										<option value="1204">TIGHTENING + WHITEPLUS FACIAL PAKET 4X DP</option>
										<option value="1010">TIGHTENING + WHITEPLUS FACIAL D</option>
										<option value="1102">TIGHTENING + WHITEPLUS FACIAL ND</option>
										<option value="2302">TIGHTENING +FACIAL O2 BASIC D</option>
										<option value="1009">TIGHTENING +FACIAL O2 BASIC ND</option>
										<option value="1108">TIGHTENING +FACIAL O2 COMPLETE B</option>
										<option value="1106">TIGHTENING +FACIAL O2 COMPLETE D </option>
										<option value="1107">TIGHTENING +FACIAL O2 COMPLETE ND</option>
										<option value="1301">TIGHTENING +FACIAL O2 COMPLETE PAKET 4 X DP</option>
										<option value="1104">TIGHTENING +GOLD FACIAL B</option>
										<option value="1103">TIGHTENING +GOLD FACIAL D</option>
										<option value="1105">TIGHTENING +GOLD FACIAL ND</option>
										<option value="3003">TION FOR KELOID L</option>
										<option value="2409">vaksinasi HPV 1</option>
										<option value="2410">vaksinasi HPV 2</option>
										<option value="2501">vaksinasi HPV 3</option>
									</select>
								</div>
							</td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend>Foto Pasien</legend>
					<legend>Upload foto maksimal 3 MB</legend>
					<table>
						<tr>
							<td>
								<font size="3">Pilihan Upload Foto </font>
							</td>
							<td>:</td>
							<td>
								<input type="radio" name="type_up" value="webcam" onClick="typeFoto('cam');" checked />Upload Webcam
								<input type="radio" name="type_up" value="file" onClick="typeFoto('up');" />Upload File
							</td>
						</tr>
					</table>
					<div id="box-foto" style="float:left; margin:0 20px 0 0">
						<!-- First, include the JPEGCam JavaScript Library -->
						<script type="text/javascript" src="cam/webcam.js"></script>

						<!-- Configure a few settings -->
						<script language="JavaScript">
							webcam.set_api_url( 'foto/cam_proses.php' );
					webcam.set_quality( 100 ); // JPEG quality (1 - 100)
					webcam.set_shutter_sound( true ); // play shutter click sound
						</script>

						<!-- Next, write the movie to the page at 320x240  -->
						<script language="JavaScript">
							document.write( webcam.get_html(640, 480) );
						</script>

						<!-- Some buttons for controlling things -->
						<br/>
						<br/>
						<!--<form style="margin-top:20px"> -->
						<!--<input type=button value="Configure..." onClick="webcam.configure()">
					&nbsp;&nbsp;-->

						<input type=button value="Capture" onClick="webcam.freeze()"> &nbsp;&nbsp;
						<input type=button value="Upload" onClick="do_upload()"> &nbsp;&nbsp;
						<input type=button value="Reset" onClick="webcam.reset()">

						<!--</form>-->
						<!-- Code to handle the server response (see test.php) -->
						<script language="JavaScript">
							webcam.set_hook( 'onComplete', 'my_completion_handler' );

					function do_upload() {
						// upload to server
						document.getElementById('upload_results').innerHTML = '<h1>Uploading...</h1>';
						webcam.upload();
					}

					function my_completion_handler(msg) {
						// extract URL out of PHP output
						if (msg.match(/(http\:\/\/\S+)/)) {
							var image_url = RegExp.$1;
							var html = '<h1>Hasil Foto</h1><img class="img-content" src="' + image_url + '" width="500"><input type="hidden" id="img_url" name="img_url" value="'+image_url+'">';
							//alert(image_url);
							// show JPEG image in page
							document.getElementById('upload_results').innerHTML = html
								

							// reset camera for another shot
							//genPhoto();
							webcam.reset();
						}
						else alert("PHP Error: " + msg);
					}
						</script>
					</div>
					<div id="box-upload">
						<table>
							<div id="upload">
								<tr>
									<input id="row" name="row" type="hidden" value="1">
									<td>
										<b>Foto</b>
									</td>
									<td>
										<input type="file" id="filefoto_1" name="filefoto_1" />
									</td>
								</tr>
								<tr>
									<td>
										<b>Keterangan</b>
									</td>
									<td>
										<input type="text" id="ket_1" name="ket_1" />
									</td>
								</tr>
							</div>
						</table>
						<input type="button" value="+" onClick="TambahFoto();" />
					</div>
					<div id="upload_results" style="padding:0">
						<input type="hidden" id="img_url" name="img_url" value="">
					</div>

				</fieldset>

				<fieldset>
					<table align="center">
						<tr>
							<td>
								<input type="button" value="Simpan" onClick="validcek();" />
								<input type="hidden" name="act" value="add" />
								<input type="hidden" name="next" value="" />
								<input type="hidden" name="uid" value="test_59faa7f03f8706.31509259" />
							</td>
							<td>
								<input type="button" value="Batal" onClick="cancelcek();" />
							</td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		var shortcut=document.frm_work;
	var auto_type_val="pasien";
	function TambahFoto(){
				var rows = parseFloat(document.getElementById('row').value);
				//console.log(no_rows);
				var no_rows = rows + 1;
			
				var row =
					'<table>'+
						'<tr>'+
							'<td colspan=2><br></td>'+
						'</tr>'+
						'<tr>'+
							'<td><b>Foto</b></td>'+
							'<td><input type="file" id="filefoto_'+no_rows+'" name="filefoto_'+no_rows+'"/></td>'+
						'</tr>'+
						'<tr>'+
							'<td><b>Keterangan</b></td>'+
							'<td><input type="text" id="ket_'+no_rows+'" name="ket_'+no_rows+'"/></td>'+
						'</tr>'+
					'</table>';
					$("#upload").append(row);
					$("#row").val(no_rows);
		}
	function findValue(li) {
	    //alert("1");
	  	if( li == null ) return alert("No match!");

	  	// if coming from an AJAX call, let's use the CityId as the value
	  	if( !!li.extra ) var sValue = li.extra[0];
	  	// otherwise, let's just display the value in the text box
	  	else var sValue = li.selectValue;
	    //alert(auto_type_val);
	  	//alert("The value you selected was: " + sValue);
	
		if(auto_type_val=="pasien") {
			//alert(auto_type_val);
			shortcut.barcode.value=sValue;	
			fget_data(sValue);
		}else if(auto_type_val=="obat") {
			//alert(auto_type_val);
			shortcut.kode_obat.value=sValue;	
			fget_data_obat(sValue);
		} 	
  	}
	
	function selectItem(li) {
    		findValue(li);
  	}
  	
  	function formatItem(row) {
    		return row[0] + " (id: " + row[1] + ")";
  	}	
	
	function autoType(val) {
		var temp="";
    		if(val==1) auto_type_val="pasien";
    		else if(val==2) auto_type_val="obat";
	}
	
	$("#nama").autocomplete(
     "autocomplete_pasien.php",
      {
  			delay:10,
  			minChars:2,
  			matchSubset:1,
  			matchContains:1,
  			cacheLength:10,
  			onItemSelect:selectItem,
  			onFindValue:findValue,
  			formatItem:formatItem,
			extraParams:{tipe:"pasien"},
			width:500,
  			autoFill:true
  		}
    );
    $("#perawatan").autocomplete(
     "autocomplete_pasien.php",
      {
  			delay:10,
  			minChars:2,
  			matchSubset:1,
  			matchContains:1,
  			cacheLength:10,
  			onItemSelect:selectItem,
  			onFindValue:findValue,
  			formatItem:formatItem,
			extraParams:{tipe:"perawatan"},
			width:500,
  			autoFill:true
  		}
    );
    
    function fget_data(sValue) {
		var lbtxt ='';
		var xid = sValue;//shortcut.customer_id.value;
		var url = 'ajax_control.php?m=pasien&xid='+xid;
		//alert(url);
		var temp="";
		if (xid!='') {
			new Ajax.Request(url, {
				method: 'get',
				onSuccess: function(transport) {
					lbtxt = transport.responseText;
					//alert(lbtxt);
					if (lbtxt!="") {
					  temp=lbtxt.split("#");
					  shortcut.kd_pasien.value=temp[0];
					  shortcut.barcode.value=temp[1];
					  shortcut.alamat.value=temp[2];
					} else {
					  shortcut.kd_pasien.value="";
					  shortcut.barcode.value="";
					  shortcut.alamat.value="";
					}	
				}
			});
		}
	}
	
	function genPhoto() {
	var shortcut = document.frm_work;
	var lbtxt ='';
	var xid = shortcut.kd_pasien.value;
	var url = 'gen_photo.php?id='+xid;
	//alert(url);
	var notice_baris = $('history_photo');
	new Ajax.Request(url, {
		method: 'get',
		onSuccess: function(transport) {
			lbtxt = transport.responseText;
				//alert (lbtxt);
			if (lbtxt!="") {
				document.getElementById("history_photo").innerHTML=lbtxt;
				return false;
			} else return false;
		}
	});
}
	
	function typeFoto(t)
	{
		// alert(t);
		var type = t;
		if (type == 'cam') {
			// alert('webcam');
			// sembunyikan upload
			document.getElementById('box-upload').style.display='none';
			document.getElementById('box-foto').style.display='block';
			document.getElementById('filefoto').disabled = true;
			document.getElementById('img_url').disabled = false;
		} else {
			// alert('upload');
			// sembunyikan cam
			document.getElementById('box-upload').style.display='block';
			document.getElementById('box-foto').style.display='none';
			document.getElementById('filefoto').disabled = false;
			document.getElementById('img_url').disabled = true;
		}
	}
	
	// set type webcam saat awal
	typeFoto('cam');

	</script>
	</body>

</html>