@extends('Layouts.Master') @section('title') VIP | Konversi Satuan Obat @endsection @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Transaksi Konversi Satuan Obat
			<small>Optional description</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Transksi</a>
			</li>
			<li class="active">Konversi Satuan Obat</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header">
						<!-- Start Header -->
						<a href="" onclick="window.open('{{url('/view_konversi/add')}}', 'newwindow'); return false;">
							<button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">ADD</button>
						</a>
					</div>
					<!-- End Header -->

					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th scope="col"> No </th>
									<th scope="col"> No. Konversi </th>
									<th scope="col"> Tanggal </th>
									<th scope="col"> Keterangan </th>
									<th scope="col"> Pegawai </th>
									<th scope="col"> Action </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> 1</td>
									<td>51231</td>
									<td>31-08-2000</td>
									<td> - </td>
									<td>rojikin</td>
									<td>
										<button class="btn btn-success btn-xs">
											<span class="glyphicon glyphicon-ok"></span>
										</button>
										<button class="btn btn-warning btn-xs">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
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
	$(function() {
            $('#example1').DataTable()
        })
</script>
@endsection