@extends('Layouts.Master') @section('title') VIP | Master Jenis Rawat @endsection @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Master Jenis Rawat
			<small>Admin</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Master</a>
			</li>
			<li class="active">Jenis Rawat</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">

		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAdd">ADD</button>
				</div>
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									<b>No.</b>
								</th>
								<th>
									<b>Nama Rawat</b>
								</th>
								<th>
									<b>Kode Preiksa</b>
								</th>
								<th>
									<b>Biaya</b>
								</th>
								<th>
									<b>Insentif Dokter</b>
								</th>
								<th>Insentif Perawat</th>
								<th>Insetif Beautician</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($values as $value)
							<tr>
								<td>{{ $no }}</td>
								<td style="max-width:200px;">{{$value->nama_rawat}}</td>
								<td>{{$value->periksa}}</td>
								<td>{{number_format($value->biaya,0,',','.')}}</td>
								<td>{{number_format($value->ins_dokter,0,',','.')}} </td>
								<td>{{number_format($value->ins_perawat,0,',','.')}}</td>
								<td>{{number_format($value->ins_beautician,0,',','.')}}</td>
								<td>
									<button class="btn btn-success btn-xs" title="View" data-toggle="modal" onclick="viewData('{{$value->kd_rawat}}')" data-target="#Mymodal">
										<span class="glyphicon glyphicon-ok"></span>
									</button>
									<button class="btn btn-warning btn-xs" title="Edit" data-toggle="modal" onclick="editData('{{$value->kd_rawat}}')" data-target="#modalEdit">
										<span class="glyphicon glyphicon-pencil"></span>
									</button>
									<button class="btn btn-danger btn-xs" title="Delete" data-toggle="modal" onclick="deleteData('{{$value->kd_rawat}}')" data-target="#modalDelete">
										<span class="glyphicon glyphicon-remove"></span>
									</button>
								</td>
							</tr>
							<?php $no++; ?> @endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Start Modal Add -->
		<div class="modal fade" id="Mymodal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Tambah Data</h4>
					</div>
					<form method="POST" action="/view_jenisrawat/post">
						<div class="modal-body">
							{{ csrf_field() }}
							<div class="form-group row">
								<label for="no" class="col-sm-3">Kode Jenis : </label>
								<div class="col-sm-8">
									<input type="text" name="add_kode_jenis" class="form-control" id="" placeholder="No.">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Nama Rawat : </label>
								<div class="col-sm-8">
									<input type="text" name="add_nama_rawat" class="form-control" id="" placeholder="Nama" value="">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Kode Periksa : </label>
								<div class="col-sm-8">
									<select name="addKdPeriksa" class="form-control">
										@foreach($selects as $item)
										<option value="{{$item->kd_periksa}}">{{$item->nama_periksa}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Status : </label>
								<div class="col-sm-8">
									<select name="addStatus" class="form-control">
										<option value="T">Tdak Aktif</option>
										<option value="A">Aktif</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Status Dokter : </label>
								<div class="col-sm-8">
									<select name="addStatusDokter" class="form-control">
										<option value="1">Dengan Dokter</option>
										<option value="0">Tanpa Dokter</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Biaya : </label>
								<div class="col-sm-8">
									<input type="text" name="add_biaya" class="form-control" id="" placeholder="Nama">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Dokter : </label>
								<div class="col-sm-8">
									<input type="text" name="add_ins_dokter" class="form-control" id="" placeholder="Nama">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Perawat : </label>
								<div class="col-sm-8">
									<input type="text" name="add_ins_perawat" class="form-control" id="" placeholder="Nama">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Beautician : </label>
								<div class="col-sm-8">
									<input type="text" name="add_ins_beautician" class="form-control" id="" placeholder="Nama">
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
		<!-- End Modal Add -->

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

		<!-- Start Modal View-->
		<div class="modal fade" id="modalView" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">View Data</h4>
					</div>
					<div class="modal-body">
						<form id="ModalView">
							<div class="form-group row">
								<label for="no" class="col-sm-3">Kode Rawat : </label>
								<div class="col-sm-8">
									<div id="view_kode_rawat"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Nama Rawat : </label>
								<div class="col-sm-8">
									<div id="view_nama_rawat"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Jenis Periksa : </label>
								<div class="col-sm-8">
									<div id="view_jenis_periksa"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Status : </label>
								<div class="col-sm-8">
									<div id="view_status"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Status Dokter : </label>
								<div class="col-sm-8">
									<div id="view_status_dokter"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Biaya : </label>
								<div class="col-sm-8">
									<div id="view_biaya"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Dokter : </label>
								<div class="col-sm-8">
									<div id="view_ins_dokter"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Perawat : </label>
								<div class="col-sm-8">
									<div id="view_ins_perawat"></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Beautician : </label>
								<div class="col-sm-8">
									<div id="view_ins_beautician"></div>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal View -->

		<!-- Start Modal Edit -->
		<div class="modal fade" id="modalEdit" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Edit Data</h4>
					</div>
					<form method="post" action="/view_jenisrawat/update">
						<div class="modal-body">
							<div class="form-group row">
								<label for="no" class="col-sm-3">Kode Jenis : </label>
								<div class="col-sm-8">
									<input type="text" name="kode_jenis" class="form-control" id="kode_jenis" placeholder="No.">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Nama Rawat : </label>
								<div class="col-sm-8">
									<input type="text" name="nama_rawat" class="form-control" id="nama_rawat" placeholder="Nama" value="">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Jenis Periksa : </label>
								<div class="col-sm-8">
									<select class="form-control" name="Jenis_periksa" id="edtJenis">
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Status : </label>
								<div class="col-sm-8">
									<select class="form-control" name="Status" id="edtStatus">
										<option value="A">Aktif</option>
										<option value="T">Tidak Aktif</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Status Dokter : </label>
								<div class="col-sm-8">
									<select class="form-control" name="Status_dokter" id="edtStatusDok">
										<option value="1">Dengan Dokter</option>
										<option value="0">Tanpa Dokter</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Biaya : </label>
								<div class="col-sm-8">
									<input type="text" name="biaya" class="form-control" id="biaya" placeholder="Nama">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Dokter : </label>
								<div class="col-sm-8">
									<input type="text" name="ins_dokter" class="form-control" id="ins_dokter" placeholder="Nama">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Perawat : </label>
								<div class="col-sm-8">
									<input type="text" name="ins_perawat" class="form-control" id="ins_perawat" placeholder="Nama">
								</div>
							</div>

							<div class="form-group row">
								<label for="no" class="col-sm-3">Insentif Beautician : </label>
								<div class="col-sm-8">
									<input type="text" name="ins_beautician" class="form-control" id="ins_beautician" placeholder="Nama">
								</div>
							</div>
						</div>
						<div class="modal-footer">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="PUT">
							<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
							<button type="submit" class="btn btn-success" id="edtSave">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection @section('script')
<script>
	$(function () {
    $('#example1').DataTable({})

  })

	function reformatNumber(val) {
            var result = "";
     
            $.ajax({
                url: "{{url('/number_format')}}",
                data: {act : "titikKoma",id : val},
                async: false,
                success: function (res) {
                   // console.log(res);
                    result = res;
                },
                error: function (res) {
                    // console.log(res);
                }
            });
     
            return result;
        }

  function viewData(id){
	  var urls = "{{ url('/view_jenisrawat/') }}/"+id;
	  $.ajax({url : urls,
	  success:function(result) {
		  if(result[0].status == 'A') {
			  var status = 'Aktif';
		  }else{
			  var status = 'Tidak Aktif';
		  }

		  if(result[0].status_dokter == 1){
			  var dokter = "Dengan Dokter";
		  }else{
			  var dokter = "Tanpa Dokter";
		  }
		   
		  $('#view_kode_rawat').text(result[0].kd_rawat);
		  $('#view_nama_rawat').text(result[0].nama_rawat);
		  $('#view_jenis_periksa').text(result[0].nama_periksa);
		  $('#view_status').text(status);
		  $('#view_status_dokter').text(dokter);
		  $('#view_biaya').text(result[0].biaya.toLocaleString(['ban', 'id']));
		  $('#view_ins_dokter').text(result[0].ins_dokter.toLocaleString(['ban', 'id']));
		  $('#view_ins_perawat').text(result[0].ins_perawat.toLocaleString(['ban', 'id']));
		  $('#view_ins_beautician').text(result[0].ins_beautician.toLocaleString(['ban', 'id']));
	  }
	  });
  }

  function editData(id) {
	  var urls = "{{url('/view_jenisrawat')}}/"+id;
	  $.ajax({url : urls,
	  success:function(result) {
		  console.log(result);
		  $('#kode_jenis').val(result[0].kd_rawat);
		  $('#nama_rawat').val(result[0].nama_rawat);
		  $('#biaya').val(result[0].biaya);
		  $('#edtJenis').val(result[0].kd_periksa);
		  $('#edtStatus').val(result[0].status);
		  $('#edtStatusDok').val(result[0].status_dokter);
		  $('#ins_dokter').val(result[0].ins_dokter);
		  $('#ins_perawat').val(result[0].ins_perawat);
		  $('#ins_beautician').val(result[0].ins_beautician);
	  }
	  });	
  }

  function deleteData(id){
	  $('#delete').click(function(){
		  $.ajax({
			  url: "{{url('/view_jenisrawat/delete')}}/"+id,
			  success:function(result){
				 location.reload();
				 //console.log('berhasil');
			  }
		  })
	  })
  }

  function selPeriksa() {
	  var urls = "{{url('/data/selperiksa')}}";
		$.ajax({
			url : urls,
			success:function(data) {
				var html = '';
				$.each(data ,function(i){
				html += '<option value="'+data[i].kd_periksa+'">'+data[i].nama_periksa+'</option>';

				})				
			$('#edtJenis').html(html);
			}
		});
  }

	$(document).ready(function(){

		selPeriksa();
		
	});

</script>
@endsection