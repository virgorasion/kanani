@extends('Layouts.Master')

@section('title')
	VIP | History Foto
@endsection

@section('content')

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan History Foto
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Laporan</a></li>
        <li class="active">History Foto</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header"> <!-- Start Header -->
              <button class="btn btn-success">Search</button>
              <button class="btn btn-success">Clear</button>
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
				<div class="form-inline"> 
				<div class="pull-left col-sm-3 ">
					<div class="form-group ">
					<label>Show : </label>
					<select class="form-control">
						<option>10</option>
						<option>25</option>
						<option>50</option>
						<option>100</option>
					</select>
					</div>
				</div>

					<form class="pull-right col-sm-3 col-xs-5"> 
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" name="" placeholder="Search">
								<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
							</div>
						</div>
					</form>
				
			</div>
            </div>	<!-- End Header -->
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-scrollable">
                <tr>
					<th>No.</th>
					<th>Nama Pasien</th>
					<th>Diagnosis</th>
					<th>Keluhan</th>
				</tr>
				<tr>
					<td>1</td>
					<td>X-RPL 1</td>
					<td>M Nur Fauzan W</td>
					<td>SMKN 2 Surabaya</td
				</tr>

				<tr>
					<td>2</td>
					<td>X-RPL 1</td>
					<td>Nathanael Ifandaeru</td>
					<td>SMKN 2 Surabaya</td>
				</tr>

				<tr>
					<td>3</td>
					<td>X-RPL 1</td>
					<td>Inul Yakin</td>
					<td>SMKN 2 Surabaya</td>
				</tr>

				<tr>
					<td>4</td>
					<td>X-RPL 1</td>
					<td>Yoga Bersama Anjing</td>
					<td>SMKN 2 Surabaya</td>
				</tr>
              </table>
            </div>
            <nav aria-label="..." class="pull-right">
			<ul class="pagination pagination-md">
				<li class="page-item disabled">
					<a href="#" class="page-link" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a href="#" class="page-link">1</a></li>
				<li class="page-item"><a href="#" class="page-link">2</a></li>
				<li class="page-item"><a href="#" class="page-link">3</a></li>
				<li class="page-item">
					<a href="#" class="page-link">Next</a>
				</li>
			</ul>
		</nav>
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
$ (function () 
{
	$("#datepicker").datepicker();
});

$ (function () 
{
	$("#datepicker1").datepicker();
});
</script>
@endsection