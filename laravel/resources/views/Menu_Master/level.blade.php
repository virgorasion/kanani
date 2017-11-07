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
    <!-- Alert Success -->
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading"><i class="glyphicon glyphicon-ok"></i> Success !</h4>
            <hr>
            <p>Berhasil Setting Akses</p>
            </div>
          <!--END Alert-->
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
                    <button class="btn btn-warning btn-xs" title="Edit" onclick="window.open('{{url('view_level/setting')}}','newwindow', 'width=600,height=300');
            return false;"><span class="glyphicon glyphicon-pencil"></span></button>
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
        {{--  function BtnClick(){
            
        }  --}}
        $(function () {
    $('#example1').DataTable({})

  })
    </script>
@endsection