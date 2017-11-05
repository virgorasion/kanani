@extends('Layouts.Master')

@section('title')
    VIP | Penulisan Resep
@endsection

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
                <thead>
                    <tr>
                        <th> No </th>
                        <th> No. Resep </th>
                        <th> Kode Pasien </th>
                        <th> Nama Pasien </th>
                        <th> Tanggal </th>
                        <th> Dokter </th>
                        <th> Pegawai </th>
                        <th> Total </th>
                        <th> Action </th>
                        <th> Bayar </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>512312</td>
                        <td>523</td>
                        <td>Osas</td>
                        <td>31-51-2123</td>
                        <td>ugumugum</td>
                        <td>masiut</td>
                        <td>841231</td>
                        <td><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-check-ok"></span></button>
                        <td>9128312</td>
                    </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
        $(function() {
            $('#example1').DataTable()
        })
    </script>
@endsection