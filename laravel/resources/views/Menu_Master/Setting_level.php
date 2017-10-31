
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>Setting Menu</title>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<style type="text/css">

/* General styles */
body { margin: 0; padding: 0; font: 80%/1.5 Arial,Helvetica,sans-serif; color: #111; background-color: #FFF; }
h2 { margin: 0px; padding: 10px; font-size: 200%; font-weight: normal;background-color:#F8F8F8;border-bottom: 1px solid;}
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

</style>
<link type="text/css" href="../css/jquery.ui.all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.autocomplete.css" type="text/css" />
<link type="text/cs" href="../css/jquery.ui.datepicker.css" rel="stylesheet" />
</head>

<body>

<div id="wrapper">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<h2>Menu Setting of (Administrator)</h2>
			</div>
		</div>
	</nav>

	<div class="form-container">
	<form action="/views/view_priv.php" method="post" name="frm_trans" id="frm_trans">
	<fieldset>
		<legend>Search</legend>
			<div>
				<label for="no_akun">Menu Name</label> 
				 <input name="menu_name_s" type="text" value=""/>
				<input name="level_id" value="1" type="hidden">
				<input name="level_name" value="Administrator" type="hidden">
			</div>

			
	</fieldset>	
	
	<fieldset>
		<legend>Search Result</legend>
			<table border="0" cellspacing="1" cellpadding="2" bgcolor="#000000" width="70%" align="center">
				<tr bgcolor="#ffffff">
					<td align="center" width="20%"><label class="content_bold"><strong>No Perkiraan</strong></label></td>
					<td align="center" width="20%"><label class="content_bold"><strong>Nama Perkiraan</strong></label></td>
					<td align="center" width="5%"><label class="content_bold"><strong>Status</strong></label></td>
				</tr>
				 	<tr bgcolor="#ffffff">
	  <td> <strong>Master</strong></td>
	  <td> Dokter</td>
	  <td align="center"> 
		<input name="check3" id="check3" value="3" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Jenis Rawat</td>
	  <td align="center"> 
		<input name="check4" id="check4" value="4" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Obat</td>
	  <td align="center"> 
		<input name="check5" id="check5" value="5" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Pegawai</td>
	  <td align="center"> 
		<input name="check6" id="check6" value="6" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Peralatan</td>
	  <td align="center"> 
		<input name="check7" id="check7" value="7" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Periksa</td>
	  <td align="center"> 
		<input name="check8" id="check8" value="8" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Supplier</td>
	  <td align="center"> 
		<input name="check9" id="check9" value="9" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> User Facial</td>
	  <td align="center"> 
		<input name="check10" id="check10" value="10" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Level</td>
	  <td align="center"> 
		<input name="check29" id="check29" value="29" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Satuan</td>
	  <td align="center"> 
		<input name="check46" id="check46" value="46" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong>Form</strong></td>
	  <td> Daftar Pasien</td>
	  <td align="center"> 
		<input name="check11" id="check11" value="11" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Foto Pasien</td>
	  <td align="center"> 
		<input name="check12" id="check12" value="12" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Rekam Medis</td>
	  <td align="center"> 
		<input name="check37" id="check37" value="37" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong>Transaksi</strong></td>
	  <td> Pendaftaran Perawatan</td>
	  <td align="center"> 
		<input name="check14" id="check14" value="14" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Pembelian Obat</td>
	  <td align="center"> 
		<input name="check15" id="check15" value="15" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Penjualan Obat</td>
	  <td align="center"> 
		<input name="check17" id="check17" value="17" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Stock Opname</td>
	  <td align="center"> 
		<input name="check39" id="check39" value="39" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Penjualan Resep</td>
	  <td align="center"> 
		<input name="check41" id="check41" value="41" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Penulisan Resep</td>
	  <td align="center"> 
		<input name="check42" id="check42" value="42" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Konversi Satuan Obat Resep</td>
	  <td align="center"> 
		<input name="check43" id="check43" value="43" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong>Laporan</strong></td>
	  <td> Absensi</td>
	  <td align="center"> 
		<input name="check16" id="check16" value="16" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Laporan Inventory</td>
	  <td align="center"> 
		<input name="check18" id="check18" value="18" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Laporan Pembelian Obat</td>
	  <td align="center"> 
		<input name="check19" id="check19" value="19" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Laporan Insentif Obat</td>
	  <td align="center"> 
		<input name="check30" id="check30" value="30" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Laporan Insentif</td>
	  <td align="center"> 
		<input name="check31" id="check31" value="31" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Perawatan</td>
	  <td align="center"> 
		<input name="check32" id="check32" value="32" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Laporan Penjualan Obat</td>
	  <td align="center"> 
		<input name="check34" id="check34" value="34" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Penjualan Obat Detil</td>
	  <td align="center"> 
		<input name="check35" id="check35" value="35" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Perawatan dan Penjualan</td>
	  <td align="center"> 
		<input name="check36" id="check36" value="36" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> History Foto</td>
	  <td align="center"> 
		<input name="check38" id="check38" value="38" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Stock Opname</td>
	  <td align="center"> 
		<input name="check40" id="check40" value="40" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Laporan Konversi Satuan Obat</td>
	  <td align="center"> 
		<input name="check44" id="check44" value="44" type="checkbox" checked>
		</td>
	</tr>
	<tr bgcolor="#ffffff">
	  <td> <strong></strong></td>
	  <td> Laporan Inventory Resep</td>
	  <td align="center"> 
		<input name="check45" id="check45" value="45" type="checkbox" checked>
		</td>
	</tr>
			</table>
	</fieldset>
	<div class="buttonrow">
		<input type="button" name="Save" class="button" onClick="validcek();" value="Save">
		<input type="hidden" name="next" value="" />
		<input value="Close" class="button" type="button" onClick="cancelcek();"></button>
		<input type="hidden" name="act" value="find"/>
	</div>
	
	</form>
	</div><!-- /form-container -->
</div><!-- /wrapper -->
<script type="text/javascript">
 var shortcut=document.frm_trans;
 function validcek(){
	shortcut.act.value="save";
	shortcut.submit();	
}
function find(){
	shortcut.act.value="find";
	shortcut.submit();	
}
function cancelcek(){
	window.close();
}
</script>
</body></html>
