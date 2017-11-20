@extends('Layouts.Master') @section('title') VIP | Stock Opname @endsection @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Transaksi Stock Opname
			<small>Optional description</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Transaksi</a>
			</li>
			<li class="active">Stock Opname</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header">
						<!-- Start Header -->
						<a href="" onclick="window.open('{{url('/view_stock_opname/add')}}', 'newwindow'); return false;">
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
							<thead style="background: #fff">
								<tr>
									<th> No </th>
									<th> No. Stock </th>
									<th> Tanggal </th>
									<th> Keterangan </th>
									<th> Pegawai </th>
									<th> Action </th>
							</thead>
							<tbody>
								<tr>
									<td> 1</td>
									<td> 0812412312</td>
									<td> 31-9-1234</td>
									<td> qwerty</td>
									<td> Ikrenet </td>
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
	$(function() {
            $('#example1').DataTable();
        })
</script>
@endsection