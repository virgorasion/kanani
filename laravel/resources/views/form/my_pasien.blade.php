
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>UBAH DATA PEGAWAI DAN PASSWORD USER</title>

<meta charset="utf-8"/>

<style type="text/css">

/* General styles */
body { margin-top: 1.5%; padding: 0; font: 80%/1.5 Arial,Helvetica,sans-serif; color: #111; background-color: #f0f0f0; }
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

<body>
<div id="wrapper">
	<h2 style="background-color:#f39c12;">Ubah Data Pegawai Dan Password User</h2>
	<div class="form-container">
		<form action="/views/my_pasien.php" method="post" name="frm_work" id="frm_work">
		<p class="legend"><strong>Note:</strong> Tanda bintang adalah kolom yang harus diisi (<em>*</em>)</p>
		<fieldset>
			<legend>Penambahan Dan Pengubahan Data Pasien</legend>
			<table width="100%" border="0" cellspacing="3" cellspacing="3">
				<tr>
					<td>
						<div>
							<label for="">Kode Pasien<em>*</em></label> 
							<input id="kd_pasien" name="kd_pasien" type="text" value="Otomatis" size="20" class="ac_input" readonly>	
						<div>
							<label for="">Kode Barcode<em>*</em></label> 
							<input id="kd_barcode" name="kd_barcode" type="text" value="" size="20" >
						</div>
						<div>
							<label for="">Nama Pasien<em>*</em></label> 
							<input id="nama" name="nama" type="text" value="" size="30">
						</div>
						<div>
							<label for="">Alamat<em>*</em></label> 
							<textarea name="alamat"></textarea>
						</div>
						<div>
							<label for="">Kota<em>*</em></label> 
							<input id="kota" name="kota" type="text" value="" size="30">
						</div>
						<div>
							<label for="">Telp<em>*</em></label> 
							<input id="telp" name="telp" type="text" value="" size="20">
						</div>
						<div>
							<label for="">No Hp<em>*</em></label> 
							<input id="hp" name="hp" type="text" value="" size="20">
						</div>
						<div>
							<label for="">Email<em>*</em></label> 
							<input id="email" name="email" type="text" value="" size="30">
						</div>
						<div>
							<label for="">Pekerjaan<em>*</em></label> 
							<input id="pekerjaan" name="pekerjaan" type="text" value="" size="30">
						</div>
						<div>
							<label for="">HobyLain<em>*</em></label> 
							<input id="hobylain" name="hobylain" type="text" value="" size="30">
						</div>
						<div>
							<label for="">Alergi Makan<em>*</em></label> 
							<input id="alergi_mkn" name="alergi_mkn" type="text" value="" size="30">
						</div>
						<div>
							<label for="">Alergi Obat<em>*</em></label> 
							<input id="alergi_obat" name="alergi_obat" type="text" value="" size="30">
						</div>
					</td>
					<td>
						<table width="80%" cellpadding="1" cellspacing="1" border="0">
						<tr>
							<td><label for="">Alergi Kelainan<em>*</em></label></td>
							<td><input id="alergi_kel" name="alergi_kel" type="text" value="" size="30"></td>
						</tr><tr>
							<td><label for="">Alergi Diri<em>*</em></label></td>
							<td><input id="alergi_diri" name="alergi_diri" type="text" value="" size="30"></td>
						</tr><tr>
							<td><label for="">Hoby Raga<em>*</em></label></td>
							<td><input id="hobyraga" name="hobyraga" type="text" value="" size="30"></td>
						</tr><tr>
							<td><label for="">Tempat Lahir<em>*</em></label></td>
							<td><input id="temp_lhr" name="temp_lhr" type="text" value="" size="30"></td>
						</tr>
						<tr>
							<td><label for="">Tanggal Lahir<em>*</em></label></td>
							<td><input id="tgl_lhr" name="tgl_lhr" type="text" value="" size="30"></td>
						</tr>
						<tr>
								<td><label for="">Hoby<em>*</em></label></td> 
								<td><input type="checkbox" name="hoby1" value="B" >Membaca</td>
								<td><input type="checkbox" name="hoby2" value="M" >Musik</td>							
						</tr><tr>
								<td></td>
								<td><input type="checkbox" name="hoby3" value="C" >Memasak</td>
								<td><input type="checkbox" name="hoby4" value="O" >Olah Raga</td>
						</tr><tr>	
								<td></td>
								<td><input type="checkbox" name="hoby5" value="J" >Menjahit</td>
								<td><input type="checkbox" name="hoby6" value="N" >Menulis</td>
						</tr><tr>	
								<td></td>
								<td><input type="checkbox" name="hoby7" value="T" >Traveling</td>
								<td><input type="checkbox" name="hoby8" value="L" >Lain - Lain</td>
						</tr>
						<tr>
							<td><label for="">Agama<em>*</em></label> </td>
							<td><select name="agama">
							  <option value="">-Pilih Agama-</option>
							  <option value="1" >Islam</option>
							  <option value="2" >Kristen</option>
							  <option value="3" >Katolik</option>
							  <option value="4" >Budha</option>
							  <option value="5" >Hindu</option>
							  <option value="6" >Konghuchu</option>
							</select></td>					
							<td></td>
						</tr>
						<tr>
								<td><label for="">Jenis kelamin<em>*</em></label></td>
								<td><input type="radio" name="jenis" value="L" >Laki - Laki</td>
								<td><input type="radio" name="jenis" value="P" >Perempuan</td>
						</tr>
						<tr>
							<td><label for="">Group<em>*</em></label> </td>
							<td><select name="groupmember">
							  	<option value="">-Pilih Group-</option>
							  	<option value="K"  >Khusus</option>
							  	<option value="U"  >Umum</option>
							</select></td>					
							<td></td>
						</tr>
						<tr>
							<td><label for="">Referensi Dari</label></td>
							<td><input id="reference" name="reference" type="text" value="" size="30" onBlur="autoType(3)"/></td>
							<td><input id="kode_refer" name="kode_refer" type="hidden" value="" size="30" /></td>
						</tr>	
						</table>
					</td>					
				</tr>
			</table>
		</fieldset>
		
		
		<table align="center">
		<tr>
		<td>
		<input type="button" value="Simpan" onClick="validcek();"/>
		<input type="hidden" name="act" value="add" />
		<input type="hidden" name="next" value="" />
		<input type="hidden" name="uid" value="test_59e95f9955d769.56505250" />
		</td>
		
		<td><input type="button" value="Keluar" onClick="exitcek();"/></td>
		</tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>
