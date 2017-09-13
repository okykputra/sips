@extends('adminlte::layouts.app')

<title>Data pelanggaran</title>

@section('contentheader_title','Siswa')
@section('main-content')

<div class="panel panel-primary" style="margin-top: -20px">
	<div class="panel-heading">  
        <p style="font-family: lato;font-size: 30px" align="center" >Tambah data</p>
    </div>
</div>

  <form action="{{ url('/pelanggaran') }}" method="post">
    <div class="form-group">
      <label>Pelanggaran:</label>
      <input type="text" class="form-control" placeholder="Tulis pelanggaran..." name="pelanggaran" required autofocus>
    </div>
    <div class="form-group">
      <label>Poin pelanggaran:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Tulis poin..." name="poin" required>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    	 <button type="submit" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="kirim">
          <span class="glyphicon glyphicon-send"></span> Send 
        </button>
  </form>

   <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

@stop

@section('Scripts')
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#table').DataTable();
            });
        </script>
@stop