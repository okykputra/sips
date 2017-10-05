@extends('adminlte::layouts.app')

<title>Edit Data</title>

@section('contentheader_title','Tambah Data')

@section('main-content')

<div class="container">
    <div class="col-md-8 col-md-offset-2 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Tambah Data Siswa</div>
            <div class="panel-body">
                <form action="/ubah/ganti/{{ $siswa->id }}" method="post">
                    <div class="form-group">
                        <input style="color: black;" type="text" name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa }}">
                    </div>
                    <div class="form-group">
                        <select name="kelas_id" style="color: black;" class="form-control">
                            @foreach($kelas as $list)
                            <option value="{{ $list->id }}" @if($list->id == $siswa->kelas_id) selected @endif>{{ $list->kelas }} {{$list->jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            <input style="color: black;" type="radio" name="jenis_kelamin" id="optionsRadios1" value="Laki-laki" @if($siswa->jenis_kelamin == 'laki-laki') checked @endif>
                            Laki-Laki
                            <input type="radio" style="color: black;" name="jenis_kelamin" id="optionsRadios2" value="Perempuan" @if($siswa->jenis_kelamin == 'perempuan') checked @endif>
                            Perempuan
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" style="color: black;" class="form-control" value="{{ $siswa->alamat }}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nomer_telpon" class="form-control" style="color: black;" value="{{ $siswa->nomer_telpon }}">
                    </div>
                    <div class="form-group">
						<input type="hidden" class="form-control" name="_token" style="color: black;" value="{{ csrf_token() }}">							
				    </div>
                    <div class="form-group">
						<input type="submit" name="siswa" class="btn btn-primary btn-block" value="Edit Data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
				    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
