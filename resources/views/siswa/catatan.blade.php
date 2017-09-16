@extends('adminlte::layouts.app')

<title>Data siswa</title>

@section('contentheader_title','Siswa')

@section('main-content')
@if(Session::has('message'))
    <div class="alert alert-info fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close" data-duration="1s">&times;</a>
			{{Session::get('message')}}
	</div>
@endif
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/dataTables.min.css')}}">
    <div class="container">
        <table class="table table-striped table-hover table-responsive" id="table" style="text-align: center;">
        <thead>
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Kelas</th>
                <th style="text-align: center;">Pelanggaran</th>
                <th style="text-align: center;">Waktu</th>
                <th style="text-align: center;">Point</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1 ?>
            @foreach($catatan as $list)
            <tr>
                <td style="text-align: center;">{{ $no++ }}</td>
                <td style="text-align: center;">{{ $list->nama_siswa }}</td>
                <td style="text-align: center;">{{ $list->kelas }} {{ $list->jurusan }}</td>
                <td style="text-align: center;">{{ $list->pelanggaran }}</td>
                <td style="text-align: center;">{{ $list->created_at}}</td>
                <td style="text-align: center;">{{ $list->poin }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
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