@extends('Layouts.Master')

@section('title')
	VIP | Master Periksa
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Periksa
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Master</a></li>
        <li class="active">Periksa</li>
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
					<th>Kode Periksa</th>
					<th>Nama Periksa</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
				<tr>
					<td>1</td>
					<td>M Nur Fauzan W</td>
					<td>X-RPL 1</td>
					
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
							<label for="no" class="col-sm-4">Kode Periksa</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Newkoper" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Nama Periksa </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Newaper" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Newstatus" placeholder="">
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
					<h4 class="modal-title">View Periksa</h4>
				</div>
				<div class="modal-body">
				
					<div class="form-group row">
							<label for="no" class="col-sm-4">kode Periksa</label>
							<div class="col-sm-8">
							<div id="koper"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Nama Periksa </label>
							<div class="col-sm-8">
							<div id="naper"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<div class="status"></div>
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
							<label for="no" class="col-sm-4">kode Periksa</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Edtkoper" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Nama Periksa </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Edtnaper" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="Edtstatus" placeholder="">
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