
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>PENULISAN RESEP</title>

<meta charset="utf-8"/>

<style type="text/css">

/* General styles */
body { margin: 0; padding: 0; font: 80%/1.5 Arial,Helvetica,sans-serif; color: #111; background-color: #FFF; }
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
function reloadFirst(){
	window.opener.document.bookform.submit();
}
function cancelcek(){
	window.opener.document.bookform.submit();
	window.close();
}
function checkNo(){
	var shortcut = document.frm_work;
	var xno=shortcut.no_quotation.value;
	var lbtxt ='';
	var url = 'ajax_control.php?m=no_quot&xid='+xno;
	//alert(url);
	if (xno!='') {
		new Ajax.Request(url, {
			method: 'get',
			onSuccess: function(transport) {
				lbtxt = transport.responseText;
				//alert(lbtxt);
				if (lbtxt!="") {
					alert ("No Quotation already have work order");
					shortcut.no_quotation.style.background = 'Yellow';
					shortcut.no_quotation.focus();
					return false;
				} else genDetail(xno);
			}
		});
	}
}


function validcek(){
	
	var shortcut = document.frm_work;
	
	if(shortcut.tanggal.value==""){
		alert("Tanggal dibutuhkan !");
		shortcut.tanggal.style.background = '#FEF';
		shortcut.tanggal.focus();
		return false;
	} else shortcut.tanggal.style.background = '#ffffff';
	
	if(shortcut.nama.value==""){
		alert("Nama Dibutuhkan !");
		shortcut.nama.style.background = '#FEF';
		shortcut.nama.focus();
		return false;
	} else shortcut.nama.style.background = '#ffffff';
	
	if(shortcut.seldokter.value==""){
		alert("Dokter Dibutuhkan !");
		shortcut.seldokter.style.background = '#FEF';
		shortcut.seldokter.focus();
		return false;
	} else shortcut.seldokter.style.background = '#ffffff';
	
	
	shortcut.next.value=1;
	shortcut.submit();
}

</script>

<div id="wrapper">
	<h2>Penulisan Resep</h2>
	<div class="form-container">
		<form action="/views/my_penulisan_resep.php" method="post" name="frm_work" id="frm_work">
		<p class="legend"><strong>Note:</strong> Tanda bintang adalah kolom yang harus diisi (<em>*</em>)</p>
		<fieldset>
			<legend>Pasien</legend>
			<table width="100%" border="0" cellspacing="3" cellspacing="3">
				<tr>
					<td width="50%" style="vertical-align:top;">
						<div>
							<input id="no_penjualan" name="no_penjualan" type="hidden" value="RS1711001"/>
							<label for="">Tanggal<em>*</em></label> 
							<input id="tanggal" name="tanggal" type="text" size="20" class="ac_input" value="11/08/2017" />
						</div>
						<div>
							<label for="">Nama Pasien<em>*</em></label> 
							<input id="nama" name="nama" type="text" value="" size="50" onBlur="autoType(1);" />
						</div>
						<div>
							<label for="">Kode Pasien<em>*</em></label> 
							<input id="kode_pasien" name="kode_pasien" type="text" value="" size="20" />
						</div>
						<div>
							<label for="">Barcode<em>*</em></label> 
							<input id="barcode" name="barcode" type="text" value="" size="20" />
						</div>
						<div>
							<label for="">Alamat<em>*</em></label> 
							<input id="alamat" name="alamat" type="text" value="" size="50" />
						</div>
						<div>
							<label for="">Pilih Dokter<em>*</em></label>
							<select name="seldokter"  class="selectkecil">
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
					</td>
					<td width="50%" style="vertical-align:top;">
						<h3>History Rekam Medis</h3>
						<div id="optHistory" style="height: 200px; overflow-y:scroll;">
							
						</div>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Pilihan Obat</legend>
			<table border="0" cellspacing="1" cellpadding="2" bgcolor="#000000"  align="center" width="40%">
				<tr bgcolor="#E6E6E6">
					<th width="30%" align="center">Nama Obat</th>
					<th width="5%" align="center">Stok</th>
					<th width="5%" align="center">Harga</th>
					<th width="5%" align="center">Qty</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<tr bgcolor="#ffffff">
					<td width="10%" align="center">
						<input id="nama_obat" name="nama_obat" type="text" value="" size="40%" onBlur="autoType(2);" class="ac_input">
						<input id="kode_obat" name="kode_obat" type="hidden" value="" >
					</td>
					<td width="5%" align="center"><input id="stok" name="stok" type="text" value="" size="5%" readonly></td>
					<td width="5%" align="center"><input id="harga" name="harga" type="text" value="" size="5%" readonly></td>
					<td width="5%" align="center"><input id="qty" name="qty" type="text" value="" size="5%"></td>	
					<td width="5%" align="center"><input type="button" value="Tambah" name="add" id="add" onClick="genDetail('add');" /></td>
				<tr>
				<tr bgcolor="#ffffff">
					<td colspan="7">	
						<div id="optDetailObat">
				
						</div>
					</td>
				</tr>

			</table>
		</fieldset>
				<table align="center">
		<tr>
		<td>
		<input type="button" value="Save" onClick="validcek();"/>
		<input type="hidden" name="act" value="add" />
		<input type="hidden" name="next" value="" />
		<input type="hidden" name="uid" value="test_5a0305857f1042.85983194" />
		</td>
		<td><input type="button" value="Keluar" onClick="cancelcek();"/></td>
		</tr>
		</table>
		</form>
	</div>
</div>
<script type="text/javascript">
	var shortcut=document.frm_work;
	var auto_type_val="pasien";	
	
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
		else if ((("0123456789").indexOf(keychar) > -1) ||  (key==46)) {
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
			genHistory(sValue);
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
    $("#nama_obat").autocomplete(
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
			extraParams:{tipe:"obat"},
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
					  shortcut.kode_pasien.value=temp[0];
					  shortcut.barcode.value=temp[1];
					  shortcut.alamat.value=temp[2];
					} else {
					  shortcut.kode_pasien.value="";
					  shortcut.barcode.value="";
					  shortcut.alamat.value="";
					}	
				}
			});
		}
	}
	
	 function fget_data_obat(sValue) {
		var lbtxt ='';
		var xid = sValue;//shortcut.customer_id.value;
		var url = 'ajax_control.php?m=obat&xid='+xid;
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
					  shortcut.harga.value=temp[1];
					  shortcut.stok.value=temp[2];
					  shortcut.qty.focus();
					}
				}
			});
		}
	}
	function genDetail(act) {
		var lbtxt ='';
	
		if(shortcut.stok.value==0){
			alert("Obat habis !");
			shortcut.nama_obat.style.background = 'Yellow';
			shortcut.nama_obat.focus();
			return false;
		} else shortcut.nama_obat.style.background = '#f9f9f9';
		if((shortcut.stok.value-shortcut.qty.value)<=1){
			alert("Ambil stok yang lebih kecil..");
			shortcut.nama_obat.style.background = 'Yellow';
			shortcut.nama_obat.focus();
			return false;
		} else shortcut.nama_obat.style.background = '#f9f9f9';
		if(shortcut.nama_obat.value==""){
			alert("Nama Obat dibutuhkan !");
			shortcut.nama_obat.style.background = 'Yellow';
			shortcut.nama_obat.focus();
			return false;
		} else shortcut.nama_obat.style.background = '#f9f9f9';
	
		if(shortcut.qty.value==""){
			alert("Quantity dibutuhkan!");
			shortcut.qty.style.background = 'Yellow';
			shortcut.qty.focus();
			return false;
		} else shortcut.qty.style.background = '#f9f9f9';

		var xnp = shortcut.no_penjualan.value;
		var xkd = shortcut.kode_obat.value;
		var xqty = shortcut.qty.value;
		var xhar = shortcut.harga.value;
		var url = 'gen_penulisan_resep.php?act=add&xnp='+xnp+'&xkd='+xkd+'&xqty='+xqty+'&xhar='+xhar;
		//alert(url);
		var notice_baris = $('optDetailObat');
		new Ajax.Request(url, {
			method: 'get',
			onSuccess: function(transport) {
				lbtxt = transport.responseText;
					//alert (lbtxt);
				if (lbtxt!="") {
					//notice_baris.update(lbtxt);
					document.getElementById("optDetailObat").innerHTML=lbtxt;
					shortcut.stok.value="";
					shortcut.nama_obat.value="";
					shortcut.kode_obat.value="";
					shortcut.harga.value="";
					shortcut.qty.value="";
					return false;
				} else return false;
			}
		});
		
  	}
	function genHistory(id) {
		var lbtxt ='';
	
		var url = 'gen_history_resep.php?id='+id;
		//alert(url);
		var notice_baris = $('optHistory');
		new Ajax.Request(url, {
			method: 'get',
			onSuccess: function(transport) {
				lbtxt = transport.responseText;
					//alert (lbtxt);
				if (lbtxt!="") {
					//notice_baris.update(lbtxt);
					document.getElementById("optHistory").innerHTML=lbtxt;
					return false;
				} else return false;
			}
		});
		
  	}
  	
  	function genDelete(xval,xtipe){
	var answer=confirm("Apakah Anda yakin ingin menghapus ?");
		if (answer) {
			var url = 'gen_penulisan_resep.php?xkd='+xval+'&act='+xtipe;
			//alert(url);
			new Ajax.Request(url, {
				method: 'get',
				onSuccess: function(transport) {
					lbtxt = transport.responseText;
						//alert (lbtxt);
					if (lbtxt!="") {
						document.getElementById("optDetailObat").innerHTML=lbtxt;
						return false;
					} else return false;
				}
			});
			//shortcut.submit();
		} else {
			return false;
		}
	}
</script>
</body>
</html>
