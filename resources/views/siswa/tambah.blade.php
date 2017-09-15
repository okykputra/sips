@extends('adminlte::layouts.app')

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=nexa">
<title>Tambah Data</title>

@section('contentheader_title','Tambah Data')
@section('main-content')

<div class="container">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-alert-info">
            <div class="panel-heading"><p align="center" style="font-family: nexa;font-size: 30px;margin-top: 10px;">Tambah Data Siswa</p></div>
            <div class="panel-body">
                <form action="{{url('siswa/create')}}" method="post">
                    <div class="form-group">
                        <input style="color: black" type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa">
                    </div>
                    <div class="form-group">
                        <select name="kelas_id" class="form-control" style="color: black">
                        @foreach($grade as $list)
                            <option value="{{ $list->id }}">{{ $list->kelas }} {{ $list->jurusan }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            <input type="radio" name="jenis_kelamin" id="optionsRadios1" value="laki-laki">
                            Laki-laki
                            <input style="margin-left: 26px;" type="radio" name="jenis_kelamin" id="optionsRadios2" value="perempuan">
                            Perempuan
                                
                    </div>
                    <div class="form-group">
                        <input style="color: black" type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <input style="color: black" type="text" name="nomer_telpon" class="form-control" placeholder="Nomer Telepon">
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
