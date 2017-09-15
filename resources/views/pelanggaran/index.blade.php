@extends('adminlte::layouts.app')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
<title>Data pelanggaran</title>

@section('contentheader_title','Siswa')
@section('main-content')

<div class="panel panel- alert-info" style="margin-top: -20px">
	<div class="panel-heading">  
        <p style="font-family: lato;font-size: 30px" align="center" >Tambah data</p>
    </div>
</div>

  <form action="{{ url('/pelanggaran') }}" method="post">
    <div class="form-group">
      <label style="font-family: lato">Pelanggaran:</label>
      <input style="color: black" type="text" class="form-control" placeholder="Tulis pelanggaran..." name="pelanggaran" required autofocus>
    </div>
    <div class="form-group">
      <label style="font-family: lato">Poin pelanggaran:</label>
      <input style="color: black" type="text" class="form-control" id="pwd" placeholder="Tulis poin..." name="poin" required>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>
    	 <button type="submit" class="btn alert-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="tambah">
          <span class="glyphicon glyphicon-Plus "></span> Tambah 
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