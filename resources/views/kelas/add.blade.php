<<<<<<< HEAD
=======
@extends('adminlte::layouts.app')

<title>Tambah kelas</title>
<link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">

@section('contentheader_title','Siswa')
@section('main-content')
<div class="panel panel-primary" style="margin-top: -20px">
  <div class="panel-heading">  
    <p style="font-family: lato;font-size: 30px" align="center" >Tambah Kelas</p>
  </div>
</div>
<div class="col-md-10">
  <form action="/kelas/add" method="post" enctype="multipart/form-data">
    <input type="text" name="kelas">
    {{ ($errors->has('kelas')) ? $errors->first('kelas') : '' }}
    <input type="text" name="jurusan">
    {{ ($errors->has('jurusan')) ? $errors->first('jurusan') : '' }}
    <input type="submit" name="submit" value="Tambah">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
</div>

<<<<<<< HEAD
<<<<<<< HEAD
@stop

@section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
=======
@stop

@section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
=======
@stop

@section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop
>>>>>>> e043141623df6d261b35b39164272e30efc8c951
