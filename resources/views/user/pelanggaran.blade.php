@extends('adminlte::layouts.app')

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=nexa">
<title>Catat Pelanggaran</title>

@section('contentheader_title','Tambah Data')
@section('main-content')

<div class="container">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-alert-danger">
            <div class="panel-heading"><p align="center" style="font-family: nexa;font-size: 30px;margin-top: 10px;">Tambah Data Siswa</p></div>
            <div class="panel-body">
                <form action="{{ url('pelanggaran/create') }}" method="post">
                    <div class="form-group">
                        <input style="color: black" type="hidden" name="siswa_id" class="form-control" value="{{ $siswa->id }}">
                    </div>
                    <div class="form-group">
                        <select name="pelanggaran_id" class="form-control" style="color: black">
                        @foreach($pelanggaran as $list)
                            <option value="{{ $list->id }}">{{ $list->pelanggaran }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
						<input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">							
				    </div>
                    <div class="form-group">
						<button type="submit" name="siswa" class="btn alert-info" data-toggle="tooltip" title="Tambah">Tambah <i class="fa fa-plus"></i></button>
				    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
