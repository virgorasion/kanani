<?php include 'template/head.php' ?>

<div class="container">
			<h4 class="title">Laporan <span style="color:#9FCB20">Insetif</span></h4>

		<div class="box"> <!-- Start box -->
			<div class="box-header"> <!-- Start Header -->
			<button class="btn btn-success"  onclick="window.open('Laporan_insentif_print.php', 'newwindow', 'width=300,height=250'); return false;">Print Laporan Insentif</button>
			<button type="submit" name="Find" class="btn btn-success" style="margin-left:0.5%;">Cari</button>
			<button type="submit" name="Find" class="btn btn-danger" style="margin-left:0.5%;">Hapus</button>
			<br><br>
			</div>	<!-- End Header -->
            <div class="col-sm-3">
            <label for="dokter">Dokter</label>
            <input style="margin-left:10.6%;" id="dokter" name="dokter" size="20" type="text" class="ac_input">
            </div>
            <div "col-sm-3 col-xs-5">
            <label for="kode_dokter">Kode Dokter</label>
            <input style="margin-left:2.4%;" id="kode_dokter" name="kode_dokter" type="text" size="20">
            </div>
            <div class="pull-left col-sm-3">
            <label for="Perawat">Perawat</label>
            <input style="margin-left:6.7%;" id="Perawat" name="perawat" size="20" type="text" class="ac_input">
            </div>
            <div "pull-right col-sm-3 col-xs-5">
            <label for="kode_Perawat">Kode Perawat</label>
            <input style="margin-left:1.5%;" id="kode_Perawat" name="kode_perawat" type="text" size="20">
            </div>
            <div class="col-sm-3">
            <label for="Beautician">Beautician</label>
            <input id="Beautician" name="Beautician" size="20" type="text" class="ac_input">
            </div>
            <div "col-sm-3 col-xs-5">
            <label for="kode_Beautician">Kode Beautician</label>
            <input id="kode_Beautician" name="kode_Beautician" type="text" size="20">
            </div>
            <div class="pull-left col-sm-3">
            <label for="pasien">Pasien</label>
            <input style="margin-left:10%;" id="pasien" name="pasien" size="20" type="text" class="ac_input">
            </div>
            <div "pull-right col-sm-3 col-xs-5">
            <label for="kode_pegawai">Kode Pasien</label>
            <input style="margin-left:2.3%;" id="kode_pasien" name="kode_pasien" type="text" size="20">
            </div>
            <div class="pull-left col-sm-3">
            <label for="pegawai">Pegawai</label>
            <input style="margin-left:6%;" id="pegawai" name="pegawai" size="20" type="text" class="ac_input">
            </div>
            <div "pull-right col-sm-3 col-xs-5">
            <label for="kode_pegawai">Kode Pegawai</label>
            <input style="margin-left:1.3%;" id="kode_pegawai" name="kode_pegawai" type="text" size="20">
            </div><br>
			<div class="form-inline"> 
			<div class="pull-left col-md-4">
				<div class="form-group ">
				<select class="form-control">
				<option disabled>All Column</option>
				<option>No</option>
				<option>No Perawatan</option>
				<option>Tanggal</option>
				<option>Nama Pasien</option>
				<option>Jenis Rawat</option>
                <option>Dokter</option>
				<option>Insentif Dokter</option>
                <option>Perawat</option>
                <option>Insentif Perawat</option>
                <option>Beautician</option>
                <option>Insentif_Beautician</option>
				<option>Marketing</option>
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
                <td><b>No</td></b>
				<td><b>No Perawatan</td></b>
				<td><b>Tanggal</td></b>
				<td><b>Nama Pasien</td></b>
				<td><b>Jenis Rawat</td></b>
                <td><b>Dokter</td></b>
				<td><b>Insentif Dokter</td></b>
                <td><b>Perawat</td></b>
                <td><b>Insentif Perawat</td></b>
                <td><b>Beautician</td></b>
                <td><b>Insentif Beautician</td></b>
				<td><b>Marketing</td></b>
				</tr>
				<tr>
                <td>1</td>
                <td>0001</td>
                <td>21-10-2017</td>
                <td>Fauzan</td>
                <td>Class A</td>
                <td>Ainul</td>
                <td>10</td>
                <td>Yoga</td>
                <td>5</td>
                <td>Riyan</td>
                <td>15</td>
                <td>5000</td>
				</tr>

				<tr>
					<td colspan="5"></td>
					<td><b>Total</b></td>
                    <td><b>0.00</b></td>
                    <td><b>Total</b></td>
                    <td><b>0.00</b></td>
                    <td><b>Total</b></td>
                    <td><b>0.00</b></td>
                    <td><b></b></td>
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