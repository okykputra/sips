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
                <th style="text-align: center;">Jenis Kelamin</th>
                <th style="text-align: center;">Tambah Pelanggar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($siswa as $list)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $list->nama_siswa }}</td>
                    <td>{{ $list->kelas }} {{ $list->jurusan }}</td>
                    <td>{{ $list->jenis_kelamin }}</td>
                    <td><a class="btn alert-danger" href="/Pelanggaran/{{ $list->id }}"><i class="fa fa-edit"></i><span data-toggle="tooltip" title="Data siswa"></span></a></td>                    
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
        <script type="text/javascript" language="JavaScript">
            function konfirmasi()
                {
                    tanya = confirm("Apakah Anda Yakin Akan Menghapus Data Ini ?");
                    if (tanya == true) return true;
                    else return false;
                }
        </script>
@stop