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
                <th style="text-align: center;">Point</th>
                <th style="text-align: center;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php $no=1 ?>
            @foreach($catatan as $list)
                <th style="text-align: center;">{{ $no++ }}</th>
                <th style="text-align: center;">{{ $list->nama_siswa }}</th>
                <th style="text-align: center;">{{ $list->kelas }} {{ $list->jurusan }}</th>
                <th style="text-align: center;">{{ $list->pelanggaran }}</th>
                <th style="text-align: center;">{{ $list->poin }}</th>
                <td><a class="btn alert-info" href="/data/{{ $list->id }}"><i class="glyphicon glyphicon-folder-open"></i><span style="padding-left: 10px;" data-toggle="tooltip" title="Data siswa">Data siswa</span></a></td>
            @endforeach
            </tr>
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