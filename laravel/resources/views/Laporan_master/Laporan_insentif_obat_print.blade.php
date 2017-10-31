

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>Insentif Obat Report</title>
<link href="print.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8"/>
<script language="JavaScript">

function setVisible(obj, bool){
	if(typeof obj == "string")
			obj = document.getElementById(obj);
	if(bool == false){
		if(obj.style.visibility != 'hidden');
			obj.style.visibility = 'hidden';
		} else {
			if(obj.style.visibility != 'visible');
				obj.style.visibility = 'visible';
	}

}

function goprint(){
	setVisible('tomato',false);
	setVisible('tomato1',false);
	setTimeout("window.print()", 1000);
	setTimeout("setVisible('tomato',true)", 5000);
	setTimeout("setVisible('tomato1',true)", 5000);
}

function fClose(){
	window.close();
}
</script>

</head>



<body>



<form action="lap_insentif_obat_export.php" method="post" name="bookform" id="frm_trans">


	<table width="100%" border="0" cellspacing="3" cellspacing='1'>
		<tr>
			<td width="50%">
				<table>
					<tr>
						<td><h1 class="content_bold">Laporan Insentif Obat</h1></td> 
					</tr>
					<tr>
						<td><label for=""><font class='content_bold'>Tanggal :</font> 01/10/2017 s.d 31/10/2017</label></td>
					</tr>
					<tr>
						<td>&nbsp;</td> 
					</tr>
					<tr>
						<td>&nbsp;</td> 
					</tr>
				</table>		
			</td>
			<td width="50%" align="right">
				<table>
					<tr>
						<td><h1 class="content_bold">Kanani</h1></td> 
					</tr>
					<tr>
						<td><label for="">SKIN AESTHETIC & DERMATOLOGICAL CLINIC</label></td>
					</tr>
					<tr>
						<td><label for="">Jl. ARIF RAHMAN HAKIM 47 SURABAYA</label></td> 
					</tr>
					<tr>
						<td><label for="">Telp. 031-5916254</label></td> 
					</tr>
				</table>
			</td>
		</tr>	
	</table>
	
	<table  border="0" cellspacing="1" cellpadding="2" bgcolor="#000000" width="100%" align="center" >
          <tr bgcolor="#E6E6E6">
				<th class='content_bold'><h3>No</h3></th>
				<th class='content_bold'><h3>No Penjualan</h3></th>
				<th class='content_bold'><h3>Tanggal</h3></th>
				<th class='content_bold'><h3>Nama Pasien</h3></th>
				<th class='content_bold'><h3>Dokter</h3></th>
				<th class='content_bold'><h3>Insentif Dokter</h3></th>
				<th class='content_bold'><h3>Pegawai</h3></th>
				<th class='content_bold'><h3>Insentif Pegawai</h3></th>
			</tr>
				<tr bgcolor="#ffffff">
	  <td align="right" colspan="5"><strong>Total Dokter</strong></td>
	  <td align="right"> 0.00</td> 
	  <td align="right"><strong>Total Pegawai</strong></td>
	  <td align="right"> 0.00</td> 
  </tr>
		<tr bgcolor="#ffffff" align=center>	
			<td align="center" colspan="11">
			<div id="tomato">
				<input name='btnSave' type='button' value='Print' onClick="goprint()" >
				<input name='btnExport' type='submit' value='Export' >
				<input name='btnClose' type='button' value='Close' onClick="fClose()" >
				 <input type="hidden" name="t1" value="01/10/2017" />
				 <input type="hidden" name="t2" value="31/10/2017" />
				 <input type="hidden" name="act" value="" />				 
			</div>	
			</td>
		</tr>	
		<tr valign="middle" bgcolor="#ffffff">
			<td  align="center" colspan="11">
				<div id="tomato1"> Format Laporan :
					<!-- <img src = 'images/word.gif'>&nbsp;<input type='radio' name='format' value='1' class='input'>&nbsp;&nbsp;Microsoft Word&nbsp;&nbsp; -->
					<img src = 'images/excel.gif'>&nbsp;<input type='radio' name='format' value='2' class='input'>&nbsp;&nbsp;Microsoft Excel&nbsp;&nbsp;
					<img src = 'images/pdf.png'>&nbsp;<input type='radio' name='format' value='3' class='input' checked>&nbsp;&nbsp;PDF&nbsp;&nbsp;
				</div>		
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
