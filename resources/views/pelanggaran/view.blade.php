@extends('adminlte::layouts.app')

<title>Data Pelanggaran</title>
<link rel="stylesheet" href="{{ URL::asset('css/dataTables.min.css') }}">

@section('contentheader_title','Siswa')
@section('main-content')
<div class="panel alert-info" style="margin-top: -20px">
  <div class="panel-heading">  
    <p style="font-family: lato;font-size: 30px" align="center" >Data Pelanggaran</p>
  </div>
</div>
<br>
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
                <a href="/pelanggaran/edit/{{ $pelanggaran->id }}" class="btn btn-danger fa fa-pencil" style="background-color:#00C0EF;border-color: #00C0EF"></a>
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" name="name" value="Delete" class="btn btn-warning fa fa-remove" title="hapus" style="background-color: #e74c3c;border-color: #e74c3c">
                
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
