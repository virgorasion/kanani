@extends('Layouts.Master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
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
                <tr>
					<th>No</th>
					<th>Kode Barcode</th>
					<th>Nama Pegawai</th>
					<th>Alamat</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>M Nur Fauzan W</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
					<td>Coba </td>

					<td>
						<button class="btn btn-success btn-xs" title="View" data-toggle="modal" data-target="#Viewmodal"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit" data-toggle="modal" data-target="#Editmodal"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>2</td>
					<td>Nathanael Ifandaeru</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
					<td>Coba </td>
					
					<td>
						<button class="btn btn-success btn-xs" title="View"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>3</td>
					<td>Inul Yakin</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
					<td>Coba </td>
					
					<td>
						<button class="btn btn-success btn-xs" title="View"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>4</td>
					<td>Yoga Bersama Anjing</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
					<td>Coba </td>
					
					<td>
						<button class="btn btn-success btn-xs" title="View"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>
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
							<label for="no" class="col-sm-4">Nama Pegawai</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Alamat </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kota </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">No Handphone </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Telepon </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Sidik Jari </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Status-</option>
								<option>Perawat</option>
								<option>Apotik</option>
								<option>Front Office</option>
								<option>Back Office</option>
								<option>Beautician</option>
								<option>Marketing</option>
							</select>
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
	<!-- END modal -->

<!-- Start Modal View -->
	<div class="modal fade" id="Viewmodal" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">View Pegawai</h4>
				</div>
				<div class="modal-body">
				
					<div class="form-group row">
						<label for="no" class="col-sm-4">Nama Pegawai </label>
						<div class="col-sm-8">
						<div id="napeg"></div>
						</div>
					</div>

					<div class="form-group row">
						<label for="no" class="col-sm-4">Alamat </label>
						<div class="col-sm-8">
						<div id="alamat"></div>
						</div>
					</div>

					<div class="form-group row">
						<label for="no" class="col-sm-4">Kota </label>
						<div class="col-sm-8">
						<div id="kota"></div>
						</div>
					</div>

					<div class="form-group row">
						<label for="no" class="col-sm-4">No Handphone </label>
						<div class="col-sm-8">
						<div id="nophon"></div>
						</div>
					</div>

					<div class="form-group row">
						<label for="no" class="col-sm-4">Telephone </label>
						<div class="col-sm-8">
						<div id="telp"></div>
						</div>
					</div>

					<div class="form-group row">
						<label for="no" class="col-sm-4">Sidik Jari </label>
						<div class="col-sm-8">
						<div id="sijar"></div>
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
							<label for="no" class="col-sm-4">Nama Pegawai</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Alamat </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kota </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">No Handphone </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Telepon </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Sidik Jari </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Status-</option>
								<option>Perawat</option>
								<option>Apotik</option>
								<option>Front Office</option>
								<option>Back Office</option>
								<option>Beautician</option>
								<option>Marketing</option>
							</select>
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
      <!-- /.row -->

    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection

@section('script')
    
@endsection