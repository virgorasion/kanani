<?php include 'template/head.php' ?>

<div class="container">
			<h4 class="title">Laporan <span style="color:#9FCB20">Pembelian</span></h4>

		<div class="box"> <!-- Start box -->
			<div class="box-header"> <!-- Start Header -->
			<button class="btn btn-success" onclick="window.open('Laporan_pembelian_print.php', 'newwindow', 'width=300,height=250'); return false;">Print Laporan Pembelian</button>
			</div>	<!-- End Header -->
			<br>
			<div class="form-inline"> 
			<div class="pull-left col-md-4">
				<div class="form-group ">
				<select class="form-control">
				<option disabled>All Column</option>
				<option>No</option>
				<option>No Pembelian</option>
				<option>Keterangan</option>
				<option>Supplier</option>
				<option>Tanggal</option>
				<option>User</option>
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
					<td><b>No.</b></td>
                    <td><b>No Pembelian</b></td>
					<td><b>Keterangan</b></td>
					<td><b>Supplier</b></td>
					<td><b>Tanggal</b></td>
					<td><b>User</b></td>
                    <td><b>Total</b></td>
				</tr>
				<tr>
					<td>1</td>
                    <td>0001</td>
					<td>Papulex hydrating cr 50 gr</td>
					<td>Smekda</td>
					<td>20-10-2017</td>
                    <td>Fauzan</td>
                    <td>1000.000</td>
				</tr>

				<tr>
					<td>2</td>
                    <td>0002</td>
					<td>Nizoral cr 5gr</td>
					<td>Smekda</td>
					<td>20-10-2017</td>
                    <td>Ifanda</td>
                    <td>200.000</td>
				</tr>

				<tr>
					<td>3</td>
                    <td>0003</td>
					<td>Co Amociclav</td>
					<td>Smekda</td>
					<td>20-10-2017</td>
                    <td>Ainul</td>
                    <td>5000.000</td>
				</tr>

				<tr>
					<td>4</td>
                    <td>0004</td>
					<td>ISOPRINOSINE</td>
					<td>Smekda</td>
					<td>20-10-2017</td>
                    <td>Yoga</td>
                    <td>1500.000</td>
				</tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>Grand Total</b></td>
                    <td><b>Rp7500.000</b></td>
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
