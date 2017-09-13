@extends('adminlte::layouts.app')

<title>Tambah Data</title>

@section('contentheader_title','Tambah Data')

@section('main-content')

<div class="container">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Tambah Data Siswa</div>
            <div class="panel-body">
                <form action="{{url('siswa/create')}}" method="post">
                    <div class="form-group">
                        <input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa">
                    </div>
                    <div class="form-group">
                        <select name="kelas_id">
                        @foreach($kelas as $list)
                            <option value="{{ $list->id }}">{{ $list->kelas }} {{ $list->jurusan }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nomer_telpon" class="form-control" placeholder="Nomer Telepon">
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
