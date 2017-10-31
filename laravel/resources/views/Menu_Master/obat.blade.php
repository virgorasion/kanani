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
					<th>Kode Obat</th>
					<th>Kode Barcode</th>
					<th>Merek</th>
					<th>Type Obat</th>
					<th>Harga</th>
					
					<th>Action</th>
				</tr>
				<tr>
					<td>1</td>
					<td>M Nur Fauzan W</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
					<td>Coba </td>
					<td>Coba </td>
					
					<td>
						<button class="btn btn-success btn-xs" title="View" data-toggle="modal" data-target="#modalView"><span class="glyphicon glyphicon-ok"></span></button>
						<button class="btn btn-warning btn-xs" title="Edit" data-toggle="modal" data-target="#modalEdit"><span class="glyphicon glyphicon-pencil"></span></button>
						<button class="btn btn-danger btn-xs" title="Delete"><span class="glyphicon glyphicon-remove"></span></button>
					</td>
				</tr>

				<tr>
					<td>2</td>
					<td>Nathanael Ifandaeru</td>
					<td>X-RPL 1</td>
					<td>SMKN 2 Surabaya</td>
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
							<label for="no" class="col-sm-4">Kode Obat</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Merek </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Type Obat </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Obat-</option>
								<option>Individu</option>
								<option>Paket</option>
							</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Jenis </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option>-Pilih Jenis-</option>
								<option>Cair</option>
								<option>Kaplet</option>
								<option>Capsul</option>
								<option>Tablet</option>
								<option>Get</option>
								<option>Cream</option>
								<option>Powder</option>
							</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Harga Beli </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Harga </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Berat </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kode Barcode </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kemasan </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Min Stock </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Dosis </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Isi Box </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Pilih Satuan </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Jenis Satuan-</option>
							</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Cara Penjualan </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Penjualan-</option>
								<option>Bijian</option>
								<option>Strip</option>
								<option>Kemasan</option>
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
</div> <!-- End Modal Add -->


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
							<label for="no" class="col-sm-4">Kode Obat</label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Merek </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Type Obat </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Obat-</option>
								<option>Individu</option>
								<option>Paket</option>
							</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Jenis </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option>-Pilih Jenis-</option>
								<option>Cair</option>
								<option>Kaplet</option>
								<option>Capsul</option>
								<option>Tablet</option>
								<option>Get</option>
								<option>Cream</option>
								<option>Powder</option>
							</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Harga Beli </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Harga </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Berat </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kode Barcode </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kemasan </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Min Stock </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Dosis </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Isi Box </label>
							<div class="col-sm-8">
							<input type="text" name="" class="form-control" id="no" placeholder="">
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Pilih Satuan </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Jenis Satuan-</option>
							</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Cara Penjualan </label>
							<div class="col-sm-8">
							<select class="form-control">
								<option selected="">-Pilih Penjualan-</option>
								<option>Bijian</option>
								<option>Strip</option>
								<option>Kemasan</option>
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
</div> <!-- End Modal Edit -->

<!-- Start Modal view -->
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
							<label for="no" class="col-sm-4">Kode Obat</label>
							<div class="col-sm-8">
							<div id="koob"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Merek </label>
							<div class="col-sm-8">
							<div id="merek"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Type Obat </label>
							<div class="col-sm-8">
							<div id="tyob"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Jenis </label>
							<div class="col-sm-8">
							<div id="jenis"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Harga Beli </label>
							<div class="col-sm-8">
							<div id="habel"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Harga </label>
							<div class="col-sm-8">
							<div id="harga"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Status </label>
							<div class="col-sm-8">
							<div id="status"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Berat </label>
							<div class="col-sm-8">
							<div id="berat"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kode Barcode </label>
							<div class="col-sm-8">
							<div id="kobar"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Kemasan </label>
							<div class="col-sm-8">
							<div id="kemasan"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Min Stock </label>
							<div class="col-sm-8">
							<div id="minst"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Dosis </label>
							<div class="col-sm-8">
							<div id="dosis"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Isi Box </label>
							<div class="col-sm-8">
							<div id="isbox"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Pilih Satuan </label>
							<div class="col-sm-8">
							<div id="pilsat"></div>
							</div>
						</div>

						<div class="form-group row">
							<label for="no" class="col-sm-4">Cara Penjualan </label>
							<div class="col-sm-8">
							<div id="carpen"></div>
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