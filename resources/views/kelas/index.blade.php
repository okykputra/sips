@extends('adminlte::layouts.app')

<title>Data Siswa</title>

@section('contentheader_title','Siswa')

@section('main-content')
        <div class="col-md-4">
          <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Kelas 10</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <li><a href="#" style="text-decoration: none; color: black;">RPL 2</a></li>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Kelas 11</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul>
                <li><a href="#" style="text-decoration: none; color: black;">RPL 2</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-md-4">
          <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Kelas 12</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <li><a href="#" style="text-decoration: none; color: black;">RPL 2</a></li>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop

@section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop