@extends('Layouts.Master')

@section('title')
	VIP | Master Dokter
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Dokter
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Master</a></li>
        <li class="active">Dokter</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header"> <!-- Start Header -->
              <button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">ADD</button>
            </div>	<!-- End Header -->
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
			  <thead>
                <tr>
					<th>No.</th>
					<th>Nama Dokter</th>
					<th>Alamat</th>
					<th>Kota</th>
					<th>No Handphone</th>
					<th>Telephone</th>
					<th>Ambil Sidik</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				@foreach($dokters as $dokter)
				<tr>
					<td>{{$no}}</td>
					<td>{{ $dokter->nama }}</td>
					<td>{{ $dokter->alamat }}</td>
					<td>{{ $dokter->kota }}</td>
					<td>{{ $dokter->hp }}</td>
					<td>{{ $dokter->telp }}</td>
					<td>{{ $dokter->ambilsidik }}</td>
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
        <!-- MODAL EDIT START -->
	<div class="modal fade" id="Mymodal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Tambah Data</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group row">
							<label for="no" class="col-sm-4">No : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="No.">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Nama Dokter : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Nama">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Alamat : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Kelas">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kota : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Sekolah">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">No Handphone : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Sekolah">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Telepon : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Sekolah">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Ambil Sidik : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Sekolah">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
					<button type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>
</div><!-- Modal Edit End -->

<!-- Start Modal View -->
	<div class="modal modal-info fade" id="modalView" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">View Data</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group row">
							<label for="no" class="col-sm-4">No : </label>
							<div class="col-sm-8">
							<div id="viewNo"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Nama Dokter : </label>
							<div class="col-sm-8">
							<div id="viewDokter"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Alamat : </label>
							<div class="col-sm-8">
							<div id="viewAlamat"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kota : </label>
							<div class="col-sm-8">
							<div id="viewKota"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">No Handphone : </label>
							<div class="col-sm-8">
							<div id="viewHP"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Telepon : </label>
							<div class="col-sm-8">
							<div id="viewTelp"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Ambil Sidik : </label>
							<div class="col-sm-8">
							<div id="viewSidik"></div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
					<button type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>
<!-- EDN MODAL VIEW -->

<!-- Start Modal Edit -->
<div class="modal fade" id="modalEdit" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Tambah Data</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group row">
							<label for="no" class="col-sm-4">No : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="No.">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Nama Dokter : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="nama" placeholder="Nama">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Alamat : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="alamat" placeholder="Kelas">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kota : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="kota" placeholder="Sekolah">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">No Handphone : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="nope" placeholder="Sekolah">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Telepon : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="telp" placeholder="Sekolah">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Ambil Sidik : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="sidik" placeholder="Sekolah">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
					<button type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>
	
      </div>
      <!-- /.row -->

    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection

@section('script')
    <script>
  $(function () {
    $('#example1').DataTable({})

  })
</script>
@endsection