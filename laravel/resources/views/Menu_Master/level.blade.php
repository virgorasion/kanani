@extends('Layouts.Master')

@section('title')
    VIP | Master Level
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Level
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master</a></li>
        <li class="active">Level</li>
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
                  <th>Level ID</th>
                  <th>Nama Level</th>
                  <th>Setting</th>
                </tr>
                </thead>
                <tr>
                  <td>1</td>
                  <td>M Nur Fauzan W</td>
                  <td>
                    <button class="btn btn-warning btn-xs" title="Edit" onclick="BtnClick()"><span class="glyphicon glyphicon-pencil"></span></button>
                  </td>	
                </tr>

                <tr>
                  <td>2</td>
                  <td>Nathanael Ifandaeru</td>
                  <td>
                    <button class="btn btn-warning btn-xs" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Inul Yakin</td>
                  <td>
                    <button class="btn btn-warning btn-xs" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>Yoga Bersama Anjing</td>
                  <td>
                    <button class="btn btn-warning btn-xs" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button>
                  </td>
                </tr>
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
    <script type="text/javascript">
        function BtnClick(){
            window.open("{{url('view_level/setting')}}","newwindow");
            return false;
        }
        $(function () {
    $('#example1').DataTable({})

  })
    </script>
@endsection