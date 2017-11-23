@extends('Layouts.Master')

@section('title')
	VIP | Master Jenis Rawat
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Jenis Rawat
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master</a></li>
        <li class="active">Jenis Rawat</li>
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
					<th><b>No.</b></th>
					<th><b>Nama Rawat</b></th>
					<th><b>Kode Preiksa</b></th>
					<th><b>Biaya</b></th>
					<th><b>Insentif Dokter</b></th>
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
						<button class="btn btn-success btn-xs" title="View" data-toggle="modal" onclick="viewData('{{$value->kd_rawat}}')" data-target="#modalView"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit" data-toggle="modal" data-target="#modalEdit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete" data-toggle="modal"><span class="glyphicon glyphicon-remove"></span></button>
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
          <!-- Start Modal Add -->
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
							<label for="no" class="col-sm-4">Nama Riwayat : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Nama">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kode Periksa : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Kode">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Biaya : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Biaya">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Dokter : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Insentif Dokter">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Perawat : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Insentif Perawat">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Beautician : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Insentif Beautician">
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
</div> <!-- End Modal Add -->

<!-- Start Modal View-->
<div class="modal fade" id="modalView" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
					<button type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>
</div> <!-- End Modal View -->

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
							<label for="no" class="col-sm-4">Nama Riwayat : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Nama">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kode Periksa : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Kode">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Biaya : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Biaya">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Dokter : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Insentif Dokter">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Perawat : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Insentif Perawat">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Beautician : </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="Insentif Beautician">
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
        <!-- /.col -->

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

	function reformatNumber(val) {
            var result = "";
     
            $.ajax({
                url: "{{url('/number_format')}}",
                data: {act : "titikKoma",id : val},
                async: false,
                success: function (res) {
                     console.log(res);
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

		  console.log(result);
		  $('#view_kode_rawat').text(result[0].kd_rawat);
		  $('#view_nama_rawat').text(result[0].nama_rawat);
		  $('#view_jenis_periksa').text(result[0].nama_periksa);
		  $('#view_status').text(status);
		  $('#view_status_dokter').text(result[0].status_dokter);
		  $('#view_biaya').text(reformatNumber(result[0].biaya));
		  $('#view_ins_dokter').text(reformatNumber(result[0].ins_dokter));
		  $('#view_ins_perawat').text(reformatNumber(result[0].ins_perawat));
		  $('#view_ins_beutician').text(reformatNumber(result[0].ins_beautician));
	  }
	  });
  }

</script>
@endsection