
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>PERAWATAN</title>

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

function cancelcek(){
	window.close();
}


function validcek(){
	
	var shortcut = document.frm_work;
	
	if(shortcut.tanggal.value==""){
		alert("Tanggal dibutuhkan !");
		shortcut.tanggal.style.background = '#FEF';
		shortcut.tanggal.focus();
		return false;
	} else shortcut.tanggal.style.background = '#ffffff';
	
	if(shortcut.kode_pasien.value==""){
		alert("Nama Dibutuhkan !");
		shortcut.nama.style.background = '#FEF';
		shortcut.nama.focus();
		return false;
	} else shortcut.nama.style.background = '#ffffff';
	
	if(shortcut.status.value==""){
		alert("Status Dibutuhkan !");
		shortcut.status.style.background = '#FEF';
		shortcut.status.focus();
		return false;
	} else shortcut.status.style.background = '#ffffff';
	
	
	shortcut.next.value=1;
	shortcut.submit();
}
function reloadFirst(){
	window.opener.document.bookform.submit();
}
</script>

<div id="wrapper">
	<h2>Form Perawatan</h2>
	<div class="form-container">
		<form action="/views/my_daftar_perawatan_wajah.php" method="post" name="frm_work" id="frm_work">
		<p class="legend"><strong>Note:</strong> Tanda bintang adalah kolom yang harus diisi (<em>*</em>)</p>
		<fieldset>
			<legend>Perawatan</legend>
			<table width="100%" border="0" cellspacing="3" cellspacing="3">
				<tr>
					<td>
						<div>
						
							<input id="no_perawatan" name="no_perawatan" type="hidden" value="1711001"/>
						
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
						
					</td>
				</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend>Pilihan Perawatan</legend>
			<table border="0" cellspacing="1" cellpadding="2" bgcolor="#000000"  align="center" width="100%">
				<tr bgcolor="#E6E6E6">
					<th width="45%" align="center" colspan="3">Jenis Perawatan</th>
					<th width="45%" align="center" colspan="4">Jenis Tindakan</th>
					<th width="10%" align="center">Dengan Dokter</th>
				</tr>
				<tr bgcolor="#ffffff">
					<td colspan="3" align="center">
						<input id="nama_perawatan" name="nama_perawatan" type="text" value="" style="width:98%"  onBlur="autoType(2);" class="ac_input">
						<input id="kode_perawatan" name="kode_perawatan" type="hidden" value="" >
					</td>
					<td colspan="4" align="center"><input id="tindakan" name="tindakan" type="text" value="" style="width:98%" readonly></td>
					<td width="10%" align="center"><input id="dgn_dokter" name="dgn_dokter" type="text" value="" style="width:90%" readonly></td>
				</tr>
				<tr bgcolor="#E6E6E6">
					<th width="10%" align="center">Dokter</th>
					<th width="10%" align="center">Perawat</th>
					<th width="10%" align="center">Beautician</th>
					<th width="15%" align="center">Harga</th>
					<th width="5%" align="center">Diskon%</th>
					<th width="15%" align="center">Voucher</th>
					<th align="center" width="15%">Subtotal</th>
					<th width="5%">&nbsp;</th>
				</tr>
				<tr bgcolor="#ffffff">
					<td><select name="seldokter"  class="selectkecil">
<option value=''>--Pilih Dokter--</option>
<option value="DK014" >BEBAS</option>
<option value="DK015" >Dr.IRA HERIWATI,Sp.KK</option>
<option value="DK016" >DR.MAYLITA SARI,SPKK</option>
<option value="DK017" >dr.Diah Nugrahaeni sp.KK</option>
<option value="DK018" >dr. Astindari sp.KK</option>
<option value="DK019" >dr. Nurfithria Ikaputri spKK</option>
<option value="DK020" >dr. Renata Mayangsari, spKK</option>
</select>
</td>
					<td><select name="selperawat"  class="selectkecil">
<option value=''>--Pilih Perawat--</option>
<option value="P1019" >WAHYU</option>
<option value="P1045" >dita</option>
<option value="P1049" >ANA</option>
<option value="P1052" >NURUL HIDAYAH</option>
</select>
</td>
					<td><select name="selbeautician"  class="selectkecil">
