@extends('Layouts.Master')

@section('title')
	VIP | Rekam Medis
@endsection

@section('content')

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Rekam Medis
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Form</a></li>
        <li class="active">Medis</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header"> <!-- Start Header -->
              <a href=""  onclick="window.open('{{url('view_rekam_medis/add')}}', 'newwindow',); return false;">
								<button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">ADD</button>
							</a>
              <button class="btn btn-success">Search</button>
              <br><br>
              <label>
					Mulai Tanggal
				</label>
				<input type="text" name="datepicker" id="datepicker">
				<label>
					Sampai Tanggal
				</label>
				<input type="text" name="datepicker1" id="datepicker1">
				<br><br>
	            </div>	<!-- End Header -->
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-scrollable">
              <thead>
                <tr>
					<th>No.</th>
					<th>Nama Pasien</th>
					<th>Diagnosis</th>
					<th>Keluhan</th>
					<th>Catatan</th>
					<th>Resep</th>
					<th>Action</th>
				</tr>
			    </thead>
			    <tbody>
				<tr>
					<td>1</td>
					<td>X-RPL 1</td>
					<td>M Nur Fauzan W</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>
						<button class="btn btn-success btn-xs" id="btnView" data-toggle="modal" data-target="#modalView"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEdit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" id="btnDelete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>2</td>
					<td>X-RPL 1</td>
					<td>Nathanael Ifandaeru</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>
						<button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>3</td>
					<td>X-RPL 1</td>
					<td>Inul Yakin</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>
						<button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>4</td>
					<td>X-RPL 1</td>
					<td>Yoga Bersama Anjing</td>
					<td>SMKN 2 Surabaya</td>
					<td>Example</td>
					<td>Example</td>
					<td>
						<button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
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

@endsection
@section('script')
<script>
$ (function () 
{
	$("#datepicker").datepicker();
});

$ (function () 
{
	$("#datepicker1").datepicker();
});

$ (function () 
{
	$('#example1').DataTable({})
})
</script>
@endsection