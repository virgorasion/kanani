<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Stock Opname Obat</title>

	<meta charset="utf-8" />

	<style type="text/css">
		/* General styles */

		body {
			margin: 0;
			padding: 0;
			font: 80%/1.5 Arial, Helvetica, sans-serif;
			color: #111;
			background-color: #FFF;
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
	<script type="text/javascript" src="../js/jquery.ui.datepicker-id.js"></script>
</head>

<script language="JavaScript">
	//var stat='';
$(function() {

	$('#tgl').datepicker($.datepicker.regional['id']);

});

function reloadFirst(){
	window.opener.document.bookform.submit();
}
function cancelcek(){
	window.close();
}

function checkNo(){
	var lbtxt ='';
	var url = 'ajax_control.php?m=cek_total_pem';
	//alert(url);
	new Ajax.Request(url, {
		method: 'get',
		onSuccess: function(transport) {
			lbtxt = transport.responseText;
			//alert(lbtxt);
			if (lbtxt=="") {
				alert ("Pilihan Barang dibutuhkan !");
				shortcut.nama_obat.style.background = 'Yellow';
				shortcut.nama_obat.focus();
				return false;
			} else {
				
			}
		}
	});
}

function reset(){
	var shortcut = document.frm_work;
	shortcut.lokasi.value=="";
	//shortcut.barcode.value=="";
	//shortcut.nama_obat.value=="";
	//shortcut.kd_obat.value=="";
}

function validcek(){
	
	var shortcut = document.frm_work;
	
	if(shortcut.tgl.value==""){
		alert("Tanggal dibutuhkan !");
		shortcut.tgl.style.background = '#FEF';
		shortcut.tgl.focus();
		return false;
	} else shortcut.tgl.style.background = '#ffffff';
	
	if(stat==''){
		alert("Tekan tombol Cari !");
		document.getElementById('cari').focus();
		return false;
	}
	
	shortcut.next.value=1;
	shortcut.submit();	
	//valid(shortcut.no.value);
}

</script>

<body>
	<div id="wrapper">
		<h2>Stock Opname Obat</h2>
		<div class="form-container">
			<form action="/views/my_stock_opname.php" method="post" name="frm_work" id="frm_work">
				<p class="legend">
					<strong>Note:</strong> Tanda bintang adalah kolom yang harus diisi (
					<em>*</em>)</p>
				<fieldset>
					<table width="100%" border="0" cellspacing="3" cellspacing="3">
						<tr>
							<td valign="top" width="40%">
								<div>
									<label for="">Tanggal
										<em>*</em>
									</label>
									<input id="tgl" name="tgl" type="text" size="20" class="ac_input" value="08/11/2017" />
								</div>
								<div>
									<label for="">Jenis</label>
									<select name="jenis">
										<option value="">-Pilih Jenis-</option>
										<option value="1">Cair</option>
										<option value="2">Kaplet</option>
										<option value="3">Kapsul</option>
										<option value="4">Tablet</option>
										<option value="5">Gel</option>
										<option value="6">Cream</option>
										<option value="7">Powder</option>
									</select>
								</div>
								<!--
						<div>
							<label for="">Barcode</label> 
							<input type="text" id="barcode" name="barcode" onKeyDown="javascript:return displayKeyCode(event);" />
						</div>
						<div>
							<label for="">Nama Obat</label> 
							<input id="nama_obat" name="nama_obat" type="text" value="" size="50" onBlur="autoType(1)"/>
							<input id="kd_obat" name="kd_obat" type="hidden" value="" size="20" />
							
						</div>
						-->
								<div>
									<label for="">Keterangan</label>
									<textarea name="keterangan"></textarea>
								</div>
								<div style="padding-left:170px;width:100%;">
									<input id="cari" type="button" value="Cari" onClick="genDetailStock();" />
									<input type="button" value="Reset" onClick="reset();" />
								</div>
							</td>
						</tr>
					</table>
				</fieldset>
				<div id="optDetailStock">

				</div>

				<table align="center">
					<tr>
						<td>
							<input type="button" value="Simpan" onClick="validcek();" />
							<input type="hidden" name="act" value="add" />
							<input type="hidden" name="next" value="" />
							<input type="hidden" name="uid" value="test_5a0305857f1042.85983194" />
							<input type="hidden" name="no_stock_opname" value="" />
						</td>
						<td>
							<input type="button" value="Keluar" onClick="cancelcek();" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		var stat='';
	var shortcut=document.frm_work;
	var auto_type_val="obat";
	
	/* Barcode */
	
	function displayKeyCode(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
	
		if (charCode == 9) {
			fget_data_bar(shortcut.barcode.value); //tab
		} else if (charCode == 13) { 
			fget_data_bar(shortcut.barcode.value); //  enter
			shortcut.barcode.focus();
		}

		//return false;

   }
   
   function fget_data_bar(sValue) {
	var lbtxt ='';
	var xid = sValue;//shortcut.customer_id.value;
	var url = 'ajax_control.php?m=bar_obat&xid='+xid;
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
				  shortcut.kd_obat.value=temp[0];
				  shortcut.nama_obat.value=temp[1];
				} else {
				  shortcut.kd_obat.value="";
				  shortcut.nama_obat.value="";
				}	
			}
		});
	  }
	}
	
	/* Barcode */	
	
	function numbersonly(myfield, e, dec)
	{
		var key;
		var keychar;

		if (window.event)
		   key = window.event.keyCode;
		else if (e)
		   key = e.which;
		else
		   return true;
		keychar = String.fromCharCode(key);

		// control keys
		if ((key==null) || (key==0) || (key==8) || 
			(key==9) || (key==13) || (key==27) )
		   return true;

		// numbers
		else if ((("-0123456789").indexOf(keychar) > -1) ||  (key==46)) {
			if (myfield.value.split(".").length>1 && (key==46))
				return false;
			else
				return true;
		}
		// decimal point jump
		else if (dec && (keychar == "."))
		   {
		   myfield.form.elements[dec].focus();
		   return false;
		   }
		else
		   return false;
	}
	
	/*
	function findValue(li) {
	    //alert("1");
	  	if( li == null ) return alert("No match!");

	  	// if coming from an AJAX call, let's use the CityId as the value
	  	if( !!li.extra ) var sValue = li.extra[0];
	  	// otherwise, let's just display the value in the text box
	  	else var sValue = li.selectValue;
	    //alert(auto_type_val);
	  	//alert("The value you selected was: " + sValue);
	
		if(auto_type_val=="obat") {
			//alert(auto_type_val);
			shortcut.kd_obat.value=sValue;
			//genDetailStock(sValue);
			//alert(sValue);	
			//fget_data(sValue);
		}
  	}
	
	function selectItem(li) {
    		findValue(li);
  	}
  	
  	function formatItem(row) {
    		return row[0] + " (no: " + row[1] + ")";
  	}	
	
	function autoType(val) {
		var temp="";
    		if(val==1) auto_type_val="obat";
	}
	
	$("#nama_obat").autocomplete(
     "autocomplete_supplier.php",
      {
  			delay:10,
  			minChars:2,
  			matchSubset:1,
  			matchContains:1,
  			cacheLength:10,
  			onItemSelect:selectItem,
  			onFindValue:findValue,
  			formatItem:formatItem,
			extraParams:{tipe:"obat"},
			width:500,
  			autoFill:true
  		}
    );
    */
   
	function genDetailStock() {
		var lbtxt ='';
		stat="1";
		//var kd=shortcut.kd_obat.value;
		var jen=shortcut.jenis.value;
		var url = 'gen_stock_opname.php?xjen='+jen;
		//alert(url);
		var notice_baris = $('optDetailStock');
		new Ajax.Request(url, {
			method: 'get',
			onSuccess: function(transport) {
				lbtxt = transport.responseText;
					//alert (lbtxt);
				if (lbtxt!="") {
					//notice_baris.update(lbtxt);
					document.getElementById("optDetailStock").innerHTML=lbtxt;
					return false;
				} else return false;
			}
		});
  	}
  	
  	function total(x){
  		var a='stock_'+x;
  		var b='qty_fisik_'+x;
  		var c='qty_selisih_'+x;
  		var qtys=parseInt(document.getElementById(a).value);
  		var qtyf=parseInt(document.getElementById(b).value);
  		document.getElementById(c).value = qtyf - qtys;
  	}
  	
  function valid(x){
  		
	  	for(i=1;i<x;i++){
	  		var t='qty'+i;
	  		var v='lokasi'+i;
	  		var w='qtyf'+i;
			
	  		if(parseInt(document.getElementById(t).value) > parseInt(document.getElementById(w).value) ){
				alert("QTY Berlebih !");
				//alert(document.getElementById(t).value);
				//alert(document.getElementById(w).value);
				document.getElementById(t).style.background = '#FEF';
				document.getElementById(t).focus();
				return false;
			} else document.getElementById(t).style.background = '#ffffff';
			
			if(document.getElementById(v).value=="" ){
				alert("Lokasi dibutuhkan !");
				document.getElementById(v).style.background = '#FEF';
				document.getElementById(v).focus();
				return false;
			} else document.getElementById(v).style.background = '#ffffff';
			
		}
		//alert(x)
		
	}

	</script>
</body>

</html>