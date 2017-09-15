@extends('adminlte::layouts.app')

<title>Update Pelanggarn</title>

@section('contentheader_title','Tambah Data')

@section('main-content')

<div class="container">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Update Pelanggaran</div>
            <div class="panel-body">
                <form action="/pelanggaran/{{$pelanggaran->id}}" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="pelanggaran"value="{{$pelanggaran->pelanggaran}}" required autofocus>
                    </div>
                    <div class="form-group">
                         <input type="text" name="poin" class="form-control" value="{{$pelanggaran->poin}}" required>
                    </div>
                    <div class="form-group">
						<input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">			
				    </div>
                    <div class="form-group">
						<input type="submit" name="siswa" class="btn btn-primary btn-block" value="Update">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
				    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
{{-- @section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop --}}