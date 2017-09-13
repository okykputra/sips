@extends('adminlte::layouts.app')

<title>Data kelas</title>
<link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">

@section('contentheader_title','Siswa')
@section('main-content')
<div class="panel panel-primary" style="margin-top: -20px">
  <div class="panel-heading">  
    <p style="font-family: lato;font-size: 30px" align="center" >Data Kelas</p>
  </div>
</div>
<div>
  <a href="{{ url('kelas/add') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Tambah Kelas</a>
</div><br>
  <table id="table" class="table table-striped table-responsive table-hover" style="text-align: center;">
    <thead>
      <tr>
        <th style="text-align: center;">No</th>
        <th style="text-align: center;">Kelas</th>
        <th style="text-align: center;">Jurusan</th>
        <th style="text-align: center;">Aksi</th>
      </tr>
    </thead> 
    <tbody>
    <?php $no=1 ?>     
      @foreach($kelas as $kelas)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $kelas->kelas }}</td>
        <td>{{ $kelas->jurusan }}</td>
        <td>
          <form action="/" method="post">
            <a href="/" class="btn btn-danger fa fa-pencil"> Edit</a>
               <input type="hidden" name="_method" value="delete">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <button type="submit" name="name" value="Delete" class="btn btn-warning">Delete
                <span class="glyphicon glyphicon-trash"></span>
               </button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop