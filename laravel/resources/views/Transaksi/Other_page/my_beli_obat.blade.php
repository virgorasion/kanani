<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>PEMBELIAN OBAT</title>

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

	$('#tgl_beli').datepicker();

});

function reloadFirst(){
	window.opener.document.bookform.submit();
}
function cancelcek(){
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
	
	if(shortcut.tgl_beli.value==""){
		alert("Tanggal dibutuhkan !");
		shortcut.tgl_beli.style.background = '#FEF';
		shortcut.tgl_beli.focus();
		return false;
	} else shortcut.tgl_beli.style.background = '#ffffff';
		
	shortcut.next.value=1;
	shortcut.submit();
}

</script>

<div id="wrapper">
	<h2>Pembelian Obat</h2>
	<div class="form-container">
		<form action="/views/my_beli_obat.php" method="post" name="frm_work" id="frm_work">
		<p class="legend"><strong>Note:</strong> Tanda bintang adalah kolom yang harus diisi (<em>*</em>)</p>
		<fieldset>
			<legend>Supplier</legend>
			<table width="100%" border="0" cellspacing="3" cellspacing="3">
				<tr>
					<td>
						<div>
						
							<input id="no_beli" name="no_beli" type="hidden" value="PO1711001"/>
						
							<label for="">Tanggal<em>*</em></label> 
							<input id="tgl_beli" name="tgl_beli" type="text" size="20" class="ac_input" value="11/08/2017" />
						</div>
						<div>
							<label for="">Nama Supplier<em>*</em></label> 
							<input id="nama" name="nama" type="text" value="" size="50" onBlur="autoType(1);" />
						</div>
						<div>
							<label for="">Kode Supplier<em>*</em></label> 
							<input id="kode_sup" name="kode_sup" type="text" value="" size="20" />
						</div>
						<div>
							<label for="">Alamat<em>*</em></label> 
							<input id="alamat" name="alamat" type="text" value="" size="50" />
						</div>
						<!--<div>
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
						</div>-->
						<div>
							<label for="">Keterangan<em>*</em></label> 
							<textarea name="keterangan"></textarea>
						</div>
					</td>
					<td>
					<table width="20%" cellpadding="1" cellspacing="1" border="0">
					
					</table>
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Pilihan Obat</legend>
			<table border="0" cellspacing="1" cellpadding="2" bgcolor="#000000"  align="center" width="70%">
				<tr bgcolor="#E6E6E6">
					<th width="30%" align="center">Nama Obat</th>
					<th width="5%" align="center">Qty</th>
					<th width="5%" align="center">Harga</th>
					<th align="center" width="5%">Disc%</th>
					<th align="center" width="10%">Total</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<tr bgcolor="#ffffff">
					<td width="10%">
						<input id="nama_obat" name="nama_obat" type="text" value="" size="40%" onBlur="autoType(2);" class="ac_input">
						<input id="kode_obat" name="kode_obat" type="hidden" value="" >
					</td>
					<td width="5%"><input id="qty" name="qty" type="text" value="" size="5%" onBlur="getCalculate();" onKeyPress="return numbersonly(this, event)"></td>
					<td width="5%"><input id="harga" name="harga" type="text" value="" size="5%" ></td>
					<td width="5%"><input id="discount" name="discount" type="text" value="0" size="5%" onBlur="getCalculate();" onKeyPress="return numbersonly(this, event)" onBlur="getCalculateNon();" onKeyPress="return numbersonly(this, event)"></td>
					<td width="5%"><input id="total" name="total" type="text" value="0" size="10%" readonly></td>		
					<td width="5%"><input type="button" value="Tambah" name="add" id="add" onClick="genDetail('add');" /></td>
				<tr>
				<tr bgcolor="#ffffff">
					<td colspan="7">	
						<div id="optDetailObat">
				
						</div>
					</td>
				</tr>

			</table>
		</fieldset>
		<fieldset>
			<div>
				<label for="">Status<em>*</em></label> 
				<select name="status">
					<option value="">-Pilih Status-</option>
					<option value="EX">Expedition</option>
					<option value="OD">Obat Dokter</option>
					<option value="KF">Kosmetik Facial</option>
				</select>
			</div>
			<div>
				<label for="">Total<em>*</em></label> 
				<input id="tot_ktr" name="tot_ktr" type="text" value="0" size="20" />
			</div>
			<div>
				<label for="">Discount<em>*</em></label> 
				<input id="tot_disc" name="tot_disc" type="text" value="0" size="20" />
			</div>
			<div>
				<label for="">Pajak (%)<em>*</em></label> 
				<input id="tot_vat" name="tot_vat" type="text" value="0" size="20" onBlur="getCalculateVat();"/>
			</div>
			<div>
				<label for="">Grand Total<em>*</em></label> 
				<input id="grand_tot" name="grand_tot" type="text" value="0" size="20" />
			</div>	
		</fieldset>
		<table align="center">
		<tr>
		<td>
		<input type="button" value="Simpan" onClick="validcek();"/>
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
	var auto_type_val="supplier";	
	
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
	
		if(auto_type_val=="supplier") {
			//alert(auto_type_val);
			shortcut.kode_sup.value=sValue;	
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
    		if(val==1) auto_type_val="supplier";
    		else if(val==2) auto_type_val="obat";
	}
	
	$("#nama").autocomplete(
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
			extraParams:{tipe:"supplier"},
			width:500,
  			autoFill:true
  		}
    );
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
    function fget_data(sValue) {
		var lbtxt ='';
		var xid = sValue;//shortcut.customer_id.value;
		var url = 'ajax_control.php?m=supplier&xid='+xid;
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
					  shortcut.kode_sup.value=temp[0];
					  shortcut.alamat.value=temp[1];
					} else {
					  shortcut.kode_sup.value="";
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
					  shortcut.harga.value=temp[3];
					  shortcut.qty.focus();
					} else {
					  shortcut.harga.value="0";
					}	
				}
			});
		}
	}
	
	function getCalculate()
	{
		shortcut.total.value = parseFloat(shortcut.harga.value) * parseFloat(shortcut.qty.value) - ((parseFloat(shortcut.harga.value) * parseFloat(shortcut.qty.value)) * parseFloat(shortcut.discount.value)/100);
	}
	function getCalculateVat()
	{
		var total = parseFloat(shortcut.tot_ktr.value) - parseFloat(shortcut.tot_disc.value);
		var totalvat = parseFloat(total) * parseFloat(shortcut.tot_vat.value) / 100;
		shortcut.grand_tot.value = parseFloat(total) + parseFloat(totalvat);
	}
	
	function genDetail(act) {
		var lbtxt ='';
	
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

		var xnb = shortcut.no_beli.value;
		var xkd = shortcut.kode_obat.value;
		var xqty = shortcut.qty.value;
		var xhrg = shortcut.harga.value;
		var xdis = shortcut.discount.value;
		var url = 'gen_pembelian_detail.php?act=add&xnb='+xnb+'&xkd='+xkd+'&xqty='+xqty+'&xhrg='+xhrg+'&xdis='+xdis;
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
					shortcut.nama_obat.value="";
					shortcut.kode_obat.value="";
					shortcut.qty.value="";
					shortcut.harga.value="";
					shortcut.discount.value="0";
					shortcut.total.value="0";
					fget_grantotal();
					return false;
				} else return false;
			}
		});
		
  	}
  	
  	function genDelete(xval,xtipe){
	var answer=confirm("Apakah Anda yakin ingin menghapus ?");
		if (answer) {
			var url = 'gen_pembelian_detail.php?xkd='+xval+'&act='+xtipe;
			//alert(url);
			new Ajax.Request(url, {
				method: 'get',
				onSuccess: function(transport) {
					lbtxt = transport.responseText;
						//alert (lbtxt);
					if (lbtxt!="") {
						document.getElementById("optDetailObat").innerHTML=lbtxt;
						fget_grantotal();
						return false;
					} else return false;
				}
			});
			//shortcut.submit();
		} else {
			return false;
		}
	}
	function fget_grantotal() {
		var lbtxt ='';
		var url = 'ajax_control.php?m=cek_total_pem';
		//alert(url);
	
			new Ajax.Request(url, {
				method: 'get',
				onSuccess: function(transport) {
					lbtxt = transport.responseText;
					//alert(lbtxt);
					if (lbtxt!="") {
					  temp=lbtxt.split("#");
					  shortcut.tot_ktr.value=temp[0];
					  shortcut.tot_disc.value=temp[1];
					  shortcut.grand_tot.value=temp[2];
					} else {
					  shortcut.tot_ktr.value=0;
					  shortcut.tot_disc.value=0;
					  shortcut.grand_tot.value=0;
					}	
				}
			});
	
	}
</script>
</body>
</html>
