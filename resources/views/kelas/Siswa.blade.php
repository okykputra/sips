@extends('adminlte::layouts.app')

<title>Data siswa</title>

@section('contentheader_title','Siswa')

@section('main-content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/dataTables.min.css')}}">
    <div class="container">
        <table class="table table-striped table-hover table-responsive" id="table" style="text-align: center;">
        <thead>
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Kelas</th>
                <th style="text-align: center;">jurusan</th>
                <th style="text-align: center;">Alamat</th>
                <th style="text-align: center;">No Telpon</th>
                <th style="text-align: center;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($siswa as $list)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $list->nama_siswa }}</td>
                    <td>{{ $list->kelas }}</td>
                    <td>{{ $list->jurusan }}</td>
                    <td>{{ $list->alamat }}</td>
                    <td>{{ $list->nomer_telpon }}</td>
                    <td><form method="post" action="#">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger pull-left btn-block" >
                               <span class="glyphicon glyphicon-trash"> Delete</span>
                            </button>
                        </form>
                        <a class="btn btn-warning pull-left btn-block" href="#"><span class="glyphicon glyphicon-pencil"> Edit</span></a></td>
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