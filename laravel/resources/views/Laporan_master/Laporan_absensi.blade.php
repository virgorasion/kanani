<?php include 'template/head.php' ?>

<div class="container">
			<h4 class="title">Laporan <span style="color:#9FCB20">Absensi</span></h4>

		<div class="box"> <!-- Start box -->
			<div class="box-header"> <!-- Start Header -->
			<button class="btn btn-success" onclick="window.open('Laporan_absensi_print.php', 'newwindow', 'width=300,height=250'); return false;">Print Laporan Absensi</button>
			</div>	<!-- End Header -->
			<br>
			<div>
				<label for="dokter" style="margin-left:1%;">Pegawai</label> 
				<input id="pegawai" name="pegawai" size="20" type="text" class="ac_input" onblur="autoType(5);" value="" autocomplete="off">
				<label2 for="kd_dokter" style="margin-left:0.5%;"><b>Kode Pasien</b></label> 
				<input id="kode_pegawai" name="kode_pegawai" type="text" size="20" maxlength="50" readonly="" value="">
				<button type="submit" class="btn btn-success" style="margin-left:0.5%;">Cari</button>
				<button type="submit" class="btn btn-danger" style="margin-left:0.5%;">Hapus</button>
			</div><br>
			<div class="form-inline"> 
				<div class="pull-left col-md-4">
					<div class="form-group ">
					<select class="form-control">
					<option disabled>All Column</option>
					<option>No</option>
					<option>Kode Karyawan</option>
					<option>Nama Karyawan</option>
					<option>Tanggal</option>
					<option>Jam Masuk</option>
					<option>Jam Keluar</option>
					<option>Jumlah Jam</option>
				</select>
					</div>
				</div>

					<form class="pull-right col-sm-3 col-xs-5"> 
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" name="" placeholder="Search">
								<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
							</div>
						</div>
					</form>
				
			</div>

			<div class="clearfix"></div>
			<div class="box-body">
			<div class="table-responsive">
			<table class="table table-hover table-striped text-center table-border" id="datatable">
				<tr>
					<td><b>No.</b></td>
                    <td><b>Kode Karyawan</b></td>
					<td><b>Nama Karyawan</b></td>
					<td><b>Tanggal</b></td>
					<td><b>Jam Masuk</b></td>
					<td><b>Jam Keluar</b></td>
                    <td><b>Jumlah Jam</b></td>
				</tr>
				<tr>
					<td>1</td>
                    <td>0001</td>
					<td>M Nur Fauzan W</td>
					<td>20-10-2017</td>
					<td>10.00</td>
                    <td>17.00</td>
                    <td>7 Jam</td>
				</tr>

				<tr>
					<td>2</td>
                    <td>0002</td>
					<td>Nathanael Ifandaeru Kyun</td>
					<td>20-10-2017</td>
					<td>17.00</td>
                    <td>00.00</td>
                    <td>7 Jam</td>
				</tr>

				<tr>
					<td>3</td>
                    <td>0003</td>
					<td>Inul Mukul Yakin</td>
					<td>19-10-2017</td>
					<td>00.00</td>
                    <td>07.00</td>
                    <td>7 Jam</td>
				</tr>

				<tr>
					<td>4</td>
                    <td>0004</td>
					<td>Yoga Bersama Anjing</td>
					<td>20-10-2017</td>
					<td>07.00</td>
                    <td>14.00</td>
                    <td>7 Jam</td>
				</tr>
			</table>
		</div>

		<nav aria-label="..." class="pull-right">
			<ul class="pagination pagination-md">
				<li class="page-item disabled">
					<a href="#" class="page-link" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a href="#" class="page-link">1</a></li>
				<li class="page-item"><a href="#" class="page-link">2</a></li>
				<li class="page-item"><a href="#" class="page-link">3</a></li>
				<li class="page-item">
					<a href="#" class="page-link">Next</a>
				</li>
			</ul>
		</nav>
	</div>
</div> <!-- End Box -->



	

					</form>
				</div>
				<div class="modal-footer">
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
	include 'Template/footer.php';
	include 'Template/end.php';
?>