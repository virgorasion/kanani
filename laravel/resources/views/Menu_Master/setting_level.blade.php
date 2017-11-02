@extends('Layouts.Master')

@section('title')
    VIP | Setting Level
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Setting Level
        <small>Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Master</a></li>
        <li><a href="{{url('view_level')}}">Level</a></li>
        <li class="active">Setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header"> <!-- Start Header -->
              <h4>Menu Setting Administrator</h4>
            </div>	<!-- End Header -->
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Menu Master</th>
                  <th>Menu Level</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                
                <tr>
                    <td></td>
                    <td><td>
                    <td><td>
                    
                </tr>
                
                </tbody>
              </table>
                <br>
              <div class="form-inline">
                    <button type="button" class="btn btn-success" id="save">Save</button>
                <div class="col-lg-1 col-md-2 col-xs-3">
                    <button type="button" class="btn btn-default" onclick="kembali()">Batal</button>
                </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        </div>
	
      </div>
      <!-- /.row -->
@endsection

@section('script')
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
     })
});

function kembali() {
    window.history.back()
}

$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>

@endsection

