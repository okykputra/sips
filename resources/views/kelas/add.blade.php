@extends('adminlte::layouts.app')

@section('htmlheader_title','tambah Data')

@section('contentheader_title','Tambah Data')

@section('main-content')

<div class="container">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Tambah Data Siswa</div>
            <div class="panel-body">
                <form action="{{url('siswa/create')}}" method="post">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kelas" class="form-control" placeholder="Kelas">
                    </div>
                    <div class="form-group">
                        <input type="text" name="plat" class="form-control" placeholder="Nomer Kendaraan">
                    </div>
                    <div class="form-group">
						<input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">							
				    </div>
                    <div class="form-group">
						<button type="submit" name="siswa" class="btn btn-primary">Tambah <i class="fa fa-send"></i></button>
				    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
