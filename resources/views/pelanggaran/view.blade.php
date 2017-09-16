@extends('adminlte::layouts.app')

<title>Data Pelanggaran</title>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="{{ URL::asset('css/dataTables.min.css') }}">

@section('contentheader_title','Siswa')
@section('main-content')
<div class="panel alert-info" style="margin-top: -20px">
  <div class="panel-heading">  
    <p style="font-family: Lato;font-size: 30px" align="center">Data Pelanggaran</p>
  </div>
</div>
<br>

  <!-- untuk tombol -->
  <button class='btn btn-primary' style="margin-top: -20px;margin-bottom: 10px;background-color: #00C0EF;border-color:#00C0EF;text-align: center;
  " onclick='if(document.getElementById(&apos;spoiler&apos;) .style.display==&apos;none&apos;) {document.getElementById(&apos;spoiler&apos;) .style.display=&apos;&apos;}else{document.getElementById(&apos;spoiler&apos;) .style.display=&apos;none&apos;}' data-toggle="tooltip" title='Tambah data' type='button'><i class="glyphicon glyphicon-plus"></i> Tambah data</button><br>
<!-- end tombol -->
<!-- Start spoiler -->
  <div id='spoiler' style='display: none;margin-top: 7px;'>
      <div class='panel panel-alert-info'>
          <div class='panel-heading'>
              <form action="{{ url('/pelanggaran') }}" method="post">
              <div class="form-group">
                <label style="font-family: lato">Pelanggaran:</label>
                <input style="color: black" autocomplete="off" type="text" class="form-control" placeholder="Tulis pelanggaran..." name="pelanggaran" data-toggle="tooltip" title="harap isi bidang ini" autofocus>
              </div>
          <div class="form-group">
            <label style="font-family: lato">Poin pelanggaran:</label>
            <input style="color: black" type="text" autocomplete="off" class="form-control" id="pwd" placeholder="Tulis poin..." name="poin" data-toggle="tooltip" title="harap isi bidang ini" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
             <button type="submit" class="btn alert-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="tambah">
                <span class="glyphicon glyphicon-Plus "></span> Tambah 
              </button>
  </form>

          </div>
      </div>
  </div>
<!-- End spoiler -->
  <table id="table" class="table table-striped table-responsive table-hover" style="text-align: center;">
    <thead>
      <tr>
        <th style="text-align: center;">No</th>
        <th style="text-align: center;">pelanggaran</th>
        <th style="text-align: center;">poin</th>
         <th style="text-align: center;">Opsi</th>
      </tr>
    </thead> 
    <tbody>
    <?php $no=1 ?>     
    @foreach($pelanggaran as $pelanggaran)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $pelanggaran->pelanggaran }}</td>
        <td>{{ $pelanggaran->poin }}</td>
        <td>
          <form action="/pelanggaran/{{ $pelanggaran->id }}" method="post">
                <a href="/pelanggaran/edit/{{ $pelanggaran->id }}" class="btn btn-danger fa fa-pencil" data-toggle="tooltip" title="edit" style="background-color:#00C0EF;border-color: #00C0EF"></a>
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
        <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop




