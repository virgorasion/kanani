<?php include 'template/head.php' ?>

<div class="container">
			<h4 class="title">Laporan <span style="color:#9FCB20">Invetori</span></h4>

		<div class="box"> <!-- Start box -->
			<div class="box-header"> <!-- Start Header -->
			<button class="btn btn-success"  onclick="window.open('Laporan_invetori_print.php', 'newwindow', 'width=300,height=250'); return false;">Print Laporan Inveroti</button>
			</div>	<!-- End Header -->
			<br>
			<div class="form-inline"> 
			<div class="pull-left col-md-4">
				<div class="form-group ">
				<select class="form-control">
				<option disabled>All Column</option>
				<option>No</option>
				<option>Kode Obat</option>
				<option>Nama Obat</option>
				<option>Harga</option>
				<option>Minimal Stock</option>
				<option>Jumlah Stock</option>
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
                    <td><b>Kode Obat</b></td>
					<td><b>Nama Obat</b></td>
					<td><b>Harga</b></td>
					<td><b>Minimal Stock</b></td>
					<td><b>Jumlah Stock</b></td>
				</tr>
				<tr>
					<td>1</td>
                    <td>0001</td>
					<td>Papulex hydrating cr 50 gr</td>
					<td>250.000</td>
					<td>0</td>
                    <td>10</td>
				</tr>

				<tr>
					<td>2</td>
                    <td>0002</td>
					<td>Nizoral cr 5gr</td>
					<td>200.000</td>
					<td>0</td>
                    <td>15</td>
				</tr>

				<tr>
					<td>3</td>
                    <td>0003</td>
					<td>Co Amociclav</td>
					<td>300.000</td>
					<td>0</td>
                    <td>7</td>
				</tr>

				<tr>
					<td>4</td>
                    <td>0004</td>
					<td>ISOPRINOSINE</td>
					<td>236.000</td>
					<td>0</td>
                    <td>14</td>
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