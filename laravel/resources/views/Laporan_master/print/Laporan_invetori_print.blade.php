<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>Laporan Inventori</title>
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
	setTimeout("window.print()", 1000);
	setTimeout("setVisible('tomato',true)", 5000);
}

function fClose(){
	window.close();
}
</script>

</head>



<body>

<form action="lap_absensi_export.php" method="post" name="bookform" id="frm_trans">

	<p><em></em></p>

	<table border="0" cellspacing="1" cellpadding="3"  width="80%" align="center">
		<tr bgcolor="#ffffff" >			
			<td align="center" valign="middle" ><h1 class="content_bold">Laporan Inventory</h1>
			</td>
		</tr bgcolor="#ffffff">		
	</table>	

	<table  border="0" cellspacing="1" cellpadding="2" width="80%" align="center" bgcolor="#400040">
          <tr bgcolor="#E6E6E6">
          		<th class='content_bold'><h3>No</h3></th>
				<th class='content_bold'><h3>Kode Obat</h3></th>
				<th class='content_bold'><h3>Nama Obat</h3></th>
				<th class='content_bold'><h3>Harga</h3></th>
				<th class='content_bold'><h3>Minimal Stok</h3></th>
				<th class='content_bold'><h3>Stok</h3></th>
    		</tr>

		<tr bgcolor="#ffffff" align=center>	
			<td align="center" colspan="11">
			<div id="tomato">
				<input name='btnSave' type='button' value='Print' onClick="goprint()" >				
				<input name='btnClose' type='button' value='Close' onClick="fClose()" >
				 <input type="hidden" name="t1" value="" />
				 <input type="hidden" name="t2" value="" />
				 <input type="hidden" name="act" value="" />				 
			</div>	
			</td>
		</tr>			
	</table>
	</form>
</body>
</html>
