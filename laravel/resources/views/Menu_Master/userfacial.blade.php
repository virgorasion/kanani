@extends('Layouts.Master')

@section('title')
	VIP | Master User Facial
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master User Facial
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Master</a></li>
        <li class="active">User Facial</li>
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
					<th>No</th>
					<th>Username</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
				@foreach($values as $value)
				<tr>
					<td></td>
					<td>{{ $value->kd_kary }}</td>
					<td>{{ $value->level_name }}</td>

					<td>
						<button class="btn btn-success btn-xs" title="View" data-toggle="modal" data-target="#Viewmodal"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit" data-toggle="modal" data-target="#Editmodal"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>
				@endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <!-- Start Modal -->
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
							<label for="no" class="col-sm-4">Username</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Newnadok" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Password</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Newalamat" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option>Administrator</option>
								<option>Dokter</option>
								<option>Perawat</option>
								<option>Front Office</option>
								<option>Back Office</option>
								<option>Apotik</option>
								<option>Beautician</option>
							</select>
							</div>
						</div>

					</form>

				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
					<button type="button" class="btn btn-success" id="">Save</button>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- END modal -->

<!-- Start Modal View -->
	<div class="modal fade" id="Viewmodal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">View User</h4>
				</div>
				<div class="modal-body">
				
					<div class="form-group row">
							<label for="no" class="col-sm-4">Kode Karyawan</label>
							<div class="col-sm-8">
							<div id="kokar"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<div id="status"></div>
							</div>
						</div>

				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Start Modal Edit -->
	<div class="modal fade" id="Editmodal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Edit Data</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group row">
							<label for="no" class="col-sm-4">Username</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Edtnadok" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Password </label>
							<div class="col-sm-8">
							<input type="password" name="" class="form-control" id="Edtalamat" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Level </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option>Administrator</option>
								<option>Dokter</option>
								<option>Perawat</option>
								<option>Front Office</option>
								<option>Back Office</option>
								<option>Apotik</option>
								<option>Beautician</option>
							</select>
							</div>
						</div>

					</form>

				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
					<button type="button" class="btn btn-success" id="">Save</button>
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