@extends('adminlte::layouts.app')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
<title>Data kelas</title>
<link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">
@section('contentheader_title','Siswa')
@section('main-content')
<div class="panel alert-info" style="margin-top: -20px">
  <div class="panel-heading">  
    <p style="font-family: Lato;font-size: 30px" align="center" >Data Kelas</p>
  </div>
</div>
<div>
<!-- untuk tombol -->
  <button class='btn btn-primary' style="padding: 10px;background-color: #00C0EF;border-color:#00C0EF;text-align: center;
  " onclick='if(document.getElementById(&apos;spoiler&apos;) .style.display==&apos;none&apos;) {document.getElementById(&apos;spoiler&apos;) .style.display=&apos;&apos;}else{document.getElementById(&apos;spoiler&apos;) .style.display=&apos;none&apos;}' data-toggle="tooltip" title='Tambah data' type='button'><i class="glyphicon glyphicon-plus"></i> Tambah data</button><br>
<!-- end tombol -->
<!-- Start spoiler -->
  <div id='spoiler' style='display: none;margin-top: 7px;'>
      <div class='panel panel-alert-info'>
          <div class='panel-heading'>
            <form action="{{ url('kelas/create') }}" method="post" enctype="multipart/form-data" style="margin-top: 10px">
                <input class="btn btn-default" type="text" name="kelas" placeholder="kelas" style="color: black" autocomplete="off">
                  {{ ($errors->has('kelas')) ? $errors->first('kelas') : '' }}
                  <input class="btn btn-default" type="text" name="jurusan" placeholder="jurusan" style="color: black" autocomplete="off">
                  {{ ($errors->has('jurusan')) ? $errors->first('jurusan') : '' }}
                  <input type="submit" name="submit" value="Tambah" class="btn alert-info">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </div>
      </div>
  </div>
<!-- End spoiler -->
<br>
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
          <form action="/delete/{{ $kelas->id }}" method="post">
          <a href="/edit/{{ $kelas->id }}" class="btn btn-danger fa fa-pencil" data-toggle="tooltip" title="edit" style="background-color:#00C0EF;border-color: #00C0EF"></a>
               <input type="hidden" name="_method" value="delete">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <button type="submit" name="name" value="Delete" class="btn btn-warning fa fa-trash" data-toggle="tooltip" title="hapus" style="background-color: #e74c3c;border-color: #e74c3c">
                
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