@extends('adminlte::layouts.app')

<title>Update kelas</title>
<link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">

@section('contentheader_title','Siswa')
@section('main-content')
<div class="panel panel-primary" style="margin-top: -20px">
  <div class="panel-heading">  
    <p style="font-family: lato;font-size: 30px" align="center" >Update Kelas</p>
  </div>
</div>
<div class="col-md-10">
  <form action="/update/{{ $kelas->id }}" method="post" enctype="multipart/form-data">
    <input type="text" name="kelas" placeholder="kelas" value="{{$kelas->kelas}}">
    <input type="text" name="jurusan" placeholder="jurusan" value="{{$kelas->jurusan}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div>
    	<input type="submit" name="submit" value="update">
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