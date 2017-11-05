@extends('Layouts.Master')

@section('title')
    VIP | Penjualan Resep
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaksi Penjualan Resep
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Transaksi</a></li>
        <li class="active">Penjualan Resep</li>
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
                </thead>
                <tbody>
                    <tr class="total" style="background-color: #fff !important">
                        <td colspan="6"></td>
                        <td><strong>Grand Total</strong></td>
                        <td colspan="2"> 0 </td>
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
            $("#example1").DataTable()
        })
    </script>
@endsection