@extends('Layouts.Master') @section('title') VIP | Penjualan Obat @endsection @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Form Penjualan Obat
			<small>Admin</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i>Form</a>
			</li>
			<li class="active">Penjualan Obat</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header">
						<!-- Start Header -->
						<a href="" onclick="window.open('{{url('/view_jual_obat/add')}}', 'newwindow'); return false;">
							<button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">ADD</button>
						</a>
						<div class="form-inline">
							<label class="col-md-1" for="">Dari :</label>
							<div class="col-md-4">
								<input type="text" id="T1" name="T1" value="">
							</div>
							<label class="col-md-1" for="">Sampai :</label>
							<div class="col-md-3">
								<input type="text" id="T2" name="T2" value="">
							</div>
							<button type="button" class="btn btn-success">Search</button>
						</div>

					</div>
					<!-- End Header -->

					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th> No </th>
									<th> No. Pembelian </th>
									<th> Tanggal </th>
									<th> Nama Supplier </th>
									<th> Pegawai </th>
									<th> Total </th>
									<th> Action </th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>M Nur Fauzan W</td>
									<td>X-RPL 1</td>
									<td>SMKN 2 Surabaya</td>
									<td>Example</td>
									<td>Example</td>
									<td>
										<button class="btn btn-danger btn-xs" id="btnDelete">
											<span class="glyphicon glyphicon-remove"></span>
										</button>
									</td>

								</tr>

								<tr>
									<td>2</td>
									<td>Nathanael Ifandaeru</td>
									<td>X-RPL 1</td>
									<td>SMKN 2 Surabaya</td>
									<td>Example</td>
									<td>Example</td>
									<td>

										<button class="btn btn-danger btn-xs">
											<span class="glyphicon glyphicon-remove"></span>
										</button>
									</td>

								</tr>

								<tr>
									<td>3</td>
									<td>Inul Yakin</td>
									<td>X-RPL 1</td>
									<td>SMKN 2 Surabaya</td>
									<td>Example</td>
									<td>Example</td>
									<td>

										<button class="btn btn-danger btn-xs">
											<span class="glyphicon glyphicon-remove"></span>
										</button>
									</td>

								</tr>

								<tr>
									<td>4</td>
									<td>Yoga Bersama Anjing</td>
									<td>X-RPL 1</td>
									<td>SMKN 2 Surabaya</td>
									<td>Example</td>
									<td>Example</td>
									<td>

										<button class="btn btn-danger btn-xs">
											<span class="glyphicon glyphicon-remove"></span>
										</button>
									</td>

								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->

		</div>

</div>
<!-- /.row -->

<!-- /.content -->

<!-- /.content-wrapper -->
@endsection @section('script')
<script>
	$(function () {
    $('#example1').DataTable({});

    $('#T1').datepicker();
    $('#T2').datepicker();
  });

</script>
@endsection