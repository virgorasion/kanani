<?php include 'template/head.php' ?>

<div class="container">
			<h4 class="title">Laporan <span style="color:#9FCB20">Penjualan Detail</span></h4>

		<div class="box"> <!-- Start box -->
			<div class="box-header"> <!-- Start Header -->
			<button class="btn btn-success"  onclick="window.open('Laporan_penjualan_detail_print.php', 'newwindow', 'width=300,height=250'); return false;">Print Laporan Penjualan Detail</button>
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
            </div><br>
			<div class="form-inline"> 
			<div class="pull-left col-md-4">
				<div class="form-group ">
				<select class="form-control">
				<option disabled>All Column</option>
                <option>No</option>
				<option>No Penjualan</option>
				<option>Pasien</option>
				<option>Tanggal</option>
				<option>Dokter</option>
                <option>Obat</option>
                <option>Qty</option>
                <option>Harga</option>
                <option>Diskon</option>
                <option>Total</option>
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
				<td><b>No Penjualan</td></b>
				<td><b>Pasien</td></b>
				<td><b>Tanggal</td></b>
				<td><b>Dokter</td></b>
                <td><b>Obat</td></b>
                <td><b>Qty</td></b>
                <td><b>Harga</td></b>
                <td><b>Diskon</td></b>
                <td><b>Total</td></b>
				</tr>
				<tr>
                <td>1</td>
                <td>0001</td>
                <td>Fauzan</td>
                <td>21-10-2017</td>
                <td>Ainul</td>
                <td>Ganja</td>
                <td>20</td>
                <td>50000</td>
                <td>0%</td>
                <td>50000</td>
				</tr>

				<tr>
					<td align="right" colspan="8">
                    <td><b>Grand Total : <b></td>
                    <td><b>0.00</b></td>
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