<option value=''>--Pilih Beautician--</option>
<option value="P1033" >ANA</option>
<option value="P1041" >nisfi</option>
<option value="P1046" >balqis</option>
<option value="P1047" >WAHYU</option>
<option value="P1048" >dita</option>
</select>
</td>
					<td width="10%"><input id="biaya1" name="biaya1" type="text" value="0" size="26%" readonly></td>
					<td width="10%"><input id="diskon" name="diskon" type="text" value="0" size="20%" onBlur="getCalculate();"></td>
					<td width="10%"><input id="voucher" name="voucher" type="text" value="0" size="25%" onBlur="getCalculate();"></td>
					<td width="10%"><input id="biaya" name="biaya" type="text" value="0" size="25%" readonly></td>
					<td width="5%" align=center><input type="button" value="Tambah" name="add" id="add" onClick="genDetail('add');" /></td>
				<tr>
				<tr bgcolor="#ffffff">
					<td colspan="8">	
						<div id="optDetailObat">
							
						</div>
					</td>
				</tr>

			</table>
		</fieldset>
		<fieldset>
			<legend>Detail Perawatan</legend>
			<table width="100%" border="0" cellspacing="3" cellspacing="3">
				<tr>
					<td>
						<div>
							<label for="">Total<em>*</em></label> 
							<input id="tot_ktr" name="tot_ktr" type="text" value="0" size="20" readonly />
						</div>
						<div>
							<label for="">Discount<em>*</em></label> 
							<input id="tot_disc" name="tot_disc" type="text" value="0" size="20" readonly />
						</div>
						<div>
							<label for="">Voucher<em>*</em></label> 
							<input id="tot_voucher" name="tot_voucher" type="text" value="0" size="20"  readonly />
						</div>
						<div>
							<label for="">Grand Total<em>*</em></label> 
							<input id="grand_tot" name="grand_tot" type="text" value="0" size="20" readonly />
						</div>
						<div>
							<label for="">Status<em>*</em></label> 
							<select name="status">
								<option value="">--Pilih Status--</option>
								<option value="L">Bayar</option>
								<option value="B">Belum Bayar</option>
							</select>
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
		}else if(auto_type_val=="perawatan") {
			//alert(auto_type_val);
			shortcut.kode_perawatan.value=sValue;	
			fget_data_perawatan(sValue);
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
    		else if(val==2) auto_type_val="perawatan";
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
	$("#nama_perawatan").autocomplete(
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
	
	function fget_data_perawatan(sValue) {
		var lbtxt ='';
		var xid = sValue;//shortcut.customer_id.value;
		var url = 'ajax_control.php?m=perawatan&xid='+xid;
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
					  shortcut.tindakan.value=temp[6];
					  shortcut.biaya.value=temp[4];
					  shortcut.biaya1.value=temp[4];
					  if (temp[3]==1){
						  shortcut.dgn_dokter.value="YA";
					  }else{
						  shortcut.dgn_dokter.value="TIDAK";
					  }
					  shortcut.diskon.value=0;
					}	
				}
			});
		}
	}
		function genDetail(act) {
		var lbtxt ='';
	
		if(shortcut.nama_perawatan.value=="" || shortcut.kode_perawatan.value==""){
			alert("Nama Perawatan dibutuhkan !");
			shortcut.nama_perawatan.style.background = 'Yellow';
			shortcut.nama_perawatan.focus();
			return false;
		} else shortcut.nama_perawatan.style.background = '#f9f9f9';

		var xnp = shortcut.no_perawatan.value;
		var xkd = shortcut.kode_perawatan.value;
		var xkdd = shortcut.seldokter.value;
		var xkdp = shortcut.selperawat.value;
		var xkdb = shortcut.selbeautician.value;
		var xdis = shortcut.diskon.value;
		var xvou = shortcut.voucher.value;
		var xbia = shortcut.biaya1.value;
		var url = 'gen_perawatan_detail.php?act=add&xnp='+xnp+'&xkd='+xkd+'&xkdd='+xkdd+'&xkdp='+xkdp+'&xkdb='+xkdb+'&xdis='+xdis+'&xvou='+xvou+'&xbia='+xbia;
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
					shortcut.nama_perawatan.value="";
					shortcut.kode_perawatan.value="";
					shortcut.tindakan.value="";					
					shortcut.dgn_dokter.value="";
					shortcut.seldokter.value="";
					shortcut.selperawat.value="";
					shortcut.selbeautician.value="";
					shortcut.biaya.value="0";					
					shortcut.biaya1.value="0";
					shortcut.voucher.value="0";
					shortcut.diskon.value="0";
					fget_grantotal();
					return false;
				} else return false;
			}
		});
		
  	}
  	
	function genDelete(xval,xtipe){
		var answer=confirm("Apakah Anda yakin ingin menghapus ?");
		if (answer) {
			var url = 'gen_perawatan_detail.php?xkd='+xval+'&act='+xtipe;
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
	
	function getCalculate()
	{
		shortcut.biaya.value = parseFloat(shortcut.biaya1.value) - (parseFloat(shortcut.biaya1.value) * parseFloat(shortcut.diskon.value)/100) - parseFloat(shortcut.voucher.value);
	}
	function getCalculateVou()
	{
		var total = parseFloat(shortcut.tot_ktr.value) - parseFloat(shortcut.tot_disc.value);
		//var totalvou = parseFloat(total) - parseFloat(shortcut.tot_voucher.value);
		//shortcut.grand_tot.value = parseFloat(totalvou);
	}
	function fget_grantotal() {
		var lbtxt ='';
		var url = 'ajax_control.php?m=cek_total_perawatan';
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
					  shortcut.tot_voucher.value=temp[2];
					  shortcut.grand_tot.value=parseFloat(temp[0])-parseFloat(temp[1])-parseFloat(temp[2]);
					} else {
					  shortcut.tot_ktr.value=0;
					  shortcut.tot_disc.value=0;
					  shortcut.tot_voucher.value=0;
					  shortcut.grand_tot.value=0;
					}	
				}
			});
	
	}
</script>
</body>
</html>
