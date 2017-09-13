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
                <th style="text-align: center;">Kelas</th>
                <th style="text-align: center;">Jurusan</th>
                <th style="text-align: center;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($kelas as $list)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $list->kelas }}</td>
                    <td>{{ $list->jurusan }}</td>
                    <td><a class="btn alert-info" href="/data/{{ $list->id }}"><i class="glyphicon glyphicon-folder-open"></i><span style="padding-left: 10px;">Data siswa</span></a></td>
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