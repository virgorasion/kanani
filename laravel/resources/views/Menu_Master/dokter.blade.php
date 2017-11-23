@extends('Layouts.Master') @section('title') VIP | Master Dokter @endsection @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Master Dokter
			<small>Admin</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i>Master</a>
			</li>
			<li class="active">Dokter</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header">
						<!-- Start Header -->
						<button class="btn btn-success" data-toggle="modal" data-target="#Mymodal">ADD</button>
					</div>
					<!-- End Header -->

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
										<button class="btn btn-success btn-xs" id="btnView" data-toggle="modal" data-target="#modalView" onclick="dataView('{{$dokter->kode}}')">
											<span class="glyphicon glyphicon-ok"></span>
										</button>
										<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalEdit" onclick="dataEdit('{{$dokter->kode}}')">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
										<button class="btn btn-danger btn-xs" id="btnDelete" data-toggle="modal" data-target="#modalDelete" onclick="dataDelete('{{$dokter->kode}}')">
											<span class="glyphicon glyphicon-remove"></span>
										</button>
									</td>
								</tr>
								<?php $no++; ?> @endforeach
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<!-- MODAL EDIT Add -->
			<div class="modal fade" id="Mymodal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Tambah Data</h4>
						</div>
						<form action="/view_dokter/store" method="POST">
							{{ csrf_field() }}
							<div class="modal-body">
								<div class="form-group row">
									<label for="no" class="col-sm-4">Nama Dokter : </label>
									<div class="col-sm-8">
										<input type="text" name="add_nama_dokter" class="form-control" id="add_nama_dokter" placeholder="Nama">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Alamat : </label>
									<div class="col-sm-8">
										<input type="text" name="add_alamat" class="form-control" id="add_alamat" placeholder="Kelas">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Kota : </label>
									<div class="col-sm-8">
										<input type="text" name="add_kota" class="form-control" id="add_kota" placeholder="Sekolah">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">No Handphone : </label>
									<div class="col-sm-8">
										<input type="text" name="add_no_hp" class="form-control" id="add_no_hp" placeholder="Sekolah">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Telepon : </label>
									<div class="col-sm-8">
										<input type="text" name="add_telepon" class="form-control" id="add_telepon" placeholder="Sekolah">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Ambil Sidik : </label>
									<div class="col-sm-8">
										<input type="text" name="add_ambil_sidik" class="form-control" id="add_ambil_sidik" placeholder="Sekolah">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
								<button type="submit" class="btn btn-success">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Modal Edit End -->

			<!-- Start Modal View -->
			<div class="modal modal-info fade" id="modalView" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">View Data</h4>
						</div>
						<div class="modal-body">
							<form>
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

			<!-- Start Modal Delete -->
			<div class="modal modal-danger fade" id="modalDelete" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Delete Data</h4>
						</div>
						<div class="modal-body">
							Are you Sure to Delete this Data ?
						</div>
						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" type="button">Batal</button>
							<button type="submit" id="delete" class="btn btn-success">Delete</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal Delete -->

			<!-- Start Modal Edit -->
			<div class="modal fade" id="modalEdit" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Tambah Data</h4>
						</div>
						<form action="/view_dokter/update" method="POST">
							<div class="modal-body">
								{{ csrf_field() }}
								<div class="form-group row">
									<label for="no" class="col-sm-4">Nama Dokter : </label>
									<div class="col-sm-8">
										<input type="text" name="editDokter" class="form-control" id="editDokter" placeholder="Nama">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Alamat : </label>
									<div class="col-sm-8">
										<input type="text" name="editAlamat" class="form-control" id="editAlamat" placeholder="Kelas">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Kota : </label>
									<div class="col-sm-8">
										<input type="text" name="editKota" class="form-control" id="editKota" placeholder="Sekolah">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">No Handphone : </label>
									<div class="col-sm-8">
										<input type="text" name="editHP" class="form-control" id="editHP" placeholder="Sekolah">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Telepon : </label>
									<div class="col-sm-8">
										<input type="text" name="editTelp" class="form-control" id="editTelp" placeholder="Sekolah">
									</div>
								</div>

								<div class="form-group row">
									<label for="no" class="col-sm-4">Ambil Sidik : </label>
									<div class="col-sm-8">
										<input type="text" name="editSidik" class="form-control" id="editSidik" placeholder="Sekolah">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="hidden" name="_method" value="PUT"/>
								<input type="hidden" name="editID" id="editID" value=""/>
								<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
								<button type="submit" class="btn btn-success">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
		<!-- /.row -->
</div>
<!-- /.content -->
</section>
<!-- /.content-wrapper -->
@endsection @section('script')
<script>
	$(function () {
    $('#example1').DataTable({})

  })

  function dataDelete(id){
	  $('#delete').click(function(){
		  $.ajax({
			  url: "{{url('/view_dokter/delete')}}/"+id,
			  success:function(result){
				  location.reload();
			  }
		  })
	  })
  }

  function dataView(id){
	  $.ajax({
		  url: "{{url('/view_dokter/view')}}/"+id,
		  success:function(data){
			  $('#viewDokter').text(data[0].nama);
			  $('#viewAlamat').text(data[0].alamat);
			  $('#viewKota').text(data[0].kota);
			  $('#viewHP').text(data[0].hp);
			  $('#viewTelp').text(data[0].telp);
			  $('#viewSidik').text(data[0].ambilsidik);
		  }
	  })
  }

  function dataEdit(id){
	  $.ajax({
		  url: "{{url('/view_dokter/view')}}/"+id,
		  success:function(data){
			  console.log(data+'ada');
			  $('#editID').val(id);
			  $('#editDokter').val(data[0].nama);
			  $('#editAlamat').val(data[0].alamat);
			  $('#editKota').val(data[0].kota);
			  $('#editHP').val(data[0].hp);
			  $('#editTelp').val(data[0].telp);
			  $('#editSidik').val(data[0].ambilsidik);
		  }
	  })
  }

</script>
@endsection