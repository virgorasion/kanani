
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>Laporan Penjualan</title>
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
function koreksi(){
	var shortcut=document.bookform;
	var answer=confirm("are you sure want to approve this quotation ?");
	if (answer) {
		shortcut.act.value="koreksi";
		shortcut.action="my_quotation_print.php";
		shortcut.submit();
	} else {
		return false;
	}
}
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="1" cellpadding="2"  align="center" >
<tr bgcolor="#ffffff">
  <td align="center"><h3 class="content_bold">Laporan Penjualan</h3></td>
</tr>
<tr bgcolor="#ffffff">
  <td  align="center"><h3 class="content_bold">Periode 01/10/2017 s/d 31/10/2017</h3></td>
</tr>
</table>
<form action="lap_penjualan_export.php" method="post" name="bookform" id="frm_trans">
			
			</br>
	
<table border="0" cellspacing="1" cellpadding="2" bgcolor="#ffffff" width="100%" >	
	<tr bgcolor="#ffffff">	
			<td align="center" colspan="2">
			<div id="tomato">
				<input name='btnSave' type='button' value='Print' onClick="goprint()" >
				<!--<input name='btnExport' type='submit' value='Export' >-->
				<input name='btnClose' type='button' value='Close' onClick="fClose()" >
				 <input type="hidden" name="uid" value="test_59ef9ad13ea481.31559174" />
				 <input type="hidden" name="no_penjualan" value="" />
				 <input type="hidden" name="t1" value="20171001" />
				 <input type="hidden" name="t2" value="20171031" />
				 <input type="hidden" name="kd_dokter" value="" />
				 <input type="hidden" name="act" value="" />				 
			</div>	
			</td>
		</tr>	
			<tr valign="middle" bgcolor="#ffffff">
			<td  align="center" colspan="2">
				<div id="tomato1"> <!--Format Laporan :
								<img src = 'images/word.gif'>&nbsp;<input type='radio' name='format' value='1' class='input'>&nbsp;&nbsp;Microsoft Word&nbsp;&nbsp;
								<img src = 'images/excel.gif'>&nbsp;<input type='radio' name='format' value='2' class='input'>&nbsp;&nbsp;Microsoft Excel&nbsp;&nbsp;
								<img src = 'images/pdf.png'>&nbsp;<input type='radio' name='format' value='3' class='input' checked>&nbsp;&nbsp;PDF&nbsp;&nbsp;
								-->
				</div>
								
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
