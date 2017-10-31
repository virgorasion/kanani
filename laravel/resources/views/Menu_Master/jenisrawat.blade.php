@extends('Layouts.Master')

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
				<tr>
					<td>1</td>
					<td>M Nur Fauzan W</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
					<td>Coba </td>
					<td>Coba </td>
					<td>Coba </td>
					<td>
						<button class="btn btn-success btn-xs" title="View" data-toggle="modal" data-target="#modalView"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit" data-toggle="modal" data-target="#modalEdit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete" data-toggle="modal"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>2</td>
					<td>Nathanael Ifandaeru</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
					<td>Coba </td>
					<td>Coba </td>
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
					<td>Coba </td>
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
					<td>Coba </td>
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
					<form>
						<div class="form-group row">
							<label for="no" class="col-sm-4">No : </label>
							<div class="col-sm-8">
							<div id="no"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Nama Riwayat : </label>
							<div class="col-sm-8">
							<div id="nari"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kode Periksa : </label>
							<div class="col-sm-8">
							<div id="koper"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Biaya : </label>
							<div class="col-sm-8">
							<div id="biaya"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Dokter : </label>
							<div class="col-sm-8">
							<div id="indok"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Perawat : </label>
							<div class="col-sm-8">
							<div id="inper"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Insentif Beautician : </label>
							<div class="col-sm-8">
							<div id="inbeau"></div>
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
    
@endsection