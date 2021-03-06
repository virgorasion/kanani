@extends('Layouts.Master')

@section('title')
	VIP | Facial Pasien
@endsection

@section('content')

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Facial Pasien
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Form</a></li>
        <li class="active">Facial</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header"> <!-- Start Header -->
<<<<<<< HEAD
              <a href=""  onclick="window.open('{{url('my_facial/add')}}', 'newwindow', 'width=300,height=250'); return false;""><button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">ADD</button></a>
=======
              <a href=""  onclick="window.open('{{url('view_daftar_pasien/add')}}', 'newwindow',); return false;">
								<button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">ADD</button>
							</a>
>>>>>>> c92775a65473a039af9dafbdceba74c0a4197c98
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
					<th>No Facial</th>
					<th>Kode Pasien</th>
					<th>Nama Pasien</th>
					<th>Tanggal</th>
					<th>Perawat</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($values as $value)
				<tr>
					<td>{{ $no }}</td>
					<td>{{ $value->no_facial }}</td>
					<td>{{ $value->kd_pasien }}</td>
					<td>{{ $value->nama }}</td>
					<td>{{ $value->tgl_facial }}</td>
					<td>{{ $value->nama_pegawai }}</td>
					<td>
						<button class="btn btn-success btn-xs" id="btnView" data-toggle="modal" data-target="#modalView"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEdit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" id="btnDelete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>
			<?php $no++; ?>
			@endforeach
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
	$ (function() {
		$("#datepicker").datepicker();
	});

	$ (function() {
		$("#datepicker1").datepicker();
	});

	$ (function () 
	{
		$('#example1').DataTable({})
	})
</script>
@endsection