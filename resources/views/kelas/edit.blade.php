
@extends('adminlte::layouts.app')

@section('contentheader_title','Siswa')
@section('main-content')
<!DOCTYPE html>
<body>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">
  <meta charset="UTF-8">
  <title>Edit</title>
</head>
<div class="panel alert-info" style="margin-top: -20px">
  <div class="panel-heading">  
    <p style="font-family: lato;font-size: 30px" align="center"  >Update Kelas</p>
  </div>
</div>
<div class="col-md-12">
  <form action="/update/{{ $kelas->id }}" method="post" enctype="multipart/form-data">
    <b><input style="color: #34495e" autocomplete="off" class="form-control" type="text" name="kelas" placeholder="kelas" value="{{$kelas->kelas}}"></b>
    <br>
    <b><input style="color: #34495e" autocomplete="off" class="form-control" type="text" name="jurusan" placeholder="jurusan" value="{{$kelas->jurusan}}"></b>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
    <br>
      <input class="btn alert-info" type="submit" name="submit" value="update">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="put">
  </div>
  </form>
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
</body>
</html>